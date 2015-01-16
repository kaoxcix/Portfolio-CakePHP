<?php
class PortfoliosController extends AppController {

	function index() {
		$this->loadModel('Profile');
		$profile = $this->Profile->find('first');
		$this->set('profile', $profile);
	}
	
	
}