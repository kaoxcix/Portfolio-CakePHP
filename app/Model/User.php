<?php
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends AppModel {
	public $validate = array(
			'username' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A username is required'
					)
			),
			'password' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A password is required'
					)
			),
	        'password_confirm' => array(
	            	'required' => array(
	                		'rule' => array('notEmpty'),
	                		'message' => 'Please confirm your password'
	            	),
	        		'compare'    => array(
	        				'rule'      => array('validate_passwords'),
	        				'message' => 'The passwords you entered do not match.',
	        		)
        	)
	);
	
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
					$this->data[$this->alias]['password']
			);
		}
		return true;
	}
	
	public function validate_passwords() {
		return $this->data[$this->alias]['password'] == $this->data[$this->alias]['password_confirm'];
	}
}