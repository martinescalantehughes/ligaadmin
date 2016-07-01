<div class="personalligas index">
	<div class="page-header">
	<h2><?php echo __('Personal de la Liga'); ?></h2>
	</div>
							<div class="container">
							<?php echo $this->Form->create('Personalliga', array('class' => 'navbar-form navbar-left'));?>
								<div class="input-group">
		                            
		                            <?php echo $this->Form->input('Nombre', array('label'=>false,'class'=>'form-control','style'=>'width:150px;', 'placeholder'=>'Ingrese Nombre...')); ?>                                        
		                        </div>

		                        <div class="input-group">
		                            
		                            <?php echo $this->Form->input('Apellido', array('label'=>false,'class'=>'form-control','style'=>'width:150px;', 'placeholder'=>'Ingrese Apellido...')); ?>                                    
		                        </div>
		                        <div class="input-group">
		                           
		                            <?php echo $this->Form->input('Dni', array('label'=>false,'class'=>'form-control','style'=>'width:150px;', 'placeholder'=>'Ingrese DNI...')); ?>                                    
		                        </div>

								<?php 
		 						echo $this->Form->button('Buscar', array('class' => 'btn btn-primary'));
		 						echo $this->Form->end();
		 						?>
		 					</div>

		 						

	<div class="col-md-12">
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('Persona.foto', "Foto"); ?></th>
					<th><?php echo $this->Paginator->sort('Persona.nombre', "Nombres"); ?></th>
					<th><?php echo $this->Paginator->sort('Persona.apellido', "Apellidos"); ?></th>					
					<th><?php echo $this->Paginator->sort('Persona.dni', "DNI"); ?></th>
					<th><?php echo $this->Paginator->sort('Persona.fechanac', "Fecha de Nacimiento"); ?></th>
					<th><?php echo $this->Paginator->sort('Persona.provincia_id', "Provincia"); ?></th>
					<th><?php echo $this->Paginator->sort('Persona.localidade_id', "Localidad"); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($personalligas as $personalliga): ?>

				

			<tr>
				<td><?php echo $this->Html->image('/files/persona/foto/' . $personalliga['Persona']['foto_dir'] .'/' .'thumb_' . $personalliga['Persona']['foto'], array('class'=>'img-circle'))?></td>
				<td><?php echo h($personalliga['Persona']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($personalliga['Persona']['apellido']); ?>&nbsp;</td>				
				<td><?php echo h($personalliga['Persona']['dni']); ?>&nbsp;</td>
				<td><?php echo h($personalliga['Persona']['fechanac']); ?>&nbsp;</td>
				<td><?php echo h($personalliga['Persona']['Provincia']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($personalliga['Persona']['Localidade']['nombre']); ?>&nbsp;</td>
				
				<td class="actions">
				
				<div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Acción <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $personalliga['Personalliga']['id'])); ?></li>
												<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $personalliga['Personalliga']['id'])); ?></li>
												<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $personalliga['Personalliga']['id']),array('confirm' => __('Estás seguro de eliminar al personal: '.$personalliga['Persona']['nombre'].'?'))); ?></li>
												
											  </ul>
				</div>
			
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} total, empezando por registro {:start}, terminando en {:end}')
	));
	?>	</p>

	<div class="paging">
		<nav>
			<ul class="pagination">
				<li><?php echo $this->Paginator->prev('< anterior',array(),null,array('class'=>'prev disabled'));?></li>
				<li><?php echo $this->Paginator->numbers(array('separator'=>''));?></li>
				
				<li><?php echo $this->Paginator->next('siguiente >',array(),null,array('class'=>'disabled'));?></li>
			</ul>
		</nav>
	</div>

	</div>









</div>

<div class="col-md-3">
	<div class="list-group">
	  	<a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  	<?php echo $this->Html->link(__('Lista de personas'), array('controller' => 'personas', 'action' => 'index'), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Registrar nuevo personal'), array('action' => 'add'), array('class'=>'list-group-item')); ?> 	
	</div>
</div>

