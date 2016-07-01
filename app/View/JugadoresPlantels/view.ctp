<div class="jugadoresPlantels view">
<h2><?php echo __('Jugadores Plantel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jugadoresPlantel['JugadoresPlantel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jugadore Id'); ?></dt>
		<dd>
			<?php echo h($jugadoresPlantel['JugadoresPlantel']['jugadore_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plantel Id'); ?></dt>
		<dd>
			<?php echo h($jugadoresPlantel['JugadoresPlantel']['plantel_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jugadores Plantel'), array('action' => 'edit', $jugadoresPlantel['JugadoresPlantel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jugadores Plantel'), array('action' => 'delete', $jugadoresPlantel['JugadoresPlantel']['id']), array(), __('Are you sure you want to delete # %s?', $jugadoresPlantel['JugadoresPlantel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jugadores Plantels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jugadores Plantel'), array('action' => 'add')); ?> </li>
	</ul>
</div>
