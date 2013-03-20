<?php

class Appointment extends AppModel{

	public $validate = array(
		'email' => array(
			'correo-electronico' => array(
				'rule'     => array('email', true),
				'required' => true,
				'message'  => 'Debe proporcionar un correo electrónico válido.'
			)
		)
	);
	
}