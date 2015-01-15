<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {


public function login() {
	
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
        	$this->Session->setFlash(__('Welcome, '. ucwords($this->Auth->user('username'))));
            $this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
        }
        $this->Session->setFlash(__('Invalid username or password, try again'));
        $this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
    }

}

public function logout() {
	$this->Session->setFlash(__('Goodbye, '. ucwords($this->Auth->user('username'))));
	$this->Auth->logout();
    $this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
}

	public function index() {
	}

}