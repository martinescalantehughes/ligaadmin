
<div class="partidos view">
            <div class="col-md-8">
                <div class="panel panel-default">


                    <div class="panel-heading">
                       <h4><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><?php echo __(' Información del Partido'); ?></h4>
                    </div>


                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-12">
                                <dl class="dl-horizontal">
									
									<dt><?php echo __('Fecha del encuentro'); ?></dt>
									<dd>
										<?php echo h($partido[0]['Partido']['fecha']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Resultado'); ?></dt>
									<dd>
										<?php echo h($partido[0]['Partido']['resultado']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Arbitros'); ?></dt>
									<dd>
										<?php echo h($partido[0]['Partido']['arbitros']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Comentarios'); ?></dt>
									<dd>
										<?php echo h($partido[0]['Partido']['comentarios']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Estado'); ?></dt>
									<dd>
										<?php echo h($partido[0]['Partido']['estado']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Fecha'); ?></dt>
									<dd>
										<?php echo $this->Html->link('Número: '.$partido[0]['Fecha']['numerofecha'], array('controller' => 'fechas', 'action' => 'view', $partido[0]['Fecha']['id'])); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Local'); ?></dt>
									<dd>
										<?php echo $this->Html->link($partido[0]['Locale']['Plantel']['Club']['nombrecorto'], array('controller' => 'clubs', 'action' => 'view', $partido[0]['Visitante']['Plantel']['Club']['id'])); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Visitante'); ?></dt>
									<dd>
										<?php echo $this->Html->link($partido[0]['Visitante']['Plantel']['Club']['nombrecorto'], array('controller' => 'clubs', 'action' => 'view', $partido[0]['Visitante']['Plantel']['Club']['id'])); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Predio'); ?></dt>
									<dd>
										<?php echo $this->Html->link($partido[0]['Predio']['nombre'], array('controller' => 'predios', 'action' => 'view', $partido[0]['Predio']['id'])); ?>
										&nbsp;
									</dd>
								
								</dl>
							</div>
						</div>
					</div>

					<div class="panel-footer">
	                       		

                            <?php
                             echo $this->Html->link($this->Html->tag('span','',['class' => 'glyphicon glyphicon-edit']).' Editar',['action' => 'edit', $partido[0]['Partido']['id']],['class' => 'btn btn-default', 'role' => 'button' , 'escape' => false]);
                            ?>
                            
                    </div>


				</div>
			</div>
</div>

