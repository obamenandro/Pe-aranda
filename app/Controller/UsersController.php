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
                $this->Session->setFlash(__('Please enter your username.'));
                return $this->redirect('/superadmin/login');
            } elseif ($this->request->data['User']['password'] == '') {
                $this->Session->setFlash(__('Please input your password'));
                return $this->redirect('/superadmin/login');
            }
            if ($this->Auth->login()) {
            	die();
                return $this->redirect('/superadmin/members');
            } else {
            	$this->Session->setFlash(__('Invalid username or password.'));
            	return $this->redirect('/superadmin/login');
            }
        }
	}

	public function superadmin_logout() {
		$this->Session->destroy(); 
		return $this->redirect('/superadmin/login');
	}
}
