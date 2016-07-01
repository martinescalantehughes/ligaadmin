
<div class="users index">
	<div class="page-header">
	<h2><?php echo __('Usuarios'); ?></h2>
	</div>

		 						

	<div class="col-md-12">
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>	
					<th><?php echo $this->Paginator->sort('fullname',"Nombre"); ?></th>
					<th><?php echo $this->Paginator->sort('username',"Nombre de Usuario"); ?></th>
					<th><?php echo $this->Paginator->sort('role',"Rol"); ?></th>
					<th><?php echo $this->Paginator->sort('created',"Creado"); ?></th>
					<th><?php echo $this->Paginator->sort('modified',"Modificado"); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($users as $user): ?>

				

			<tr>
				<td><?php echo h($user['User']['fullname']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		
				
				<td class="actions">
				
				<div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Acción <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $user['User']['id'])); ?></li>
												<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?></li>
												<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']),array('confirm' => __('Estás seguro de eliminar al usuario: '.$user['User']['fullname'].'?'))); ?></li>
												
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
	  	<?php echo $this->Html->link(__('Registrar nuevo usuario'), array('action' => 'add'), array('class'=>'list-group-item')); ?> 	
	</div>
</div>
