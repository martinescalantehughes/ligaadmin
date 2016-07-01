<div class="locales form">
<?php echo $this->Form->create('Locale'); ?>
	<fieldset>
		<legend><?php echo __('Edit Locale'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('plantel_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Locale.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Locale.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Plantels'), array('controller' => 'plantels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plantel'), array('controller' => 'plantels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partidos'), array('controller' => 'partidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partido'), array('controller' => 'partidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
