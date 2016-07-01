<div class="clubs index">
	<div class="page-header">
	<h2><?php echo __('Clubes'); ?></h2>
	</div>
	
	<div class="container">
							<?php echo $this->Form->create('Club', array('class' => 'navbar-form navbar-left'));?>
								<div class="input-group">
		                            
		                            <?php echo $this->Form->input('Nombre', array('label'=>false,'class'=>'form-control','style'=>'width:150px;', 'placeholder'=>'Ingrese Nombre...')); ?>                                        
		                        </div>

		                        <div class="input-group">
		                            
		                            <?php echo $this->Form->input('Localidad', array('label'=>false,'class'=>'form-control','style'=>'width:150px;', 'placeholder'=>'Ingrese Localidad...')); ?>                                    
		                        </div>
		                        <div class="input-group">
		                           
		                            <?php echo $this->Form->input('Direccion', array('label'=>false,'class'=>'form-control','style'=>'width:150px;', 'placeholder'=>'Ingrese Direccion...')); ?>                                    
		                        </div>

								<?php 
		 						echo $this->Form->button('Buscar', array('class' => 'btn btn-primary'));
		 						echo $this->Form->end();
		 						?>
	</div>



	<div class="col-md-12">

	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<thead>
	<tr>	

			<th><?php echo $this->Paginator->sort('foto',"Foto"); ?></th>
			<th><?php echo $this->Paginator->sort('nombrelargo',"Nombre"); ?></th>
			<th><?php echo $this->Paginator->sort('cuit',"CUIT"); ?></th>
			<th><?php echo $this->Paginator->sort('paise',"País"); ?></th>
			<th><?php echo $this->Paginator->sort('provincia',"Provincia"); ?></th>
			<th><?php echo $this->Paginator->sort('localidade',"Localidad"); ?></th>
			


			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clubs as $club): ?>
	<tr>
		<td><?php echo $this->Html->image('/files/club/foto/' . $club['Club']['foto_dir'] .'/' .'thumb_' . $club['Club']['foto'])?></td>
		<td><?php echo h($club['Club']['nombrelargo']); ?>&nbsp;</td>
		<td><?php echo h($club['Club']['cuit']); ?>&nbsp;</td>
		<td><?php echo h($club['Paise']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($club['Provincia']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($club['Localidade']['nombre']); ?>&nbsp;</td>
		


		
		<td class="actions">
				
				<div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $club['Club']['id'])); ?></li>
												<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $club['Club']['id'])); ?></li>
												<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $club['Club']['id']),array('confirm' => __('Estás seguro de eliminar el club: '.$club['Club']['nombrelargo'].'?'))); ?></li>
												
											  </ul>
				</div>
			
		</td>



	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} total, empezando por registro {:start}, terminando en {:end}')
	));
	?>	</p>
	
	<div class="paging">
		<nav>
			<ul class="pagination">
				<li><?php echo $this->Paginator->prev('< anterior',array(),null,array('class'=>'prev disabled'));?></li>
				<li><?php echo $this->Paginator->numbers(array('separator'=>''));?></li>
				
				<li><?php echo $this->Paginator->next('siguiente >',array(),null,array('class'=>'disabled'));?></li>
			</ul>

			


		</nav>
	</div>



</div>


<div class="col-md-3">
	<div class="list-group">
	  	<a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  	<?php echo $this->Html->link(__('Registrar nuevo Club'), array('action' => 'add'), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Lista de Torneos'), array('controller'=>'torneos','action' => 'index'), array('class'=>'list-group-item')); ?> 	
	</div>
</div>

