<div class="torneos view">
            <div class="col-md-12">
                <div class="panel panel-default">


                    <div class="panel-heading">
                       <h4><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><?php echo __(' Información del Torneo'); ?></h4>
                    </div>


                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-12">
                                <dl class="dl-horizontal">
									
									<dt><?php echo __('Nombre'); ?></dt>
									<dd>
										<?php echo h($torneo['Torneo']['nombre']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Descripcion'); ?></dt>
									<dd>
										<?php echo h($torneo['Torneo']['descripcion']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Fecha de Inicio'); ?></dt>
									<dd>
										<?php echo h($torneo['Torneo']['fechadesde']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Fecha de Culminación'); ?></dt>
									<dd>
										<?php echo h($torneo['Torneo']['fechahasta']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Premio'); ?></dt>
									<dd>
										<?php echo h($torneo['Torneo']['premio']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Ganador'); ?></dt>
									<dd>
										<?php echo h($torneo['Torneo']['ganador']); ?>
										&nbsp;
									</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="panel-footer">
	                      
                             <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-edit']).' Editar',['action' => 'edit', $torneo['Torneo']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);?>
                            
                    </div>


				</div>
			</div>

            <div class="fechas asociadas">
               	<div class="col-md-12">
                   	
                   		 <div class="panel panel-default">
		                    <div class="panel-heading">
		                       <h4><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><?php echo __(' Fechas asociadas'); ?></h4>
		                    </div>


		                    <div class="panel-body">
									<?php if (!empty($torneo['Fecha'])): ?>
									<table cellpadding = "0" cellspacing = "0" class="table table-hover">
									<tr>
										<th><?php echo __('Número'); ?></th>
										<th><?php echo __('Inicio'); ?></th>
										<th><?php echo __('Fin'); ?></th>
										
									
										<th class="actions"><?php echo __('Actions'); ?></th>
									</tr>
									<?php foreach ($torneo['Fecha'] as $fecha): ?>
										<tr>
											<td><?php echo $fecha['numerofecha']; ?></td>
											<td><?php echo $fecha['fechadesde']; ?></td>
											<td><?php echo $fecha['fechahasta']; ?></td>
											
											
											<td class="actions">
												<div class="btn-group">
													<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
													 <ul class="dropdown-menu">
														<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'fechas', 'action' => 'view', $fecha['id'])); ?></li>
														<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'fechas', 'action' => 'edit', $fecha['id'])); ?></li>
														<li><?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'fechas', 'action' => 'delete', $fecha['id']), array(), __('Estás seguro de eliminar # %s?', $fecha['id'])); ?></li>
												
											 		 </ul>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>
									</table>
								<?php else: ?>
									<?php echo __('No existen fechas asociadas al torneo'); ?>

								<?php endif; ?>
						</div>

						<div class="panel-footer">
                       		
                             <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-link']).' Asociar una Fecha al Torneo',['action' => 'asociarfecha', $torneo['Torneo']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);?>

            			</div>

					</div>
			
			</div>
		</div>


		<div class="planteles asociados">
               	<div class="col-md-12">
                   	<div class="related">
                   		 <div class="panel panel-default">
		                    <div class="panel-heading">
		                       <h4><span class="glyphicon glyphicon-file" aria-hidden="true"></span><?php echo __(' Clubes Inscriptos'); ?></h4>
		                    </div>


		                    <div class="panel-body">
									
									<?php if (!empty($torneo['Plantel'])): ?>
									<table cellpadding = "0" cellspacing = "0" class="table table-hover">
									<tr>
										<th><?php echo ('Foto'); ?></th>
										<th><?php echo ('Nombre'); ?></th>
										<th class="actions"><?php echo __('Actions'); ?></th>
									</tr>
									<?php foreach ($torneo['Plantel'] as $plantel): ?>
										<tr>
											<td><?php echo $this->Html->image('/files/club/foto/' . $plantel['Club']['foto_dir'] .'/' .'thumb_' . $plantel['Club']['foto'])?></td>
											<td><?php echo ($plantel['Club']['nombrelargo'].' - '.$plantel['nombre']); ?></td>
																			
											<td class="actions">
												<div class="btn-group">
													<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
													 <ul class="dropdown-menu">
														<li><?php echo $this->Html->link(__('View'), array('controller' => 'plantels', 'action' => 'view', $plantel['id'])); ?></li>
														<li><?php echo $this->Html->link(__('Edit'), array('controller' => 'plantels', 'action' => 'edit', $plantel['id'])); ?></li>
														<li><?php echo $this->Form->postLink(__('Delete'), array('controller' => 'plantels', 'action' => 'delete', $plantel['id']), array(), __('Estás segurp de eliminar # %s?', $plantel['id'])); ?></li>
												
											 		 </ul>
												</div>
												
											</td>
										</tr>
									<?php endforeach; ?>
									</table>
									<?php else: ?>
												<?php echo __('No existen planteles asociados al torneo'); ?>

									<?php endif; ?>
							</div>

							<div class="panel-footer">
                       		
                            
                            <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-link']).' Asociar un Plantel al Torneo',['action' => 'asociarplantel', $torneo['Torneo']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);?>

            			</div>
						</div>
					</div>
				</div>
			</div>

</div>

                   