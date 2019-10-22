<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nature_Boutique
 */

get_header();
?>

<section class="header-page">
	<div class="header-page-inner">
		<h6>SERVICIOS</h6>
		<h3><?php the_title(); ?></h3>
		<p>Etiam semper rhoncus diam, et gravida massa volutpat id. In tempus nunc in purus tristique commodo. </p>
	</div>
</section>

<?php
		$images1 = rwmb_meta( 'image_advanced_1', array( 'size' => 'full' ) );
		foreach ( $images1 as $image ) {
			$image1 = $image['url'];
		}
		$titulo1 = rwmb_meta( 'text_1' );
		$texto1 = rwmb_meta( 'textarea_1' );

		$images2 = rwmb_meta( 'image_advanced_2', array( 'size' => 'full' ) );
		foreach ( $images2 as $image ) {
			$image2 = $image['url'];
		}
		$titulo2 = rwmb_meta( 'text_2' );
		$texto2 = rwmb_meta( 'textarea_2' );

		$images3 = rwmb_meta( 'image_advanced_3', array( 'size' => 'full' ) );
		foreach ( $images3 as $image ) {
			$image3 = $image['url'];
		}
		$titulo3 = rwmb_meta( 'text_3' );
		$texto3 = rwmb_meta( 'textarea_3' );
?>

<div class="showcase-service">
	<div class="showcase-service-item width">
		<div class="img" style="background-image: url('<?php echo $image1 ?>')"></div>
		<div class="data">
			<h3><?php echo $titulo1; ?></h3>
			<p><?php echo $texto1; ?></p>
		</div>
	</div>
</div>

<div class="showcase-service with-background">
	<div class="showcase-service-item width">
		<div class="img" style="background-image: url('<?php echo $image2 ?>')"></div>
		<div class="data">
			<h3><?php echo $titulo2; ?></h3>
			<p><?php echo $texto2; ?></p>
		</div>
	</div>
</div>

<div class="showcase-service">
	<div class="showcase-service-item width">
		<div class="img" style="background-image: url('<?php echo $image3 ?>')"></div>
		<div class="data">
			<h3><?php echo $titulo3; ?></h3>
			<p><?php echo $texto3; ?></p>
		</div>
	</div>
</div>

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
