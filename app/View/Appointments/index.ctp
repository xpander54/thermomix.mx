<?php
		$sesion = $this->Session->read()
	?>

<div class="container">
	<section class="row-fluid">	
		
		<div class="span6">
			<h2 class="text-center"><span class="medium">Agenda</span> una demostración <span class="big">GRATUITA</span></h2>
			<ul class="lista-demostracion">
				<h2><li>Conoce todas sus caracteristicas</li></h2>
				<h2><li>Recibe regalos Exclusivos</li></h2>
				<h2><li>Cocina deliciosos platillos</li></h2>
			</ul>
		</div>

		<div class="span6 forma">
			<?php if (isset($sesion['Forma']['enviada'])): ?>
				<h2>La solicitud ha sido enviada con ¡Exito!</h2>
			<?php else: ?>
				<h2 class="text-center text-big"><span class="big">¡Solicítalo!</span></h2>
				<?php
					echo $this->Form->create('Appointment', array('class' => 'forma-cita'));
					echo $this->Form->input(
						'nombre',
						array(
							'label' => false,
							'placeholder' => 'Nombre'
						)
					);
					echo $this->Form->input(
						'apellidos',
						array(
							'label' => false,
							'placeholder' => 'Apellidos'
						)
					);
					echo $this->Form->input(
						'email',
						array(
							'label' => false,
							'placeholder' => 'Correo Electrónico'
						)
					);
					echo $this->Form->input(
						'telefono',
						array(
							'label' => false,
							'placeholder' => 'Teléfono'
						)
					);
					echo $this->Form->input('comment', array('label' => false));
					echo '<div class="radio-btns">';
						echo $this->Form->radio(
							'type',
							array(
								0 => 'Compra',
								1 => 'Demostración'
							),
							array(
								'legend'  => false,
								'default' => 0,
								'class' => 'radio-btn'
							)
						);
					echo '</div>';
					echo $this->Form->end('Solicitar');
				?>
			<?php endif ?>		
		</div>
	</section>
</div>

<!-- <section class="video-container">
	<iframe id="ytplayer" type="text/html" width="100%" height="800"
src="https://www.youtube.com/embed/fDmvMPieJ14?controls=0&modestbranding=1&rel=0&showinfo=0&color=white&theme=light"
frameborder="0" allowfullscreen>
	</iframe>
</section> -->




<section class="video-container">

		

	<iframe id="ytplayer" type="text/html" width="100%" height="800"
src="https://www.youtube.com/embed/fDmvMPieJ14?controls=0&modestbranding=1&rel=0&showinfo=0&color=white&theme=light"
frameborder="0" allowfullscreen>

	</iframe>



</section>