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
		<h6>PRODUCTOS</h6>
		<h3>Tipos de Plantas</h3>
		<p>Etiam semper rhoncus diam, et gravida massa volutpat id. In tempus nunc in purus tristique commodo. </p>
	</div>
</section>

<section class="plantas-items">
	<div class="plantas-items-inner width">

		<div class="item">
			<div class="img" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
			<div class="data">
				<h4>Portainjerto</h4>
				<h6>Raíz Desnuda</h6>
				<p>In hac habitasse platea dictumst. Donec commodo erat sit amet porttitor egestas. Donec eget feugiat tortor.</p>
				<div class="features">
					<div class="item">
						<p><b>Solo Portainjerto</b></p>
						<p>Base (diámetro y altuyra) según portainjerto</p>
					</div>
					<div class="item">
						<p><b>Injerto en terreno</b></p>
						<p>Base (diámetro y altuyra) según portainjerto</p>
					</div>
				</div>
			</div>
		</div>

		<div class="item">
			<div class="img" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
			<div class="data">
				<h4>Planta terminada</h4>
				<h6>Raíz Desnuda</h6>
				<p>In hac habitasse platea dictumst. Donec commodo erat sit amet porttitor egestas. Donec eget feugiat tortor.</p>
				<div class="features">
					<div class="item">
						<p><b>Tipo A</b></p>
						<p>Más de 1,60 Mts de altura</p>
					</div>
					<div class="item">
						<p><b>Tipo B</b></p>
						<p>De 1,40 a 1,60 Mts de altura</p>
					</div>
					<div class="item">
						<p><b>Tipo C</b></p>
						<p>Menos de 1,40 Mts de altura</p>
					</div>
				</div>
			</div>
		</div>

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
