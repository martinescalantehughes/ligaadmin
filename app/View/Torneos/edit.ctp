
<div class="row">


<div class="col-md-8">

<div class="panel panel-default">
     <div class="panel-heading">
            <h4>  <span class="
glyphicon glyphicon-edit" aria-hidden="true"></span><?php echo __(' Editar Torneo'); ?>

            </h4>
     </div>
	<div class="panel-body">
			<div class="torneos form">
								 <?php echo $this->Form->create('Torneo'); ?>

								<fieldset>
									<?php 
										echo $this->Form->input('id');
										echo $this->Form->input('Torneo.nombre', array('label'=>'Nombre' ,'class'=>'form-control', 'placeholder'=>'Ingrese nombre completo del torneo...'));
									?>

									<?php
										echo $this->Form->input('Torneo.descripcion',array('label'=>'Descripción','type'=>'textarea', 'class'=>'form-control','required')); 
									?>

									<label>Fecha de Inicio</label>
									<?php
										echo $this->Form->inputText('Torneo.fechadesde',array('label'=>'Fecha de Inicio','type'=>'date', 'class'=>'form-control','dateFormat'=>'d-m-Y','style'=>'width:200px;','required'));

									?>

									<label>Fecha de Fin</label>
									<?php
										echo $this->Form->inputText('Torneo.fechahasta',array('label'=>'Fecha de Fin','type'=>'date', 'class'=>'form-control','dateFormat'=>'d-m-Y','style'=>'width:200px;','required'));

									?>

									<?php 
										echo $this->Form->input('Torneo.premio', array('label'=>'Premio' ,'class'=>'form-control', 'placeholder'=>'Ingrese premio que otorga el torneo...'));
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
	  	<?php echo $this->Html->link(__('Lista de torneos'), array('action' => 'index'), array('class'=>'list-group-item')); ?>
	  	<?php echo $this->Html->link(__('Volver a datos del Torneo'), array('controller' => 'torneos', 'action' => 'view',$this->Form->value('Torneo.id')), array('class'=>'list-group-item')); ?> 
	</div>
</div>




</div>