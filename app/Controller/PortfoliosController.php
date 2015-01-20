<?php
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
App::uses('AppController','Controller');
class PortfoliosController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->deny('add', 'delete');
	}
	 
	
	public function index() {
		//fetch profile data
		$this->loadModel('Profile');
		$profile = $this->Profile->findById(1);
		$this->set('profile', $profile);
		
		//fetch portfolio to card
		$portfolio = $this->Portfolio->find('all');
		$this->set('portfolio', $portfolio);
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Portfolio']['title'] = str_replace(' ', '_', $this->request->data['Portfolio']['title']);
			$this->request->data['Portfolio']['example'] = count($this->request->data['Portfolio']['image']);
			$this->Portfolio->create();
			if ($this->Portfolio->save($this->request->data)) {
				$id = $this->Portfolio->getLastInsertId();
				if(!empty($this->request->data['Portfolio']['image'][0]['name']))
				{
					$file = $this->request->data['Portfolio']['image'];
					if(mkdir(WWW_ROOT .'img/portfolio/'.$id, 0777)){
						foreach($file as $index => $file){
							move_uploaded_file($file['tmp_name'], WWW_ROOT .'img/portfolio/'.$id.'/image'.($index+1).'.jpg');
						}
					}
				}
				$message = 'Your portfolio has been added';
			}
			else {
				$message = 'Unable to add your portfolio';
			}
			$this->Session->setFlash($message);
			$this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
		}
	}
	
	public function delete($id) {
		$portfolio = $this->Portfolio->findById($id);
		$count = $portfolio['Portfolio']['example'];
		if ($this->Portfolio->delete($id)) {
			for($i=1;$i<=$count;$i++){
				unlink(WWW_ROOT .'img/portfolio/'.$id.'/image'.$i.'.jpg');
			}
			rmdir(WWW_ROOT .'img/portfolio/'.$id);
			$this->Session->setFlash('"'.$portfolio['Portfolio']['title'].'" has been deleted.');
		}
		$this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
	}
}