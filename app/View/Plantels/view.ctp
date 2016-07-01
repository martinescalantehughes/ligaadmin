
<div class="plantels view">
            <div class="col-md-12">
                <div class="panel panel-default">


                    <div class="panel-heading">
                       <h4><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><?php echo __(' Información del Plantel'); ?></h4>
                    </div>


                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-12">
                                <dl class="dl-horizontal">
									
									<dt><?php echo __('Nombre'); ?></dt>
									<dd>
										<?php echo h($plantel['Plantel']['nombre']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Descripción'); ?></dt>
									<dd>
										<?php echo h($plantel['Plantel']['descripcion']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Club'); ?></dt>
									<dd>
										<?php echo $this->Html->link($plantel['Club']['nombrelargo'], array('controller' => 'clubs', 'action' => 'view', $plantel['Club']['id'])); ?>
										&nbsp;
									</dd>

								</dl>
							</div>
						</div>
					</div>

					<div class="panel-footer">
	                       		
							
                            <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-edit']).' Editar',['action' => 'edit', $plantel['Plantel']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                            ?>

                            
                    </div>


				</div>
			</div>

            <div class="jugadores asociadas">
               	<div class="col-md-12">
                   	
                   		 <div class="panel panel-default">
		                    <div class="panel-heading">
		                       <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo __(' Jugadores asociados'); ?></h4>
		                    </div>


		                    <div class="panel-body">
									<?php if (!empty($plantel['Jugadore'])): ?>
									<table cellpadding = "0" cellspacing = "0" class="table table-hover">
									<tr>
										<th><?php echo __('Nombre y Apellido'); ?></th>
										<th><?php echo __('Foto'); ?></th>
										<th><?php echo __('DNI'); ?></th>
										<th><?php echo __('Fecha de Nacimiento'); ?></th>
										<th><?php echo __('Posición de juego'); ?></th>
										
																		
										<th class="actions"><?php echo __('Acciones'); ?></th>

									</tr>
									<?php foreach ($plantel['Jugadore'] as $jugadore): ?>
										<tr>
											<td><?php echo h(($jugadore['Persona']['nombre']).' '.($jugadore['Persona']['apellido'])); ?>&nbsp;</td>
											<td><?php echo $this->Html->image('/files/persona/foto/' . $jugadore['Persona']['foto_dir'] .'/' .'thumb_' . $jugadore['Persona']['foto'])?></td>
											<td><?php echo h($jugadore['Persona']['dni']); ?>&nbsp;</td>
											<td><?php echo h($jugadore['Persona']['fechanac']); ?>&nbsp;</td>								
											<td><?php echo $jugadore['posicionjuego']; ?></td>					
											
											
											<td class="actions">
												<div class="btn-group">
													<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
													 <ul class="dropdown-menu">
														<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'jugadores', 'action' => 'view', $jugadore['id'])); ?></li>
														<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'jugadores', 'action' => 'edit', $jugadore['id'])); ?></li>
														<li><?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'jugadores', 'action' => 'delete', $jugadore['id']), array(), __('Are you sure you want to delete # %s?', $jugadore['id'])); ?></li>				
												
											 		 </ul>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>
									</table>
								<?php else: ?>
									<?php echo __('No existen jugadores asociados al plantel'); ?>

								<?php endif; ?>
						</div>

						<div class="panel-footer">
                       		
                           

                            <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-link']).' Asociar jugador',['action' => 'asociarjugador', $plantel['Plantel']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                            ?>


            			</div>

					</div>
			
			</div>
		</div>


		<div class="personaltecnicos asociados">
               	<div class="col-md-12">
                   	<div class="related">
                   		 <div class="panel panel-default">
		                    <div class="panel-heading">
		                       <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo __(' Personal Técnico asociado'); ?></h4>
		                    </div>


		                    <div class="panel-body">
									<?php if (!empty($plantel['Personaltecnico'])): ?>
									<table cellpadding = "0" cellspacing = "0" class="table table-hover">
									<tr>
										<th><?php echo __('Nombre y Apellido'); ?></th>
										<th><?php echo __('Foto'); ?></th>
										<th><?php echo __('DNI'); ?></th>
										<th><?php echo __('Fecha de Nacimiento'); ?></th>
									
										
										<th class="actions"><?php echo __('Acciones'); ?></th>
									</tr>
									<?php foreach ($plantel['Personaltecnico'] as $personaltecnico): ?>
										<tr>
										
											<td><?php echo h(($personaltecnico['Persona']['nombre']).' '.($personaltecnico['Persona']['apellido'])); ?>&nbsp;</td>
											<td><?php echo $this->Html->image('/files/persona/foto/' . $personaltecnico['Persona']['foto_dir'] .'/' .'thumb_' . $personaltecnico['Persona']['foto'])?></td>
											<td><?php echo h($personaltecnico['Persona']['dni']); ?>&nbsp;</td>
											<td><?php echo h($personaltecnico['Persona']['fechanac']); ?>&nbsp;</td>
											
											

											<td class="actions">
												<div class="btn-group">
													<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
													 <ul class="dropdown-menu">
														<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'personaltecnicos', 'action' => 'view', $personaltecnico['id'])); ?></li>
														<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'personaltecnicos', 'action' => 'edit', $personaltecnico['id'])); ?></li>
														<li><?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'personaltecnicos', 'action' => 'delete', $personaltecnico['id']), array(), __('Are you sure you want to delete # %s?', $personaltecnico['id'])); ?></li>


				
				
												
											 		 </ul>
												</div>
												
											</td>
										</tr>
									<?php endforeach; ?>
									</table>
									<?php else: ?>
												<?php echo __('No hay Personal Técnico asociado al plantel'); ?>

									<?php endif; ?>
							</div>

							<div class="panel-footer">
                       		
                            <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-link']).' Asociar Personal Técnico',['action' => 'asociartecnico', $plantel['Plantel']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                            ?>

            			</div>
						</div>
					</div>
				</div>
			</div>

			<div class="torneos asociados">
               	<div class="col-md-12">
                   	<div class="related">
                   		 <div class="panel panel-default">
		                    <div class="panel-heading">
		                       <h4><span class="glyphicon glyphicon-queen" aria-hidden="true"></span><?php echo __(' Torneos en los que participa el Plantel'); ?></h4>
		                    </div>


		                    <div class="panel-body">
									<?php if (!empty($plantel['Torneo'])): ?>
									<table cellpadding = "0" cellspacing = "0" class="table table-hover">
									<tr>
										
										
										<th><?php echo __('Nombre'); ?></th>
										<th><?php echo __('Fecha de Inicio'); ?></th>
										<th><?php echo __('Fecha de Fin'); ?></th>
										
										
										
										<th class="actions"><?php echo __('Acciones'); ?></th>
									</tr>
									<?php foreach ($plantel['Torneo'] as $torneo): ?>
										<tr>
										
											
											
											<td><?php echo $torneo['nombre']; ?></td>
											<td><?php echo $torneo['fechadesde']; ?></td>
											<td><?php echo $torneo['fechahasta']; ?></td>
											

											<td class="actions">
												<div class="btn-group">
													<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
													 <ul class="dropdown-menu">
														<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'torneos', 'action' => 'view', $torneo['id'])); ?></li>
														<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'torneos', 'action' => 'edit', $torneo['id'])); ?></li>
														<li><?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'torneos', 'action' => 'delete', $torneo['id']), array(), __('Are you sure you want to delete # %s?', $torneo['id'])); ?></li>
												
											 		 </ul>
												</div>
												
											</td>
										</tr>
									<?php endforeach; ?>
									</table>
									<?php else: ?>
												<?php echo __('El plantel no participa en ningun torneo actualmente'); ?>

									<?php endif; ?>
							</div>

							
						</div>
					</div>
				</div>
			</div>


</div>

