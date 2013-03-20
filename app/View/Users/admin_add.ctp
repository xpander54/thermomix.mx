<div class="index">
	<h2>Añadir Usuario</h2>
	<?php
		echo $this->Form->create('User');
		echo $this->Form->input(
			'username',
			array(
				'label' => 'Usuario:'
			)
		);
		echo $this->Form->input(
			'password',
			array(
				'label' => 'Password:'
			)
		);
		echo $this->Form->input(
			'confirm_password',
			array(
				'label' => 'Confirmar Contraseña:',
				'type'  => 'password'
			)
		);
		echo $this->Form->input(
			'role',
			array(
				'label' => 'Rol:',
				'options' => array(
					'admin' => 'Administrador',
					'mod'   => 'Moderador'
				)
			)
		);
		echo $this->Form->end('Añadir Usuario');
	?>
</div>
<div class="actions">
	<h3>Menú</h3>
	<ul>
		<li>
			<?php
				echo $this->Html->link(
					'Cancelar',
					array(
						'controller' => 'users',
						'action'    => 'index'
					)
				);
			?>
		</li>
	</ul>
</div>