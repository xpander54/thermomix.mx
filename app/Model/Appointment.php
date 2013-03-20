<?php

class Appointment extends AppModel{

	public $validate = array(
		'email' => array(
<<<<<<< HEAD
			'correo-electronico' => array(
				'rule'     => array('email', true),
				'required' => true,
				'message'  => 'Debe proporcionar un correo electrónico válido.'
			)
=======
			'rule'    => array('email', true),
			'message' => 'Debe proporcionar un correo electrónico válido.'
>>>>>>> dd6a80e06b65fc33f2650a67adbcf9f52d4f70a5
		)
	);
	
}