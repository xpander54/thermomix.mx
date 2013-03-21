<?php

class UsersController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function isAuthorized($user){
		if(in_array($this->action, array('admin_logout'))){
			return true;
		}
		return parent::isAuthorized($user);
	}

	public function admin_index(){

		$this->paginate = array(
			'limit' => 10
		);

		$users = $this->paginate();
		$this->set('users', $users);

	}

	public function admin_add(){
		if($this->request->is('post')){
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('Usuario añadido correctamente.');
				$this->redirect(array('action' => 'index'));
			} else{
				$this->Session->setFlash('Ocurrio un error al intentar añadir el usuario. Intentelo Nuevamente.');
			}
		}
	}

	public function admin_delete($id = null){
		$this->User->id = $id;
		if($this->request->is('post')){
			if($this->User->exists() && $this->User->delete()){
				$this->Session->setFlash('Usuario eliminado correctamente.');
			} else{
				$this->Session->setFlash('Ocurrio un error al intentar eliminar el usuario.');
			}
			$this->redirect(array('controller' => 'users', 'action' => 'index'));
		} else{
			throw new MethodNotAllowedException('Error.');
		}
	}

	public function admin_edit_password($id = null){
		$this->User->id = $id;

		if(!$this->User->exists()){
			throw new NotFoundException('El usuario no existe.');
		}
		if($this->request->is('post')){
			$this->User->read();
			$this->User->set(
				array(
					'password'         => $this->request->data['User']['password'],
					'confirm_password' => $this->request->data['User']['confirm_password'],
					'last_password'    => $this->request->data['User']['last_password']
				)
			);

			if($this->User->save()){
				$this->Session->setFlash('Contraseña modificada');
				$this->redirect(array('controller' => 'users', 'action' => 'index'));
			} else{
				$this->Session->setFlash('Ocurrio un error al intentar modificar la contraseña.');
			}
		}
	}

	public function admin_login(){
		if($this->request->is('post')){
			if($this->Auth->login()){
				return $this->redirect($this->Auth->redirectUrl());
			} else{
				$this->Session->setFlash('Convinacion usuario contraseña incorrecta.');
			}
		}
	}

	public function admin_logout(){
		$this->redirect($this->Auth->logout());
	}
}