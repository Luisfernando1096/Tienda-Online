<?php
$cantCarrito = 0;
if (isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0) {
	foreach ($_SESSION['arrCarrito'] as $product) {
		$cantCarrito += $product['cantidad'];
	}
}
$tituloPreguntas = !empty(getInfoPage(PPREGUNTAS)) ? getInfoPage(PPREGUNTAS)['titulo'] : "";
$infoPreguntas = !empty(getInfoPage(PPREGUNTAS)) ? getInfoPage(PPREGUNTAS)['contenido'] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $data['page_tag']; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?php
	$nombreSitio = NOMBRE_EMPESA;
	$descripcion = DESCRIPCION;
	$nombreProducto = NOMBRE_EMPESA;
	$urlWeb = base_url();
	$urlImg = media() . "/images/portada.jpg";
	if (!empty($data['producto'])) {
		//$descripcion = $data['producto']['descripcion'];
		$descripcion = DESCRIPCION;
		$nombreProducto = $data['producto']['nombre'];
		$urlWeb = base_url() . "/tienda/producto/" . $data['producto']['idproducto'] . "/" . $data['producto']['ruta'];
		$urlImg = $data['producto']['images'][0]['url_image'];
	}
	?>
	<meta property="og:locale" content='es_ES' />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?= $nombreSitio; ?>" />
	<meta property="og:description" content="<?= $descripcion; ?>" />
	<meta property="og:title" content="<?= $nombreProducto; ?>" />
	<meta property="og:url" content="<?= $urlWeb; ?>" />
	<meta property="og:image" content="<?= $urlImg; ?>" />

	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= media() ?>/tienda/images/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
	<!--===============================================================================================-->
</head>

