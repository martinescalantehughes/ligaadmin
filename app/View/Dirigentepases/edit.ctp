<div class="row">


<div class="col-md-6">

<div class="panel panel-default">
     <div class="panel-heading">
        <h4><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><?php echo __(' Editar Pase'); ?></h4>
     </div>
	<div class="panel-body">
			<div class="pases form">
								<?php echo $this->Form->create('Dirigentepase'); ?>

								




								<fieldset>
								<?php 
								echo $this->Form->input('id');
								echo $this->Form->input('Dirigentepase.club_id',array('label'=>'Club' ,'class'=>'form-control', 'style'=>'width:200px;'));?>
								<?php echo $this->Form->input('Dirigentepase.cargo', array(
								    'type' => 'select', 'class'=>'form-control','style'=>'width:200px;',
								    'options' => array('Presidente' => 'Presidente', 'Vicepresidente' => 'Vicepresidente', 'Vocal'=>'Vocal', 'Tesorero'=>'Tesorero', 'Revisor de cuentas/Contador'=>'Revisor de cuentas/Contador', 'Otro'=>'Otro'), 
								    'selected' => 'Presidente'
								)); ?>
								<label>Fecha de Inicio de Contrato</label>
							    <div class="input-group">
								    <?php echo $this->Form->input('Dirigentepase.fechadesde', array(
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
								    <?php echo $this->Form->input('Dirigentepase.fechahasta', array(
								    	'dateFormat' => 'DMY',
									    'minYear' => date('Y') + 10,
									    'maxYear' => 1900,
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
									<?php echo $this->Form->end(array('label'=>'Registrar', 'class'=>'btn btn-warning'));?>
									</p>

			</div>

			</div>
</div>
</div>

<div class="col-md-3">
	<div class="list-group">
	  <a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  <?php echo $this->Html->link(__('Lista de dirigentes'), array('controller' => 'dirigenteclubs', 'action' => 'index'), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Volver a datos del Dirigente'), array('controller' => 'dirigenteclubs', 'action' => 'view', $dirigentepase['Dirigentepase']['dirigenteclub_id']), array('class'=>'list-group-item')); ?> 

	</div>
</div>


</div>
