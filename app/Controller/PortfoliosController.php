<?php
class PortfoliosController extends AppController {

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
					if(mkdir(WWW_ROOT .'img/portfolio/'.$id, 0755)){
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
		if ($this->Portfolio->delete($id)) {
			$this->Session->setFlash('"'.$portfolio['Portfolio']['title'].'" has been deleted.');
		}
		$this->redirect(array('controller'=>'Portfolios' , 'action' => 'index'));
	}
}