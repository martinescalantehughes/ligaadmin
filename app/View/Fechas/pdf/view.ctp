<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
define("APPLICATIONTIMEFORMAT", "Y-m-d");

// this standard CakePHP does NOT work
echo $this->Html->meta('icon');
echo $this->Html->css('pdf');
echo $this->fetch('meta');
echo $this->fetch('css');

?>
<title>Fecha</title>
<link rel="stylesheet" type="text/css" href="<?php echo APP.'webroot'.DS.'css'.DS.'pdf.css'; ?>" media="all" />
<style type="text/css">

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

</style>
</head>

<body id="pdf">


<h2><?php echo('Torneo '.$fecha[0]['Torneo']['nombre'].' - Fecha Número '.$fecha[0]['Fecha']['numerofecha']);?></h2>
<p>Partidos de la fecha:</p>



									<?php if (!empty($fecha[0]['Partido'])): ?>
									<table>
									
									
									<tr>
										<th><?php echo __('Fecha'); ?></th>
										<th><?php echo __('Resultado'); ?></th>
										<th><?php echo __('Estado'); ?></th>
										<th><?php echo __('Local'); ?></th>
										<th><?php echo __('Visitante'); ?></th>
									</tr>
									<?php foreach ($fecha[0]['Partido'] as $partido): ?>
										<tr>
											
											<td><?php echo $partido['fecha']; ?></td>
											<td><?php echo $partido['resultado']; ?></td>
											<td><?php echo $partido['estado']; ?></td>
											<td><?php echo $partido['Locale']['Plantel']['Club']['nombrecorto']; ?></td>
											<td><?php echo $partido['Visitante']['Plantel']['Club']['nombrecorto']; ?></td>	
										</tr>



									
									<?php endforeach; ?>
									</table>
								<?php else: ?>
									<?php echo __('No existen partidos asociados a la fecha'); ?>

								<?php endif; ?>


</body>