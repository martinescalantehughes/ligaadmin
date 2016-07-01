<div class="dirigentepases index">


	<div class="page-header">
	<h2><?php echo  (($this->Html->link(($club['Club']['nombrelargo']), array('controller'=>'clubs','action' => 'view', $club['Club']['id']))).'  - Dirigentes del Club'); ?></h2>
	</div>

	<div class="col-md-9">
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
					<th><?php echo $this->Paginator->sort('DNI'); ?></th>
					<th><?php echo $this->Paginator->sort('Fecha desde'); ?></th>
					<th><?php echo $this->Paginator->sort('Fecha hasta'); ?></th>
					<th><?php echo $this->Paginator->sort('Cargo'); ?></th>


					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($dirigentepases as $dirigentepase): ?>
			<tr>
				<td><?php echo h(($dirigentepase['Dirigenteclub']['Persona']['apellido']).' '.($dirigentepase['Dirigenteclub']['Persona']['nombre'])); ?>&nbsp;</td>
				<td><?php echo h($dirigentepase['Dirigenteclub']['Persona']['dni']); ?>&nbsp;</td>
				<td><?php echo h($dirigentepase['Dirigentepase']['fechadesde']); ?>&nbsp;</td>
				<td><?php echo h($dirigentepase['Dirigentepase']['fechahasta']); ?>&nbsp;</td>
				<td><?php echo h($dirigentepase['Dirigentepase']['cargo']);?> &nbsp;</td>
				<td class="actions">
				
					<div class="btn-group">

												  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
												  <ul class="dropdown-menu">
													<li><?php echo $this->Html->link(__('Ver Info'), array('controller'=>'dirigenteclubs','action' => 'view', $dirigentepase['Dirigentepase']['dirigenteclub_id'])); ?></li>
													 <li class="divider"></li>
													<li><?php echo $this->Html->link(__('Editar Datos'), array('controller'=>'dirigenteclubs','action' => 'edit', $dirigentepase['Dirigentepase']['dirigenteclub_id'])); ?></li>
													 <li class="divider"></li>
													<li><?php echo $this->Form->postLink(__('Eliminar'), array('controller'=>'dirigenteclubs','action' => 'delete', $dirigentepase['Dirigentepase']['dirigenteclub_id']), array('confirm' => __('Estás seguro de eliminar a %s?', $dirigentepase['Dirigenteclub']['Persona']['nombre'].' '.$dirigentepase['Dirigenteclub']['Persona']['apellido']))); ?></li>													
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
	  <?php echo $this->Html->link(__('Dirigentes del Club'), array('controller' => 'dirigentepases', 'action' => 'lista_de_pases', $club['Club']['id']), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Lista de clubes'), array('controller' => 'clubs', 'action' => 'index'), array('class'=>'list-group-item')); ?> 

	</div>
	</div>
		
		

</div>