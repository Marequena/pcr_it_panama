<?php
class PostsController extends AppController {
    public $helpers = array('Html','Form');
}

 function index() {
        $this->set('posts', $this->Post->find('all'));
    }