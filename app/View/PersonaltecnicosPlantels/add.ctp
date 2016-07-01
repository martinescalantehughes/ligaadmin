<div class="personaltecnicosPlantels form">
<?php echo $this->Form->create('PersonaltecnicosPlantel'); ?>
	<fieldset>
		<legend><?php echo __('Add Personaltecnicos Plantel'); ?></legend>
	<?php
		echo $this->Form->input('personaltecnico_id');
		echo $this->Form->input('plantel_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Personaltecnicos Plantels'), array('action' => 'index')); ?></li>
	</ul>
</div>
