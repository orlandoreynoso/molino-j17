<div class="zerogrid" id="titulo_cuadro_crecimiento">
	<h3>Recomendaciones</h3>
</div>


	<?php /*
			Esto al parece no tiene sentido ponerlo

<div class="zerogrid" id="reflexiones">
	<p>bla bla bla</p>

	

<?php $the_query = new WP_Query(get_agrupaciones(1385,1));  	?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	<div class="diario">
	  <div class="contenido_homilia"><?php obtener_pagina('Agrupaciones','reflexiones');  ?></div>
	</div>
<?php endwhile;?>
	<p>ble ble ble</p>


</div>
*/ ?>
<div class="zerogrid" id="reflexiones">
	<?php get_laterales(1385,1,'Año de la misericordia','reflexiones'); ?>
	<?php get_laterales(1294,1,'Reflexiones Sacerdotales','reflexiones'); ?>			
	<?php get_laterales(1254,1,'Conozca Guatemala','reflexiones'); ?>
	<?php get_laterales(692,1,'Presentaciones','reflexiones'); ?>
	<?php get_laterales(737,1,'El atrio','reflexiones'); ?>
</div>  	