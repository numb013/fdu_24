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
class CheckLikesController extends AppController {
	public $components = array('Search.Prg', 'Session', 'Master');
	public $paginate = array();

	public function admin_index() {
		$this->layout = "default";

		$this->Prg->commonProcess();
		//$this->paginate['conditions'] = $this->CheckLike->parseCriteria($this->passedArgs);
		$this->paginate = array(
			'conditions' => array(
				 'CheckLike.delete_flag' => '0'
			 ),
			'order' => array(
				'created' => 'DESC',
			),
			'limit' => '40'
		);
		$datas = $this->paginate();

		$this->_getCheckGenre();
    $this->set('datas',$datas);
  }

  public function admin_add() {
		$this->layout = "default";
		$this->_getCheckGenre();
    if ($this->request->is(array('post', 'put'))) {
      if ($this->CheckLike->save($this->request->data)) {
        return $this->redirect(
          array('controller' => 'CheckLikes', 'action' => 'admin_index')
        );
      } else {
        return false;
      }
    }
  }

  public function admin_edit($id = null) {
		$this->layout = "default";
		$this->_getCheckGenre();
    if ($this->request->is(array('post', 'put'))) {


			//echo pr($this->request->data);
			//exit();
        $status = array(
					'CheckLike.name' => '"'.$this->request->data['CheckLike']['name'].'"',
					'CheckLike.like_genre' => $this->request->data['CheckLike']['like_genre'],
        );
        $conditions = array(
					'CheckLike.id' => $this->request->data['CheckLike']['id'],
        );
        $this->CheckLike->updateAll($status, $conditions);



        return $this->redirect(
          array('controller' => 'CheckLikes', 'action' => 'admin_index')
        );
    } else {
      $this->request->data = $this->CheckLike->find('first',array(
          'conditions' => array(
            'CheckLike.id' => $id
          ),
      ));
    }
  }


  public function admin_delete($id = null) {
	$this->layout = "default";
      if ($this->CheckLike->delete($id)) {
        return $this->redirect(
          array('controller' => 'CheckLikes', 'action' => 'admin_index')
        );
      } else {
        return false;
      }
  }


	public function admin_detail($id = null) {
		$this->_getCheckGenre();
		if (isset($id)) {
			$status = array(
			'conditions' =>
				array(
					'CheckLike.id' => $id,
					'CheckLike.delete_flag' => 0
				)
			);
			// 以下がデータベース関係
			$datas = $this->CheckLike->find('first', $status);
	    $this->set('data',$datas);
		}
	}

	public function _getCheckGenre() {
		$like_genre = $this->Master->getlikeGenre();
		$this->set(compact("like_genre"));
	}

}
