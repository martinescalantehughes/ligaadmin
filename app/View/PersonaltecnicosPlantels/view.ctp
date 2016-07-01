<div class="personaltecnicosPlantels view">
<h2><?php echo __('Personaltecnicos Plantel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personaltecnicosPlantel['PersonaltecnicosPlantel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personaltecnico Id'); ?></dt>
		<dd>
			<?php echo h($personaltecnicosPlantel['PersonaltecnicosPlantel']['personaltecnico_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plantel Id'); ?></dt>
		<dd>
			<?php echo h($personaltecnicosPlantel['PersonaltecnicosPlantel']['plantel_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personaltecnicos Plantel'), array('action' => 'edit', $personaltecnicosPlantel['PersonaltecnicosPlantel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personaltecnicos Plantel'), array('action' => 'delete', $personaltecnicosPlantel['PersonaltecnicosPlantel']['id']), array(), __('Are you sure you want to delete # %s?', $personaltecnicosPlantel['PersonaltecnicosPlantel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personaltecnicos Plantels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personaltecnicos Plantel'), array('action' => 'add')); ?> </li>
	</ul>
</div>
