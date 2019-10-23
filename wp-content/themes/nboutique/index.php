<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nature_Boutique
 */

get_header();
?>

	<section class="slider">
	</section>

	<section class="products-select">
		<div class="products-select-inner width">
			<a href="#" class="item">
				<h4>Portainjertos</h4>
				<div class="back" style="background-image: url('<?php bloginfo('template_url') ?>/img/p-portainjertos.jpg')"></div>
			</a>
			<a href="#" class="item">
				<h4>Tipos de Plantas</h4>
				<div class="back" style="background-image: url('<?php bloginfo('template_url') ?>/img/p-tipos.jpg')"></div>
			</a>
			<a href="#" class="item">
				<h4>Variedades</h4>
				<div class="back" style="background-image: url('<?php bloginfo('template_url') ?>/img/p-variedades.jpg')"></div>
			</a>
		</div>
	</section>

	<div class="showcase-service with-background">
		<div class="showcase-service-item width">
			<div class="img" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
			<div class="data">
				<h3>
					Acompañamiento en la Venta
				</h3>
				<p>
					Duis non molestie odio. Fusce lacinia nisi ipsum, vel sodales lorem convallis commodo. Sed at convallis libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus elementum consectetur vestibulum. In hac habitasse platea dictumst. Nulla tempus nulla ac sem maximus, nec pellentesque tellus tempor.
				</p>
				<a href="/servicios/acompanamiento-en-la-venta/" class="btn">
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
					Servicio post venta
				</h3>
				<p>
					Duis non molestie odio. Fusce lacinia nisi ipsum, vel sodales lorem convallis commodo. Sed at convallis libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus elementum consectetur vestibulum. In hac habitasse platea dictumst. Nulla tempus nulla ac sem maximus, nec pellentesque tellus tempor.
				</p>
				<a href="/servicios/post-venta/" class="btn">
					Más Información
				</a>
			</div>
		</div>
	</div>

	<section class="analisis">
		<div class="analisis-inner width">
			<h3>Antecedentes de nuestras plantas</h3>
			<p>
				Etiam semper rhoncus diam, et gravida massa volutpat id. In tempus nunc in purus tristique commodo.
			</p>
			<div class="logos">
				<img src="<?php bloginfo('template_url') ?>/img/analisis-fitopatologico.png" alt="">
				<img src="<?php bloginfo('template_url') ?>/img/analisis-sag.png" alt="">
				<img src="<?php bloginfo('template_url') ?>/img/analisis-suelo.png" alt="">
			</div>
		</div>
	</section>

	<div class="single-img">
		<div class="single-img-inner width">
			<img src="<?php bloginfo('template_url') ?>/img/green.jpg">
		</div>
	</div>

<?php
get_footer();
