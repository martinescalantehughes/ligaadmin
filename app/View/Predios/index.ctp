
<div class="predios index">


	<div class="page-header">
	<h2><?php echo __('Predios'); ?></h2>
	</div>

		<?php echo $this->Form->create('Predio', array('type' => 'GET', 'class' => 'navbar-form navbar-left', 'url' => array('controller' => 'predios', 'action' => 'search'))); ?>
        <div class="form-group">
            <?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'id' => 's', 'class' => 'form-control s', 'autocomplete' => 'off', 'placeholder' => 'Buscar predio...')); ?>
        </div>
        <?php echo $this->Form->button('Buscar', array('div' => false, 'class' => 'btn btn-primary')); ?>
         <?php echo $this->Form->end(); ?>
	

	<div class="col-md-12">
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('nombre',"Nombre"); ?></th>
					<th><?php echo $this->Paginator->sort('direccion',"Dirección"); ?></th>
					<th><?php echo $this->Paginator->sort('provincia_id','Provincia'); ?></th>					
					<th><?php echo $this->Paginator->sort('localidade_id','Localidad'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($predios as $predio): ?>
			<tr>
				<td><?php echo h($predio['Predio']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($predio['Predio']['direccion']); ?>&nbsp;</td>
				
				<td><?php echo h($predio['Provincia']['nombre']); ?>&nbsp;</td>
				
				<td><?php echo h($predio['Localidade']['nombre']); ?>&nbsp;</td>
				
				<td class="actions">
				
				<div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Acción <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $predio['Predio']['id'])); ?></li>
												<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $predio['Predio']['id'])); ?></li>
												<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $predio['Predio']['id']),array('confirm' => __('Estás seguro de eliminar el predio: '.$predio['Predio']['nombre'].'?'))); ?></li>
												
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
	  	<?php echo $this->Html->link(__('Registrar nuevo predio'), array('action' => 'add'), array('class'=>'list-group-item')); ?> 	
	</div>
	</div>
		

</div>


