<div class="jugadoresPlantels index">
	<h2><?php echo __('Jugadores Plantels'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('jugadore_id'); ?></th>
			<th><?php echo $this->Paginator->sort('plantel_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($jugadoresPlantels as $jugadoresPlantel): ?>
	<tr>
		<td><?php echo h($jugadoresPlantel['JugadoresPlantel']['id']); ?>&nbsp;</td>
		<td><?php echo h($jugadoresPlantel['JugadoresPlantel']['jugadore_id']); ?>&nbsp;</td>
		<td><?php echo h($jugadoresPlantel['JugadoresPlantel']['plantel_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jugadoresPlantel['JugadoresPlantel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jugadoresPlantel['JugadoresPlantel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jugadoresPlantel['JugadoresPlantel']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $jugadoresPlantel['JugadoresPlantel']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Jugadores Plantel'), array('action' => 'add')); ?></li>
	</ul>
</div>
