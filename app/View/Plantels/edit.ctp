<div class="row">


<div class="col-md-6">

<div class="panel panel-default">
     <div class="panel-heading">
            <h4>  <span class="
glyphicon glyphicon-edit" aria-hidden="true"></span><?php echo ('Editar datos del Platel')?>

            </h4>
     </div>
	<div class="panel-body">
			<div class="plantel form">
								 <?php echo $this->Form->create('Plantel'); ?>

								<fieldset>
									<?php
									echo $this->Form->input('id');
									echo $this->Form->input('Plantel.nombre', array('label'=>'Nombre' ,'class'=>'form-control', 'placeholder'=>'Ingrese nombre del plantel...'));
									echo $this->Form->input('Plantel.descripcion',array('label'=>'Descripción','type'=>'textarea', 'class'=>'form-control')); 
									?>

									

								</fieldset>
				
													
									<p><?php echo $this->Form->end(array('label'=>'Guardar', 'class'=>'btn btn-warning'));?></p>
												
										 
									

			</div>

			</div>
</div>
</div>


<div class="col-md-2">
	<div class="list-group">
	  <a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  
	  <?php echo $this->Html->link(__('Volver a datos del Plantel'), array('controller' => 'plantels', 'action' => 'view',$this->Form->value('Plantel.id')), array('class'=>'list-group-item')); ?> 
	
	</div>
</div>




</div>
