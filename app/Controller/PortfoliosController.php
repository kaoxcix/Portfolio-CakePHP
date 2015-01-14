<?php
class PortfoliosController extends AppController {

	function index() {
		
	}

	function login() {
		//$this->autoRender = false;
		$this->Session->setFlash(__('Invalid username or password'));
		$this->redirect(array('action' => 'index'));
		
	}
	
}