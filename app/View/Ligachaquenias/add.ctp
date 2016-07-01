<div class="ligachaquenias form">
<?php echo $this->Form->create('Ligachaquenia'); ?>
	<fieldset>
		<legend><?php echo __('Add Ligachaquenia'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('cuit');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('mail');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ligachaquenias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dirigenteclubs'), array('controller' => 'dirigenteclubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dirigenteclub'), array('controller' => 'dirigenteclubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jugadores'), array('controller' => 'jugadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jugadore'), array('controller' => 'jugadores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personalligas'), array('controller' => 'personalligas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personalliga'), array('controller' => 'personalligas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personaltecnicos'), array('controller' => 'personaltecnicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personaltecnico'), array('controller' => 'personaltecnicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
