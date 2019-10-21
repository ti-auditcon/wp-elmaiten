<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nature_Boutique
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="site-footer-inner width">
			<!-- Menús en el Footer -->
			<div class="nav-menus">
				<div>
					<h5>General</h5>
					<a href="#">Inicio</a>
					<a href="#">Productos</a>
					<a href="#">Servicios</a>
					<a href="#">Equipo</a>
					<a href="#">Contacto</a>
				</div>
				<div>
					<h5>Productos</h5>
					<a href="#">Portainjertos</a>
					<a href="#">Tipos de Plantas</a>
					<a href="#">Variedades</a>
				</div>
				<div>
					<h5>El Servicio</h5>
					<a href="#">Acompañamiento en la Venta</a>
					<a href="#">Post Venta</a>
					<a href="#">Instrucciones</a>
				</div>
			</div>
			<!-- Datos -->
			<div class="data-footer">
				<div>
					<h5>Oficina Central</h5>
					<p>
						Montt 357. of 702<br>
						Curicó Chile.
					</p>
				</div>
				<div>
					<h5>Teléfonos</h5>
					<p>
						<a href="tel:+56(752)323269">+56 (75 2) 323 269</a><br>
						<a href="tel:+56(752)311812">+56 (75 2) 311 812</a>
					</p>
				</div>
				<div>
					<h5>Vivero</h5>
					<p>
						Parcela 21 y 22<br>
						El Maitén, Curicó
					</p>
				</div>
				<div>
					<h5>Email</h5>
					<p>
						<a href="mailto:contacto@grupo-olivos.cl">contacto@grupo-olivos.cl</a>
					</p>
				</div>
			</div>
			<div class="credits">
				<p>© 2019 Viveros El Maitén.</p>
				<p>
					<img src="<?php bloginfo('template_url') ?>/img/asomic.png" alt="by asomic">
					Hecho en Curicó, Chile por <a href="https://asomic.com">asomic</a>
				</p>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
