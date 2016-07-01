<div class="ligachaquenias view">
<h2><?php echo __('Ligachaquenia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ligachaquenia['Ligachaquenia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($ligachaquenia['Ligachaquenia']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuit'); ?></dt>
		<dd>
			<?php echo h($ligachaquenia['Ligachaquenia']['cuit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($ligachaquenia['Ligachaquenia']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($ligachaquenia['Ligachaquenia']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($ligachaquenia['Ligachaquenia']['mail']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ligachaquenia'), array('action' => 'edit', $ligachaquenia['Ligachaquenia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ligachaquenia'), array('action' => 'delete', $ligachaquenia['Ligachaquenia']['id']), array(), __('Are you sure you want to delete # %s?', $ligachaquenia['Ligachaquenia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ligachaquenias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ligachaquenia'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Dirigenteclubs'); ?></h3>
	<?php if (!empty($ligachaquenia['Dirigenteclub'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fechaasuncion'); ?></th>
		<th><?php echo __('Fechafin'); ?></th>
		<th><?php echo __('Cago'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Ligachaquenia Id'); ?></th>
		<th><?php echo __('Fechaafliliacion'); ?></th>
		<th><?php echo __('Fecharenovacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ligachaquenia['Dirigenteclub'] as $dirigenteclub): ?>
		<tr>
			<td><?php echo $dirigenteclub['id']; ?></td>
			<td><?php echo $dirigenteclub['fechaasuncion']; ?></td>
			<td><?php echo $dirigenteclub['fechafin']; ?></td>
			<td><?php echo $dirigenteclub['cago']; ?></td>
			<td><?php echo $dirigenteclub['persona_id']; ?></td>
			<td><?php echo $dirigenteclub['ligachaquenia_id']; ?></td>
			<td><?php echo $dirigenteclub['fechaafliliacion']; ?></td>
			<td><?php echo $dirigenteclub['fecharenovacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dirigenteclubs', 'action' => 'view', $dirigenteclub['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dirigenteclubs', 'action' => 'edit', $dirigenteclub['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dirigenteclubs', 'action' => 'delete', $dirigenteclub['id']), array(), __('Are you sure you want to delete # %s?', $dirigenteclub['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dirigenteclub'), array('controller' => 'dirigenteclubs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Jugadores'); ?></h3>
	<?php if (!empty($ligachaquenia['Jugadore'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Apodo'); ?></th>
		<th><?php echo __('Paisnacimiento'); ?></th>
		<th><?php echo __('Provincianacimiento'); ?></th>
		<th><?php echo __('Localidadnacimiento'); ?></th>
		<th><?php echo __('Nombrepadre'); ?></th>
		<th><?php echo __('Nombremadre'); ?></th>
		<th><?php echo __('Posicionjuego'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Nivel'); ?></th>
		<th><?php echo __('Region'); ?></th>
		<th><?php echo __('Estatura'); ?></th>
		<th><?php echo __('Peso'); ?></th>
		<th><?php echo __('Fechaafiliacion'); ?></th>
		<th><?php echo __('Fecharenovacion'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Ligachaquenia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ligachaquenia['Jugadore'] as $jugadore): ?>
		<tr>
			<td><?php echo $jugadore['id']; ?></td>
			<td><?php echo $jugadore['apodo']; ?></td>
			<td><?php echo $jugadore['paisnacimiento']; ?></td>
			<td><?php echo $jugadore['provincianacimiento']; ?></td>
			<td><?php echo $jugadore['localidadnacimiento']; ?></td>
			<td><?php echo $jugadore['nombrepadre']; ?></td>
			<td><?php echo $jugadore['nombremadre']; ?></td>
			<td><?php echo $jugadore['posicionjuego']; ?></td>
			<td><?php echo $jugadore['estado']; ?></td>
			<td><?php echo $jugadore['tipo']; ?></td>
			<td><?php echo $jugadore['nivel']; ?></td>
			<td><?php echo $jugadore['region']; ?></td>
			<td><?php echo $jugadore['estatura']; ?></td>
			<td><?php echo $jugadore['peso']; ?></td>
			<td><?php echo $jugadore['fechaafiliacion']; ?></td>
			<td><?php echo $jugadore['fecharenovacion']; ?></td>
			<td><?php echo $jugadore['persona_id']; ?></td>
			<td><?php echo $jugadore['ligachaquenia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jugadores', 'action' => 'view', $jugadore['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jugadores', 'action' => 'edit', $jugadore['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jugadores', 'action' => 'delete', $jugadore['id']), array(), __('Are you sure you want to delete # %s?', $jugadore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Jugadore'), array('controller' => 'jugadores', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Personalligas'); ?></h3>
	<?php if (!empty($ligachaquenia['Personalliga'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo __('Antiguedad'); ?></th>
		<th><?php echo __('Fechaingreso'); ?></th>
		<th><?php echo __('Fechaegreso'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Ligachaquenia Id'); ?></th>
		<th><?php echo __('Fecharenovacion'); ?></th>
		<th><?php echo __('Fechaafliliacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ligachaquenia['Personalliga'] as $personalliga): ?>
		<tr>
			<td><?php echo $personalliga['id']; ?></td>
			<td><?php echo $personalliga['cargo']; ?></td>
			<td><?php echo $personalliga['antiguedad']; ?></td>
			<td><?php echo $personalliga['fechaingreso']; ?></td>
			<td><?php echo $personalliga['fechaegreso']; ?></td>
			<td><?php echo $personalliga['persona_id']; ?></td>
			<td><?php echo $personalliga['ligachaquenia_id']; ?></td>
			<td><?php echo $personalliga['fecharenovacion']; ?></td>
			<td><?php echo $personalliga['fechaafliliacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personalligas', 'action' => 'view', $personalliga['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personalligas', 'action' => 'edit', $personalliga['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personalligas', 'action' => 'delete', $personalliga['id']), array(), __('Are you sure you want to delete # %s?', $personalliga['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Personalliga'), array('controller' => 'personalligas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Personaltecnicos'); ?></h3>
	<?php if (!empty($ligachaquenia['Personaltecnico'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo __('Funcion'); ?></th>
		<th><?php echo __('Fechaafiliacion'); ?></th>
		<th><?php echo __('Fecharenovacion'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Ligachaquenia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ligachaquenia['Personaltecnico'] as $personaltecnico): ?>
		<tr>
			<td><?php echo $personaltecnico['id']; ?></td>
			<td><?php echo $personaltecnico['cargo']; ?></td>
			<td><?php echo $personaltecnico['funcion']; ?></td>
			<td><?php echo $personaltecnico['fechaafiliacion']; ?></td>
			<td><?php echo $personaltecnico['fecharenovacion']; ?></td>
			<td><?php echo $personaltecnico['persona_id']; ?></td>
			<td><?php echo $personaltecnico['ligachaquenia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personaltecnicos', 'action' => 'view', $personaltecnico['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personaltecnicos', 'action' => 'edit', $personaltecnico['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personaltecnicos', 'action' => 'delete', $personaltecnico['id']), array(), __('Are you sure you want to delete # %s?', $personaltecnico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Personaltecnico'), array('controller' => 'personaltecnicos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
