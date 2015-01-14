<?php
class User extends AppModel{
	var $useTable = 'users';
	
	//Validation
	public $validate = array(
		'username' => array(
			'require' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please Enter Username'	
			)		
		),
		'password' => array(
			'require' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please Enter Password'
			)
		)
	);
	
	
}