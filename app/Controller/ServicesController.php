<?php
App::uses('AppController', 'Controller');
/**
 * Services Controller
 */
class ServicesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
    public function superadmin_index() {
        $this->layout = "admin";
        $this->Paginator->settings = [
            'limit' => 5
        ];
        $services = $this->Paginator->paginate('Service');
        $this->set(compact('services'));
    }

    public function superadmin_add() {
        $this->layout = "admin";
        if ($this->request->is("POST")) {
            $data = $this->request->data;
            $this->Service->set($data);
            if ($this->Service->validates()) {
                if ($this->Service->save($data)) {
                    $this->Session->setFlash(__('Services has been successfully added.'), 'success');
                    return $this->redirect('/superadmin/services/list');
                } else {
                    $this->Session->setFlash(__('Services has been failed to added.'), 'error');
                    return $this->redirect('/superadmin/services/list');
                }
            }
        }
    }

    public function superadmin_edit($id) {
        $this->layout = "admin";
        $this->Service->id = $id;
        if (!$this->Service->exists()) {
            return $this->redirect('/superadmin/services/list');
        }

        $service = $this->Service->find('first', [
            'conditions' => ['Service.id' => $id]
        ]);
        if (!$service) {
            throw new NotFoundException(__('Invalid service.'));
        }

        if ($this->request->is(['POST', 'PUT'])) {
            $this->Service->set($this->request->data['Service']);
            if ($this->Service->validates()) {
                $this->Service->id = $id;
                if ($this->Service->save($this->request->data['Service'])) {
                    $this->Session->setFlash(__('Service has been successfully updated.'), 'success');
                    return $this->redirect('/superadmin/services/edit/'.$id);
                }
            }
        }

        if (!$this->request->data) {
            $this->request->data = $service;
        }

        $this->set(compact('service'));
    }

    public function superadmin_delete($id) {
        $this->Service->id = $id;
        if ($this->Service->exists()) {
            $this->Service->delete($id);
            $this->Session->setFlash(__('Service has been successfully deleted.'), 'success');
            return $this->redirect('/superadmin/services/list');
        } else {
            return $this->redirect('/superadmin/services/list');
        }
    }

    public function index() {
        $services = $this->Service->find('all');
        $this->set(compact('services'));
    }
}
