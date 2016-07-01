<div class="tecnicopases index">
	<h2><?php echo __('Tecnicopases'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fechadesde'); ?></th>
			<th><?php echo $this->Paginator->sort('fechahasta'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('personaltecnico_id'); ?></th>
			<th><?php echo $this->Paginator->sort('club_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tecnicopases as $tecnicopase): ?>
	<tr>
		<td><?php echo h($tecnicopase['Tecnicopase']['id']); ?>&nbsp;</td>
		<td><?php echo h($tecnicopase['Tecnicopase']['fechadesde']); ?>&nbsp;</td>
		<td><?php echo h($tecnicopase['Tecnicopase']['fechahasta']); ?>&nbsp;</td>
		<td><?php echo h($tecnicopase['Tecnicopase']['created']); ?>&nbsp;</td>
		<td><?php echo h($tecnicopase['Tecnicopase']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tecnicopase['Personaltecnico']['id'], array('controller' => 'personaltecnicos', 'action' => 'view', $tecnicopase['Personaltecnico']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tecnicopase['Club']['nombrelargo'], array('controller' => 'clubs', 'action' => 'view', $tecnicopase['Club']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tecnicopase['Tecnicopase']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tecnicopase['Tecnicopase']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tecnicopase['Tecnicopase']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tecnicopase['Tecnicopase']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Tecnicopase'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personaltecnicos'), array('controller' => 'personaltecnicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personaltecnico'), array('controller' => 'personaltecnicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
