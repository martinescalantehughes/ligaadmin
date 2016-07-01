

<div class="clubs view">
            <div class="col-md-12">
                <div class="panel panel-default">


                    <div class="panel-heading">
                       <h4><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><?php echo __(' Información del Club'); ?></h4>
                    </div>


                    <div class="panel-body">

                        <div class="row">

                        	<div class="col-md-1">
                                <?php echo $this->Html->image('/files/club/foto/' . $club[0]['Club']['foto_dir'] .'/' .'thumb_' . $club[0]['Club']['foto'])?>
                            </div>

                            <div class="col-md-5">
                                <dl class="dl-horizontal">
									

									<dt><?php echo __('Nombre corto'); ?></dt>
									<dd>
										<?php echo h($club[0]['Club']['nombrecorto']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Nombre completo'); ?></dt>
									<dd>
										<?php echo h($club[0]['Club']['nombrelargo']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Tipo'); ?></dt>
									<dd>
										<?php echo h($club[0]['Club']['tipo']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('País'); ?></dt>
									<dd>
										<?php echo h($club[0]['Paise']['nombre']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Provincia'); ?></dt>
									<dd>
										<?php echo h($club[0]['Provincia']['nombre']); ?>
										&nbsp;
									</dd>
									
									<dt><?php echo __('Localidad'); ?></dt>
									<dd>
										<?php echo h($club[0]['Localidade']['nombre']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Estado'); ?></dt>
									<dd>
										<?php echo h($club[0]['Club']['estado']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('CUIT'); ?></dt>
									<dd>
										<?php echo h($club[0]['Club']['cuit']); ?>
										&nbsp;
									</dd>
									
									

								</dl>
							</div>
							<div class="col-md-5">
								<dl class="dl-horizontal">

									<dt><?php echo __('Fecha de fundación'); ?></dt>
									<dd>
										<?php echo h($club[0]['Club']['fechafundacion']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('División'); ?></dt>
									<dd>
										<?php echo h($club[0]['Club']['division']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Notas'); ?></dt>
									<dd>
										<?php echo h($club[0]['Club']['notas']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Dirección'); ?></dt>
									<dd>
										<?php echo h($club[0]['Club']['direccion']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Código Postal (CP)'); ?></dt>
									<dd>
										<?php echo h($club[0]['Club']['codigopostal']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Fecha de afiliación'); ?></dt>
									<dd>
										<?php echo h($club[0]['Club']['fechaafiliacion']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Fecha de renovación'); ?></dt>
									<dd>
										<?php echo h($club[0]['Club']['fecharenovacion']); ?>
										&nbsp;
									</dd>

								</dl>
								
							</div>
						</div>
					</div>

					<div class="panel-footer">
	                       		
							
                           <!-- <button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Editar datos del Club"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><?php //echo $this->Html->link(__(' Editar Datos'), array('action' => 'edit', $club['Club']['id'])); ?></button>
                            
                            <button class="btn btn-default" type="button" data-toggle="tooltip" data-original-title="Participación en Torneos"><span class="glyphicon glyphicon-queen" aria-hidden="true"></span><?php //echo $this->Html->link(__(' Participación en Torneos'), array('action' => 'lista_de_torneos', $club['Club']['id'])); ?></button> 

                            <button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Lista de Planteles conformados por el Club para hacer frente a diversos torneos"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><?php //echo $this->Html->link(__(' Lista de Planteles'), array('controller'=>'plantels','action' => 'lista_de_planteles', $club['Club']['id'])); ?></button>

                            <button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Lista de Jugadores actuales del Club y jugadores que ya no pertenecen al club"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php //echo $this->Html->link(__(' Historial de Jugadores'), array('controller'=>'pases','action' => 'lista_de_pases', $club['Club']['id'])); ?></button>

                            <button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Lista de Dirigentes actuales del Club y dirigentes que han presidido el club"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span><?php //echo $this->Html->link(__(' Historial de Dirigentes'), array('controller'=>'dirigentepases','action' => 'lista_de_tecnicos', $club['Club']['id'])); ?></button>

                             <button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Lista de Técnicos actuales del Club y jugadores que ya no pertenecen al club"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php //echo $this->Html->link(__(' Historial de Técnicos'), array('controller'=>'tecnicopases','action' => 'lista_de_dirigentes', $club['Club']['id'])); ?></button>-->


                             <?php
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-edit']).' Editar',['action' => 'edit', $club[0]['Club']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-file']).' Lista de Planteles',['controller'=>'plantels','action' => 'lista_de_planteles', $club[0]['Club']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-user']).' Lista de Jugadores',['controller'=>'pases','action' => 'lista_de_pases', $club[0]['Club']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-briefcase']).' Lista de Dirigentes',['controller'=>'dirigentepases','action' => 'lista_de_pases', $club[0]['Club']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-user']).' Lista de Personal Técnico',['controller'=>'tecnicopases','action' => 'lista_de_pases', $club[0]['Club']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                             ?>



                         
                    </div>


				</div>
			</div>




			<div class="Dirigentes Actuales">
					<div class="col-md-12">
                   	
                   		 <div class="panel panel-default">
		                    <div class="panel-heading">
		                       <h4><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span><?php echo __(' Dirigentes Actuales'); ?></h4>
		                    </div>


		                    <div class="panel-body">
									<?php if (!empty($club[0]['Dirigentepase'])): ?>
									<table cellpadding = "0" cellspacing = "0" class="table table-hover">
									<tr>
										<th><?php echo __('Dirigente'); ?></th>
										<th><?php echo __('Cargo'); ?></th>
										<th><?php echo __('Fecha Asuncion'); ?></th>
										<th><?php echo __('Fecha Fin de Mandato'); ?></th>	
										
										
									</tr>
									<?php foreach ($club[0]['Dirigentepase'] as $dirigentepase): ?>
										<tr>
											<td><?php echo $dirigentepase['Dirigenteclub']['Persona']['nombre'].' '.$dirigentepase['Dirigenteclub']['Persona']['apellido']; ?></td>
											<td><?php echo $dirigentepase['cargo']; ?></td>
											<td><?php echo $dirigentepase['fechadesde']; ?></td>
											<td><?php echo $dirigentepase['fechahasta']; ?></td>
											
											
										</tr>
									<?php endforeach; ?>
									</table>
								<?php else: ?>
									<?php echo __('No existen dirigentes asociados al club'); ?>

								<?php endif; ?>
						</div>

						

					</div>
			
			</div>


			</div>


            <div class= "Últimos jugadores asociados">
               	<div class="col-md-12">
                   	
                   		 <div class="panel panel-default">
		                    <div class="panel-heading">
		                       <h4><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span><?php echo __(' Últimas transferencias de jugadores registradas'); ?></h4>
		                    </div>


		                    <div class="panel-body">
									<?php if (!empty($club[0]['Pase'])): ?>
									<table cellpadding = "0" cellspacing = "0" class="table table-hover">
									<tr>
										<th><?php echo __('Jugador'); ?></th>
										<th><?php echo __('Fecha desde'); ?></th>
										<th><?php echo __('Fecha hasta'); ?></th>
										<th><?php echo __('Valor Monetario'); ?></th>
										<th><?php echo __('Tipo de Pase'); ?></th>
										
										
									</tr>
									<?php foreach ($club[0]['Pase'] as $pase): ?>
										<tr>
											<td><?php echo $pase['Jugadore']['Persona']['nombre'].' '.$pase['Jugadore']['Persona']['apellido']; ?></td>
											<td><?php echo $pase['fechadesde']; ?></td>
											<td><?php echo $pase['fechahasta']; ?></td>
											<td><?php echo '$ '.$pase['valormonetario']; ?></td>
											<td><?php echo $pase['tipo']; ?></td>
											
											
										</tr>
									<?php endforeach; ?>
									</table>
								<?php else: ?>
									<?php echo __('No existen pases asociados al club'); ?>

								<?php endif; ?>
						</div>

						

					</div>
			
			</div>
		</div>


		<div class="planteles asociados">
               	<div class="col-md-12">
                   	<div class="related">
                   		 <div class="panel panel-default">
		                    <div class="panel-heading">
		                       <h4><span class="glyphicon glyphicon-file" aria-hidden="true"></span><?php echo __(' Últimos planteles registrados'); ?></h4>
		                    </div>


		                    <div class="panel-body">
									
									<?php if (!empty($club[0]['Plantel'])): ?>
									<table cellpadding = "0" cellspacing = "0" class="table table-hover">
									<tr>
										<th><?php echo __('Nombre'); ?></th>
										
									</tr>
									<?php foreach ($club[0]['Plantel'] as $plantel): ?>
										<tr>
										
											<td><?php echo $plantel['nombre']; ?></td>
											
									
											
										</tr>
									<?php endforeach; ?>
									</table>
									<?php else: ?>
												<?php echo __('No existen planteles asociados al club'); ?>

									<?php endif; ?>
							</div>

							
						</div>
					</div>
				</div>
			</div>

</div>
