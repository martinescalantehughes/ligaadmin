<div class="jugadoresPlantels form">
<?php echo $this->Form->create('JugadoresPlantel'); ?>
	<fieldset>
		<legend><?php echo __('Add Jugadores Plantel'); ?></legend>
	<?php
		echo $this->Form->input('jugadore_id');
		echo $this->Form->input('plantel_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jugadores Plantels'), array('action' => 'index')); ?></li>
	</ul>
</div>
