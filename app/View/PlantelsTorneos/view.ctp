<div class="plantelsTorneos view">
<h2><?php echo __('Plantels Torneo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plantelsTorneo['PlantelsTorneo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plantel Id'); ?></dt>
		<dd>
			<?php echo h($plantelsTorneo['PlantelsTorneo']['plantel_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Torneo Id'); ?></dt>
		<dd>
			<?php echo h($plantelsTorneo['PlantelsTorneo']['torneo_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plantels Torneo'), array('action' => 'edit', $plantelsTorneo['PlantelsTorneo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plantels Torneo'), array('action' => 'delete', $plantelsTorneo['PlantelsTorneo']['id']), array(), __('Are you sure you want to delete # %s?', $plantelsTorneo['PlantelsTorneo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plantels Torneos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plantels Torneo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
