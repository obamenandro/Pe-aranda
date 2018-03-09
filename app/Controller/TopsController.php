<?php
App::uses('AppController', 'Controller');
/**
 * Tops Controller
 */
class TopsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	
	public function home() {
		$this->Project = ClassRegistry::init('Project');	

		$projects = $this->Project->find('all');
		$this->set(compact('projects'));
	}
}
