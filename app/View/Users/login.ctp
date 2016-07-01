<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('LigaAdmin', array('controller' => 'users', 'action' => 'login'), array('class' => 'navbar-brand')) ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php echo $this->Form->create('User', array('class' => 'navbar-form navbar-right')); ?>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <?php echo $this->Form->input('username', array('label' => false,'autocomplete'=>'off', 'class' => 'form-control', 'placeholder' => 'Usuario')); ?>                                        
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <?php echo $this->Form->input('password', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Contraseña')); ?>                                    
                        </div>

            <?php echo $this->Form->button('Acceder', array('class' => 'btn btn-primary')); ?>
          <?php echo $this->Form->end(); ?>
        </div><!--/.navbar-collapse -->
      </div>
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenido a LigaAdmin</h1>
          <p>Sistema Web de Gestión de la Liga Chaqueña de Fútbol</p>
      </div>
    </div>

  