<?php

class UsersController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
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
		// Comprobar que el usuario existe.
		if(!$this->User->exists()){
			throw new NotFoundException('El usuario no existe.');
		}
		// Comprobar si el request es del tipo POST
		if($this->request->is('post')){
			$this->User->read(null, $id);

			debug($this->User->password);
		}
	}
}