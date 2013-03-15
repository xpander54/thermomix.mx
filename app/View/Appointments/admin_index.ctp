<section class="side-bar">
	<h3>Menú</h3>
</section>
<section class="content">
	<h2>Citas</h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th>Id</th>
			<th>Correo Electrónico</th>
			<th>Status</th>
			<th>Acciones</th>
		</tr>
		<?php foreach ($appointments as $appointment): ?>
		<tr>
			<td><?php echo $appointment['Appointment']['id'] ?></td>
			<td><?php echo $appointment['Appointment']['email'] ?></td>
			<td><?php echo $appointment['Appointment']['status'] ?></td>
			<td class="actions">
				<?php
					echo $this->Html->link(
						'Ver',
						array(
							'admin' => true,
							'controller' => 'appointments',
							'action' => 'view'
						)
					);

					echo $this->Form->postLink(
						'Eliminar',
						array(
							'admin' => true,
							'controller' => 'appointments',
							'action' => 'delete',
							$appointment['Appointment']['id']
						),
						array(
							'confirm' => __('¿Esta seguro de querer eliminar la Cita # %s?', $appointment['Appointment']['id'])
						)
					);
				?>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
</section>