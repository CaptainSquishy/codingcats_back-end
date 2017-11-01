<?php
class PanoramaImage extends AppModel {
 	public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('panoramaimages', $this->PanoramaImage->find('all'));
    }
}