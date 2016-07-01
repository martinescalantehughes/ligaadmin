<div class="row">


	<div class="col-md-6">

		<div class="panel panel-default">
		    <div class="panel-heading">
		            <h4><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><?php echo __(' Ediar Fecha'); ?></h4>
		    </div>

			<div class="panel-body">
					<div class="torneos form">
										 <?php echo $this->Form->create('Fecha'); ?>

										<fieldset>
											<?php 
												echo $this->Form->input('id');
												
												echo $this->Form->input('Fecha.numerofecha', array('label'=>'Número' ,'class'=>'form-control','style'=>'width:200px;', 'placeholder'=>'Ingrese numero de fecha...'));
											?>

											<label>Fecha de Inicio</label>
											<?php
												echo $this->Form->inputText('Fecha.fechadesde',array('label'=>'Fecha de Inicio','type'=>'date', 'class'=>'form-control','dateFormat'=>'d-m-Y','style'=>'width:200px;','required'));

											?>

											<label>Fecha de Fin</label>
											<?php
												echo $this->Form->inputText('Fecha.fechahasta',array('label'=>'Fecha de Fin','type'=>'date', 'class'=>'form-control','dateFormat'=>'d-m-Y','style'=>'width:200px;','required'));

											?>

											



										</fieldset>
						
											<p>					
											<?php echo $this->Form->end(array('label'=>'Guardar Cambios', 'class'=>'btn btn-warning'));?>
											</p>

						</div>

			</div>
		</div>
	</div>



<div class="col-md-3">
	<div class="list-group">
	  <a href="#" class="list-group-item list-group-item-info active">Tareas</a>

	  <?php echo $this->Html->link(__('Volver a datos de la Fecha'), array('controller' => 'fechas', 'action' => 'view',$this->Form->value('Fecha.id')), array('class'=>'list-group-item')); ?> 

	</div>
</div>




</div>
