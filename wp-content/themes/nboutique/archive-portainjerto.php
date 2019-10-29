<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nature_Boutique
 */

get_header();
?>

<section class="header-page">
	<div class="header-page-inner">
		<h6>PRODUCTOS</h6>
		<h3>Portainjertos</h3>
		<p>Etiam semper rhoncus diam, et gravida massa volutpat id. In tempus nunc in purus tristique commodo. </p>
	</div>
</section>

<section class="products-select porta-items">
	<div class="products-select-inner width">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<a href="#" class="item open-post">
			<?php the_title('<h4>', '</h4>'); ?>
			<div class="back" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
		</a>
	<?php endwhile; else : ?>
	<?php endif; ?>

	</div>
</section>

<div class="single-img">
	<div class="single-img-inner width">
		<img src="<?php bloginfo('template_url') ?>/img/green.jpg">
	</div>
</div>

<!-- ITEMS -->
<?php
	$args = array(
		'post_type' => 'portainjerto',
		'post_status' => 'publish',
		'posts_per_page' => -1
	);

	$the_loop = new WP_Query($args);

	while ($the_loop->have_posts()) : $the_loop->the_post();
?>

	<div class="details-wrapper">
		<div class="details">
			<img src="<?php bloginfo('template_url') ?>/img/cross.svg" alt="Cerrar" class="close close-post">
			<div class="details-inner">
				<div class="img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
				<div class="data">
					<?php the_title('<h1>', '</h1>'); ?>
					<div class="item">
						<p><b>Origen botánico:</b> Híbrido <i>Prunus pseudocerasus x Prunus avium</i></p>
						<p><b>Obtenedor:</b> East Malling, USA </p>
					</div>
					<div class="item">
						<h6>Método de multiplicación</h6>
						<p><b>Propagación Vegetativa</b>: In vitro</p>
					</div>
					<div class="item">
						<h6>Características en Vivero</h6>
						<p><b>Tipo de Injerto</b>: Empalme Inglés</p>
						<p><b>Época de injertación</b>: Julio - Agosto</p>
					</div>
					<div class="item">
						<h6>Características en Huerto</h6>
						<p><b>Vigor Inducido</b>: Fuerte 70-80% de F-12-1</p>
					</div>
					<div class="item">
						<h6>Características Particulares</h6>
						<p>
							Sensibilidad a Agallas del Cuello (Agrobacterium tumefasciens)<br>
							Resistente a Asfixia radicular<br>
							Requiere de suelos drenados e irragados adecuadamente, poco tolerante a sequía y suelos altamente calcáreos.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; wp_reset_postdata(); ?>

<?php
get_footer();
