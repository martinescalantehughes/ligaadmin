<div class="row">
<div class="col-md-10">
<?php echo $this->Form->create('Jugadore', array('type' => 'file',  'novalidate' => 'novalidate')); ?>
	<fieldset>
		<legend><?php echo __('Registrar Jugador'); ?></legend>


            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab"> Datos Personales</a></li>
                            <li><a href="#tab2default" data-toggle="tab"> Registro del Jugador</a></li>
                            
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                        	<div class="col-md-6">
                        	<?php
                        		echo $this->Form->input('Persona.id');
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

								
								<?php
								/*
								echo $this->Form->inputText('Persona.fechanac',array('label'=>'Fecha de Nacimiento','type'=>'date', 'class'=>'form-control','dateFormat'=>'d-m-Y','style'=>'width:200px;','required'));
								
								*/?>
								
							   

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
						  

								<script>
								
									  
									
								/*
								var js = jQuery.noConflict();
								
								js('#fechanac').datepicker({
								    format: "dd/mm/yyyy",
								    language: "es",
								    autoclose: true,
								    todayHighlight: true
								});
								*/
								
							       
								</script>


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
                        	<?php
			                  	echo $this->Form->input('Jugadore.apodo', array('label'=>'Apodo' ,'class'=>'form-control', 'placeholder'=>'Ingrese apodo...'));

								echo $this->Form->input('Jugadore.posicionjuego', array(
								    'type' => 'select', 'class'=>'form-control','style'=>'width:200px;',
								    'options' => array('Arquero' => 'Arquero', 'Defensor Central' => 'Defensor Central','Líbero'=>'Líbero','Lateral'=>'Lateral','Carrilero'=>'Carrilero','Medio Campista Central'=>'Medio Campista Central','Media Punta'=>'Enganche/Media Punta','Extremo'=>'Extremo','Centro Delantero'=>'Centro Delantero','Segundo Delantero'=>'Segundo Delantero'), 
								    'selected' => 'Arquero'
								));

								echo $this->Form->input('Jugadore.estado', array(
								    'type' => 'select', 'class'=>'form-control','style'=>'width:200px;',
								    'options' => array('Activo' => 'Activo', 'Retirado' => 'Retirado'), 
								    'selected' => 'Activo'
								));
								
								echo $this->Form->input('Jugadore.tipo', array(
								    'type' => 'select', 'class'=>'form-control','style'=>'width:200px;',
								    'options' => array('Futsal' => 'Futsal', 'Playa' => 'Playa', 'Fútbol'=>'Fútbol'), 
								    'selected' => 'Fútbol'
								));

								echo $this->Form->input('Jugadore.nivel', array(
								    'type' => 'select', 'class'=>'form-control','style'=>'width:200px;',
								    'options' => array('Aficionado' => 'Aficionado', 'Profesional' => 'Profesional'), 
								    'selected' => 'Aficionado'
								));

								echo $this->Form->input('Jugadore.estatura', array('label'=>'Estatura' ,'class'=>'form-control','style'=>'width:200px;', 'placeholder'=>'Ingrese estatura...'));

								echo $this->Form->input('Jugadore.peso', array('label'=>'Peso' ,'class'=>'form-control','style'=>'width:200px;', 'placeholder'=>'Ingrese peso...'));	

								echo $this->Form->input('Jugadore.nombrepadre', array('label'=>'Nombre del Padre' ,'class'=>'form-control', 'placeholder'=>'Ingrese nombre del padre...'));

								echo $this->Form->input('Jugadore.nombremadre', array('label'=>'Nombre de la Madre' ,'class'=>'form-control', 'placeholder'=>'Ingrese nombre de la madre...'));

								?>
							</div>
							<div class="col-md-6">
								
									<?php
									echo $this->Form->input('paise_id', array('label'=>'País','empty'=>'--Select--','class'=>'form-control'));  ?>          
									<div id="imgj">
							        <?php echo $this->Form->input('provincia_id',  array('label'=>'Provincia','empty'=>'--Select--','class'=>'form-control')); ?>
							        </div>
							        <div id="imgjj">
							        <?php echo $this->Form->input('localidade_id',  array('label'=>'Localidad','empty'=>'--Select--','class'=>'form-control')); ?>
							        </div>
							        
								<?php

								echo $this->Form->input('Jugadore.region', array('label'=>'Región' ,'class'=>'form-control', 'placeholder'=>'Ingrese región...'));

								
								echo $this->Form->hidden('Jugadore.persona_id');

								echo $this->Form->input('Jugadore.ligachaquenia_id',array('label'=>'Liga' ,'class'=>'form-control'));?>

								<label>Fecha de Afiliación</label>
							    <div class="input-group">
								    <?php echo $this->Form->input('Jugadore.fechaafiliacion', array(
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
								    <?php echo $this->Form->input('Jugadore.fecharenovacion', array(
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
                        </div> <!-- fin tab2 -->
                       
                    </div>
                </div>
            </div>




	</fieldset>

<p>					
	<?php echo $this->Form->end(array('label'=>'Guardar', 'class'=>'btn btn-success'));?>	
</p>



</div>

<div class="col-md-2">
	<div class="list-group">
	  	<a href="#" class="list-group-item list-group-item-info active">Tareas</a>
	  	<?php echo $this->Html->link(__('Lista de jugadores'), array('controller' => 'jugadores', 'action' => 'index'), array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Lista de personas'), array('controller' => 'personas', 'action' => 'index'), array('class'=>'list-group-item')); ?> 
		
	</div>
</div>

</div>
