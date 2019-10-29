<?php
/*
Template Name: Nosotros
 */

get_header();
?>

<section class="header-page">
	<div class="header-page-inner width">
		<h6>VIVEROS EL MAITÉN</h6>
		<h3>Nosotros</h3>
		<p>Etiam semper rhoncus diam, et gravida massa volutpat id. In tempus nunc in purus tristique commodo. </p>
	</div>
</section>

<div class="equipo-img">
	<div class="equipo-img-inner width">
		<img src="<?php bloginfo('template_url') ?>/img/green.jpg">
	</div>
</div>

<section class="equipo">
	<div class="equipo-inner width">

		<?php
			$args = array(
				'post_type' => 'equipo',
				'post_status' => 'publish'
			);

			$equipo_loop = new WP_Query($args);

			while ($equipo_loop->have_posts()) : $equipo_loop->the_post();
		?>

		<div class="item">
			<div class="data">
				<h4><?php the_title(); ?></h4>
				<h6><?php echo get_post_meta( $post->ID, 'datos_cargo', true ); ?></h6>
				<div class="contact">
					<a href="mailto:<?php echo get_post_meta( $post->ID, 'datos_correo', true ); ?>"><?php echo get_post_meta( $post->ID, 'datos_correo', true ); ?></a>
					<a href="tel:<?php echo get_post_meta( $post->ID, 'datos_nmero-de-contacto', true ); ?>"><?php echo get_post_meta( $post->ID, 'datos_nmero-de-contacto', true ); ?></a>
				</div>
			</div>
		</div>

		<?php endwhile; wp_reset_postdata(); ?>

	</div>
</section>

<div class="showcase-service with-background">
	<div class="showcase-service-item width">
		<div class="img" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
		<div class="data no-button">
			<h3>
				Nos importa nuestro entorno
			</h3>
			<p>
				Duis non molestie odio. Fusce lacinia nisi ipsum, vel sodales lorem convallis commodo. Sed at convallis libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus elementum consectetur vestibulum. In hac habitasse platea dictumst. Nulla tempus nulla ac sem maximus, nec pellentesque tellus tempor.
			</p>
		</div>
	</div>
</div>

<div class="showcase-service">
	<div class="showcase-service-item width">
		<div class="img" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
		<div class="data no-button">
			<h3>
				Preocupación por los trabajadores
			</h3>
			<p>
				Duis non molestie odio. Fusce lacinia nisi ipsum, vel sodales lorem convallis commodo. Sed at convallis libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus elementum consectetur vestibulum. In hac habitasse platea dictumst. Nulla tempus nulla ac sem maximus, nec pellentesque tellus tempor.
			</p>
		</div>
	</div>
</div>

<?php
get_footer();
