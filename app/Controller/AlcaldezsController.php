<?php
App::uses('AppController', 'Controller');
/**
 * Alcaldezs Controller
 */
class AlcaldezsController extends AppController {

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
        $alcaldezs = $this->Paginator->paginate('Alcaldez');
        $this->set(compact('alcaldezs'));
	}

	public function superadmin_add() {
		$this->layout = "admin";
		if ($this->request->is("POST")) {
            $data = $this->request->data;
            if ($data['Alcaldez']) {
                $this->Alcaldez->set($data['Alcaldez']);
                if ($this->Alcaldez->validates()) {
                    if ($this->Alcaldez->save($data['Alcaldez'])) {
                        $this->Session->setFlash(__('Alcaldez has been successfully added.'), 'success');
                        return $this->redirect('/superadmin/alcaldezs/list');
                    }
                } else {
                    $this->Session->setFlash(__('Alcaldez has been failed to save'), 'error');
                }
            } else {
                $this->Session->setFlash(__('Alcaldez has been failed to save'), 'error');
            }
        }
	}

	public function superadmin_edit($id) {
		$this->layout = "admin";
        $this->Alcaldez->id = $id;
        if (!$this->Alcaldez->exists()) {
            return $this->redirect('/superadmin/alcaldezs/list');
        }

        $alcaldez = $this->Alcaldez->find('first', [
            'conditions' => ['Alcaldez.id' => $id]
        ]);
        if (!$alcaldez) {
            throw new NotFoundException(__('Invalid alcaldez.'));
        }

        if ($this->request->is(['POST', 'PUT'])) {
            $this->Alcaldez->set($this->request->data['Alcaldez']);
            if ($this->Alcaldez->validates()) {
                $this->Alcaldez->id = $id;
                if ($this->Alcaldez->save($this->request->data['Alcaldez'])) {
                    $this->Session->setFlash(__('Alcaldez has been successfully updated.'), 'success');
                    return $this->redirect('/superadmin/alcaldezs/edit/'.$id);
                }
            }
        }

        if (!$this->request->data) {
            $this->request->data = $alcaldez;
        }

        $this->set(compact('alcaldez'));
	}

	public function superadmin_delete($id) {
		$this->Alcaldez->id = $id;
        if ($this->Alcaldez->exists()) {
            $this->Alcaldez->delete($id);
            $this->Session->setFlash(__('Alcaldez has been successfully deleted.'), 'success');
            return $this->redirect('/superadmin/alcaldezs/list');
        } else {
            return $this->redirect('/superadmin/alcaldezs/list');
        }
    }
    
    public function index() {
        
    }
}
