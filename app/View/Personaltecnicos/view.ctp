
<div class="personaltecnicos view">
            <div class="col-md-12">
                <div class="panel panel-default">


                    <div class="panel-heading">
                       <h4><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><?php echo __(' Información del Personal Técnico'); ?></h4>
                    </div>


                    <div class="panel-body">

                        <div class="row">


                             <div class="col-md-1">
                                <?php echo $this->Html->image('/files/persona/foto/' . $personaltecnico['Persona']['foto_dir'] .'/' .'thumb_' . $personaltecnico['Persona']['foto'])?>
                            </div>


                            <div class="col-md-5">
                                <dl class="dl-horizontal">
  																
									<dt><?php echo __('DNI'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Persona']['dni']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('CUIL'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Persona']['cuil']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Nombres'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Persona']['nombre']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Apellidos'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Persona']['apellido']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Dirección'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Persona']['direccion']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('País'); ?></dt>
									<dd>
										<td><?php echo h($personaltecnico['Persona']['Paise']['nombre']); ?>&nbsp;</td>
									</dd>

									<dt><?php echo __('Provincia'); ?></dt>
									<dd>
										<td><?php echo h($personaltecnico['Persona']['Provincia']['nombre']); ?>&nbsp;</td>
									</dd>

									
									<dt><?php echo __('Localidad'); ?></dt>
									<dd>
										<td><?php echo h($personaltecnico['Persona']['Localidade']['nombre']); ?>&nbsp;</td>
									</dd>									

									<dt><?php echo __('Email'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Persona']['email']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Teléfono'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Persona']['telefono']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Fecha de nacimiento'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Persona']['fechanac']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Sexo'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Persona']['sexo']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Pasaporte'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Persona']['pasaporte']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Código postal'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Persona']['codigopostal']); ?>
										&nbsp;
									</dd>
								</dl>
							</div>



							<div class="col-md-5">
                                <dl class="dl-horizontal">
									
                                	<dt><?php echo __('Fecha de afiliacion a la liga'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Personaltecnico']['fechaafiliacion']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Fecha de renovación de carnet'); ?></dt>
									<dd>
										<?php echo h($personaltecnico['Personaltecnico']['fecharenovacion']); ?>
										&nbsp;
									</dd>


								</dl>
							</div>



                        </div>


                    </div>


                    <div class="panel-footer">
                       	
                             <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-edit']).' Editar',['action' => 'edit', $personaltecnico['Personaltecnico']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-plus']).' Registrar nuevo pase',['controller'=>'tecnicopases','action' => 'add', $personaltecnico['Personaltecnico']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-card']).' Imprimir Carnet',['action' => 'view', $personaltecnico['Personaltecnico']['id'],'ext'=>'pdf'],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
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
									<?php if (!empty($tecnicopases)): ?>
									<table cellpadding = "0" cellspacing = "0" class="table table-hover">
									<tr>
											<th><?php echo __('Nombre del Club'); ?></th>
											<th><?php echo __('Fecha de inicio'); ?></th>
											<th><?php echo __('Fecha de fin'); ?></th>
											<th><?php echo __('Cargo'); ?></th>
											<th class="actions"><?php echo __('Acciones'); ?></th>
										
									</tr>
									<?php foreach ($tecnicopases as $tecnicopase): ?>
										<tr>
													<td><?php echo $tecnicopase['Club']['nombrelargo']; ?></td>
													<td><?php echo $tecnicopase['Tecnicopase']['fechadesde']; ?></td>
													<td><?php echo $tecnicopase['Tecnicopase']['fechahasta']; ?></td>
													<td><?php echo $tecnicopase['Tecnicopase']['cargo']; ?></td>
													<td class="actions">
														<div class="btn-group">
															<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
															 <ul class="dropdown-menu">
																<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'tecnicopases', 'action' => 'view', $tecnicopase['Tecnicopase']['id'])); ?></li>
																<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'tecnicopases', 'action' => 'edit', $tecnicopase['Tecnicopase']['id'])); ?></li>
																<li><?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'tecnicopases', 'action' => 'delete', $tecnicopase['Tecnicopase']['id']), array(), __('Are you sure you want to delete # %s?', $tecnicopase['Tecnicopase']['id'])); ?></li>
															</ul>
														</div>
													</td>
											
											
										</tr>
									<?php endforeach; ?>
									</table>
								<?php else: ?>
									<?php echo __('El Personal Técnico no posee pases'); ?>

								<?php endif; ?>
						</div>

						

					</div>
			
			</div>
		</div>
</div>



