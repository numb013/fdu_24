<?php
App::uses('AppController', 'Controller');
/**
 * SitemapsController
 *
 */
class SitemapsController extends AppController {

/**
 * uses
 *
 * @var array
 */
 public $uses = array('Profession');

/**
 * Components
 *
 * @var array
 */
	public $components = array(
		'Search.Prg',
	);

/**
 * beforeFilter method
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index');
	}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = "xml/default";
			$options = array(
				'conditions' =>array(
					'delete_flag' => '0'
				),
				'fields' => array(
					'Profession.id', 'Profession.modified'
				),
				'recursive' => -1
			);
			$professions = $this->Profession->find('all', $options);
			$this->set('professions', $professions);
	}
}
