<?php
App::uses('AppController', 'Controller');
/**
 * Galleries Controller
 */
class GalleriesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
    public $components = [
        'Flash',
        'Image',
        'Paginator',
        'Session'
    ];

    public function superadmin_index() {
        $this->layout = "admin";
        $this->Paginator->settings = [
            'limit' => 5
        ];
        $galleries = $this->Paginator->paginate('Gallery');
        $this->set(compact('galleries'));
    }

    public function superadmin_add() {
        $this->layout = "admin";
        if ($this->request->is("POST")) {
            $data = $this->request->data;
            $dir  = APP."webroot/img/uploads/galleries/";

            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            if ($data['Gallery']) {
                $this->Gallery->set($data['Gallery']);
                if ($this->Gallery->validates()) {
                    if ($this->Gallery->save($data['Gallery'])) {
                        $id = $this->Gallery->getLastInsertId();

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
                                $path = '/img/uploads/galleries/'.$id."/".$filename;
                                $this->Gallery->id = $id;
                                $this->Gallery->saveField('image', $path);
                            } else {
                                $this->Session->setFlash(__('Failed to save image'), 'error');
                            }
                        }
                        $this->Session->setFlash(__('Gallery has been successfully added.'), 'success');
                        return $this->redirect('/superadmin/galleries/list');
                    }
                } else {
                    $this->Session->setFlash(__('Gallery has been failed to save'), 'error');
                }
            } else {
                $this->Session->setFlash(__('Gallery has been failed to save'), 'error');
            }
        }
    }

    public function superadmin_edit($id) {
        $this->layout = "admin";
        $this->Gallery->id = $id;
        if (!$this->Gallery->exists()) {
            return $this->redirect('/superadmin/projects/list');
        }

        $gallery = $this->Gallery->find('first', [
            'conditions' => ['Gallery.id' => $id]
        ]);
        if (!$gallery) {
            throw new NotFoundException(__('Invalid gallery.'));
        }

        if ($this->request->is(['POST', 'PUT'])) {
            $this->Gallery->set($this->request->data['Gallery']);
            if ($this->Gallery->validates()) {
                $this->Gallery->id = $id;
                if ($this->Gallery->save($this->request->data['Gallery'])) {
                    //saving image
                    if ($this->request->data['Upload']['image']['size'] != 0) {
                        $dir  = APP."webroot/img/uploads/galleries/";
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
                            $path = '/img/uploads/galleries/'.$id."/".$filename;
                            $this->Gallery->id = $id;
                            $this->Gallery->saveField('image', $path);
                        } else {
                            $this->Session->setFlash(__('Failed to save image'), 'error');
                        }
                    }
                    $this->Session->setFlash(__('Gallery has been successfully updated.'), 'success');
                    return $this->redirect('/superadmin/galleries/edit/'.$id);
                }
            }
        }

        if (!$this->request->data) {
            $this->request->data = $gallery;
        }

        $this->set(compact('gallery'));
    }

    public function superadmin_delete($id) {
        $this->Gallery->id = $id;
        if ($this->Gallery->exists()) {
            $this->Gallery->delete($id);
            $this->Session->setFlash(__('Gallery has been successfully deleted.'), 'success');
            return $this->redirect('/superadmin/galleries/list');
        } else {
            return $this->redirect('/superadmin/galleries/list');
        }
    }

    public function index() {
        $this->Paginator->settings = [
            'limit' => 10
        ];
        $galleries = $this->Paginator->paginate('Gallery');
        $this->set(compact('galleries'));
    }
}
