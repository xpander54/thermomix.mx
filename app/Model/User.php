<?php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel{

	public $validate = array(
		'username' => array(
			'vacio' => array(
				'rule'     => 'notEmpty',
				'required' => true,
				'message'  => 'Este campo es requerido.'
			),
			'entre' => array(
				'rule'     => array('between', 5, 12),
				'required' => true,
				'message'  => 'Este campo debe contener entre 5 y 12 caracteres.'
			),
			'alfanumerico' => array(
				'rule'     => 'alphaNumeric',
				'required' => true,
				'message'  => 'Este campo solo acepta números y letras.'
			)
		),
		'password' => array(
			'entre' => array(
				'rule'     => array('between', 6, 18),
				'required' => true,
				'message'  => 'Este campo debe contener entre 6 y 18 caracteres.'
			),
			'matchpassword' => array(
				'rule'    => 'match_password',
				'required' => true,
				'message' => 'Las contraseñas no coinciden.'
			)
		),
		'confirm_password' => array(
			'vacio' => array(
				'rule'     => 'notEmpty',
				'required' => true,
				'message'  => 'Este campo es requerido.'
			)
		),
		'role' => array(
			'rule'     => array(
				'inList',
				array('admin', 'mod'),
			),
			'required' => true,
			'message'  => 'Debe seleccionar un role válido.'
		),
		'last_password' => array(
			'checkpassword' => array(
				'rule'     => 'check_password',
				'required' => 'update',
				'message'  => 'Contraseña incorrecta.'
			)
		)
	);

	public function beforeSave($options = array()){
		if(isset($this->data[$this->alias]['password'])){
			$this->data[$this->alias]['password'] =
				AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}

	public function match_password($data){
		if($data['password'] == $this->data[$this->alias]['confirm_password']){
			return true;
		} else{
			$this->invalidate('confirm_password', 'Las contraseñas no coinciden.');
			return false;
		}
	}

	public function check_password($data){
		$last_password = AuthComponent::password($data['last_password']);
		$user = $this->find(
			'first',
			array(
				'conditions' => array(
					'User.id' => $this->data[$this->alias]['id']
				)
			)
		);

		if($last_password == $user[$this->alias]['password']){
			return true;
		} else{
			return false;
		}
		// $this->invalidate('last_password', $user[$this->alias]['password']);
	}
  }