

<div class="personalligas view">
            <div class="col-md-12">
                <div class="panel panel-default">


                    <div class="panel-heading">
                       <h4><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><?php echo __(' Información del Personal'); ?></h4>
                    </div>


                    <div class="panel-body">

                        <div class="row">


                            <div class="col-md-1">
                                <?php echo $this->Html->image('/files/persona/foto/' . $personalliga['Persona']['foto_dir'] .'/' .'thumb_' . $personalliga['Persona']['foto'])?>
                            </div>


                            <div class="col-md-5">
                                <dl class="dl-horizontal">
  																
									<dt><?php echo __('DNI'); ?></dt>
									<dd>
										<?php echo h($personalliga['Persona']['dni']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('CUIL'); ?></dt>
									<dd>
										<?php echo h($personalliga['Persona']['cuil']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Nombres'); ?></dt>
									<dd>
										<?php echo h($personalliga['Persona']['nombre']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Apellidos'); ?></dt>
									<dd>
										<?php echo h($personalliga['Persona']['apellido']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Dirección'); ?></dt>
									<dd>
										<?php echo h($personalliga['Persona']['direccion']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('País'); ?></dt>
									<dd>
										<td><?php echo h($personalliga['Persona']['Paise']['nombre']); ?>&nbsp;</td>
									</dd>

									<dt><?php echo __('Provincia'); ?></dt>
									<dd>
										<td><?php echo h($personalliga['Persona']['Provincia']['nombre']); ?>&nbsp;</td>
									</dd>

									
									<dt><?php echo __('Localidad'); ?></dt>
									<dd>
										<td><?php echo h($personalliga['Persona']['Localidade']['nombre']); ?>&nbsp;</td>
									</dd>									

									<dt><?php echo __('Email'); ?></dt>
									<dd>
										<?php echo h($personalliga['Persona']['email']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Teléfono'); ?></dt>
									<dd>
										<?php echo h($personalliga['Persona']['telefono']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Fecha de nacimiento'); ?></dt>
									<dd>
										<?php echo h($personalliga['Persona']['fechanac']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Sexo'); ?></dt>
									<dd>
										<?php echo h($personalliga['Persona']['sexo']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Pasaporte'); ?></dt>
									<dd>
										<?php echo h($personalliga['Persona']['pasaporte']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Código postal'); ?></dt>
									<dd>
										<?php echo h($personalliga['Persona']['codigopostal']); ?>
										&nbsp;
									</dd>
								</dl>
							</div>

							<div class="col-md-5">
                                <dl class="dl-horizontal">
									<dt><?php echo __('Cargo'); ?></dt>
									<dd>
										<?php echo h($personalliga['Personalliga']['cargo']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Antiguedad'); ?></dt>
									<dd>
										<?php echo h($personalliga['Personalliga']['antiguedad']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Fecha de igreso'); ?></dt>
									<dd>
										<?php echo h($personalliga['Personalliga']['fechaingreso']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Fecha de egreso'); ?></dt>
									<dd>
										<?php echo h($personalliga['Personalliga']['fechaegreso']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Fecha de afiliacion a la liga'); ?></dt>
									<dd>
										<?php echo h($personalliga['Personalliga']['fechaafiliacion']); ?>
										&nbsp;
									</dd>

									<dt><?php echo __('Fecha de renovación de carnet'); ?></dt>
									<dd>
										<?php echo h($personalliga['Personalliga']['fecharenovacion']); ?>
										&nbsp;
									</dd>

								</dl>
							</div>



                        </div>


                    </div>


                    <div class="panel-footer">
                       	
                           
                            <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-edit']).' Editar',['action' => 'edit', $personalliga['Personalliga']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                           
                              echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-card']).' Imprimir Carnet',['action' => 'view', $personalliga['Personalliga']['id'],'ext'=>'pdf'],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                            ?>

                            
                            
                    </div>
                </div>
            </div>
</div>