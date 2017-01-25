<div class="titulo-recomendaciones">
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


<div class="c-recomendaciones">

<?php /*

	<?php get_laterales(1385,1,'Año de la misericordia','reflexiones'); ?>
	<?php get_laterales(1294,1,'Reflexiones Sacerdotales','reflexiones'); ?>			
	<?php get_laterales(1254,1,'Conozca Guatemala','reflexiones'); ?>
	<?php get_laterales(692,1,'Presentaciones','reflexiones'); ?>
	<?php get_laterales(737,1,'El atrio','reflexiones'); ?>

*/ ?>

<?php 
/*

   $category_posts = new WP_Query(
				array(                
				        'post_type' => 'page',
				        'post_parent'       => 1460,
				        'posts_per_page'         => 2,
    ));
         while($category_posts->have_posts()) : $category_posts->the_post();  ?>
		<div class="list">
		    <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a> 
		    <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>
<?php
      endwhile;
*/

/*========= Elaborando el loop para las recomendaciones ===========*/

get_recomendaciones_home(1326,2);
get_recomendaciones_home(9,2);
get_recomendaciones_home(9,2);
get_recomendaciones_home(1460,2);
get_recomendaciones_home(1429,2);


?>	
</div>  	