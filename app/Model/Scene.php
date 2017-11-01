<?php
class Scene extends AppModel {
 	public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('scenes', $this->Scene->find('all'));
    }
}