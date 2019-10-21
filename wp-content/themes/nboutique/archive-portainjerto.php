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
		<a href="#" class="item">
			<h4>Colt</h4>
			<div class="back" style="background-image: url('<?php bloginfo('template_url') ?>/img/p-portainjertos.jpg')"></div>
		</a>
		<a href="#" class="item">
			<h4>Maxma 14</h4>
			<div class="back" style="background-image: url('<?php bloginfo('template_url') ?>/img/p-tipos.jpg')"></div>
		</a>
		<a href="#" class="item">
			<h4>Gisela 6</h4>
			<div class="back" style="background-image: url('<?php bloginfo('template_url') ?>/img/p-variedades.jpg')"></div>
		</a>
	</div>
</section>

<div class="single-img">
	<div class="single-img-inner width">
		<img src="<?php bloginfo('template_url') ?>/img/green.jpg">
	</div>
</div>

<?php
get_footer();
