<div class="pases view">
<h2><?php echo __('Pase'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pase['Pase']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechadesde'); ?></dt>
		<dd>
			<?php echo h($pase['Pase']['fechadesde']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechahasta'); ?></dt>
		<dd>
			<?php echo h($pase['Pase']['fechahasta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valormonetario'); ?></dt>
		<dd>
			<?php echo h($pase['Pase']['valormonetario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($pase['Pase']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jugadore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pase['Jugadore']['id'], array('controller' => 'jugadores', 'action' => 'view', $pase['Jugadore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Club'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pase['Club']['id'], array('controller' => 'clubs', 'action' => 'view', $pase['Club']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pase'), array('action' => 'edit', $pase['Pase']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pase'), array('action' => 'delete', $pase['Pase']['id']), array(), __('Are you sure you want to delete # %s?', $pase['Pase']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pases'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pase'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jugadores'), array('controller' => 'jugadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jugadore'), array('controller' => 'jugadores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clubs'), array('controller' => 'clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Club'), array('controller' => 'clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
