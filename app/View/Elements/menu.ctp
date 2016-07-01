
			
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
		  
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
            <?php echo $this->Html->link('LigaAdmin', array('controller' => 'torneos', 'action' => 'index'), array('class' => 'navbar-brand' )); ?>
			
          </div>
		  
          <div id="navbar" class="navbar-collapse collapse">
		  
            <ul class="nav navbar-nav">
                        <li>
                          <?php echo $this->Html->link('Datos Personales', array('controller' => 'personas', 'action' => 'index')); ?>
                        </li>
                  			
                  			<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clubes<span class="caret"></span></a>
                               
                                <ul class="dropdown-menu">
                                  <li><?php echo $this->Html->Link('Lista de Clubes',array('controller'=>'clubs','action'=>'index')); ?></li>
                                  <li class="divider"></li>
                                  <li><?php echo $this->Html->Link('Registrar Club',array('controller'=>'clubs','action'=>'add')); ?></li>
                                  <li class="divider"></li>
                                  
                                  <li><?php echo $this->Html->Link('Lista de Dirigentes',array('controller'=>'dirigenteclubs','action'=>'index')); ?></li>
                                  <li class="divider"></li>
                                  <li><?php echo $this->Html->Link('Registrar Dirigente',array('controller'=>'dirigenteclubs','action'=>'add')); ?></li>
                                  
                                </ul>
                        </li>

                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jugadores<span class="caret"></span></a>
                               
                                <ul class="dropdown-menu">
                                
                                  <li><?php echo $this->Html->Link('Lista de Jugadores',array('controller'=>'jugadores','action'=>'index')); ?></li>
                                  <li class="divider"></li>                                  
                                  <li><?php echo $this->Html->Link('Registrar Jugador',array('controller'=>'jugadores','action'=>'add')); ?>
                                 
                                </ul>
                        </li>

                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal Técnico<span class="caret"></span></a>
                               
                                <ul class="dropdown-menu">
                                
                                  <li><?php echo $this->Html->Link('Lista de Personal Técnico',array('controller'=>'personaltecnicos','action'=>'index')); ?></li>
                                  <li class="divider"></li>                                  
                                  <li><?php echo $this->Html->Link('Registrar Personal Técnico',array('controller'=>'personaltecnicos','action'=>'add')); ?>
                                 
                                </ul>
                        </li>
                  			
                        <?php if($current_user['role'] == 'admin'): ?>
                  			<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal de la Liga<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><?php echo $this->Html->Link('Lista de Personal',array('controller'=>'personalligas','action'=>'index')); ?></li>
                                  <li class="divider"></li>
                                  <li><?php echo $this->Html->Link('Registrar Personal',array('controller'=>'personalligas','action'=>'add')); ?></li>
                                </ul>
                        </li>
                        <?php endif; ?>
                  			
                  			<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Torneos<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><?php echo $this->Html->Link('Lista de Torneos',array('controller'=>'torneos','action'=>'index')); ?></li>
                                  <li class="divider"></li>
                  				        <li><?php echo $this->Html->Link('Lista de Predios',array('controller'=>'predios','action'=>'index')); ?></li>
                                </ul>
                        </li>
                  			
                  			


                        <?php if($current_user['role'] == 'admin'): ?>
                        <li>
                          <?php echo $this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'index')); ?>
                        </li>
                        <?php endif; ?>

			           </ul>


             <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo (' '.($current_user['username'])); ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                                   <li><?php echo $this->Html->Link('Ver Perfil',array('controller'=>'users','action'=>'view', $current_user['id'])); ?></li>
                                  <li class="divider"></li>
                                 
                                  <li><?php echo $this->Html->link('Salir del sistema', array('controller' => 'users', 'action' => 'logout')); ?></li>
                    </ul>
              </li>
            </ul>       
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
