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
 * Redistributions of files must retain the above copyright notice.
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
class CheckPersonalsController extends AppController {
	public $uses = array('CheckPersonal', 'Profession', 'CheckLike', 'Image', 'Movie');

	public $components = array('Search.Prg');
	public $presetVars = true;
	public $paginate = array();


	public function check_box($para = null) {
		$this->layout = "default";
    // レイアウト関係
		$this->Prg->commonProcess();
		$this->paginate['conditions'] = $this->Profession->parseCriteria($this->passedArgs);
		if (empty($this->request->data)) {
			// 初期表示時
			$this->paginate = array(
				'conditions' => array(
				   'delete_flag' => '0'
				 ),
				'order' => array(
					'created' => 'DESC',
				),
			);
			$this->set('flag', '1');
		} else {
			$this->paginate['conditions']['CheckPersonal.delete_flag'] = '0';
		}

		$datas = $this->paginate();
		$this->_getCheckParameter();
		$this->set('datas',$datas);
		$this->set('para',$para);
	}







	public function admin_index() {
		$this->layout = "default";
    $datas = $this->CheckPersonal->find('all',array(
        'conditions' => array(
          'CheckPersonal.delete_flag' => '0'
        ),
        'order' => array(
          'created DESC'
        ),
    ));
    $this->set('datas',$datas);
    }

  public function admin_add() {
		$this->layout = "default";
    if ($this->request->is(array('post', 'put'))) {
      if ($this->CheckPersonal->save($this->request->data)) {
        return $this->redirect(
          array('controller' => 'CheckPersonals', 'action' => 'admin_index')
        );
      } else {
        return false;
      }
    }
  }

  public function admin_edit($id = null) {
		$this->layout = "default";
    if ($this->request->is(array('post', 'put'))) {
        $status = array(
					'CheckPersonal.name' => '"'.$this->request->data['CheckPersonal']['name'].'"',
        );
        $conditions = array(
					'CheckPersonal.id' => $this->request->data['CheckPersonal']['id'],
        );
        $this->CheckPersonal->updateAll($status, $conditions);
        return $this->redirect(
          array('controller' => 'CheckPersonals', 'action' => 'admin_index')
        );
    } else {
      $this->request->data = $this->CheckPersonal->find('first',array(
          'conditions' => array(
            'CheckPersonal.id' => $id
          ),
      ));

    }
  }


	public function _getCheckParameter() {
		$check_personals = $this->Master->getCheckPersonals();
		$check_likes = $this->Master->getCheckLikes();
		$like_checks = $this->Master->getlikeGenre();
		$genre = $this->Master->getGenre();
		$like_genre = $this->Master->getlikeGenre();

		$this->set(compact("check_likes", "check_personals", "genre", "like_genre", "like_checks"));
		return;
	}
}
