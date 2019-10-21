<?php
/*
Template Name: Contacto
 */

get_header();
?>

<section class="header-page">
	<div class="header-page-inner width">
		<h6>VIVEROS EL MAITÉN</h6>
		<h3>Contacto</h3>
		<p>Etiam semper rhoncus diam, et gravida massa volutpat id. In tempus nunc in purus tristique commodo. </p>
	</div>
</section>

<div class="contact">
	<div class="contact-inner width">
		<div class="contact-info">
			<div class="item">
				<h6>Correo Electrónico</h6>
				<p>
					Puede contactarnos a través de este formulario o directamente al correo
					<a href="mailto:contacto@grupo-olivos.cl">contacto@grupo-olivos.cl</a>
				</p>
			</div>
			<div class="item">
				<h6>Horario de Atención</h6>
				<p>
					<b>Lunes a Viernes</b><br>
					09:00 a 17:00 hrs
				</p>
				<p>
					<b>Sábados</b><br>
					09:00 a 13:00 hrs
				</p>
			</div>
		</div>
		<div class="contact-form">
			<?php echo do_shortcode('[wpforms id="51" title="false" description="false"]') ?>
		</div>
	</div>
</div>

<div class="map">
	<div class="gmap_canvas">
		<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=35%C2%B003'20.4%22S%2071%C2%B013'19.4%22W&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
		</iframe>
	</div>
</div>

<?php
get_footer();
