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
				'imageRule' => array(
						'rule' => array('imageRule'),
						'message' => 'Please supply a valid image.',
						'allowEmpty' => true
				)
    	)
	);
	
	public function imageRule(){
		if(!empty($this->data[$this->alias]['avatar']['name'])){
			$ext = substr(strtolower(strrchr($this->data[$this->alias]['avatar']['name'], '.')), 1);
			$arr_ext = array('jpg', 'jpeg');
			$dimen = getimagesize($this->data[$this->alias]['avatar']['tmp_name']);
			return in_array($ext, $arr_ext) && $dimen[0] <= 300 && $dimen[0] == $dimen[1];
		}
		else{
			return true;
		}
	}
}