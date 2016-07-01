<div class="row">


<div class="col-md-8">

<div class="plantels view">
<h2><?php echo __('Plantel'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($plantel['Plantel']['nombre']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Club'); ?></dt>
		<dd>
			<?php echo $this->Html->link($plantel['Club']['nombrelargo'], array('controller' => 'clubs', 'action' => 'view', $plantel['Club']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>


<div class="panel panel-default">
     <div class="panel-heading">
            <h4>  <span class="
glyphicon glyphicon-edit" aria-hidden="true"></span><?php echo __(' Asociar Jugador'); ?>

            </h4>
     </div>
	<div class="panel-body">
			<div class="fechas form">
								 <?php echo $this->Form->create('Plantel'); ?>

								<fieldset>
									<?php 
					 						//echo $this->Form->input('Jugadore',array('label'=>'Seleccionar Jugador: ','id' => "Jugadore"));
										echo $this->Form->input('Jugadore',array('label'=>'Seleccionar Jugador: ','id' => "Jugadore"));
					 				?>
									<script>
										var js = jQuery.noConflict();
										js("#Jugadore").select2({
											placeholder: "Ingrese nombre, apellido o DNI del jugador",
											width:'400px',
											minimumInputLength: 3,
											minimumResultsForSearch: Infinity
										});
									</script>


								</fieldset>
				
									<p>					
									<?php echo $this->Form->end(array('label'=>'Asociar', 'class'=>'btn btn-success'));?>
									</p>

			</div>

			</div>
</div>
</div>




<div class="col-md-3">
	<div class="list-group">
	  <a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  <?php echo $this->Html->link(__('Volver a datos del Plantel'), array('controller' => 'plantels', 'action' => 'view',$this->Form->value('Plantel.id')), array('class'=>'list-group-item')); ?> 

	</div>
</div>


<div class="col-md-3">
	<div class="panel panel-info" >
		<div class="panel-heading">
			<?php echo __('Info'); ?>
		</div>
		<div class="panel-body" >
			<p><?php echo ('IMPORTANTE: Dentro del cuadro de selección usted puede asociar un jugador o varios jugadores al plantel agregando elementos al mismo y guardando los cambios. Así como también, quitando los jugadores del cuadro de selección provocará la destrucción de la relación entre el/los jugador/es y el plantel.')?></p>
		</div>			
	
	</div>
</div>



</div>



