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

	<div class="glide">

	  <div class="glide__track" data-glide-el="track">
	    <ul class="glide__slides">

	      <?php
				$args = array(
					'post_type' => 'diapositivas',
					'post_status' => 'publish'
				);

				$diapos_loop = new WP_Query($args);

				while ($diapos_loop->have_posts()) : $diapos_loop->the_post();
				?>

				<li class="glide__slide" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
	      	<?php the_title('<h1>', '</h1>'); ?>
					<div class="the-content">
						<?php the_content(); ?>
					</div>
					<?php
						$button_text = rwmb_meta( 'button_text' );
						$the_destination_postid = rwmb_meta( 'destiny_1' );
					?>
					<a class="btn" href="<?php echo get_the_permalink($the_destination_postid); ?>"><?php echo $button_text ?></a>
	      </li>

				<?php endwhile; wp_reset_postdata(); ?>

	    </ul>
	  </div>

		<!-- Controles -->
		<div class="glide__arrows" data-glide-el="controls">
	    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
				<span class="icon-left"></span>
	    </button>
	    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
	    	<span class="icon-right"></span>
	    </button>
	  </div>

		<!-- Bullets -->
		<div class="glide__bullets" data-glide-el="controls[nav]">

			<?php
			$args = array(
				'post_type' => 'diapositivas',
				'post_status' => 'publish'
			);

			$diapos_loop = new WP_Query($args);

			while ($diapos_loop->have_posts()) : $diapos_loop->the_post();
			?>

			<button class="glide__bullet" data-glide-dir="=<?php echo $diapos_loop->current_post; ?>"></button>

			<?php endwhile; wp_reset_postdata(); ?>

	  </div>

	</div>

	<section class="products-select">
		<div class="products-select-inner width">
			<a href="#" class="item">
				<h4>Portainjertos</h4>
				<div class="back" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
			</a>
			<a href="#" class="item">
				<h4>Tipos de Plantas</h4>
				<div class="back" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
			</a>
			<a href="#" class="item">
				<h4>Variedades</h4>
				<div class="back" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
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

	<div class="single-img">
		<div class="single-img-inner width">
			<img src="<?php bloginfo('template_url') ?>/img/green.jpg">
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
