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

	public $components = [
		'Flash',
		'Image',
		'Paginator',
		'Session'
	];

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';
    }
	public function superadmin_project_add() {
        $this->Project = ClassRegistry::init('Project');
		if ($this->request->is("POST")) {
			$data = $this->request->data;
			$dir  = APP."webroot/img/uploads/projects/";

			if (!file_exists($dir)) {
				mkdir($dir, 0777, true);
			}
			$this->Project->set($data);
			if ($this->Project->validates()) {
				if ($this->Project->save($data)) {
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
		                    // $data['Upload']['icon_image'] = $filename;
		                    $path = '/img/uploads/projects/'.$id."/".$filename;
		                    $this->Project->id = $id;
                        	$this->Project->saveField('image', $path);
		                } else {
		                    $this->Session->setFlash(__('Failed to save image'), 'error');
		                }
					}
					$this->Session->setFlash(__('Project has been successfully added.'), 'success');
					return $this->redirect('/superadmin/projects/');
				}
			} else {
				$this->Session->setFlash(__('Project has been failed to save'), 'error');
			}
		}
	}

	public function superadmin_project_view() {

	}

	public function superadmin_index() {

	}
}
