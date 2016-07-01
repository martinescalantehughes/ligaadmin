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
<title>stylus PDF</title>
// but this does...
<link rel="stylesheet" type="text/css" href="<?php echo APP.'webroot'.DS.'css'.DS.'pdf.css'; ?>" media="all" />
</head>
<body id="pdf">
// your logo is in the standard CakePHP location: /app/webroot/img
<?php echo $this->Html->image("logo.gif", array('fullBase' => true, "id"=>"logo")); ?>