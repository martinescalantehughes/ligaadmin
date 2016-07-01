


<div class="row">


<div class="col-md-9">

<div class="panel panel-default">
     <div class="panel-heading">
            <h4>  <span class="
glyphicon glyphicon-edit" aria-hidden="true"></span><?php echo (' Fecha Número '.$fecha['Fecha']['numerofecha'].' - Registrar Partido')?>

            </h4>
     </div>
	<div class="panel-body">
			<div class="fechas form">
								 <?php echo $this->Form->create('Fecha'); ?>

								<fieldset>
									

										<div class="col-md-6">

											<label>Fecha a jugar</label>
											<?php
											echo $this->Form->inputText('Partido.fecha',array('label'=>'Fecha a jugar','type'=>'date', 'class'=>'form-control','dateFormat'=>'d-m-Y','style'=>'width:200px;','required')); ?>
											
											<label> Horario </label>
											<?php
											echo $this->Form->inputText('Partido.horario',array('label'=>'Fecha a jugar','type'=>'time', 'class'=>'form-control','dateFormat'=>'HH:mm:s','style'=>'width:200px;','required'));


											echo $this->Form->input('Partido.resultado', array('label'=>'Resultado' ,'class'=>'form-control','style'=>'width:200px;', 'placeholder'=>'Ingrese resultado final...'));
											
											echo $this->Form->input('Partido.arbitros', array('label'=>'Árbitros' ,'class'=>'form-control', 'placeholder'=>'Ingrese nombre de los árbitros...'));
											echo $this->Form->input('Partido.comentarios',array('label'=>'Comentarios','type'=>'textarea', 'class'=>'form-control')); ?>

										</div>
										<div class="col-md-3">
										<?php
											
											echo $this->Form->input('Partido.estado', array(
																	    'type' => 'select', 'class'=>'form-control','style'=>'width:200px;',
																	    'options' => array('Finalizado' => 'Finalizado', 'Suspendido/Aplazado' => 'Suspendido/Aplazado','Aún por jugar'=>'Aún por jugar'), 
																	    'selected' => 'Aún por jugar'
																	));

											echo $this->Form->input('Partido.locale_id', array('label'=>'Equipo Local' ,'class'=>'form-control', 'style'=>'width:300px;'));
											echo $this->Form->input('Partido.visitante_id', array('label'=>'Equipo Visitante' ,'class'=>'form-control', 'style'=>'width:300px;'));
											echo $this->Form->input('Partido.predio_id', array('label'=>'Predio donde se va a disputar el partido' ,'class'=>'form-control', 'style'=>'width:300px;'));

											?>
										</div>
								</fieldset>
									
									<p>					
									<?php echo $this->Form->end(array('label'=>'Registrar', 'class'=>'btn btn-success'));?>
									</p>

			</div>

			</div>
</div>
</div>

<div class="col-md-3">
	<div class="panel panel-primary" >
		<div class="panel-heading">
			<?php echo __('Tareas'); ?>
		</div>
		<div class="panel-body" >
			<ul>

				<li><?php echo $this->Html->link(__('Lista de Torneos'), array('controller'=>'torneos', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Volver a Fecha: '.$fecha['Fecha']['numerofecha'], array('controller' => 'fechas', 'action' => 'view', $fecha['Fecha']['id'])); ?></li>

			</ul>
		</div>			
	
	</div>
</div>




</div>


<?php
/*
	echo '<h3>visitantes</h3>';


	echo '<pre>';
	print_r($visitantes);
	echo '</pre>';

	echo '<h3>locales</h3>';

	
	echo '<pre>';
	print_r($locales);
	echo '</pre>';

	print_r($id_torneo);
	*/
?>