<div class="ligachaquenias index">
	<h2><?php echo __('Ligachaquenias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('cuit'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('mail'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ligachaquenias as $ligachaquenia): ?>
	<tr>
		<td><?php echo h($ligachaquenia['Ligachaquenia']['id']); ?>&nbsp;</td>
		<td><?php echo h($ligachaquenia['Ligachaquenia']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($ligachaquenia['Ligachaquenia']['cuit']); ?>&nbsp;</td>
		<td><?php echo h($ligachaquenia['Ligachaquenia']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($ligachaquenia['Ligachaquenia']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($ligachaquenia['Ligachaquenia']['mail']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ligachaquenia['Ligachaquenia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ligachaquenia['Ligachaquenia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ligachaquenia['Ligachaquenia']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ligachaquenia['Ligachaquenia']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Ligachaquenia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dirigenteclubs'), array('controller' => 'dirigenteclubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dirigenteclub'), array('controller' => 'dirigenteclubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jugadores'), array('controller' => 'jugadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jugadore'), array('controller' => 'jugadores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personalligas'), array('controller' => 'personalligas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personalliga'), array('controller' => 'personalligas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personaltecnicos'), array('controller' => 'personaltecnicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personaltecnico'), array('controller' => 'personaltecnicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
