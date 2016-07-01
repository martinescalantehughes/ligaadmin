<div class="row">


<div class="col-md-8">

<div class="panel panel-default">
     <div class="panel-heading">
            <h4>  <span class="
glyphicon glyphicon-edit" aria-hidden="true"></span><?php echo __(' Editar Predio'); ?>

            </h4>
     </div>
	<div class="panel-body">
			<div class="predios form">
								 <?php echo $this->Form->create('Predio'); ?>

								<fieldset>
									<?php echo $this->Form->input('id');?>
									<?php echo $this->Form->input('nombre', array('class'=>'form-control')) ;?>
									
									<?php echo $this->Form->input('direccion',array('class'=>'form-control'));?>
										
									<?php

									echo $this->Form->input('Predio.paise_id', array('label'=>'País','options'=>$paises,'empty'=>'--Select--','class'=>'form-control'));     ?>       
									
							        <?php echo $this->Form->input('Predio.provincia_id',  array('label'=>'Provincia','empty'=>'--Select--','class'=>'form-control'));  ?>
							       
							        <?php echo $this->Form->input('Predio.localidade_id',  array('label'=>'Localidad','empty'=>'--Select--','class'=>'form-control')); ?>
							        
								</fieldset>
				
									<p>					
									<?php echo $this->Form->end(array('label'=>'Guardar', 'class'=>'btn btn-warning'));?>
									</p>

			</div>

			</div>
</div>
</div>


<div class="col-md-2">
	<div class="list-group">
	  <a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  <?php echo $this->Html->link(__('Lista de predios'), array('action' => 'index'), array('class'=>'list-group-item')); ?>
	  <?php echo $this->Html->link(__('Volver a datos del Predio'), array('controller' => 'predios', 'action' => 'view',$this->Form->value('Predio.id')), array('class'=>'list-group-item')); ?> 
	
	</div>
</div>




</div>


