<div class="index">
	<h2>Citas</h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th>Id</th>
			<th><?php echo $this->Paginator->sort('email', 'Correo Electrónico') ?></th>
			<th><?php echo $this->Paginator->sort('type', 'Tipo') ?></th>
			<th><?php echo $this->Paginator->sort('status', 'Status'); ?></th>
			<th><?php echo $this->Paginator->sort('created', 'Cita Creada') ?></th>
			<th><?php echo $this->Paginator->sort('updated', 'Ultima vez Actializada') ?></th>
			<th>Acciones</th>
		</tr>
		<?php foreach ($appointments as $appointment): ?>
		<tr>
			<td><?php echo $appointment['Appointment']['id'] ?></td>
			<td><?php echo $appointment['Appointment']['email'] ?></td>
			<td>
				<?php if($appointment['Appointment']['type'] == 0): ?>
					<?php echo 'Compra' ?>
				<?php else: ?>
					<?php echo 'Demostración' ?>
				<?php endif ?>
			</td>
			<td><?php echo $appointment['Appointment']['status'] ?></td>
			<td><?php echo $appointment['Appointment']['created'] ?></td>
			<td><?php echo $appointment['Appointment']['modified'] ?></td>
			<td class="actions">
				<?php
					echo $this->Html->link(
						'Ver',
						array(
							'admin' => true,
							'controller' => 'appointments',
							'action' => 'view',
							$appointment['Appointment']['id']
						)
					);
				?>
				<?php if($this->Session->read()['Auth']['User']['role'] === 'admin'): ?>	
				<?php
					echo $this->Form->postLink(
						'Eliminar',
						array(
							'admin' => true,
							'controller' => 'appointments',
							'action' => 'delete',
							$appointment['Appointment']['id']
						),
						array(
							'confirm' => __(
								'¿Esta seguro de querer eliminar la Cita # %s?',
								$appointment['Appointment']['id']
							)
						)
					);
				?>
				<?php endif ?>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3>Menú</h3>
	<ul>
		<li>
			<?php
				echo $this->Html->link(
					'Ver Todas',
					array(
						'controller' => 'appointments',
						'action'     => 'index'
					)
				)
			?>
		</li>
		<li>
			<?php
				echo $this->Html->link(
					'Ver Agendadas',
					array(
						'controller' => 'appointments',
						'action'     => 'index',
						'type'       => 'agendada'
					)
				)
			?>
		</li>
		<li>
			<?php
				echo $this->Html->link(
					'Ver Pendientes',
					array(
						'controller' => 'appointments',
						'action'     => 'index',
						'type'       => 'pendiente'
					)
				)
			?>
		</li>
		<?php if($this->Session->read()['Auth']['User']['role'] === 'admin'): ?>
		<li>
			<?php
				echo $this->Html->link(
					'Ver Canceladas',
					array(
						'controller' => 'appointments',
						'action'     => 'index',
						'type'       => 'cancelada'
					)
				)
			?>
		</li>
		<?php endif ?>
	</ul>
</div>