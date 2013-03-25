<?php

class AppointmentsController extends AppController{

	private $actions_mod = array(
		'admin_index',
		'admin_view',
		'admin_change_status',
		'admin_add_note'
	);

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index');
	}

	public function isAuthorized($user){
		if(isset($user['role']) && $user['role'] === 'mod'){
			if(in_array($this->action, $this->actions_mod)){
				return true;
			}
		}
		return parent::isAuthorized($user);
	}

	public function index(){
		$this->layout = 'public';

		if($this->request->is('post')){
			if($this->Appointment->save($this->request->data)){
				$this->Session->write('Forma.enviada', true);
				$this->Session->setFlash('Solicitud añadida correctamente.');
				$this->redirect('/');
			}
		}
	}

	public function admin_index(){

		if(isset($this->request->params['named']['type'])){
			switch($this->request->params['named']['type']) {
				case 'agendada':
					$conditions = array(
						'Appointment.status' => 'agendada'
					);

					break;

				case 'cancelada':
					$conditions = array(
						'Appointment.status' => 'cancelada'
					);

					break;

				case 'pendiente':
					$conditions = array(
						'Appointment.status' => 'pendiente'
					);

					break;
				
				default:
					throw new NotFoundException('No es posible calcula terminos.');

					break;
			}
		} else{
			$conditions = array(
				'Appointment.status !=' => 'cancelada'
			);
		}

		$this->paginate = array(
			'conditions' => $conditions,
			'limit' => 10
		);

		$appointments = $this->paginate();

		$this->set('appointments', $appointments);
	}

	public function admin_add_note(){
		if(!$this->request->is('post')){
			throw new MethodNotAllowedException('Error');
		} else{
			$this->Appointment->id = $this->request->data['Appointment']['id'];

			if($this->Appointment->exists()){

				$this->Appointment->read();
				$this->Appointment->set('notas', $this->request->data['Appointment']['notas']);

				if($this->Appointment->save()){

					$this->Session->setFlash('Nota guardada correctamente.');
					$this->redirect(
						array(
							'controller' => 'appointments',
							'action'     => 'view',
							$this->request->data['Appointment']['id']
						)
					);
				} else{
					$this->Session->setFlash('Ocurrio un error al intentar guardar la nota');
				}
			} else{

				throw new NotFoundException('La Cita no existe.');
			}

		}
	}

	public function admin_view($id = null){
		$this->Appointment->id = $id;

		if(!$this->Appointment->exists()){
			throw new NotFoundException('La Cita no existe.');
		} else{
			$this->__change_read_status($id);
			$appointment = $this->Appointment->find(
				'first',
				array(
					'conditions' => array(
						'Appointment.id' => $id
					)
				)
			);

			$this->set('appointment', $appointment);
		}
	}

	public function admin_change_status(){
		if(!$this->request->is('post')){
			throw new MethodNotAllowedException('¡ERROR!');
		} else{
			$this->Appointment->id = $this->request->data['Appointment']['id'];
			$this->Appointment->read();
			$this->Appointment->set('status', $this->request->data['Appointment']['status']);
			if($this->Appointment->save()){
				$this->Session->setFlash('Estatus modificado correctamente.');
				$this->redirect(
					array(
						'controller' => 'appointments',
						'action'     => 'view',
						$this->request->data['Appointment']['id']
					)
				);
			}
		}
	}

	public function admin_delete($id = null){
		$this->Appointment->id = $id;

		if(!$this->Appointment->exists()){
			throw new NotFoundException('El usuario no existe.');
		}

		if(!$this->request->is('post')){
			throw new MethodNotAllowedException('ERROR.');
		} else{
			if($this->Appointment->delete()){
				$this->Session->setFlash('Cita eliminada correctamente.');
			} else{
				$this->Session->setFlash('Ocurrio un error al intentar eliminar la cita.');
			}
			$this->redirect(
				array(
					'controller' => 'appointments',
					'action'     => 'index'
				)
			);
		}
	}

	private function __change_read_status($id = null){
		$this->Appointment->id = $id;
		$this->Appointment->read();
		if($this->Appointment->leido == false){
			$this->Appointment->set('leido', 1);
			$this->Appointment->save();
		}
	}
}