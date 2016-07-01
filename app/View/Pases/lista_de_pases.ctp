<div class="pases index">


	<div class="page-header">
	<h2><?php echo  (($this->Html->link(($club['Club']['nombrelargo']), array('controller'=>'clubs','action' => 'view', $club['Club']['id']))).'  - Pases: Jugadores del Club'); ?></h2>
	</div>

	<div class="col-md-9">
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('Jugadore.apellido',"Nombre"); ?></th>
					<th><?php echo $this->Paginator->sort('Jugadore.dni',"DNI"); ?></th>
					<th><?php echo $this->Paginator->sort('fechadesde',"Fecha desde"); ?></th>
					<th><?php echo $this->Paginator->sort('fechahasta',"Fecha hasta"); ?></th>
					<th><?php echo $this->Paginator->sort('tipo',"Tipo"); ?></th>


					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pases as $pase): ?>
			<tr>
				<td><?php echo h(($pase['Jugadore']['Persona']['apellido']).' '.($pase['Jugadore']['Persona']['nombre'])); ?>&nbsp;</td>
				<td><?php echo h($pase['Jugadore']['Persona']['dni']); ?>&nbsp;</td>
				<td><?php echo h($pase['Pase']['fechadesde']); ?>&nbsp;</td>
				<td><?php echo h($pase['Pase']['fechahasta']); ?>&nbsp;</td>
				<td><?php echo h($pase['Pase']['tipo']); ?>&nbsp;</td>

				<td class="actions">
				
					<div class="btn-group">

												   <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
												  <ul class="dropdown-menu">
													<li><?php echo $this->Html->link(__('Ver Info'), array('controller'=>'jugadores','action' => 'view', $pase['Pase']['jugadore_id'])); ?></li>
													 <li class="divider"></li>
													<li><?php echo $this->Html->link(__('Editar Datos'), array('controller'=>'jugadores','action' => 'edit', $pase['Pase']['jugadore_id'])); ?></li>
													 <li class="divider"></li>
													<li><?php echo $this->Form->postLink(__('Eliminar'), array('controller'=>'jugadores','action' => 'delete', $pase['Pase']['jugadore_id']), array('confirm' => __('Estás seguro de eliminar a %s?', $pase['Jugadore']['Persona']['nombre'].' '.$pase['Jugadore']['Persona']['apellido']))); ?></li>													
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
	  <?php echo $this->Html->link(__('Histórico de Jugadores del Club'), array('controller' => 'pases', 'action' => 'historicopases', $club['Club']['id']), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Lista de clubes'), array('controller' => 'clubs', 'action' => 'index'), array('class'=>'list-group-item')); ?> 

	</div>
	</div>
		
		

</div>