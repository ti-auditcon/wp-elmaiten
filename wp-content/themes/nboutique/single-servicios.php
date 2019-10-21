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

<div class="showcase-service">
	<div class="showcase-service-item width">
		<div class="img" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
		<div class="data">
			<h3>
				Revisión del lugar a plantar
			</h3>
			<p>
				Duis non molestie odio. Fusce lacinia nisi ipsum, vel sodales lorem convallis commodo. Sed at convallis libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus elementum consectetur vestibulum. In hac habitasse platea dictumst. Nulla tempus nulla ac sem maximus, nec pellentesque tellus tempor.
			</p>
			<a href="/" class="btn">
				Más Información
			</a>
		</div>
	</div>
</div>

<div class="showcase-service with-background">
	<div class="showcase-service-item width">
		<div class="img" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
		<div class="data">
			<h3>
				Checklist previo a entrega
			</h3>
			<p>
				Duis non molestie odio. Fusce lacinia nisi ipsum, vel sodales lorem convallis commodo. Sed at convallis libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus elementum consectetur vestibulum. In hac habitasse platea dictumst. Nulla tempus nulla ac sem maximus, nec pellentesque tellus tempor.
			</p>
			<a href="/" class="btn">
				Más Información
			</a>
		</div>
	</div>
</div>

<div class="showcase-service">
	<div class="showcase-service-item width">
		<div class="img" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
		<div class="data">
			<h3>
				Revisión post plantación
			</h3>
			<p>
				Duis non molestie odio. Fusce lacinia nisi ipsum, vel sodales lorem convallis commodo. Sed at convallis libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus elementum consectetur vestibulum. In hac habitasse platea dictumst. Nulla tempus nulla ac sem maximus, nec pellentesque tellus tempor.
			</p>
			<a href="/" class="btn">
				Más Información
			</a>
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
