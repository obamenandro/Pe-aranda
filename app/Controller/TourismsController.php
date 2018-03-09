<?php
App::uses('AppController', 'Controller');
/**
 * Tourisms Controller
 */
class TourismsController extends AppController {

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
        $tourisms = $this->Paginator->paginate('Tourism');
        $this->set(compact('tourisms'));
	}

	public function superadmin_add() {
        if ($this->request->is("POST")) {
            $data = $this->request->data;
            $dir  = APP."webroot/img/uploads/tourisms/";

            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            if ($data['Tourism']) {
                $this->Tourism->set($data['Tourism']);
                if ($this->Tourism->validates()) {
                    if ($this->Tourism->save($data['Tourism'])) {
                        $id = $this->Tourism->getLastInsertId();

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
                                $path = '/img/uploads/tourisms/'.$id."/".$filename;
                                $this->Tourism->id = $id;
                                $this->Tourism->saveField('image', $path);
                            } else {
                                $this->Session->setFlash(__('Failed to save image'), 'error');
                            }
                        }
                        $this->Session->setFlash(__('Tourism has been successfully added.'), 'success');
                        return $this->redirect('/superadmin/tourisms/list');
                    }
                } else {
                    $this->Session->setFlash(__('Tourism has been failed to save'), 'error');
                }
            } else {
                $this->Session->setFlash(__('Tourism has been failed to save'), 'error');
            }
        }
	}

	public function superadmin_edit($id) {
		$this->layout = "admin";
        $this->Tourism->id = $id;
        if (!$this->Tourism->exists()) {
            return $this->redirect('/superadmin/tourisms/list');
        }

        $tourism = $this->Tourism->find('first', [
            'conditions' => ['Tourism.id' => $id]
        ]);
        if (!$tourism) {
            throw new NotFoundException(__('Invalid tourism.'));
        }

        if ($this->request->is(['POST', 'PUT'])) {
            $this->Tourism->set($this->request->data['Tourism']);
            if ($this->Tourism->validates()) {
                $this->Tourism->id = $id;
                if ($this->Tourism->save($this->request->data['Tourism'])) {
                    //saving image
                    if ($this->request->data['Upload']['image']['size'] != 0) {
                        $dir  = APP."webroot/img/uploads/tourisms/";
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
                            $path = '/img/uploads/tourisms/'.$id."/".$filename;
                            $this->Tourism->id = $id;
                            $this->Tourism->saveField('image', $path);
                        } else {
                            $this->Session->setFlash(__('Failed to save image'), 'error');
                        }
                    }
                    $this->Session->setFlash(__('Tourism has been successfully updated.'), 'success');
                    return $this->redirect('/superadmin/tourisms/edit/'.$id);
                }
            }
        }

        if (!$this->request->data) {
            $this->request->data = $tourism;
        }

        $this->set(compact('tourism'));
	}

	public function superadmin_delete($id) {
		$this->Tourism->id = $id;
        if ($this->Tourism->exists()) {
            $this->Tourism->delete($id);
            $this->Session->setFlash(__('Tourism has been successfully deleted.'), 'success');
            return $this->redirect('/superadmin/tourisms/list');
        } else {
            return $this->redirect('/superadmin/tourisms/list');
        }
	}
}