<body class="animsition">
	<!-- Modal -->
	<div class="modal fade" id="modalAyuda" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><?= $tituloPreguntas ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="page-content">
						<?= $infoPreguntas; ?>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<div id="divLoading">
		<div>
			<img src="<?= media(); ?>/images/loading.svg" alt="Loading">
		</div>
	</div>
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="message-nav">
						<button id="prevMessage">←</button>
					</div>
					<div class="message-container">
						<span class="message" id="message1">Bienvenido a nuestra tienda de cosméticos.</span>
						<span class="message" id="message2" style="display:none;">Disfruta de un 20% de descuento en tu primera compra.</span>
						<span class="message" id="message3" style="display:none;">¡No te pierdas nuestras ofertas especiales!</span>
					</div>
					<div class="message-nav">
						<button id="nextMessage">→</button>
					</div>
				</div>
			</div>


			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					<!-- Logo desktop -->
					<a href="<?= base_url(); ?>" class="logo">
						<img src="<?= media() ?>/tienda/images/logo1.png" alt="Tienda Virtual">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="<?= base_url(); ?>">Inicio</a>
							</li>
							<li>
								<a href="<?= base_url(); ?>/tienda">Tienda</a>
							</li>
							<li>
								<a href="<?= base_url(); ?>/carrito">Carrito</a>
							</li>
							<li>
								<a href="<?= base_url(); ?>/nosotros">Nosotros</a>
							</li>
							<li>
								<a href="<?= base_url(); ?>/contacto">Contacto</a>
							</li>
						</ul>
					</div>


					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="search-container">
							<form method="get" action="<?= base_url() ?>/tienda/search" class="flex-w">
								<input type="hidden" name="p" value="1">
								<input type="text" name="s" class="search-input" placeholder="Buscar..." required />
								<button class="flex-c-m trans-04" type="submit">
									<i class="zmdi zmdi-search"></i>
								</button>
							</form>
						</div>

						<?php if ($data['page_name'] != "carrito" and $data['page_name'] != "procesarpago") { ?>
							<div class="cantCarrito icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?= $cantCarrito; ?>">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
						<?php } ?>

						<!-- Icono de usuario con mensaje de bienvenida -->
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-user-menu" id="user-menu">
							<i class="zmdi zmdi-account"></i>
							<?php if (isset($_SESSION['login'])) { ?>
								<span class="welcome-message"><?= $_SESSION['userData']['nombres'] . ' ' . $_SESSION['userData']['apellidos']; ?></span>
							<?php } ?>
							<div class="user-menu-content">
								<?php if (isset($_SESSION['login'])) { ?>
									<div class="user-menu-item"><a href="<?= base_url() ?>/dashboard">Mi cuenta</a></div>
									<div class="user-menu-item"><a href="<?= base_url() ?>/logout">Salir</a></div>
								<?php } else { ?>
									<div class="user-menu-item"><a href="<?= base_url() ?>/login">Iniciar Sesión</a></div>
								<?php } ?>
								<div class="user-menu-item"><a href="#" data-toggle="modal" data-target="#modalAyuda">Help & FAQs</a></div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<style>
			.user-menu-content {
				display: none;
				position: absolute;
				background-color: white;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
				z-index: 1000;
				right: 10px;
				width: 160px;
				padding: 10px;
			}

			#user-menu:hover .user-menu-content {
				display: block;
			}

			.user-menu-item {
				padding: 8px 12px;
				font-size: 14px;
			}

			.user-menu-item a {
				color: #333;
				text-decoration: none;
				display: block;
			}

			.user-menu-item a:hover {
				background-color: #f0f0f0;
			}

			.welcome-message {
				margin-left: 10px;
				/* Espacio entre el icono y el mensaje */
				font-size: 14px;
				/* Tamaño del texto */
				color: #333;
				/* Color del texto */
			}


			.search-container {
				display: flex;
				/* Alinea el input y el ícono horizontalmente */
				align-items: center;
				/* Centra verticalmente los elementos */
				border: 2px solid #e6e6e6;
				/* Borde alrededor del input */
				background: #fff;
				/* Fondo blanco */
				padding: 5px;
				/* Espaciado interno */
				border-radius: 5px;
				/* Esquinas redondeadas */
			}

			.search-input {
				height: 30px;
				width: 400px; /* Ajusta el valor según tus necesidades */
				/* Ajusta la altura del input */
				padding: 0 10px;
				/* Espaciado interno del input */
				font-size: 16px;
				/* Tamaño de fuente del input */
				border: none;
				/* Sin borde en el input */
				outline: none;
				/* Sin borde de enfoque por defecto */
				flex: 1;
				/* Ocupa el espacio disponible */
			}

			.icon-header-item {
				padding-left: 10px;
				/* Espacio entre el input y el ícono */
				cursor: pointer;
				/* Cambia el cursor al pasar por encima */
			}

			.icon-header-item i {
				font-size: 20px;
				/* Tamaño del ícono */
				color: #333;
				/* Color del ícono */
			}

			.wrap-menu-desktop {
				margin-top: 10px;
				/* Espacio entre el top-bar y el wrap-menu-desktop */
			}


			.top-bar {
				height: 60px;
				/* Ajusta la altura del top-bar */
				background-color: #624E88;
				/* Color de fondo */
				margin-bottom: 10px;
				color: white;
				/* Espacio entre el top-bar y el wrap-menu-desktop */
			}

			.message-container {
				flex-grow: 1;
				text-align: center;
				/* Centra el texto */
			}

			.message {
				font-size: 20px;
				/* Tamaño del texto de los mensajes */
				font-weight: bold;
				/* Hace los mensajes en negrita */
				line-height: 60px;
				/* Centra verticalmente el texto en el top-bar */
				display: inline;
				/* Asegura que los mensajes se muestren en línea */
			}

			.message-nav button {
				margin: 0 10px;
				/* Espacio entre los botones */
				cursor: pointer;
				background-color: transparent;
				/* Botón transparente */
				border: none;
				/* Sin borde */
				font-size: 24px;
				/* Tamaño del texto del botón */
				color: white;
				/* Color del texto */
			}

			.message-nav button:hover {
				color: white;
				/* Color al pasar el cursor */
			}
			
		</style>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				const messages = document.querySelectorAll('.message');
				let currentIndex = 0;

				function showMessage(index) {
					messages.forEach((msg, i) => {
						msg.style.display = (i === index) ? 'inline' : 'none';
					});
				}

				function nextMessage() {
					currentIndex = (currentIndex + 1) % messages.length;
					showMessage(currentIndex);
				}

				function prevMessage() {
					currentIndex = (currentIndex - 1 + messages.length) % messages.length;
					showMessage(currentIndex);
				}

				document.getElementById('nextMessage').addEventListener('click', nextMessage);
				document.getElementById('prevMessage').addEventListener('click', prevMessage);

				// Cambiar mensaje cada 5 segundos
				setInterval(nextMessage, 5000);

				// Muestra el primer mensaje
				showMessage(currentIndex);
			});
		</script>


		<script>
			document.addEventListener('DOMContentLoaded', function() {
				const userMenu = document.getElementById('user-menu');
				userMenu.addEventListener('click', function() {
					const menuContent = userMenu.querySelector('.user-menu-content');
					menuContent.style.display = menuContent.style.display === 'block' ? 'none' : 'block';
				});

				document.addEventListener('click', function(e) {
					if (!userMenu.contains(e.target)) {
						const menuContent = userMenu.querySelector('.user-menu-content');
						menuContent.style.display = 'none';
					}
				});
			});
		</script>


		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="<?= base_url(); ?>"><img src="<?= media() ?>/tienda/images/logo1.png" alt="Tienda Virtual"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>
				<?php if ($data['page_name'] != "carrito" and $data['page_name'] != "procesarpago") { ?>
					<div class="cantCarrito icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?= $cantCarrito; ?>">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>
				<?php } ?>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						<?php if (isset($_SESSION['login'])) { ?>
							Bienvenido: <?= $_SESSION['userData']['nombres'] . ' ' . $_SESSION['userData']['apellidos'] ?>
						<?php } ?>
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04" data-toggle="modal" data-target="#modalAyuda">
							Help & FAQs
						</a>
						<?php
						if (isset($_SESSION['login'])) {
						?>
							<a href="<?= base_url() ?>/dashboard" class="flex-c-m trans-04 p-lr-25">
								Mi cuenta
							</a>
						<?php }
						if (isset($_SESSION['login'])) {
						?>
							<a href="<?= base_url() ?>/logout" class="flex-c-m trans-04 p-lr-25">
								Salir
							</a>
						<?php } else { ?>
							<a href="<?= base_url() ?>/login" class="flex-c-m trans-04 p-lr-25">
								Iniciar Sesión
							</a>
						<?php } ?>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="<?= base_url(); ?>">Inicio</a>
				</li>

				<li>
					<a href="<?= base_url(); ?>/tienda">Tienda</a>
				</li>

				<li>
					<a href="<?= base_url(); ?>/carrito">Carrito</a>
				</li>

				<li>
					<a href="<?= base_url(); ?>/nosotros">Nosotros</a>
				</li>

				<li>
					<a href="<?= base_url(); ?>/sucursales">Sucursales</a>
				</li>

				<li>
					<a href="<?= base_url(); ?>/contacto">Contacto</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="<?= media() ?>/tienda/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15" method="get" action="<?= base_url() ?>/tienda/search">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input type="hidden" name="p" value="1">
					<input class="plh3" type="text" name="s" placeholder="Buscar...">
				</form>
			</div>
		</div>
	</header>
	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>
		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Tu carrito
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			<div id="productosCarrito" class="header-cart-content flex-w js-pscroll">
				<?php getModal('modalCarrito', $data); ?>
			</div>
		</div>
	</div>