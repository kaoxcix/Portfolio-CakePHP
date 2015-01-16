<?php
class Profile extends AppModel {
	public $validate = array(
		'name' => array(
			'require' => array(
				'rule' => array('notEmpty'),
				'message' => 'Your fullname is required'
			)
		),
		'intro' => array(
				'require' => array(
						'rule' => array('notEmpty'),
						'message' => 'Your introduction is required'
				)
		),
		'skill' => array(
				'require' => array(
						'rule' => array('notEmpty'),
						'message' => 'Your skill are required'
				)
		)
	);
	
}