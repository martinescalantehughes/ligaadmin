

<div class="jugadores view">
            <div class="col-md-12">
                <div class="panel panel-default">


                    <div class="panel-heading">
                       <h4><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><?php echo __(' Información del Jugador'); ?></h4>
                    </div>


                    <div class="panel-body">

                        <div class="row">


                            <div class="col-md-1">
                                <?php echo $this->Html->image('/files/persona/foto/' . $jugadore['Persona']['foto_dir'] .'/' .'thumb_' . $jugadore['Persona']['foto'])?>
                            </div>


                            <div class="col-md-5">
                                <dl class="dl-horizontal">
  																
									<dt><?php echo __('DNI'); ?></dt>
									<dd>
										<?php echo h($jugadore['Persona']['dni']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('CUIL'); ?></dt>
									<dd>
										<?php echo h($jugadore['Persona']['cuil']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Nombres'); ?></dt>
									<dd>
										<?php echo h($jugadore['Persona']['nombre']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Apellidos'); ?></dt>
									<dd>
										<?php echo h($jugadore['Persona']['apellido']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Dirección'); ?></dt>
									<dd>
										<?php echo h($jugadore['Persona']['direccion']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('País'); ?></dt>
									<dd>
										<td><?php echo h($jugadore['Persona']['Paise']['nombre']); ?>&nbsp;</td>
									</dd>

									<dt><?php echo __('Provincia'); ?></dt>
									<dd>
										<td><?php echo h($jugadore['Persona']['Provincia']['nombre']); ?>&nbsp;</td>
									</dd>

							
									<dt><?php echo __('Localidad'); ?></dt>
									<dd>
										<td><?php echo h($jugadore['Persona']['Localidade']['nombre']); ?>&nbsp;</td>
									</dd>									

									<dt><?php echo __('Email'); ?></dt>
									<dd>
										<?php echo h($jugadore['Persona']['email']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Teléfono'); ?></dt>
									<dd>
										<?php echo h($jugadore['Persona']['telefono']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Fecha de nacimiento'); ?></dt>
									<dd>
										<?php echo h($jugadore['Persona']['fechanac']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Sexo'); ?></dt>
									<dd>
										<?php echo h($jugadore['Persona']['sexo']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Pasaporte'); ?></dt>
									<dd>
										<?php echo h($jugadore['Persona']['pasaporte']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Código postal'); ?></dt>
									<dd>
										<?php echo h($jugadore['Persona']['codigopostal']); ?>
										&nbsp;
									</dd>
								</dl>
							</div>

							<div class="col-md-5">
                                <dl class="dl-horizontal">
									<dt><?php echo __('Apodo'); ?></dt>
									<dd>
										<?php echo h($jugadore['Jugadore']['apodo']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('País Natal'); ?></dt>
									<dd>
										<td><?php echo h($jugadore['Paise']['nombre']); ?>&nbsp;</td>
									</dd>

									<dt><?php echo __('Provincia Natal'); ?></dt>
									<dd>
										<td><?php echo h($jugadore['Provincia']['nombre']); ?>&nbsp;</td>
									</dd>

									
									<dt><?php echo __('Localidad Natal'); ?></dt>
									<dd>
										<td><?php echo h($jugadore['Localidade']['nombre']); ?>&nbsp;</td>
									</dd>

									<dt><?php echo __('Nombre del padre'); ?></dt>
									<dd>
										<?php echo h($jugadore['Jugadore']['nombrepadre']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Nombre de la madre'); ?></dt>
									<dd>
										<?php echo h($jugadore['Jugadore']['nombremadre']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Posición de juego'); ?></dt>
									<dd>
										<?php echo h($jugadore['Jugadore']['posicionjuego']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Estado'); ?></dt>
									<dd>
										<?php echo h($jugadore['Jugadore']['estado']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Tipo'); ?></dt>
									<dd>
										<?php echo h($jugadore['Jugadore']['tipo']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Nivel'); ?></dt>
									<dd>
										<?php echo h($jugadore['Jugadore']['nivel']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Región'); ?></dt>
									<dd>
										<?php echo h($jugadore['Jugadore']['region']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Estatura'); ?></dt>
									<dd>
										<?php echo h($jugadore['Jugadore']['estatura']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Peso'); ?></dt>
									<dd>
										<?php echo h($jugadore['Jugadore']['peso']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Fecha de afiliacion a la liga'); ?></dt>
									<dd>
										<?php echo h($jugadore['Jugadore']['fechaafiliacion']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Fecha de renovación de carnet'); ?></dt>
									<dd>
										<?php echo h($jugadore['Jugadore']['fecharenovacion']); ?>
										&nbsp;
									</dd>

								</dl>
							</div>



                        </div>


                    </div>


                    <div class="panel-footer">
                       	
                           
                            <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-edit']).' Editar',['action' => 'edit', $jugadore['Jugadore']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-plus']).' Registrar nuevo pase',['controller'=>'pases','action' => 'add', $jugadore['Jugadore']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-card']).' Imprimir Carnet',['action' => 'view', $jugadore['Jugadore']['id'],'ext'=>'pdf'],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
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
									<?php if (!empty($pases)): ?>
									<table cellpadding = "0" cellspacing = "0" class="table table-hover">
									<tr>
											<th><?php echo __('Nombre del Club'); ?></th>
											<th><?php echo __('Fecha de inicio'); ?></th>
											<th><?php echo __('Fecha de fin'); ?></th>
											<th><?php echo __('Valor del Pase'); ?></th>
											<th><?php echo __('Tipo'); ?></th>
											<th class="actions"><?php echo __('Acciones'); ?></th>
										
									</tr>
									<?php foreach ($pases as $pase): ?>
										<tr>
													<td><?php echo $pase['Club']['nombrelargo']; ?></td>
													<td><?php echo $pase['Pase']['fechadesde']; ?></td>
													<td><?php echo $pase['Pase']['fechahasta']; ?></td>
													<td><?php echo $pase['Pase']['valormonetario']; ?></td>
													<td><?php echo $pase['Pase']['tipo']; ?></td>
													<td class="actions">
														<div class="btn-group">
															<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Acción <span class="caret"></span></button>
															 <ul class="dropdown-menu">
																<li><?php echo $this->Html->link(__('Ver'), array('controller' => 'pases', 'action' => 'view', $pase['Pase']['id'])); ?></li>
																<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'pases', 'action' => 'edit', $pase['Pase']['id'])); ?></li>
																<li><?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'pases', 'action' => 'delete', $pase['Pase']['id']), array(), __('Are you sure you want to delete # %s?', $pase['Pase']['id'])); ?></li>
															</ul>
														</div>
													</td>
											
											
										</tr>
									<?php endforeach; ?>
									</table>
								<?php else: ?>
									<?php echo __('El jugador no posee pases'); ?>

								<?php endif; ?>
						</div>

						

					</div>
			
			</div>
		</div>

</div>


																	