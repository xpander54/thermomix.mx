<div class="index">
	<h2>Editar Contraseña</h2>
	<?php
		echo $this->Form->create('User');
		echo $this->Form->input(
			'password',
			array(
				'label' => 'Contraseña Anterior:'
			)
		);
		echo $this->Form->input(
			'n_password',
			array(
				'label' => 'Contraseña Nueva:',
				'type'  => 'password'
			)
		);
		echo $this->Form->input(
			'confirm_n_password',
			array(
				'label' => 'Confirmar Contraseña:',
				'type'  => 'password'
			)
		);
		echo $this->Form->end('Editar Contraseña');
	?>
</div>