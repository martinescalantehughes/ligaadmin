<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=true', false); ?>



<div class="predios view">
            <div class="col-md-10">
                <div class="panel panel-default">


                    <div class="panel-heading">
                       <h4><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><?php echo __(' Información del Predio'); ?></h4>
                    </div>


                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-5">
                                <dl class="dl-horizontal">
  																
									<dt><?php echo __('Nombre'); ?></dt>
									<dd>
										<?php echo h($predio['Predio']['nombre']); ?>
									
									</dd>
									<dt><?php echo __('Dirección'); ?></dt>
									<dd>
										<?php echo h($predio['Predio']['direccion']); ?>
										
									</dd>
									<dt><?php echo __('País'); ?></dt>
									<dd>
										<td><?php echo h($predio['Paise']['nombre']); ?>&nbsp;</td>
									</dd>

									<dt><?php echo __('Provincia'); ?></dt>
									<dd>
										<td><?php echo h($predio['Provincia']['nombre']); ?>&nbsp;</td>
									</dd>

									<dt><?php echo __('Localidad'); ?></dt>
									<dd>
										<td><?php echo h($predio['Localidade']['nombre']); ?>&nbsp;</td>
									</dd>	

									
								</dl>
							</div>

							<div class="col-md-5">
                                <?php
								      $map_options = array(
								        "id"         => "map_canvas",
								        "width"      => "400px",
								        "height"     => "400px",
								        "localize"   => false,
								        "type"       => "ROADMAP",
								        "zoom"       => 13,
								        "address"    =>h($predio['Provincia']['nombre']).','.h($predio['Localidade']['nombre']).','. h($predio['Predio']['direccion']),
								        "marker"     => true,
								        "markerTitle"=>h($predio['Predio']['nombre']),
								      	"markerIcon" => "cancha.png",
								        "infoWindow"   => true,
								        "windowText"   => h($predio['Predio']['nombre'])

								      );
								    ?>
								 
								<?= $this->GoogleMap->map($map_options); ?>

							</div>



                        </div>


                    </div>


                    <div class="panel-footer">
                       	
                           
                            <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-edit']).' Editar',['action' => 'edit', $predio['Predio']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                              echo '&nbsp';
                            ?>                         
                            
                    </div>
                </div>
            </div>


</div>


																	