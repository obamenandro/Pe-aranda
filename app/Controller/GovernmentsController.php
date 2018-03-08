<?php
App::uses('AppController', 'Controller');
/**
 * Governments Controller
 */
class GovernmentsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public function superadmin_edit_mayor() {
		if ($this->request->is(['POST', 'PUT'])) {
			pr($this->request->data);
			die();
		}
	}

	public function superadmin_edit_vicemayor() {

	}

}
