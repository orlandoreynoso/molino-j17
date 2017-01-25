<div class="titulo--groupings">
	<h3>Agrupaciones</h3>
</div>

<div class="zerogrid" id="reflexiones">

<?php $the_query = new WP_Query(get_agrupaciones(14,20));  	?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	<div class="diario">
	  <div class="contenido_homilia"><?php obtener_pagina('Agrupaciones','reflexiones');  ?></div>
	</div>
<?php endwhile;?>

</div>	