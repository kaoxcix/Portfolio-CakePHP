<?php
class PortfoliosController extends AppController {
	var $ModelProfile = 'Profile';
	
	public function index() {
		$this->loadModel($this->ModelProfile);
		$profile = $this->Profile->find('first');
		$this->set('profile', $profile);
		
		$portfolio = $this->Portfolio->find('all');
		$this->set('portfolio', $portfolio);
	}
	public function edit_profile() {
		$this->loadModel($this->ModelProfile);
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Profile']['name'] = trim($this->request->data['Profile']['name']);
			$this->request->data['Profile']['intro'] = str_replace(PHP_EOL, '<br>', $this->request->data['Profile']['intro']);
			$this->request->data['Profile']['skill'] = str_replace(PHP_EOL, '<br>', $this->request->data['Profile']['skill']);
			$this->Profile->id = 1;
			if ($this->Profile->save($this->request->data)) {
				$message = 'Your profile has been updated';
			}
			else {
				$message = 'Unable to update your profile';
			}
			
			if(!empty($this->request->data['Profile']['avatar']['name']))
			{	
				$file = $this->request->data['Profile']['avatar']; //put the data into a var for easy use
			
				$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
				$arr_ext = array('jpg', 'jpeg'); //set allowed extensions
				$dimen = getimagesize($file['tmp_name']);
				
				
				//check if extension&dimension are valid
				if(in_array($ext, $arr_ext) && $dimen[0] <= 300 && $dimen[1] <= 300)
				{
					move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/profile/' . 'avatar.jpg');
				}
				else {
					$message = 'Unable to update your avatar';
				}
			}
		$this->Session->setFlash($message);
		$this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
		}
		
		$profile = $this->Profile->find('first');
		$profile['Profile']['intro'] = str_replace('<br>', PHP_EOL, $profile['Profile']['intro']);
		$profile['Profile']['skill'] = str_replace('<br>', PHP_EOL, $profile['Profile']['skill']);
		return $profile;
	}
	
	
	
}