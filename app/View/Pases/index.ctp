<div class="pases index">
	<h2><?php echo __('Pases'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fechadesde'); ?></th>
			<th><?php echo $this->Paginator->sort('fechahasta'); ?></th>
			<th><?php echo $this->Paginator->sort('valormonetario'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('jugadore_id'); ?></th>
			<th><?php echo $this->Paginator->sort('club_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pases as $pase): ?>
	<tr>
		<td><?php echo h($pase['Pase']['id']); ?>&nbsp;</td>
		<td><?php echo h($pase['Pase']['fechadesde']); ?>&nbsp;</td>
		<td><?php echo h($pase['Pase']['fechahasta']); ?>&nbsp;</td>
		<td><?php echo h($pase['Pase']['valormonetario']); ?>&nbsp;</td>
		<td><?php echo h($pase['Pase']['tipo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pase['Jugadore']['id'], array('controller' => 'jugadores', 'action' => 'view', $pase['Jugadore']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pase['Club']['id'], array('controller' => 'clubs', 'action' => 'view', $pase['Club']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pase['Pase']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pase['Pase']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pase['Pase']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pase['Pase']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Pase'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jugadores'), array('controller' => 'jugadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jugadore'), array('controller' => 'jugadores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
