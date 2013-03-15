<section class="content">
	<h2>Petición de Cita</h2>
	<dl>
		<dt>Nombre:</dt>
		<dd><?php echo $appointment['Appointment']['nombre'] ?></dd>
		<dt>Apellidos:</dt>
		<dd><?php echo $appointment['Appointment']['apellidos'] ?></dd>
		<dt>Teléfono:</dt>
		<dd><?php echo $appointment['Appointment']['telefono'] ?></dd>
		<dt>E-Mail:</dt>
		<dd><?php echo $appointment['Appointment']['email'] ?></dd>
		<dt>Status:</dt>
		<dd><?php echo $appointment['Appointment']['status'] ?></dd>
	</dl>
	<h3>Cambiar Status</h3>
	<?php
		echo $this->Form->create(
			'Appointment',
			array(
				'controller' => 'appointments',
				'action'     => 'change_status'
			)
		);
		echo $this->Form->input(
			'id',
			array(
				'value' => $appointment['Appointment']['id']
			)
		);
		echo $this->Form->input(
			'status',
			array(
				'options' => array(
					'pendiente' => 'Pendiente',
					'agendada'  => 'Agendada',
					'cancelada' => 'Cancelada'
				)
			)
		);
		echo $this->Form->end('Cambiar Status');
	?>
</section>