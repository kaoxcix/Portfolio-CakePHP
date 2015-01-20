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
		),
		'avatar' => array(
        		'extension' => array(
        				'rule' => array('extension',array('jpeg', 'jpg')),
       					'message' => 'Please supply a valid image.'
        		),
				'dimension' => array(
						'rule' => array('dimension'),
						'message' => 'Please supply a valid image.'
				)
    	)
	);
	
	public function dimension(){
		$file = $this->data[$this->alias]['avatar'];
		$dimen = getimagesize($file['tmp_name']);
		return $dimen[0] <=300 && $dimen[0] == $dimen[1];
	}
}