<div class="locales view">
<h2><?php echo __('Locale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locale['Locale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plantel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($locale['Plantel']['nombre'], array('controller' => 'plantels', 'action' => 'view', $locale['Plantel']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locale'), array('action' => 'edit', $locale['Locale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locale'), array('action' => 'delete', $locale['Locale']['id']), array(), __('Are you sure you want to delete # %s?', $locale['Locale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plantels'), array('controller' => 'plantels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plantel'), array('controller' => 'plantels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partidos'), array('controller' => 'partidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partido'), array('controller' => 'partidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Partidos'); ?></h3>
	<?php if (!empty($locale['Partido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Resultado'); ?></th>
		<th><?php echo __('Arbitros'); ?></th>
		<th><?php echo __('Comentarios'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Fecha Id'); ?></th>
		<th><?php echo __('Locale Id'); ?></th>
		<th><?php echo __('Visitante Id'); ?></th>
		<th><?php echo __('Predio Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($locale['Partido'] as $partido): ?>
		<tr>
			<td><?php echo $partido['id']; ?></td>
			<td><?php echo $partido['fecha']; ?></td>
			<td><?php echo $partido['resultado']; ?></td>
			<td><?php echo $partido['arbitros']; ?></td>
			<td><?php echo $partido['comentarios']; ?></td>
			<td><?php echo $partido['estado']; ?></td>
			<td><?php echo $partido['fecha_id']; ?></td>
			<td><?php echo $partido['locale_id']; ?></td>
			<td><?php echo $partido['visitante_id']; ?></td>
			<td><?php echo $partido['predio_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'partidos', 'action' => 'view', $partido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'partidos', 'action' => 'edit', $partido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'partidos', 'action' => 'delete', $partido['id']), array(), __('Are you sure you want to delete # %s?', $partido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Partido'), array('controller' => 'partidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
