<?php 

/*

Template Name: HOME

 */

?>


<?php get_header(); ?>


<section>
	<article class="space" id="cuadro_banner">
		<?php include (TEMPLATEPATH . '/libs/banner.php');  ?>
	</article>

	<article class="space" id="cuadro_iglesia">
		<?php include (TEMPLATEPATH . '/libs/infoparroquial.php');  ?>
	</article>		

	<div class="zerogrid" id="home">
			<?php include (TEMPLATEPATH.'/libs/ultimasnoticias.php');  ?>		
	</div>

	<article class="space" id="cuadro_reflexiones">	
		<?php include (TEMPLATEPATH.'/libs/recomendaciones.php');  ?>
	</article>	

	<article class="space" id="cuadro_reflexiones">
		<?php include (TEMPLATEPATH.'/libs/agrupaciones.php');  ?>
	</article>

</section>

<?php get_footer(); ?>