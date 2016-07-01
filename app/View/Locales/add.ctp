<div class="locales form">
<?php echo $this->Form->create('Locale'); ?>
	<fieldset>
		<legend><?php echo __('Add Locale'); ?></legend>
	<?php
		echo $this->Form->input('plantel_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Locales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Plantels'), array('controller' => 'plantels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plantel'), array('controller' => 'plantels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partidos'), array('controller' => 'partidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partido'), array('controller' => 'partidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
