<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 */
class UsersController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public function superadmin_login() {
		if ($this->request->is('post')) {
            $this->Auth->logout();
            if ($this->request->data['User']['username'] == '') {
                $this->Session->setFlash(__('Please enter your username.'), 'error');
                return $this->redirect('/superadmin/login');
            } elseif ($this->request->data['User']['password'] == '') {
                $this->Session->setFlash(__('Please input your password'), 'error');
                return $this->redirect('/superadmin/login');
            }
            if ($this->Auth->login()) {
                return $this->redirect('/superadmin/projects/list');
            } else {
            	$this->Session->setFlash(__('Invalid username or password.'), 'error');
            	return $this->redirect('/superadmin/login');
            }
        }
	}

	public function superadmin_logout() {
		$this->Session->destroy();
		return $this->redirect('/superadmin/login');
	}
}
