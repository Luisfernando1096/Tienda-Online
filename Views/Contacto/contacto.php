<?php
headerTienda($data);
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];
?>
<script>
	document.querySelector('header').classList.add('header-v4');
</script>

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-t-30 p-b-30" style="background-image: url(<?= $banner ?>);"> <!-- Aumentar padding -->
	<h2 class="ltext-105 cl0 txt-center" style="color: #fcb388; margin: 0;">Contacto</h2> <!-- Sin cambios -->
</section>


<section class="bg0 p-t-15 p-b-30"> <!-- Ajustado padding -->
	<div class="container">
		<div class="flex-w flex-tr">
			<div class="size-210 bor10 p-lr-70 p-t-10 p-b-10 p-lr-15-lg w-full-md"> <!-- Ajustado padding -->
				<!-- Información de atención al cliente -->
				<div style="position: relative; display: inline-block;">
					<img class="contact__image" loading="lazy" alt="Contact Us" src="//bellisima.mx/cdn/shop/files/contact-us_1640x.jpg?v=1654104653" style="width: 100%; max-width: 530px; display: block; margin: 0 auto;">
					<div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: #624E88; opacity: 0.5;"></div> <!-- Superposición de color -->
				</div>

				<aside class="contact__aside">
					<div class="contact__text-list">
						<div class="contact__text-item text-container">
							<p class="heading heading--small" style="margin: 0;">¡Ponte en contacto con nosotros!</p> <!-- Eliminado margen -->
							<div class="rte">
								<p>
									<strong>800-841-5541<br>Horario de atención Lunes a Viernes 9:00 am a 7:00 pm<br><br>
										Horario de Atención vía Chat o WhatsApp<br>
										Lunes a viernes: 10:00 am - 10:00 pm<br>
										Sábado y domingo 11:30 a 2:00 pm y 4:00 pm a 9:00 pm</strong>
								</p>
							</div>
						</div>
					</div>
				</aside>

				<!-- Información de contacto -->
				<div class="contact-info mt-1"> <!-- Reducido margen -->
					<div class="flex-w w-full p-b-5"> <!-- Reducido padding -->
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>
						<div class="size-212 p-t-0">
							<span class="mtext-110 cl2">Dirección</span>
							<p class="stext-115 cl6 size-213 p-t-0"><?= DIRECCION ?></p>
						</div>
					</div>

					<div class="flex-w w-full p-b-5"> <!-- Reducido padding -->
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>
						<div class="size-212 p-t-0">
							<span class="mtext-110 cl2">Teléfono</span>
							<p class="stext-115 cl1 size-213 p-t-0">
								<a href="tel:<?= TELEMPRESA ?>"><?= TELEMPRESA ?></a>
							</p>
						</div>
					</div>

					<div class="flex-w w-full"> <!-- Reducido padding -->
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>
						<div class="size-212 p-t-0">
							<span class="mtext-110 cl2">E-mail</span>
							<p class="stext-115 cl1 size-213 p-t-0">
								<a href="mailto:<?= EMAIL_EMPRESA ?>"><?= EMAIL_EMPRESA ?></a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-5 p-lr-15-lg w-full-md"> <!-- Ajustado padding -->
				<form id="frmContacto" class="mt-2"> <!-- Reducido margen superior -->
					<h4 class="mtext-105 cl2 txt-center p-b-5" style="margin: 0;">Enviar un mensaje</h4> <!-- Eliminado margen -->

					<div class="bor8 m-b-5 how-pos4-parent"> <!-- Reducido margin -->
						<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" id="nombreContacto" name="nombreContacto" placeholder="Nombre completo" required>
						<img class="how-pos4 pointer-none" src="<?= media() ?>/tienda/images/icons/icon-name.png" alt="ICON" style="width: 28px;">
					</div>

					<div class="bor8 m-b-5 how-pos4-parent"> <!-- Reducido margin -->
						<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" id="emailContacto" name="emailContacto" placeholder="Correo electrónico" required>
						<img class="how-pos4 pointer-none" src="<?= media() ?>/tienda/images/icons/icon-email.png" alt="ICON">
					</div>

					<div class="bor8 m-b-10"> <!-- Reducido margin -->
						<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-20" id="mensaje" name="mensaje" placeholder="Cual es tu pregunta o mensaje?" required></textarea>
					</div>

					<button class="flex-c-m stext-101 cl0 size-121" style="background-color: #624E88; color: white; border: 1px solid transparent; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s, transform 0.3s;">
						Enviar
					</button>

				</form>
			</div>
		</div>
	</div>
</section>

<?php
if (viewPage($idpagina)) {
	echo $data['page']['contenido'];
} else {
?>
	<div>
		<div class="container-fluid py-5 text-center">
			<img src="<?= media() ?>/images/construction.png" alt="En construcción">
			<h3>Estamos trabajando para usted.</h3>
		</div>
	</div>
<?php
}
footerTienda($data);
?>