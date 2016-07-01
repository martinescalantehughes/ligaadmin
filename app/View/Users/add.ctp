<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Registrar Usuario'); ?></legend>
	<?php
		
		echo $this->Form->input('fullname', array('label'=>'Nombres y Apellidos' ,'class'=>'form-control', 'placeholder'=>'Ingrese Nombres y Apellidos...'));
		echo $this->Form->input('username', array('label'=>'Nombre de usuario' ,'class'=>'form-control', 'placeholder'=>'Ingrese Nombre de Usuario...'));
		echo $this->Form->input('password', array('label'=>'Password' ,'class'=>'form-control', 'type'=>'password','placeholder'=>'Ingrese su password y no lo olvide...'));
		echo $this->Form->input('role', array(
								    'type' => 'select', 'class'=>'form-control','style'=>'width:200px;',
								    'options' => array('admin' => 'Administrador', 'user' => 'Usuario'), 
								    'selected' => 'Usuario'
								));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
