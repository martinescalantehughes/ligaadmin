<div class="fechas view">
            <div class="col-md-12">
                <div class="panel panel-default">
                	

                    <div class="panel-heading">
                       <h4><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><?php echo __(' Información de la Fecha'); ?></h4>
                    </div>


                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-12">
                                <dl class="dl-horizontal">
									<dt><?php echo __('Fecha Número'); ?></dt>
									<dd>
										<?php echo h($fecha[0]['Fecha']['numerofecha']); ?>
										&nbsp;
									</dd>							
									<dt><?php echo __('Inicio'); ?></dt>
									<dd>
										<?php echo h($fecha[0]['Fecha']['fechadesde']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Fin'); ?></dt>
									<dd>
										<?php echo h($fecha[0]['Fecha']['fechahasta']); ?>
										&nbsp;
									</dd>
									
									<dt><?php echo __('Torneo'); ?></dt>
									<dd>
										<?php echo $this->Html->link($fecha[0]['Torneo']['nombre'], array('controller' => 'torneos', 'action' => 'view', $fecha[0]['Torneo']['id'])); ?>
										&nbsp;
									</dd>
								
								</dl>
							</div>
						</div>
					</div>

					<div class="panel-footer">
	                

                            <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-edit']).' Editar',['action' => 'edit', $fecha[0]['Fecha']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                             echo '&nbsp';
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-card']).' Informes',['action' => 'view', $fecha[0]['Fecha']['id'],'ext'=>'pdf'],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);

                            ?>
                            

                    </div>


				</div>
			</div>

            <div class="partidos asociados">
               	<div class="col-md-12">
                   	
                   		 <div class="panel panel-default">
		                    <div class="panel-heading">
		                       <h4><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><?php echo __(' Partidos a jugar en la fecha'); ?></h4>
		                    </div>


		                    <div class="panel-body">
									<?php if (!empty($fecha[0]['Partido'])): ?>
									<table cellpadding = "0" cellspacing = "0" class="table table-hover">
									
									
									<tr>
										<th><?php echo __('Fecha'); ?></th>
										<th><?php echo __('Resultado'); ?></th>
										<th><?php echo __('Estado'); ?></th>
										<th><?php echo __('Local'); ?></th>
										<th><?php echo __('Visitante'); ?></th>
										<th class="actions"><?php echo __('Acciones'); ?></th>
									</tr>
									<?php foreach ($fecha[0]['Partido'] as $partido): ?>
										<tr>
											
											<td><?php echo $partido['fecha']; ?></td>
											<td><?php echo $partido['resultado']; ?></td>
											<td><?php echo $partido['estado']; ?></td>
											<td><?php echo $partido['Locale']['Plantel']['Club']['nombrecorto']; ?></td>
											<td><?php echo $partido['Visitante']['Plantel']['Club']['nombrecorto']; ?></td>										
											<td class="actions">
												<div class="btn-group">
													<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
													 <ul class="dropdown-menu">
														<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'partidos', 'action' => 'view', $partido['id'])); ?></li>
														
														<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'partidos', 'action' => 'edit', $partido['id'])); ?></li>
														<li><?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'partidos', 'action' => 'delete', $partido['id']), array(), __('Are you sure you want to delete # %s?', $partido['id'])); ?></li>
												
											 		 </ul>
												</div>
											</td>
										</tr>



									
									<?php endforeach; ?>
									</table>
								<?php else: ?>
									<?php echo __('No existen partidos asociados a la fecha'); ?>

								<?php endif; ?>
						</div>

						<div class="panel-footer">
                       		
                           
                             <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-link']).' Asociar un Partido a la Fecha',['action' => 'asociarpartido', $fecha[0]['Fecha']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                            ?>

            			</div>

					</div>
			
			</div>
		</div>

</div>


