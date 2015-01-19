<?php
class ProfilesController extends AppController {
	
	public function edit() {
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Profile']['name'] = trim($this->request->data['Profile']['name']);
			$this->request->data['Profile']['intro'] = str_replace(PHP_EOL, '<br>', $this->request->data['Profile']['intro']);
			$this->request->data['Profile']['skill'] = str_replace(PHP_EOL, '<br>', $this->request->data['Profile']['skill']);
			$this->Profile->id = 1;
			if ($this->Profile->save($this->request->data)) {
				$message = 'Your profile has been updated';
				if(!empty($this->request->data['Profile']['avatar']['name']))
				{
					$file = $this->request->data['Profile']['avatar']; 
					move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/profile/' . 'avatar.jpg');
				}
			}
			else {
				$message = 'Unable to update your profile';
			}
			
			
		$this->Session->setFlash($message);
		$this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
		}
		$profile = $this->Profile->find('first');
		$profile['Profile']['intro'] = str_replace('<br>', PHP_EOL, $profile['Profile']['intro']);
		$profile['Profile']['skill'] = str_replace('<br>', PHP_EOL, $profile['Profile']['skill']);
		return $profile;
	}
	
	public function view() {
		$profile = $this->Profile->find('first');
		$profile['Profile']['intro'] = str_replace('<br>', PHP_EOL, $profile['Profile']['intro']);
		$profile['Profile']['skill'] = str_replace('<br>', PHP_EOL, $profile['Profile']['skill']);
		return $profile;
		
	}
}