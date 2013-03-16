<?php

class Appointment extends AppModel{

	public $validate = array(
		'email' => array(
			'rule'    => array('email', true),
			'message' => 'Debe proporcionar un correo electrónico válido.'
		)
	);
	
}