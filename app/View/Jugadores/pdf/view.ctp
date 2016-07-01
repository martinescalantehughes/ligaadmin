<!DOCTYPE html>
<html>
<head>
<?php
define("APPLICATIONTIMEFORMAT", "Y-m-d");

// this standard CakePHP does NOT work
echo $this->Html->meta('icon');
echo $this->Html->css('pdf');
echo $this->fetch('meta');
echo $this->fetch('css');
?>
<title>Jugador</title>
<link rel="stylesheet" type="text/css" href="<?php echo APP.'webroot'.DS.'css'.DS.'pdf.css'; ?>" media="all" />
<style type="text/css">


	.carnet1 {
		height:230px;
		width:341px;		
		border-collapse: collapse;
		padding:10px;
		max-height:230px;
		max-width:341px;
		border-left: 1px solid black ; 
		border-bottom: 1px solid black; 
		border-top: 1px solid black;
		border-right: 1px solid black;

	}

	.carnet1 th {
		height:25px;
		text-align: center;
		padding:10px 0 10px 0;
		background: #FDD531;
		font-family: sans-serif;
		font-size:11pt;
		vertical-align: center;
		border-bottom: 1px solid black; 
	}

	.carnet1 td {
		border:0px #FFFFFF;
		height:165px;
		background:#FFFFFF;
		text-align: left;
		font-size:9pt;
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		padding: 10px;
		vertical-align: top;
		margin-right: 0px;
	}


	.carnet2 {
		width:341px;
		height:230px;
		border-collapse: collapse;
		padding:10px;
		max-height:230px;
		max-width:341px;
		border-left: 1px solid black ; 
		border-bottom: 1px solid black; 
		border-top: 1px solid black;
		border-right: 1px solid black;
	}

	.carnet2 td {
		border:0px #FFFFFF;
		background:#FFFFFF;
		text-align: left;
		font-size:10pt;
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		padding: 20px;
		vertical-align: top;
		margin-right: 0px;
		height: 190px;	

	}

</style>
</head>

<body id="pdf">


<table class="carnet1">
	<thead>
	<tr>
		<th colspan="2">
		<img src="<?php echo Router::url('/img/liga.png', true);?>"  height="30" width="25">&nbsp;Liga Chaque&ntilde;a de F&uacute;tbol
		</th>

	</tr>

	</thead>
	
	<tbody>
	<tr>

		<td width=60px><img src="<?php echo Router::url('/files/persona/foto/' . $jugadore['Persona']['foto_dir'] .'/' .'thumb_' . $jugadore['Persona']['foto'], true); ?>" border="1"/>
		</td>


		<td>
		<strong><u>Carnet del Jugador</u></strong>
		<br/>
		<br/>
		<strong><?php echo __('DNI: '); ?></strong><?php echo h($jugadore['Persona']['dni']); ?>
		<br/>
		<strong><?php echo __('Nombre: '); ?></strong><?php echo h($jugadore['Persona']['nombre']); ?>
		<br/>
		<strong><?php echo __('Apellido: '); ?></strong><?php echo h($jugadore['Persona']['apellido']); ?>
		<br/>
		<strong><?php echo __('Fecha de nacimiento: '); ?></strong><?php echo h($jugadore['Persona']['fechanac']); ?>
		<br/>
		<br/>
		<strong><?php echo __('Fecha de vencimiento.: '); ?></strong></strong><?php echo h($jugadore['Jugadore']['fecharenovacion']); ?>
		&nbsp;
		</td>


	</tr>
	
	
	</tbody>

</table>

<table class="carnet2">
	
	
	<tbody>
	<tr>

		<td>
		<strong>Liga Chaquenia de Futbol</strong> 
		<br/>
		<br/>
		<strong>Direccion</strong>Calle Brown 227 
		<br/>
		<strong>Código Postal:</strong>3500 Resistencia
		<br/> 
		<strong>Chaco - Argentina</strong>
		<br/>
		<strong>Telefono</strong>0362 442 2112
		&nbsp;
		</td>
		<td width=60px>
			<img src="<?php echo Router::url('/img/liga2.png', true);?>"  height="60" width="50">
		</td>


	</tr>
	
	
	</tbody>

</table>

</body>