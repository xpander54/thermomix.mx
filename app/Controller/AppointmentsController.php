<?php

class AppointmentsController extends AppController{

	public function index(){
		$this->layout = 'public';

		if($this->request->is('post')){
			if($this->Appointment->save($this->request->data)){
				$this->Session->setFlash('Solicitud añadida correctamente.');
				$this->redirect('/');
			}
		}
	}

	public function admin_index(){

		$this->paginate = array(
			'limit' => 10
		);

		$appointments = $this->paginate();

		$this->set('appointments', $appointments);
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

	private function __change_read_status($id = null){
		$this->Appointment->id = $id;
		$this->Appointment->read();
		if($this->Appointment->leido == false){
			$this->Appointment->set('leido', 1);
			$this->Appointment->save();
		}
	}
}