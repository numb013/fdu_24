<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright Profession.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class JobsController extends AppController {
	public $uses = array('Profession', 'Image', 'Movie' ,'CheckLike', 'CheckPersonal', 'Job');
	public $components = array('Search.Prg', 'Session', 'Master');
	public $presetVars = true;
	public $paginate = array();

	public function index($para = null) {
		//echo pr($para);
		//echo pr($this->request->query);
		//echo pr($this->request->data);
		//echo pr($this->request->data['jobs']['param']);

		//exit();
		$param = (!empty($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'] : '';


		//exit();
		if (!empty($this->request->query['param'])) {
			$replaceText = str_replace("?", "", $this->request->query['param']);
			$array1 = array();
			parse_str($replaceText,  $array1);

echo pr($array1);

			if (!empty($array1['personal_check'])) {
				foreach ($array1['personal_check'] as $key => $value) {
					$this->request->query['personal_check'][$key] = $value;
				}
				$this->Session->write('personal_check', $this->request->query['personal_check']);
			} elseif (!empty($array1['like_checks'])) {
				$personalCheck = $this->Session->read('personal_check');
				foreach ($personalCheck as $key => $value) {
					$this->request->query['personal_check'][$key] = $value;
				}
			}
		}

    // レイアウト関係
		$this->Prg->commonProcess();
		if (!empty($this->request->data)) {

			echo pr($this->request->data);


			if (count($this->request->data['Profession']['personal_check']) > 2) {
				$personalCheck = '';
				foreach ($this->request->data['Profession']['personal_check'] as $key => $value) {
					if ($key == 0) {
						$Check[$key] = ' select * from professions T1 where T1.check_personal like "%,' . $value . ',%" or T1.check_personal like "'. $value . ',%" or T1.check_personal like "%,'. $value .'" AND T1.delete_flag = 0';
					} else {
						$Check[$key] = ' UNION ALL select * from professions T1 where T1.check_personal like "%,' . $value . ',%" or T1.check_personal like "'. $value . ',%" or T1.check_personal like "%,'. $value .'" AND T1.delete_flag = 0';
					}
					$personalCheck = $personalCheck . $Check[$key];
				};
				$likeCheck = '';
				if (!empty($this->request->data['Profession']['like_checks'])) {
					foreach ($this->request->data['Profession']['like_checks'] as $key => $value) {
						if ($key == 0) {
							$Check[$key] = ' (FIND_IN_SET('. $value .', `Profession`.`check_like`))';
						} else {
							$Check[$key] = ' AND (FIND_IN_SET('. $value .', `Profession`.`check_like`))';
						}
						$likeCheck = $likeCheck . $Check[$key];
					}
					$likeCheck = 'AND ('.$likeCheck.' )';
				}

				//変なソートの仕方
				if(strpos($_SERVER["REQUEST_URI"],'sort:core_status/direction:asc') !== false) {
					$sort = 'ASC';
				} else {
					$sort = 'DESC';
				}
				$sql = "select Profession.*, Image.url from
				(select v_hit.*, COUNT('X') as cnt
				from
				 (".$personalCheck.") as v_hit GROUP BY v_hit.id ) As Profession
					LEFT JOIN images As Image
					ON (Profession.id = Image.partner_id)
				 where Profession.cnt >= 3
				 AND Image.delete_flag = 0
				 AND Profession.delete_flag = 0
				 " . $likeCheck . "
				 GROUP BY Profession.id
				 ORDER BY Profession.core_status " . $sort;



				$this->paginate = $sql; //$sqlの中身は生SQL
				$datas = $this->paginate('Job');
				$count = count($datas);
				$back_flag = 1;
				$this->set(compact('datas', 'para', 'param', 'count', 'back_flag'));
			} else {
				$data = $this->request->data['Profession']['personal_check'];
				return $this->redirect(array('action' => 'index'));
				//return false;
			}
		} else {
			// 初期表示時
			$this->Session->delete('personal_check');

			$this->paginate = array(
				'conditions' => array(
				   'delete_flag' => '0'
				 ),
				'order' => array(
					'created' => 'DESC',
				),
				'limit' => 8,
			);
			$back_flag = 1;
			$flag = 1;
			$this->set(compact('flag', 'back_flag', 'para'));
		}

		//$datas = $this->paginate();
		//$count = count($datas);

		//echo pr($this->Job->getDataSource()->getLog());
		//exit();
		//echo pr($datas);
		//exit();

		$this->_getCheckParameter();
    //$this->set(compact('para', 'param', 'count'));
	}


  public function search_more($para = null) {
		//echo pr($this->request->query);
		//echo pr($this->request->data);

		if(!empty($this->request->data['jobs']['param'])) {
			$param = $this->request->data['jobs']['param'];
		}
		parse_str($param,  $array1);
		if (!empty($array1['like_checks'])) {
			foreach ($array1['like_checks'] as $key => $value) {
				$this->request->data['Profession']['like_checks'][$key] = $value;
			}
		}
		$this->_getCheckParameter();
		$back_flag = 1;
    $this->set(compact('datas', 'para', 'param', 'back_flag'));
	}

	public function detail($id = null) {
		// レイアウト関係
		$this->layout = "default";
		if (isset($id)) {
			$status = array(
			'conditions' =>
				array(
					'Profession.id' => $id,
					'Profession.delete_flag' => 0
				)
			);
			// 以下がデータベース関係
			$datas = $this->Jobs->find('first', $status);
			if ($datas['Profession']['image_flag']) {
				$id = $datas['Profession']['id'];
				$status = array(
					'conditions' =>
					array(
						'partner_id' => $id,
						'partner_name' => 'Profession',
						'delete_flag' => '0'
					)
				);
				$datas['Image'] = $this->Image->find('all', $status);
			}

			if ($datas['Profession']['movie_flag']) {
				$id = $datas['Profession']['id'];
				$status = array(
					'conditions' =>
					array(
						'partner_id' => $id,
						'partner_name' => 'Profession',
						'delete_flag' => '0'
					)
				);
				$datas['Movie'] = $this->Movie->find('all', $status);
			}

			$datas['Profession']['check_sex'] = explode(",", $datas['Profession']['check_sex']);
			$datas['Profession']['check_personal'] = explode(",", $datas['Profession']['check_personal']);
			$datas['Profession']['check_like'] = explode(",", $datas['Profession']['check_like']);
			$this->_getCheckParameter();
			$know_flag = 1;
			$this->set(compact('datas', 'know_flag', 'para'));
		}
}

/**
 * star method
 * お気に入りを追加/削除する
 *
 * @throws NotFoundException
 * @return void
 */
	public function know_count() {
		if (!$this->request->is('ajax')) {
			throw new NotFoundException('お探しのページは見つかりませんでした。');
		}
		$this->autoRender = false;
		$data = array();
		$data['id'] =  $this->request->data['Profession']['id'];
		$data['class'] = $this->request->data['Profession']['class'];
			$knowCount = $this->Profession->find('first', array(
				'fields' => array(
					'Profession.know_count',
				),
				'conditions' => array(
					'Profession.id' => $data['id'],
				),
				'recursive'  => -1
			));
			if ($this->request->data['Profession']['class'] == 'know_count plus') {
	        $action = 'plus';
					$data['Profession']['know_count'] = $knowCount['Profession']['know_count'] + 1;
			} else {
	      	$action = 'minus';
					$data['Profession']['know_count'] = $knowCount['Profession']['know_count'] - 1;
			}
			$this->Profession->updateAll(
				array(
					'Profession.modified' => "'" . date('Y-m-d H:i:s') . "'",
					'Profession.know_count' => $data['Profession']['know_count'],
				),
				array(
					'Profession.id' => $data['id'],
				)
			);
			$status = true;
		$data['action'] = $action;
		$data['status'] = $status;
		echo json_encode($data);
	}


	public function _getCheckParameter() {
		$check_personals = $this->Master->getCheckPersonals();
		$check_likes = $this->Master->getCheckLikes();
		$like_checks = $this->Master->getLikeChecks();
		$check_sex = $this->Master->getCheckSex();
		$genre = $this->Master->getGenre();
		$like_genre = $this->Master->getlikeGenre();
		$this->set(compact("check_likes", "check_personals", "check_sex", "genre", "like_genre", "like_checks"));
		return;
	}
}
