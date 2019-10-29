<?php
/*
Template Name: Inicio
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
 			<a href="/portainjerto" class="item">
 				<h4>Portainjertos</h4>
 				<div class="back" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
 			</a>
 			<a href="/plantas" class="item">
 				<h4>Tipos de Plantas</h4>
 				<div class="back" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
 			</a>
 			<a href="/variedades" class="item">
 				<h4>Variedades</h4>
 				<div class="back" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
 			</a>
 		</div>
 	</section>

 	<div class="showcase-service with-background">
 		<div class="showcase-service-item width">
 			<div class="img" style="background-image: url('<?php echo get_post_meta( $post->ID, 'caracterstica_destacada_1_imagen', true ) ?>')"></div>
 			<div class="data">
 				<h3>
 					<?php echo get_post_meta( $post->ID, 'caracterstica_destacada_1_ttulo', true ); ?>
 				</h3>
 				<p>
					<?php echo get_post_meta( $post->ID, 'caracterstica_destacada_1_texto', true ); ?>
 				</p>

				<?php $id_boton_uno = get_post_meta( $post->ID, 'caracterstica_destacada_1_destino-del-boton', true ); ?>

				<a href="<?php echo get_the_permalink($id_boton_uno) ?>" class="btn">
 					<?php echo get_post_meta( $post->ID, 'caracterstica_destacada_1_texto-del-botn', true ); ?>
 				</a>
 			</div>
 		</div>
 	</div>

 	<div class="showcase-service">
 		<div class="showcase-service-item width">
 			<div class="img" style="background-image: url('<?php echo get_post_meta( $post->ID, 'caracterstica_destacada_2_imagen_dos', true ) ?>')"></div>
 			<div class="data">
 				<h3>
 					<?php echo get_post_meta( $post->ID, 'caracterstica_destacada_2_ttulo_dos', true ); ?>
 				</h3>
 				<p>
 					<?php echo get_post_meta( $post->ID, 'caracterstica_destacada_2_texto_dos', true ); ?>
 				</p>

        <?php $id_boton_dos = get_post_meta( $post->ID, 'caracterstica_destacada_2_destino-del-boton_dos', true ); ?>

 				<a href="<?php echo get_the_permalink($id_boton_dos) ?>" class="btn">
 					<?php echo get_post_meta( $post->ID, 'caracterstica_destacada_2_texto-del-botn_dos', true ); ?>
 				</a>
 			</div>
 		</div>
 	</div>

 	<div class="single-img">
 		<div class="single-img-inner width no-pd-top">
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
