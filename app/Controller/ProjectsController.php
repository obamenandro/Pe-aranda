<?php
App::uses('AppController', 'Controller');
/**
 * Projects Controller
 */
class ProjectsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = "admin";
    }
    public function superadmin_project_add() {
        $this->Project = ClassRegistry::init('Project');
        if ($this->request->is("POST")) {
            $data = $this->request->data;
            $dir  = APP."webroot/img/uploads/projects/";

            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            if ($data['Project']) {
                $this->Project->set($data['Project']);
                if ($this->Project->validates()) {
                    if ($this->Project->save($data['Project'])) {
                        $id = $this->Project->getLastInsertId();

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
                                $path = '/img/uploads/projects/'.$id."/".$filename;
                                $this->Project->id = $id;
                                $this->Project->saveField('image', $path);
                            } else {
                                $this->Session->setFlash(__('Failed to save image'), 'error');
                            }
                        }
                        $this->Session->setFlash(__('Project has been successfully added.'), 'success');
                        return $this->redirect('/superadmin/projects/list');
                    }
                } else {
                    $this->Session->setFlash(__('Project has been failed to save'), 'error');
                }
            } else {
                $this->Session->setFlash(__('Project has been failed to save'), 'error');
            }
        }
    }

    public function superadmin_project_list() {
        $this->layout = "admin";
        $this->Paginator->settings = [
            'limit' => 5
        ];
        $project_lists = $this->Paginator->paginate('Project');
        $this->set(compact('project_lists'));
    }

    public function superadmin_project_edit($id) {
        $this->layout = "admin";
        $this->Project->id = $id;
        if (!$this->Project->exists()) {
            return $this->redirect('/superadmin/projects/list');
        }

        $project = $this->Project->find('first', [
            'conditions' => ['Project.id' => $id]
        ]);
        if (!$project) {
            throw new NotFoundException(__('Invalid project.'));
        }

        if ($this->request->is(['POST', 'PUT'])) {
            $this->Project->set($this->request->data['Project']);
            if ($this->Project->validates()) {
                $this->Project->id = $id;
                if ($this->Project->save($this->request->data['Project'])) {
                    //saving image
                    if ($this->request->data['Upload']['image']['size'] != 0) {
                        $dir  = APP."webroot/img/uploads/projects/";
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
                            $path = '/img/uploads/projects/'.$id."/".$filename;
                            $this->Project->id = $id;
                            $this->Project->saveField('image', $path);
                        } else {
                            $this->Session->setFlash(__('Failed to save image'), 'error');
                        }
                    }
                    $this->Session->setFlash(__('Project has been successfully updated.'), 'success');
                    return $this->redirect('/superadmin/projects/edit/'.$id);
                }
            }
        }

        if (!$this->request->data) {
            $this->request->data = $project;
        }

        $this->set(compact('project'));
    }

    public function superadmin_project_delete($id) {
        $this->Project->id = $id;
        if ($this->Project->exists()) {
            $this->Project->delete($id);
            $this->Session->setFlash(__('Project has been successfully deleted.'), 'success');
            return $this->redirect('/superadmin/projects/list');
        } else {
            return $this->redirect('/superadmin/projects/list');
        }
    }
}
