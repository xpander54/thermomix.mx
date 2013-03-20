<div class="index">
	<h2>Usuarios</h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th>Id</th>
			<th>Usuario</th>
			<th>Acciones</th>
		</tr>
		<?php foreach ($users as $user): ?>
		<tr>
			<td><?php echo $user['User']['id'] ?></td>
			<td><?php echo $user['User']['username'] ?></td>
			<td class="actions">
				<?php
					echo $this->Html->link(
						'Editar',
						array(
							'controller' => 'users',
							'action'     => 'edit_password',
							$user['User']['id']
						)
					);
					echo $this->Form->postLink(
						'Eliminar',
						array(
							'controller' => 'users',
							'action'     => 'delete',
							$user['User']['id']
						),
						array(
							'confirm' => __(
								'¿Esta seguro de querer eliminar el usuairo: %s?',
								$user['User']['username']
							)
						)
					);
				?>
			</td>
		</tr>	
		<?php endforeach ?>
	</table>
</div>
<div class="actions">
	<h3>Menú</h3>
	<ul>
		<?php
			echo $this->Html->link(
				'Añadir Usuario',
				array(
					'controller' => 'users',
					'action'     => 'add'
				)
			)
		?>
	</ul>
</div>