<?php
class ScenesController extends AppController {
     public $helpers = array('Html', 'Form');

    public function index() {
         $this->set('scenes', $this->Scene->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid scene'));
        }

        $scene = $this->Scene->findById($id);
        if (!$scene) {
            throw new NotFoundException(__('Invalid scene'));
        }
        $this->set('scene', $scene);
    }
}