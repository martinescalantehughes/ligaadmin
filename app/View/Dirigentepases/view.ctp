<div class="dirigentepases view">
<h2><?php echo __('Dirigentepase'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dirigentepase['Dirigentepase']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechadesde'); ?></dt>
		<dd>
			<?php echo h($dirigentepase['Dirigentepase']['fechadesde']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechahasta'); ?></dt>
		<dd>
			<?php echo h($dirigentepase['Dirigentepase']['fechahasta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dirigentepase['Dirigentepase']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dirigentepase['Dirigentepase']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dirigenteclub'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dirigentepase['Dirigenteclub']['id'], array('controller' => 'dirigenteclubs', 'action' => 'view', $dirigentepase['Dirigenteclub']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Club'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dirigentepase['Club']['nombrelargo'], array('controller' => 'clubs', 'action' => 'view', $dirigentepase['Club']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dirigentepase'), array('action' => 'edit', $dirigentepase['Dirigentepase']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dirigentepase'), array('action' => 'delete', $dirigentepase['Dirigentepase']['id']), array(), __('Are you sure you want to delete # %s?', $dirigentepase['Dirigentepase']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dirigentepases'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dirigentepase'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dirigenteclubs'), array('controller' => 'dirigenteclubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dirigenteclub'), array('controller' => 'dirigenteclubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
