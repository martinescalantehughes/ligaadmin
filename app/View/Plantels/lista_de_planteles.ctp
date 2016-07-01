<div class="planteles index">


	<div class="page-header">
	<h2><?php echo  (($this->Html->link(($club['Club']['nombrelargo']), array('controller'=>'clubs','action' => 'view', $club['Club']['id']))).': Planteles'); ?></h2>
	</div>

	<div class="col-md-9">
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('nombre'); ?></th>
					<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($plantels as $plantel): ?>
			<tr>
				<td><?php echo h($plantel['Plantel']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($plantel['Plantel']['descripcion']); ?>&nbsp;</td>
				
				<td class="actions">
				
					<div class="btn-group">

												  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
												  <ul class="dropdown-menu">
													<li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $plantel['Plantel']['id'])); ?></li>
													 <li class="divider"></li>
													<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $plantel['Plantel']['id'])); ?></li>
													 <li class="divider"></li>
													<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $plantel['Plantel']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $plantel['Plantel']['id']))); ?></li>													
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
	  <?php echo $this->Html->link(__('Registrar Plantel'), array('controller'=>'clubs','action' => 'registrar_plantel',$club['Club']['id']), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Lista de clubes'), array('controller' => 'clubs', 'action' => 'index'), array('class'=>'list-group-item')); ?> 

	</div>
	</div>
		

</div>