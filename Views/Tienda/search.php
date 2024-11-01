<?php
headerTienda($data);
$arrProductos = $data['productos'];
?>
<br>
<div class="container my-5" style="margin-top: 10px;">
	<div class="breadcrumb">
		<a href="<?= base_url() ?>/tienda" style="color: #624E88; font-weight: bold;">
			Ir a productos
			<i class="fa fa-angle-right mx-2" aria-hidden="true"></i>
		</a>
		<span class="text-muted"><?= $data['page_title'] ?></span>
	</div>
</div>
<hr style="margin-top: 0px; margin-bottom: 10px;"> <!-- Product -->
<div class="bg0 m-t-23 p-b-140">
	<div class="container">
		<div class="row isotope-grid">
			<?php
			if (count($arrProductos) > 0) {
				for ($p = 0; $p < count($arrProductos); $p++) {
					$ruta = $arrProductos[$p]['ruta'];
					$portada = count($arrProductos[$p]['images']) > 0 ? $arrProductos[$p]['images'][0]['url_image'] : media() . '/images/uploads/product.png'; ?>

					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
						<div class="block2">
							<div class="block2-pic hov-img0" style="position: relative; overflow: hidden;">
								<img src="<?= $portada ?>"
									srcset="<?= $portada ?> 600w, <?= $portada ?> 1200w"
									sizes="(max-width: 600px) 100vw, (min-width: 601px) 50vw"
									alt="<?= $arrProductos[$p]['nombre'] ?>"
									style="width: 100%; height: 300px; object-fit: contain;">
								<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $ruta; ?>" class="view-details">Ver detalles</a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14" style="margin-top: 10px;">
								<div class="block2-txt-child1 flex-col-l">
									<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $ruta; ?>" class="stext-106 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" style="color: black; font-size: 15px;">
										<?= $arrProductos[$p]['nombre'] ?>
									</a>
									<span class="stext-106 cl3" style="color: black; font-size: 16px;">
										<?= SMONEY . formatMoney($arrProductos[$p]['precio']); ?>
									</span>
								</div>
								<div class="block2-txt-child2 flex-r p-t-3" style="justify-content: flex-end; width: 100%;">
									<a href="#"
										id="<?= openssl_encrypt($arrProductos[$p]['idproducto'], METHODENCRIPT, KEY); ?>"
										class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail icon-header-item cl2 hov-cl1 trans-04">
										Agregar al carrito
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
			} else { ?>
				<p>No hay productos para mostrar <a href="<?= base_url() ?>/tienda"> Ver productos</a></p>
			<?php } ?>
		</div>

		<!-- Load more -->
		<?php
		if (count($data['productos']) > 0) {
			$prevPagina = $data['pagina'] - 1;
			$nextPagina = $data['pagina'] + 1; ?>
			<div class="flex-c-m flex-w w-full p-t-45">
				<?php if ($data['pagina'] > 1) { ?>
					<a href="<?= base_url() ?>/tienda/page/<?= $prevPagina ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04"><i class="fas fa-chevron-left"></i> &nbsp; Anterior</a>&nbsp;&nbsp;
				<?php } ?>
				<?php if ($data['pagina'] != $data['total_paginas']) { ?>
					<a href="<?= base_url() ?>/tienda/page/<?= $nextPagina ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">Siguiente &nbsp; <i class="fas fa-chevron-right"></i></a>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</div>

<style>
	/* Estilos generales */
	.block2 {
		border: 1px solid #ddd;
		border-radius: 5px;
		padding: 15px;
		margin-bottom: 20px;
	}

	.block2-pic img {
		width: 100%;
		height: 300px;
		object-fit: cover;
	}

	.view-details {
		position: absolute;
		bottom: 10px;
		left: 50%;
		transform: translateX(-50%);
		background-color: rgba(0, 0, 0, 0.7);
		color: white;
		padding: 5px 10px;
		border-radius: 5px;
		text-decoration: none;
		opacity: 0;
		transition: opacity 0.3s;
	}

	.block2-pic:hover .view-details {
		opacity: 1;
	}

	.btn-addwish-b2 {
		background-color: #624E88;
		color: white;
		padding: 10px 20px;
		font-size: 16px;
		text-align: center;
		border-radius: 5px;
		margin-top: 10px;
		display: inline-block;
	}
</style>

<?php
footerTienda($data);
?>