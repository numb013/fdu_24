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
App::uses('CakeEmail', 'Network/Email');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class ContactsController extends AppController {
/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
 public function index() {
     if ($this->request->is('post')) {
     $this->Contact->set($this->request->data);
     if (!$this->Contact->validates()) {
         $this->Session->setFlash('入力内容に不備があります。');
         return;
     }
     switch ($this->request->data['confirm']) {
        case 'confirm':
          $this->render('contact_confirm');
          break;
        case 'send':
          if ($this->sendContact($this->request->data['contacts'])) {
            $this->redirect('/');
          } else {
            $this->redirect('/contacts/index');
          }
        break;
     }
	 }
 }

 private function sendContact($content) {
    $body = 'アドレス:'.$content['email'].'本文'.$content['body'];
   if (mb_send_mail('oneblow0701@gmail.com', 'お問い合わせが来ています。', $body)) {
       return true;
   } else {
       return false;
   }
 }
}
