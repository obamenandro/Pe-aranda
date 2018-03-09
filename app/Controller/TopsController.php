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
		$this->Comment = ClassRegistry::init('Comment');

		$projects      = $this->Project->find('all');
		$comments      = $this->Comment->find('all');

		$this->set(compact('projects', 'comments'));
	}

	public function comment() {
		$this->Comment = ClassRegistry::init('Comment');
		if ($this->request->is('POST')) {
			$data = $this->request->data; 
			if ($this->Comment->save($data)) {
				$this->Session->setFlash(__('Comment has been successfully added.'), 'success');
				return $this->redirect('/');
			} else {
				$this->Session->setFlash(__('Comment has been failed to added.'), 'error');
				return $this->redirect('/');
			}
		}
	}
}
