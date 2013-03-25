<div class="index">
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
	<div class="related">
		<h3>Status</h3>
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
					),
					'label' => false,
					'default' => $appointment['Appointment']['status']
				)
			);
			echo $this->Form->end('Cambiar Status');
		?>
	</div>
	<div class="related">
		<h3>Anotaciones</h3>
		<?php
			echo $this->Form->create(
				'Appointment',
				array(
					'controller' => 'appointments',
					'action'     => 'add_note'
				)
			);
			echo $this->Form->input(
				'id',
				array(
					'value' => $appointment['Appointment']['id']
				)
			);
			echo $this->Form->input(
				'notas',
				array(
					'label' => false,
					'value' => $appointment['Appointment']['notas']
				)
			);
			echo $this->Form->end('Guardar Nota');
		?>
	</div>
</div>
<div class="actions">
	<h3>Menú</h3>
	<ul>
		<li>
			<?php
				echo $this->Html->Link(
					'Regresar',
					array(
						'controller' => 'appointments',
						'action'     => 'index'
					)
				);
			?>
		</li>
	</ul>
</div>