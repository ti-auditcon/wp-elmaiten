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
		<h3>Variedades</h3>
		<p>Etiam semper rhoncus diam, et gravida massa volutpat id. In tempus nunc in purus tristique commodo. </p>
	</div>
</section>

<section class="var-items">
	<div class="var-items-inner width">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="item">
				<div class="img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
				<div class="data">
					<h4><?php the_title(); ?></h4>
					<div class="specific">
						<div class="item">
							<p><b>Floración:</b></p>
							<p><?php echo get_post_meta( $post->ID, 'caractersticas_floracin', true ) ?></p>
						</div>
						<div class="item">
							<p><b>Cosecha:</b></p>
							<p><?php echo get_post_meta( $post->ID, 'caractersticas_cosecha', true ) ?></p>
						</div>
						<div class="item">
							<p><b>Fruto:</b></p>
							<p><?php echo get_post_meta( $post->ID, 'caractersticas_fruto', true ) ?></p>
						</div>
						<div class="item">
							<p><b>Polonizantes:</b></p>
							<p><?php echo get_post_meta( $post->ID, 'caractersticas_polonizantes', true ) ?></p>
						</div>
					</div>
				</div>
			</div>
	<?php endwhile; else : ?>
	<?php endif; ?>

	</div>
</section>

<div class="cta">
	<div class="cta-inner width">
		<h6>NOMBRE</h6>
		<h1>Títuloo llamada a la acción</h1>
		<p>Puede servir para llevar a contacto o para concretar otra acción especial.</p>
		<a href="/" class="btn">
			Acción del Botón
		</a>
	</div>
</div>

<?php
get_footer();
