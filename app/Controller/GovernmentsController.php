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
        $mayor = $this->Government->find('first', [
            'conditions' => [
                'position' => 'Mayor'
            ]
        ]);

        if ($this->request->is(['POST', 'PUT'])) {
            $data = $this->request->data;
            $dir  = APP."webroot/img/uploads/governments/mayor/";
            //checking if directory is exists
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $data['Government']['position'] = "Mayor";
            if ($mayor) {
                $id = $mayor['Government']['id'];
                $this->Government->id = $id;
                $this->Government->set($data['Government']);
                if ($this->Government->validates()) {
                    if ($this->Government->save($data['Government'])) {
                        //saving image
                        if ($data['Upload']['image']['size'] != 0) {
                            $ext  = explode(".", $data['Upload']['image']['name']);
                            $dir2 = $dir . $id . "/";

                            if (!file_exists($dir . $id)) {
                                mkdir($dir . $id . "/", 0777, true);
                            }
                            $filename = $this->Image->save(
                                $data['Upload']['image']['tmp_name'],
                                $dir2, $ext[1]);
                            if (!empty($filename)) {
                                $path = '/img/uploads/governments/mayor/'.$id."/".$filename;
                                $this->Government->id = $id;
                                $this->Government->saveField('image', $path);
                            } else {
                                $this->Session->setFlash(__('Failed to save image'), 'error');
                            }
                        }
                        $this->Session->setFlash(__('Mayor has been successfully updated.'), 'success');
                        return $this->redirect('/superadmin/mayor/edit/');
                    }
                }
            } else {
                $this->Government->set($data['Government']);
                if ($this->Government->validates()) {
                    if ($this->Government->save($data['Government'])) {
                        $id = $this->Government->getLastInsertId();

                        //saving image
                        if ($data['Upload']['image']['size'] != 0) {
                            $ext  = explode(".", $data['Upload']['image']['name']);
                            $dir2 = $dir . $id . "/";

                            if (!file_exists($dir . $id)) {
                                mkdir($dir . $id . "/", 0777, true);
                            }
                            $filename = $this->Image->save(
                                $data['Upload']['image']['tmp_name'],
                                $dir2, $ext[1]);
                            if (!empty($filename)) {
                                $path = '/img/uploads/governments/mayor/'.$id."/".$filename;
                                $this->Government->id = $id;
                                $this->Government->saveField('image', $path);
                            } else {
                                $this->Session->setFlash(__('Failed to save image'), 'error');
                            }
                        }
                        $this->Session->setFlash(__('Mayor has been successfully added.'), 'success');
                        return $this->redirect('/superadmin/mayor/edit/');
                    }
                }
            }
        }

        if ($mayor) {
            if (!$this->request->data) {
                $this->request->data = $mayor;
            }
        }
        $this->set(compact('mayor'));
    }

    public function superadmin_edit_vicemayor() {
        $vice_mayor = $this->Government->find('first', [
            'conditions' => [
                'position' => 'Vice Mayor'
            ]
        ]);

        if ($this->request->is(['POST', 'PUT'])) {
            $data = $this->request->data;
            $dir  = APP."webroot/img/uploads/governments/vice_mayor/";
            //checking if directory is exists
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $data['Government']['position'] = "Vice Mayor";
            if ($vice_mayor) {
                $id = $vice_mayor['Government']['id'];
                $this->Government->id = $id;
                $this->Government->set($data['Government']);
                if ($this->Government->validates()) {
                    if ($this->Government->save($data['Government'])) {
                        //saving image
                        if ($data['Upload']['image']['size'] != 0) {
                            $ext  = explode(".", $data['Upload']['image']['name']);
                            $dir2 = $dir . $id . "/";

                            if (!file_exists($dir . $id)) {
                                mkdir($dir . $id . "/", 0777, true);
                            }
                            $filename = $this->Image->save(
                                $data['Upload']['image']['tmp_name'],
                                $dir2, $ext[1]);
                            if (!empty($filename)) {
                                $path = '/img/uploads/governments/vice_mayor/'.$id."/".$filename;
                                $this->Government->id = $id;
                                $this->Government->saveField('image', $path);
                            } else {
                                $this->Session->setFlash(__('Failed to save image'), 'error');
                            }
                        }
                        $this->Session->setFlash(__('Vice Mayor has been successfully updated.'), 'success');
                        return $this->redirect('/superadmin/vicemayor/edit/');
                    }
                }
            } else {
                $this->Government->set($data['Government']);
                if ($this->Government->validates()) {
                    if ($this->Government->save($data['Government'])) {
                        $id = $this->Government->getLastInsertId();

                        //saving image
                        if ($data['Upload']['image']['size'] != 0) {
                            $ext  = explode(".", $data['Upload']['image']['name']);
                            $dir2 = $dir . $id . "/";

                            if (!file_exists($dir . $id)) {
                                mkdir($dir . $id . "/", 0777, true);
                            }
                            $filename = $this->Image->save(
                                $data['Upload']['image']['tmp_name'],
                                $dir2, $ext[1]);
                            if (!empty($filename)) {
                                $path = '/img/uploads/governments/vice_mayor/'.$id."/".$filename;
                                $this->Government->id = $id;
                                $this->Government->saveField('image', $path);
                            } else {
                                $this->Session->setFlash(__('Failed to save image'), 'error');
                            }
                        }
                        $this->Session->setFlash(__('Vice Mayor has been successfully added.'), 'success');
                        return $this->redirect('/superadmin/vicemayor/edit/');
                    }
                }
            }
        }

        if ($vice_mayor) {
            if (!$this->request->data) {
                $this->request->data = $vice_mayor;
            }
        }
        $this->set(compact('vice_mayor'));
    }

    public function superadmin_add_captain() {
        if ($this->request->is('POST')) {
            $data = $this->request->data;
            $dir  = APP."webroot/img/uploads/governments/captain/";
            //checking if directory is exists
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $data['Government']['position'] = "Barangay Captain";
            $this->Government->set($data['Government']);
            if ($this->Government->validates()) {
                if ($this->Government->save($data['Government'])) {
                    $id = $this->Government->getLastInsertId();

                    //saving image
                    if ($data['Upload']['image']['size'] != 0) {
                        $ext  = explode(".", $data['Upload']['image']['name']);
                        $dir2 = $dir . $id . "/";

                        if (!file_exists($dir . $id)) {
                            mkdir($dir . $id . "/", 0777, true);
                        }
                        $filename = $this->Image->save(
                            $data['Upload']['image']['tmp_name'],
                            $dir2, $ext[1]);
                        if (!empty($filename)) {
                            $path = '/img/uploads/governments/captain/'.$id."/".$filename;
                            $this->Government->id = $id;
                            $this->Government->saveField('image', $path);
                        } else {
                            $this->Session->setFlash(__('Failed to save image'), 'error');
                        }
                    }
                    $this->Session->setFlash(__('Barangay Captain has been successfully added.'), 'success');
                    return $this->redirect('/superadmin/government/lists');
                }
            }
        }
    }

    public function superadmin_edit_captain($id) {
        $this->Government->id = $id;
        if (!$this->Government->exists()) {
            return $this->redirect('/superadmin/government/lists');
        }

        $captain = $this->Government->find('first', [
            'conditions' => ['Government.id' => $id]
        ]);
        if (!$captain) {
            throw new NotFoundException(__('Invalid captain.'));
        }

        if ($this->request->is(['POST', 'PUT'])) {
            $this->Government->set($this->request->data['Government']);
            if ($this->Government->validates()) {
                $this->Government->id = $id;
                if ($this->Government->save($this->request->data['Government'])) {
                    //saving image
                    if ($this->request->data['Upload']['image']['size'] != 0) {
                        $dir  = APP."webroot/img/uploads/governments/captain";
                        //check file if exits if not create dir
                        if (!file_exists($dir)) {
                            mkdir($dir, 0777, true);
                        }

                        $ext  = explode(".", $this->request->data['Upload']['image']['name']);
                        $dir2 = $dir . $id . "/";

                        if (!file_exists($dir . $id)) {
                            mkdir($dir . $id . "/", 0777, true);
                        }
                        $filename = $this->Image->save(
                            $this->request->data['Upload']['image']['tmp_name'],
                            $dir2, $ext[1]);
                        if (!empty($filename)) {
                            $path = '/img/uploads/governments/captain/'.$id."/".$filename;
                            $this->Government->id = $id;
                            $this->Government->saveField('image', $path);
                        } else {
                            $this->Session->setFlash(__('Failed to save image'), 'error');
                        }
                    }
                    $this->Session->setFlash(__('Barangay Captain has been successfully updated.'), 'success');
                    return $this->redirect('/superadmin/captain/edit/'.$id);
                }
            }
        }

        if (!$this->request->data) {
            $this->request->data = $captain;
        }

        $this->set(compact('captain'));
    }

    public function superadmin_add_councilor() {
        if ($this->request->is('POST')) {
            $data = $this->request->data;
            $dir  = APP."webroot/img/uploads/governments/councilors/";
            //checking if directory is exists
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $data['Government']['position'] = "Councilor";
            $this->Government->set($data['Government']);
            if ($this->Government->validates()) {
                if ($this->Government->save($data['Government'])) {
                    $id = $this->Government->getLastInsertId();

                    //saving image
                    if ($data['Upload']['image']['size'] != 0) {
                        $ext  = explode(".", $data['Upload']['image']['name']);
                        $dir2 = $dir . $id . "/";

                        if (!file_exists($dir . $id)) {
                            mkdir($dir . $id . "/", 0777, true);
                        }
                        $filename = $this->Image->save(
                            $data['Upload']['image']['tmp_name'],
                            $dir2, $ext[1]);
                        if (!empty($filename)) {
                            $path = '/img/uploads/governments/councilors/'.$id."/".$filename;
                            $this->Government->id = $id;
                            $this->Government->saveField('image', $path);
                        } else {
                            $this->Session->setFlash(__('Failed to save image'), 'error');
                        }
                    }
                    $this->Session->setFlash(__('Councilor has been successfully added.'), 'success');
                    return $this->redirect('/superadmin/government/lists');
                }
            }
        }
    }

    public function superadmin_edit_councilor($id) {
        $this->Government->id = $id;
        if (!$this->Government->exists()) {
            return $this->redirect('/superadmin/government/lists');
        }

        $councilor = $this->Government->find('first', [
            'conditions' => ['Government.id' => $id]
        ]);
        if (!$councilor) {
            throw new NotFoundException(__('Invalid councilor.'));
        }

        if ($this->request->is(['POST', 'PUT'])) {
            $this->Government->set($this->request->data['Government']);
            if ($this->Government->validates()) {
                $this->Government->id = $id;
                if ($this->Government->save($this->request->data['Government'])) {
                    //saving image
                    if ($this->request->data['Upload']['image']['size'] != 0) {
                        $dir  = APP."webroot/img/uploads/governments/councilors";
                        //check file if exits if not create dir
                        if (!file_exists($dir)) {
                            mkdir($dir, 0777, true);
                        }

                        $ext  = explode(".", $this->request->data['Upload']['image']['name']);
                        $dir2 = $dir . $id . "/";

                        if (!file_exists($dir . $id)) {
                            mkdir($dir . $id . "/", 0777, true);
                        }
                        $filename = $this->Image->save(
                            $this->request->data['Upload']['image']['tmp_name'],
                            $dir2, $ext[1]);
                        if (!empty($filename)) {
                            $path = '/img/uploads/governments/councilors/'.$id."/".$filename;
                            $this->Government->id = $id;
                            $this->Government->saveField('image', $path);
                        } else {
                            $this->Session->setFlash(__('Failed to save image'), 'error');
                        }
                    }
                    $this->Session->setFlash(__('Barangay Captain has been successfully updated.'), 'success');
                    return $this->redirect('/superadmin/captain/edit/'.$id);
                }
            }
        }

        if (!$this->request->data) {
            $this->request->data = $councilor;
        }

        $this->set(compact('councilor'));
    }

    public function superadmin_index() {
        $this->Paginator->settings = [
            'limit' => 5
        ];
        $governments = $this->Paginator->paginate('Government');
        $this->set(compact('governments'));
    }

    public function superadmin_delete($id) {
        $this->autoRender = false;
        $this->Government->id = $id;
        if ($this->Government->exists()) {
            $this->Government->delete($id);
            $this->Session->setFlash(__('Government has been successfully deleted.'), 'success');
            return $this->redirect('/superadmin/government/lists/');
        } else {
            return $this->redirect('/superadmin/government/lists/');
        }
    }
}
