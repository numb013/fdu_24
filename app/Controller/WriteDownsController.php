<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class WriteDownsController extends AppController {

  public function write_post() {
		$this->log($this->request->data, LOG_DEBUG);
		if (!$this->request->is('ajax')) {
		  throw new NotFoundException('お探しのページは見つかりませんでした。');
		}
		$this->autoRender = false;

		$data = array();
		$data['profession_id'] =  $this->request->data['wirte_down']['profession_id'];
		$data['write_name'] = $this->request->data['wirte_down']['write_name'];
		$data['write_text'] = $this->request->data['wirte_down']['write_text'];

		if (!$this->WriteDown->save($data)) {
      $error = $this->WriteDown->validationErrors;
      $data['error'] = $error;
      $status = flase;
		} else {
			 $status = true;
		}


		$data['status'] = $status;
		echo json_encode($data);
	}



}
