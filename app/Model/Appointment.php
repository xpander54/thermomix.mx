<?php

class Appointment extends AppModel{

	public $validate = array(
		'nombre' => array(
			'vacio' => array(
				'rule'     => 'notEmpty',
				'required' => true,
				'message'  => 'Este campo no puede quedar vacío.'
			),
			'entre' => array(
				'rule'     => array('between', 3, 16),
				'required' => true,
				'message'  => 'Este campo debe contener entre 3 y 16 caracteres.'
			),
			'alfanumerico' => array(
				'rule'     => 'alphaNumeric',
				'required' => true,
				'message'  => 'Este campo solo acepta letras y números'
			)
		),
		'apellidos' => array(
			'vacio' => array(
				'rule'     => 'notEmpty',
				'required' => true,
				'message'  => 'Este campo no puede quedar vacío.'
			),
			'entre' => array(
				'rule'     => array('between', 3, 32),
				'required' => true,
				'message'  => 'Este campo debe contener entre 3 y 16 caracteres.'
			),
			'alfanumerico' => array(
				'rule'     => 'alphaNumeric',
				'required' => true,
				'message'  => 'Este campo solo acepta letras y números'
			)
		),
		'email' => array(
			'correo-electronico' => array(
				'rule'     => array('email', true),
				'required' => true,
				'message'  => 'Debe proporcionar un correo electrónico válido.'
			)
		),
		'telefono' => array(
			'vacio' => array(
				'rule'     => 'notEmpty',
				'required' => true,
				'message'  => 'Este campo no puede quedar vacío.'
			),
			'entre' => array(
				'rule'     => array('between', 7, 12),
				'required' => true,
				'message'  => 'Este campo debe contener entre 8 y 12 caracteres.'
			),
			'numerico' => array(
				'rule'     => 'numeric',
				'required' => true,
				'message'  => 'Este campo solo acepta números.'
			)
		),
		'comment' => array(
			'vacio' => array(
				'rule'     => 'notEmpty',
				'required' => true,
				'message'  => 'Este campo no puede quedar vacío.'
			),
		)	
	);
	
}