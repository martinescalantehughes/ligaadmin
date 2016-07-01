<div class="tecnicopases view">
<h2><?php echo __('Tecnicopase'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tecnicopase['Tecnicopase']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechadesde'); ?></dt>
		<dd>
			<?php echo h($tecnicopase['Tecnicopase']['fechadesde']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechahasta'); ?></dt>
		<dd>
			<?php echo h($tecnicopase['Tecnicopase']['fechahasta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tecnicopase['Tecnicopase']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tecnicopase['Tecnicopase']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personaltecnico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tecnicopase['Personaltecnico']['id'], array('controller' => 'personaltecnicos', 'action' => 'view', $tecnicopase['Personaltecnico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Club'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tecnicopase['Club']['nombrelargo'], array('controller' => 'clubs', 'action' => 'view', $tecnicopase['Club']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tecnicopase'), array('action' => 'edit', $tecnicopase['Tecnicopase']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tecnicopase'), array('action' => 'delete', $tecnicopase['Tecnicopase']['id']), array(), __('Are you sure you want to delete # %s?', $tecnicopase['Tecnicopase']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tecnicopases'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tecnicopase'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personaltecnicos'), array('controller' => 'personaltecnicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personaltecnico'), array('controller' => 'personaltecnicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
