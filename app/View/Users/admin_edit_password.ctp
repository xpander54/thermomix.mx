<div class="index">
	<h2>Editar Contraseña</h2>
	<?php
		echo $this->Form->create('User');
		echo $this->Form->input(
			'last_password',
			array(
				'label' => 'Contraseña Actual:',
				'type'  => 'password'
			)
		);
		echo $this->Form->input(
			'password',
			array(
				'label' => 'Contraseña Nueva:'
			)
		);
		echo $this->Form->input(
			'confirm_password',
			array(
				'label' => 'Confirmar Contraseña Nueva:',
				'type'  => 'password'
			)
		);
		echo $this->Form->end('Editar Contraseña');
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
						'action'     => 'index'
					)
				);
			?>
		</li>
	</ul>
</div>