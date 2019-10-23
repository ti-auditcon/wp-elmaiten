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

		<div class="item">
			<div class="img" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
			<div class="data">
				<h4>Victor Olivos Castro</h4>
				<h6>Gerente Agrícola</h6>
				<div class="contact">
					<a href="mailto:etc@etc.etc">victor@grupo-olivos.cl</a>
					<a href="#">+56 9 850 18 331</a>
				</div>
			</div>
		</div>

		<div class="item">
			<div class="img" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
			<div class="data">
				<h4>Claudia Marchant</h4>
				<h6>Jefe de producción raíz desnuda</h6>
				<div class="contact">
					<a href="mailto:etc@etc.etc">cmarchant@grupo-olivos.cl</a>
					<a href="#">+56 9 974 36 789</a>
				</div>
			</div>
		</div>

		<div class="item">
			<div class="img" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
			<div class="data">
				<h4>Nicolás Olivos Castro</h4>
				<h6>Jefe de producción en bolsa</h6>
				<div class="contact">
					<a href="mailto:etc@etc.etc">nicolas@grupo-olivos.cl</a>
					<a href="#">+56 9 974 36 508</a>
				</div>
			</div>
		</div>

		<div class="item">
			<div class="img" style="background-image: url('<?php bloginfo('template_url') ?>/img/green.jpg')"></div>
			<div class="data">
				<h4>Marcela Barra</h4>
				<h6>Encargada de calidad</h6>
				<div class="contact">
					<a href="mailto:etc@etc.etc">mbarra@grupo-olivos.cl</a>
					<a href="#">+56 9 9145 1852</a>
				</div>
			</div>
		</div>

	</div>
</section>

<?php
get_footer();
