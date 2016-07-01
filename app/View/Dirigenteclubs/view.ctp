<div class="dirigenteclubs view">
            <div class="col-md-12">
                <div class="panel panel-default">


                    <div class="panel-heading">
                       <h4><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><?php echo __(' Información del Dirigete'); ?></h4>
                    </div>


                    <div class="panel-body">

                        <div class="row">


                             <div class="col-md-1">
                                <?php echo $this->Html->image('/files/persona/foto/' . $dirigenteclub['Persona']['foto_dir'] .'/' .'thumb_' . $dirigenteclub['Persona']['foto'])?>
                            </div>


                            <div class="col-md-5">
                                <dl class="dl-horizontal">
  																
									<dt><?php echo __('DNI'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Persona']['dni']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('CUIL'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Persona']['cuil']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Nombres'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Persona']['nombre']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Apellidos'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Persona']['apellido']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Dirección'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Persona']['direccion']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('País'); ?></dt>
									<dd>
										<td><?php echo h($dirigenteclub['Persona']['Paise']['nombre']); ?>&nbsp;</td>
									</dd>

									<dt><?php echo __('Provincia'); ?></dt>
									<dd>
										<td><?php echo h($dirigenteclub['Persona']['Provincia']['nombre']); ?>&nbsp;</td>
									</dd>

									<dt><?php echo __('Localidad'); ?></dt>
									<dd>
										<td><?php echo h($dirigenteclub['Persona']['Localidade']['nombre']); ?>&nbsp;</td>
									</dd>									

									<dt><?php echo __('Email'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Persona']['email']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Teléfono'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Persona']['telefono']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Fecha de nacimiento'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Persona']['fechanac']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Sexo'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Persona']['sexo']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Pasaporte'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Persona']['pasaporte']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Código postal'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Persona']['codigopostal']); ?>
										&nbsp;
									</dd>
								</dl>
							</div>



							<div class="col-md-5">
                                <dl class="dl-horizontal">
									
                                	<dt><?php echo __('Fecha de afiliacion a la liga'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Dirigenteclub']['fechaafiliacion']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Fecha de renovación de carnet'); ?></dt>
									<dd>
										<?php echo h($dirigenteclub['Dirigenteclub']['fecharenovacion']); ?>
										&nbsp;
									</dd>

								</dl>
							</div>



                        </div>


                    </div>


                    <div class="panel-footer">
                       	
                             <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-edit']).' Editar',['action' => 'edit', $dirigenteclub['Dirigenteclub']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-plus']).' Registrar nuevo pase',['controller'=>'dirigentepases','action' => 'add', $dirigenteclub['Dirigenteclub']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-card']).' Imprimir Carnet',['action' => 'view', $dirigenteclub['Dirigenteclub']['id'],'ext'=>'pdf'],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                            ?>
                    </div>
                </div>
            </div>




            <div class= "Historial de pases">
               	<div class="col-md-12">
                   	
                   		 <div class="panel panel-default">
		                    <div class="panel-heading">
		                       <h4><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span><?php echo __(' Historial de pases'); ?></h4>
		                    </div>


		                    <div class="panel-body">
									<?php if (!empty($dirigentepases)): ?>
									<table cellpadding = "0" cellspacing = "0" class="table table-hover">
									<tr>
											<th><?php echo __('Nombre del Club'); ?></th>
											<th><?php echo __('Fecha de inicio'); ?></th>
											<th><?php echo __('Fecha de fin'); ?></th>
											<th><?php echo __('Cargo'); ?></th>
											<th class="actions"><?php echo __('Acciones'); ?></th>
										
									</tr>
									<?php foreach ($dirigentepases as $dirigentepase): ?>
										<tr>
													<td><?php echo $dirigentepase['Club']['nombrelargo']; ?></td>
													<td><?php echo $dirigentepase['Dirigentepase']['fechadesde']; ?></td>
													<td><?php echo $dirigentepase['Dirigentepase']['fechahasta']; ?></td>
													<td><?php echo $dirigentepase['Dirigentepase']['cargo']; ?></td>
													<td class="actions">
														<div class="btn-group">
															<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
															 <ul class="dropdown-menu">
																<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'dirigentepases', 'action' => 'view', $dirigentepase['Dirigentepase']['id'])); ?></li>
																<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'dirigentepases', 'action' => 'edit', $dirigentepase['Dirigentepase']['id'])); ?></li>
																<li><?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'dirigentepases', 'action' => 'delete', $dirigentepase['Dirigentepase']['id']), array(), __('Are you sure you want to delete # %s?', $dirigentepase['Dirigentepase']['id'])); ?></li>
															</ul>
														</div>
													</td>
											
											
										</tr>
									<?php endforeach; ?>
									</table>
								<?php else: ?>
									<?php echo __('El Dirigente no posee pases'); ?>

								<?php endif; ?>
						</div>

						

					</div>
			
			</div>
		</div>
</div>




