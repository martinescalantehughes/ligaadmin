<div class="row">


<div class="col-md-6">

<div class="panel panel-default">
     <div class="panel-heading">
        <h4><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><?php echo __(' Registrar Pase'); ?></h4>
     </div>
	<div class="panel-body">
			<div class="tecnicopases form">
								<?php echo $this->Form->create('Tecnicopase'); ?>

								




								<fieldset>
								<?php echo $this->Form->input('Tecnicopase.club_id',array('label'=>'Club' ,'class'=>'form-control', 'style'=>'width:200px;'));?>
								<?php echo $this->Form->input('Tecnicopase.cargo', array(
								    'type' => 'select', 'class'=>'form-control','style'=>'width:200px;',
								    'options' => array('Director Técnico' => 'Director Técnico', 'Ayudante de Campo' => 'Ayudante de Campo', 'Médico'=>'Médico', 'Asistente de enfermería'=>'Asistente de enfermería', 'Entrenador de Arqueros'=>'Entrenador de Arqueros', 'Otro'=>'Otro'), 
								    'selected' => 'Director Técnico'
								)); 
								echo $this->Form->input('Tecnicopase.funcion',array('class'=>'form-control','type'=>'textarea'));

								?>
								
								<label>Fecha de Inicio de Contrato</label>
							    <div class="input-group">
								    <?php echo $this->Form->input('Tecnicopase.fechadesde', array(
								    	'dateFormat' => 'DMY',
									    'minYear' => date('Y'),
									    'maxYear' => 1900,
								        'class' => 'form-control',
								        'div' => array('class' => 'form-inline'),
								        'between' => '<div class="form-group">',
								        'separator' => '</div><div class="form-group">',
								        'after' => '</div>',
								        'label'=>false
								    ));?>
								</div>

								<label>Fecha de Fin de Contrato</label>
							    <div class="input-group">
								    <?php echo $this->Form->input('Tecnicopase.fechahasta', array(
								    	'dateFormat' => 'DMY',
									    'minYear' => date('Y') + 10,
									    'maxYear' => 1900,
									    
									    'selected' => array(
									    'day' => date('D'),
									    'month' => date('M'),
									    'year' => date('Y') + 1
									    
									    ),
								        'class' => 'form-control',
								        'div' => array('class' => 'form-inline'),
								        'between' => '<div class="form-group">',
								        'separator' => '</div><div class="form-group">',
								        'after' => '</div>',
								        'label'=>false
								    ));?>
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
	<div class="list-group">
	  <a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  <?php echo $this->Html->link(__('Lista de personal técnico'), array('controller' => 'personaltecnicos', 'action' => 'index'), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Volver a datos del Personal Técnico'), array('controller' => 'personaltecnicos', 'action' => 'view', $id), array('class'=>'list-group-item')); ?> 

	</div>
</div>



</div>
