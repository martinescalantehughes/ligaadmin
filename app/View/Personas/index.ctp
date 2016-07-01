<div class="personas index">
	<div class="page-header">
	<h2><?php echo __('Buscador de Datos Personales'); ?></h2>
	</div>

 							<div class="container">
							<?php echo $this->Form->create('Persona', array('class' => 'navbar-form navbar-left'));?>
								<div class="input-group">
		                            
		                            <?php echo $this->Form->input('Nombre', array('label'=>false,'class'=>'form-control','style'=>'width:150px;', 'placeholder'=>'Ingrese Nombre...')); ?>                                        
		                        </div>

		                        <div class="input-group">
		                            
		                            <?php echo $this->Form->input('Apellido', array('label'=>false,'class'=>'form-control','style'=>'width:150px;', 'placeholder'=>'Ingrese Apellido...')); ?>                                    
		                        </div>
		                        <div class="input-group">
		                           
		                            <?php echo $this->Form->input('Dni', array('label'=>false,'class'=>'form-control','style'=>'width:150px;', 'placeholder'=>'Ingrese DNI...')); ?>                                    
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
				<th><?php echo $this->Paginator->sort('dni',"DNI"); ?></th>
				<th><?php echo $this->Paginator->sort('cuil',"CUIL"); ?></th>
				<th><?php echo $this->Paginator->sort('nombre',"Nombre"); ?></th>
				<th><?php echo $this->Paginator->sort('apellido',"Apellido"); ?></th>
				<th><?php echo $this->Paginator->sort('p_personaltecnico',"Personal Tecnico"); ?></th>
				<th><?php echo $this->Paginator->sort('p_personalliga',"Personal Liga"); ?></th>
				<th><?php echo $this->Paginator->sort('p_dirigente',"Dirigente"); ?></th>
				<th><?php echo $this->Paginator->sort('p_jugador',"Jugador"); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
	</thead>

	<tbody>
	
	<?php foreach ($personas as $persona): ?>
	<tr>
	
		
		<td><?php echo h($persona['Persona']['dni']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['cuil']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['apellido']); ?>&nbsp;</td>
	
		<td><?php if ((h($persona['Persona']['p_personaltecnico']))=='1') {
			echo $this->html->image("like.png", array('height'=>'20', 'width'=>'20'));
			} else {
				echo $this->html->image("dislike.png", array('height'=>'25', 'width'=>'25'));
			} ?>&nbsp;</td>
		<td><?php if ((h($persona['Persona']['p_personalliga']))=='1') {
			echo $this->html->image("like.png", array('height'=>'20', 'width'=>'20'));
			} else {
				echo $this->html->image("dislike.png", array('height'=>'25', 'width'=>'25'));
		}  ?>&nbsp;</td>
		<td><?php if ((h($persona['Persona']['p_dirigente']))=='1') {
			echo $this->html->image("like.png", array('height'=>'20', 'width'=>'20'));
			} else {
				echo $this->html->image("dislike.png", array('height'=>'25', 'width'=>'25'));
		}  ?>&nbsp;</td>
		<td><?php if ((h($persona['Persona']['p_jugador']))=='1') {
			echo $this->html->image("like.png", array('height'=>'20', 'width'=>'20'));
			} else {
				echo $this->html->image("dislike.png", array('height'=>'25', 'width'=>'25'));
		}  ?>&nbsp;</td>
		<td class="actions">


		<div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><?php 
												if ((h($persona['Persona']['p_personaltecnico']))!='1') {
													echo $this->Html->link('Registar personal técnico', array('controller'=>'personaltecnicos','action' => 'add2', $persona['Persona']['id']));
												}
												
												?></li>
												<li><?php 
												if ((h($persona['Persona']['p_personalliga']))!='1') {
													echo $this->Html->link('Registar personal liga', array('controller'=>'personalligas','action' => 'add2', $persona['Persona']['id']));
												}
												
												?></li>
												<li><?php 
												if ((h($persona['Persona']['p_dirigente']))!='1') {
													echo $this->Html->link('Registar dirigente', array('controller'=>'dirigenteclubs','action' => 'add2', $persona['Persona']['id']));
												}
												
												?></li>
												<li><?php 
												if ((h($persona['Persona']['p_jugador']))!='1') {
													echo $this->Html->link('Registar jugador', array('controller'=>'jugadores','action' => 'add2', $persona['Persona']['id']));
												}
												
												?></li>
																					
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
</div>


<div class="col-md-3">
	<div class="list-group">
	  	<a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  	<?php echo $this->Html->link(__('Lista de dirigentes'), array('controller' => 'dirigenteclubs', 'action' => 'index'), array('class'=>'list-group-item')); ?>
	  	<?php echo $this->Html->link(__('Lista de jugadores'), array('controller' => 'jugadores', 'action' => 'index'), array('class'=>'list-group-item')); ?>
	  	<?php echo $this->Html->link(__('Lista de personal tecnico'), array('controller' => 'personaltecnicos', 'action' => 'index'), array('class'=>'list-group-item')); ?>
	  	<?php echo $this->Html->link(__('Lista de personal de la liga'), array('controller' => 'personalligas', 'action' => 'index'), array('class'=>'list-group-item')); ?>
	  	<?php echo $this->Html->link(__('Borrar todos los registros personales'), array('action' => 'borrarTodo'), array('class'=>'list-group-item')); ?>
		
	</div>
</div>
