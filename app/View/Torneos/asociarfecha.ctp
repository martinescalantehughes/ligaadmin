
<div class="row">


<div class="col-md-6">

<div class="panel panel-default">
     <div class="panel-heading">
            <h4>  <span class="
glyphicon glyphicon-edit" aria-hidden="true"></span><?php echo (' Torneo: '.$torneo['Torneo']['nombre'].' - Registrar Fecha')?>

            </h4>
     </div>
	<div class="panel-body">
			<div class="fechas form">
								 <?php echo $this->Form->create('Fecha'); ?>

								<fieldset>
									<?php 
										echo $this->Form->input('Fecha.numerofecha', array('label'=>'Número de Fecha' ,'class'=>'form-control', 'style'=>'width:200px;','placeholder'=>'Ingrese número de fecha...'));
									?>

									

									<label>Comienzo</label>
									<?php
										echo $this->Form->inputText('Fecha.fechadesde',array('label'=>'Fecha de Inicio','type'=>'date', 'class'=>'form-control','dateFormat'=>'d-m-Y','style'=>'width:200px;','required'));

									?>

									<label>Fin</label>
									<?php
										echo $this->Form->inputText('Fecha.fechahasta',array('label'=>'Fecha de Fin','type'=>'date', 'class'=>'form-control','dateFormat'=>'d-m-Y','style'=>'width:200px;','required'));

									?>

								</fieldset>
				
													
									<p><?php echo $this->Form->end(array('label'=>'Registrar', 'class'=>'btn btn-success'));?></p>
												
										 
									

			</div>

			</div>
</div>
</div>

<div class="col-md-3">
	<div class="list-group">
	  	<a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  	<?php echo $this->Html->link(__('Lista de Torneos'), array('action' => 'index'), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Volver a datos del Torneo'), array('action' => 'view', $torneo['Torneo']['id']), array('class'=>'list-group-item')); ?> 	
	</div>
</div>




</div>