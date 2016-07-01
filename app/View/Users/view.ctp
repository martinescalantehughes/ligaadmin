<div class="users view">
            <div class="col-md-8">
                <div class="panel panel-primary">


                    <div class="panel-heading">
                       <h4><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><?php echo __(' Información del Usuario'); ?></h4>
                    </div>


                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-12">
                                <dl class="dl-horizontal">
									
									
									<dt><?php echo __('Nombre'); ?></dt>
									<dd>
										<?php echo h($user['User']['fullname']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Nombre de usuario'); ?></dt>
									<dd>
										<?php echo h($user['User']['username']); ?>
										&nbsp;
									</dd>
									
									<dt><?php echo __('Rol'); ?></dt>
									<dd>
										<?php echo h($user['User']['role']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Creado'); ?></dt>
									<dd>
										<?php echo h($user['User']['created']); ?>
										&nbsp;
									</dd>
									<dt><?php echo __('Modificado'); ?></dt>
									<dd>
										<?php echo h($user['User']['modified']); ?>
										&nbsp;
									</dd>
								
								</dl>
							</div>
						</div>
					</div>

					<div class="panel-footer">
	                       		

                            
                            
                    </div>


				</div>
			</div>
</div>
