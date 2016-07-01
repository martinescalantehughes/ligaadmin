<div class="container">
	<div class="col-md-8">
		<div class="panel panel-default">
	     	<div class="panel-heading">
	     		<h4><?php echo __('Editar Club'); ?></h4>
	     	</div>

	     	<div class="panel-body">
	     		<div class="row">
					<?php echo $this->Form->create('Club', array('type' => 'file',  'novalidate' => 'novalidate')); ?>
					
					<div class="col-md-6">
						<?php
						echo $this->Form->input('id');
						echo $this->Form->input('nombrecorto', array('label'=>'Nombre corto' ,'class'=>'form-control'));
						echo $this->Form->input('nombrelargo',array('label'=>'Nombre Largo' ,'class'=>'form-control'));
						echo $this->Form->input('foto', array('type' => 'file', 'label' => 'Foto', 'id' => 'foto', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
				    	echo $this->Form->input('foto_dir', array('type' => 'hidden'));
				    	echo $this->Form->input('tipo', array(
								    'type' => 'select', 'class'=>'form-control','style'=>'width:200px;',
								    'options' => array('Fútbol' => 'Fútbol', 'Futsal' => 'Futsal', 'Playa'=>'Playa'), 
								    'selected' => 'Fútbol'));
						

									echo $this->Form->input('Club.paise_id', array('label'=>'País','empty'=>'--Select--','class'=>'form-control'));?>
									      
							        <?php echo $this->Form->input('Club.provincia_id',  array('label'=>'Provincia','empty'=>'--Select--','class'=>'form-control')); ?>
							       	<?php  echo $this->Form->input('Club.localidade_id',  array('label'=>'Localidad','empty'=>'--Select--','class'=>'form-control'));?>
							        

						<?php

						echo $this->Form->input('estado', array(
								    'type' => 'select', 'class'=>'form-control','style'=>'width:200px;',
								    'options' => array('Afiliado' => 'Afiliado', 'Adherente' => 'Adherente'), 
								    'selected' => 'Afiliado'));
						echo $this->Form->input('cuit', array('label'=>'CUIT' ,'class'=>'form-control','style'=>'width:200px;'));?>
					</div>
					<div class="col-md-6">
					
						<label>Fecha de Fundación</label>
						
						<div class="input-group">
								    <?php echo $this->Form->input('Club.fechafundacion', array(
								    	'label' => 'Fecha de Fundación',
								    	'dateFormat' => 'DMY',
									    'minYear' => date('Y'),
									    'maxYear' => 1870,
								        'class' => 'form-control',
								        'div' => array('class' => 'form-inline'),
								        'between' => '<div class="form-group">',
								        'separator' => '</div><div class="form-group">',
								        'after' => '</div>',
								        'label'=>false
								    ));?>
						</div>
						<?php
						
						echo $this->Form->input('division',array('label'=>'Divisón' ,'class'=>'form-control'));
						echo $this->Form->input('notas',array('class'=>'form-control','type'=>'textarea'));
						echo $this->Form->input('direccion',array('label'=>'Dirección' ,'class'=>'form-control'));
						echo $this->Form->input('codigopostal',array('label'=>'Código Postal' ,'style'=>'width:200px;','class'=>'form-control'));
						?>
						<label>Fecha de Afiliación</label>
							    <div class="input-group">
								    <?php echo $this->Form->input('Club.fechaafiliacion', array(
								    	'dateFormat' => 'DMY',
									    'minYear' => date('Y') - 5,
									    'maxYear' => 1900,
								        'class' => 'form-control',
								        'div' => array('class' => 'form-inline'),
								        'between' => '<div class="form-group">',
								        'separator' => '</div><div class="form-group">',
								        'after' => '</div>',
								        'label'=>false
								    ));?>
								</div>

								<label>Fecha de Renovación de carnet</label>
							    <div class="input-group">
								    <?php echo $this->Form->input('Club.fecharenovacion', array(
								    	'dateFormat' => 'DMY',
									    'minYear' => date('Y') + 2,
									    'maxYear' => date('Y'),
									    
									    'selected' => array(
									    'day' => date('D'),
									    'month' => date('M'),
									    'year' => date('Y') + 2
									    
									    ),
								        'class' => 'form-control',
								        'div' => array('class' => 'form-inline'),
								        'between' => '<div class="form-group">',
								        'separator' => '</div><div class="form-group">',
								        'after' => '</div>',
								        'label'=>false
								    ));?>
								</div>
						
					</div>
					<div class="col-md-12">
					<p>					
						<?php echo $this->Form->end(array('label'=>'Registrar', 'class'=>'btn btn-warning'));?>

					</p>
					</div>
				</div>
			</div>

		</div>

	</div>




<div class="col-md-3">
	<div class="list-group">
	  	<a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  	<?php echo $this->Html->link(__('Lista de Clubes'), array('action' => 'index'), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Volver a datos del Club'), array('action' => 'view',$this->Form->value('Club.id')), array('class'=>'list-group-item')); ?> 
	</div>
</div>


</div>

