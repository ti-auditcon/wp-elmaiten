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
 	<div class="header-page-inner width">
 		<h6>VIVEROS EL MAITÉN</h6>
 		<h3>Servicios</h3>
 		<!-- <p></p> -->
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

 <?php
 get_footer();
