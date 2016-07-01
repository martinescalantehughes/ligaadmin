<div class="plantelsTorneos form">
<?php echo $this->Form->create('PlantelsTorneo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Plantels Torneo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('plantel_id');
		echo $this->Form->input('torneo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PlantelsTorneo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PlantelsTorneo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Plantels Torneos'), array('action' => 'index')); ?></li>
	</ul>
</div>
