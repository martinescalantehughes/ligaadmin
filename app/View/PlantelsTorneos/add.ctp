<div class="plantelsTorneos form">
<?php echo $this->Form->create('PlantelsTorneo'); ?>
	<fieldset>
		<legend><?php echo __('Add Plantels Torneo'); ?></legend>
	<?php
		echo $this->Form->input('plantel_id');
		echo $this->Form->input('torneo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Plantels Torneos'), array('action' => 'index')); ?></li>
	</ul>
</div>
