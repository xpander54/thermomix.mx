<div class="index">
	<h2>Login</h2>
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
				'label' => 'Contraseña:'
			)
		);
		echo $this->Form->end('Entrar');
	?>
</div>
<div class="actions">
	<h3>Menú</h3>
	<ul>
		<li>
			<?php
				echo $this->Html->link(
					'Regresar al Area Pública',
					array(
						'controller' => 'appointments',
						'action'     => 'index',
						'admin'      => false
					)
				) 
			?>
		</li>
	</ul>
</div>