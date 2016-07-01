<div class="row">
<div class="col-md-10">
<?php echo $this->Form->create('Personaltecnico', array('type' => 'file',  'novalidate' => 'novalidate')); ?>
	<fieldset>
		<legend><?php echo __('Primer Registro del Personal Técnico'); ?></legend>

            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab"> Datos Personales</a></li>
                            <li><a href="#tab2default" data-toggle="tab"> Registro de Afilicación del Personal Técnico</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                        	<div class="col-md-6">
                        	<?php
                        		echo $this->Form->input('Persona.nombre', array('label'=>'Nombres' ,'class'=>'form-control', 'placeholder'=>'Ingrese Nombre...'));

								echo $this->Form->input('Persona.apellido', array('label'=>'Apellidos' ,'class'=>'form-control', 'placeholder'=>'Ingrese Apellido...'));

								echo $this->Form->input('Persona.foto', array('type' => 'file', 'label' => 'Foto', 'id' => 'foto', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));

				    			echo $this->Form->input('Persona.foto_dir', array('type' => 'hidden'));

								echo $this->Form->input('Persona.dni', array('label'=>'DNI' ,'class'=>'form-control','style'=>'width:200px;', 'placeholder'=>'Ingrese DNI...'));

								echo $this->Form->input('Persona.cuil', array('label'=>'CUIL' ,'class'=>'form-control','style'=>'width:200px;', 'placeholder'=>'Ingrese CUIL...'));

								echo $this->Form->input('Persona.pasaporte', array('label'=>'Pasaporte' ,'class'=>'form-control','style'=>'width:200px;', 'placeholder'=>'Ingrese pasaporte...'));

								echo $this->Form->input('Persona.sexo', array(
								    'type' => 'select', 'class'=>'form-control','style'=>'width:200px;',
								    'options' => array('Masculino' => 'Masculino', 'Femenino' => 'Femenino'), 
								    'selected' => 'Masculino'
								));?>

								<label>Fecha de Nacimiento</label>
							    <div class="input-group">
								    <?php echo $this->Form->input('Persona.fechanac', array(
								    	'label' => 'Fecha de Nacimiento',
								    	'dateFormat' => 'DMY',
									    'minYear' => date('Y') - 5,
									    'maxYear' => 1900,
								        'class' => 'form-control',
								        'div' => array('class' => 'form-inline'),
								        'between' => '<div class="form-group">',
								        'separator' => '</div><div class="form-group">',
								        'after' => '</div>',
								        'label'=>false
								    ));?>
								</div>


							</div>
							<div class="col-md-6">
								
								<?php

									echo $this->Form->input('Persona.paise_id', array('label'=>'País','options'=>$paises,'empty'=>'--Select--','class'=>'form-control'));     ?>       
									
							        <?php echo $this->Form->input('Persona.provincia_id',  array('label'=>'Provincia','empty'=>'--Select--','class'=>'form-control'));  ?>
							       
							        <?php echo $this->Form->input('Persona.localidade_id',  array('label'=>'Localidad','empty'=>'--Select--','class'=>'form-control')); ?>
							        


								<?php
								echo $this->Form->input('Persona.direccion', array('label'=>'Dirección' ,'class'=>'form-control', 'placeholder'=>'Ingrese Dirección...'));

								echo $this->Form->input('Persona.codigopostal', array('label'=>'Código Postal' ,'class'=>'form-control','style'=>'width:200px;', 'placeholder'=>'Ingrese código postal...'));   

								
								echo $this->Form->input('Persona.email', array('label'=>'Email' ,'class'=>'form-control', 'placeholder'=>'Ingrese email...'));

								echo $this->Form->input('Persona.telefono', array('label'=>'Teléfono' ,'class'=>'form-control', 'placeholder'=>'Ingrese teléfono...'));?>
							
							</div>

                        </div>


                        <div class="tab-pane fade" id="tab2default">
                        	<div class="col-md-6">

								<label>Fecha de Afiliación</label>
							    <div class="input-group">
								    <?php echo $this->Form->input('Personaltecnico.fechaafiliacion', array(
								    	'dateFormat' => 'DMY',
									    'minYear' => date('Y') - 5,
									    'maxYear' => 1900,
								        'class' => 'form-control',
								        'div' => array('class' => 'form-inline'),
								        'between' => '<div class="form-group">',
								        'separator' => '</div><div class="form-group">',
								        'after' => '</div>',
								        'label'=>false
								    ));?>
								</div>

								<label>Fecha de Renovación de carnet</label>
							    <div class="input-group">
								    <?php echo $this->Form->input('Personaltecnico.fecharenovacion', array(
								    	'dateFormat' => 'DMY',
									    'minYear' => date('Y') + 2,
									    'maxYear' => date('Y'),
									    
									    'selected' => array(
									    'day' => date('D'),
									    'month' => date('M'),
									    'year' => date('Y') + 2
									    
									    ),
								        'class' => 'form-control',
								        'div' => array('class' => 'form-inline'),
								        'between' => '<div class="form-group">',
								        'separator' => '</div><div class="form-group">',
								        'after' => '</div>',
								        'label'=>false
								    ));?>
								</div>

							</div>


							<div class="col-md-6">
							

								
								<?php

									echo $this->Form->hidden('Personaltecnico.persona_id');

									echo $this->Form->input('Personaltecnico.ligachaquenia_id',array('label'=>'Liga' ,'class'=>'form-control'))
								?>                        	
							</div>


                        </div> <!-- fin tab2 -->

                    </div>
                </div>
            </div>




	</fieldset>

<p>					
	<?php echo $this->Form->end(array('label'=>'Registrar', 'class'=>'btn btn-success'));?>	
</p>



</div>












<div class="col-md-2">
	<div class="list-group">
	  <a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  <?php echo $this->Html->link(__('Lista de personal técnico'), array('controller' => 'personaltecnicos', 'action' => 'index'), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Busqueda de datos personales'), array('controller' => 'personas', 'action' => 'index'), array('class'=>'list-group-item')); ?> 

	</div>
</div>

</div>