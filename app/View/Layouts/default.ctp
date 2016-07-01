<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'LigaAdmin');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<?php echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, minimum-scale=1, maximum-scale=1')); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('estilos','style.css','bootstrap.min','bootstrap-theme.min','fileinput.min','jquery-ui.min'));
		echo $this->Html->script(array('jquery.min','docs.min','bootstrap.min','fileinput.min','funciones','search','input'));

		echo $this->Html->script('/bootstrap-datepicker/js/bootstrap-datepicker.min.js');
		echo $this->Html->script('/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js');
		echo $this->Html->css('/bootstrap-datepicker/css/bootstrap-datepicker.min.css');

		$this->Html->script('/select2/select2.min.js', false);

        $this->Html->css('/select2/select2.css', null, array('inline' => false));

         

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

	<script>


   var js = jQuery.noConflict();
   js("#foto").fileinput();

   </script>
   

   <script>
        (function ($) {
    "use strict";

    $.fn.select2.locales['es'] = {
        formatNoMatches: function () { return "No se encontraron resultados"; },
        formatInputTooShort: function (input, min) { var n = min - input.length; return "Por favor, introduzca " + n + " car" + (n == 1? "ácter" : "acteres"); },
        formatInputTooLong: function (input, max) { var n = input.length - max; return "Por favor, elimine " + n + " car" + (n == 1? "ácter" : "acteres"); },
        formatSelectionTooBig: function (limit) { return "Sólo puede seleccionar " + limit + " elemento" + (limit == 1 ? "" : "s"); },
        formatLoadMore: function (pageNumber) { return "Cargando más resultados…"; },
        formatSearching: function () { return "Buscando…"; }
    };

    $.extend($.fn.select2.defaults, $.fn.select2.locales['es']);
})(jQuery);
    </script>
   <?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=true', false); ?>
	

</head>
<body role="document">

	<?php if(isset($current_user)): ?>
		<?php echo $this->element('menu'); ?>
	<?php endif; ?>
	

   <div class="container" role="main">

    	<?php echo $this->Session->flash(); ?>
    	<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->fetch('content'); ?>

		<br>
			<div id="msg"></div>
		<br>
		

		<div class="col-md-12">
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p class="pull-right">&copy; 2015 LigaAdmin Co. &middot;</p>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
			
		</div>
		</div>


    </div>

</body>
</html>
