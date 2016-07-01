

<?php /*
	echo '<pre>';
	print_r($plantels);
	echo '</pre>';
	*/
?>
<br/>
<!--<p>hola</p>-->
<?php
	//print_r($jugadores);
?>


<div class="row">


<div class="col-md-8">

<div class="panel panel-default">
     <div class="panel-heading">
            <h4>  <span class="
glyphicon glyphicon-edit" aria-hidden="true"></span><?php echo __(' Asociar Plantel'); ?>

            </h4>
     </div>
	<div class="panel-body">
			<div class="fechas form">
								 <?php echo $this->Form->create('Torneo'); ?>

								<fieldset>
									<?php 
					 						//echo $this->Form->input('Jugadore',array('label'=>'Seleccionar Jugador: ','id' => "Jugadore"));
										echo $this->Form->input('Plantel',array('label'=>'Seleccionar plantel: ','id' => "Plantel"));
					 				?>
									<script>
										var js = jQuery.noConflict();
										js("#Plantel").select2({
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
	  	<?php echo $this->Html->link(__('Lista de Torneos'), array('action' => 'index'), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Volver a datos del Torneo'), array('action' => 'view', $torneo['Torneo']['id']), array('class'=>'list-group-item')); ?> 	
	</div>
</div>

<div class="col-md-3">
	<div class="panel panel-info" >
		<div class="panel-heading">
			<?php echo __('Info'); ?>
		</div>
		<div class="panel-body" >
			<p><?php echo ('IMPORTANTE: Dentro del cuadro de selección usted puede asociar un plantel o varios planteles al torneo agregando elementos al mismo y guardando los cambios. Así como también, quitando los planteles del cuadro de selección provocará la destrucción de la relación entre el/los plantel/es y el torneo.')?></p>
		</div>			
	
	</div>
</div>

<div class="col-md-3">
<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
Ver Información Importante
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Importante</h4>
      </div>
      <div class="modal-body">
        	<p><?php echo ('Dentro del cuadro de selección usted puede asociar un plantel o varios planteles al torneo agregando elementos al mismo y guardando los cambios. Así como también, quitando los planteles del cuadro de selección provocará la destrucción de la relación entre el/los plantel/es y el torneo.')?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>




</div>

