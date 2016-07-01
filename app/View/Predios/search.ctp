<?php if($ajax != 1): ?>

	<h1>Buscar Predio</h1>
	<br>
	<div class="row">
		<?php echo $this->Form->create('Predio',array('type'=>'GET')) ?>
		<div class="col-sm-4">
			<?php echo $this->Form->input('search',array('label'=>false, 'div'=>false,'class'=>'form-control','autocomplete'=>'off','value'=>$search)) ?>
		</div>
		<div class="col-sm-3">
			<?php echo $this->Form->button('Buscar',array('div'=>false,'class'=>'btn btn-primary'))?>
		</div>
		<?php echo $this->Form->end(); ?>

	</div>
	</br></br>

<?php endif; ?>

<?php if(!empty($search)): ?>

	<?php if(!empty($predios)): ?>

	<div class="row">
	<div class="col-sm-3">
	<?php foreach ($predios as $predio): ?>
		
			<?php echo $this->Html->link($predio['Predio']['nombre'],array('action'=>'view', $predio['Predio']['id']));?>
			</br>
			</br>

		
	<?php endforeach; ?>
	</div>
	</div>

	<?php else: ?>
	<h3>No se encontró el predio que busca :-(</h3>

	<?php endif; ?>

<?php endif; ?>