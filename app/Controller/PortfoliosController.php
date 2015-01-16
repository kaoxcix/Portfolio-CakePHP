<?php
class PortfoliosController extends AppController {
	var $ModelProfile = 'Profile';
	
	public function index() {
		$this->loadModel($this->ModelProfile);
		$profile = $this->Profile->find('first');
		$this->set('profile', $profile);
	}
	public function edit_profile() {
		$this->loadModel($this->ModelProfile);
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Profile']['intro'] = str_replace(PHP_EOL, '<br>', $this->request->data['Profile']['intro']);
			$this->request->data['Profile']['skill'] = str_replace(PHP_EOL, '<br>', $this->request->data['Profile']['skill']);
			$this->Profile->id = 1;
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash('updated.');
				$this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
			}
			else {
				$this->Session->setFlash('Unable to update your post.');
				$this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
			}
		}
		$profile = $this->Profile->find('first');
		$profile['Profile']['intro'] = str_replace('<br>', PHP_EOL, $profile['Profile']['intro']);
		$profile['Profile']['skill'] = str_replace('<br>', PHP_EOL, $profile['Profile']['skill']);
		return $profile;
	}
	
	
	
}