<div class="jugadoresPlantels form">
<?php echo $this->Form->create('JugadoresPlantel'); ?>
	<fieldset>
		<legend><?php echo __('Edit Jugadores Plantel'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('jugadore_id');
		echo $this->Form->input('plantel_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JugadoresPlantel.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('JugadoresPlantel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jugadores Plantels'), array('action' => 'index')); ?></li>
	</ul>
</div>
