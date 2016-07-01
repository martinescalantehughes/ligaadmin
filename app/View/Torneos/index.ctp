<div class="torneos index">


	<div class="page-header">
	<h2><?php echo __('Torneos'); ?></h2>
	</div>


	<div class="container">
							<?php echo $this->Form->create('Torneo', array('class' => 'navbar-form navbar-left'));?>
								<div class="input-group">
		                            
		                            <?php echo $this->Form->input('Nombre', array('label'=>false,'class'=>'form-control','style'=>'width:150px;', 'placeholder'=>'Ingrese Nombre...')); ?>                                        
		                        </div>

		                        <?php 
		 						echo $this->Form->button('Buscar', array('class' => 'btn btn-primary'));
		 						echo $this->Form->end();
		 						?>
	</div>



	<div class="col-md-9">
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('nombre',"Nombre"); ?></th>
					<th><?php echo $this->Paginator->sort('fechadesde',"Fecha de Inicio"); ?></th>
					<th><?php echo $this->Paginator->sort('fechahasta',"Fecha de Fin"); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($torneos as $torneo): ?>
			<tr>
				<td><?php echo h($torneo['Torneo']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($torneo['Torneo']['fechadesde']); ?>&nbsp;</td>
				<td><?php echo h($torneo['Torneo']['fechahasta']); ?>&nbsp;</td>
				
				<td class="actions">
				
				<div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $torneo['Torneo']['id'])); ?></li>
												<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $torneo['Torneo']['id'])); ?></li>
												<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $torneo['Torneo']['id']),array('confirm' => __('Estás seguro de eliminar el torneo: '.$torneo['Torneo']['nombre'].'?'))); ?></li>
												
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


	<div class="col-md-3">
	<div class="list-group">
	  	<a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  	<?php echo $this->Html->link(__('Registrar nuevo Torneo'), array('action' => 'add'), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Lista de Torneos'), array('controller'=>'torneos','action' => 'index'), array('class'=>'list-group-item')); ?> 	
	</div>
	</div>

		

</div>


