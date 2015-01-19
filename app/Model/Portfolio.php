<?php
class Portfolio extends AppModel {
	public $validate = array(
			'title' => array(
					'require' => array(
							'rule' => array('notEmpty'),
							'message' => 'Title is required'
					)
			),
			'detail' => array(
					'require' => array(
							'rule' => array('notEmpty'),
							'message' => 'Detail is required'
					)
			),
			'image' => array(
	        		'extension' => array(
	        				'rule' => array('extension',array('jpeg', 'jpg')),
	       					'message' => 'Please supply a valid image.'
	        		),
					'require' => array(
							'rule' => array('notEmpty'),
							'message' => 'Detail is required'
					)
			)
	);
}