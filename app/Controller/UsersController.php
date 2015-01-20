<?php
class UsersController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->deny('change_password');
	}
	
	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	        	$this->Session->setFlash(__('Welcome, '. ucwords($this->Auth->user('username'))));
	        }
	        else {
		        $this->Session->setFlash(__('Invalid username or password, try again'));
	        }
	    }
	    $this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
	}
	
	public function logout() {
		$this->Session->setFlash(__('Goodbye, '. ucwords($this->Auth->user('username'))));
		$this->Auth->logout();
	    $this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
	}
	
	public function change_password() {
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->User->id = 1;
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Your password has been changed'));
			}
			else{
				$this->Session->setFlash(__('Unable to change your password.'));
			}
		}
		$this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
	}

}