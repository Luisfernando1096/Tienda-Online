<?php
headerTienda($data);
$arrProducto = $data['producto'];
$arrProductos = $data['productos'];
$arrImages = $arrProducto['images'];
$rutacategoria = $arrProducto['categoriaid'] . '/' . $arrProducto['ruta_categoria'];
$urlShared = base_url() . "/tienda/producto/" . $arrProducto['idproducto'] . "/" . $arrProducto['ruta'];
?>
<br>
<div class="container my-5" style="margin-top: 10px;">
	<div class="breadcrumb">
		<a href="<?= base_url() ?>" style="color: #624E88; font-weight: bold;">
			Ir a inicio
			<i class="fa fa-angle-right mx-2" aria-hidden="true"></i>
		</a>
		<a href="<?= base_url() . '/tienda/categoria/' . $rutacategoria;  ?>" style="color: #624E88; font-weight: bold;">
			<?= $arrProducto['categoria'] ?>
			<i class="fa fa-angle-right mx-2" aria-hidden="true"></i>
		</a>
		<span class="text-muted"><?= $arrProducto['nombre'] ?></span>
	</div>
</div>
<hr>
<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-0 p-b-0">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-7 p-b-30">
				<div class="p-l-25 p-r-30 p-lr-0-lg" style="border: 1px solid rgba(200, 200, 200, 0.5); border-radius: 10px; padding: 20px;">
					<div class="wrap-slick3 flex-sb flex-w">
						<div class="wrap-slick3-dots"></div>
						<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

						<div class="slick3 gallery-lb">
							<?php
							if (!empty($arrImages)) {
								for ($img = 0; $img < count($arrImages); $img++) {

							?>
									<div class="item-slick3" data-thumb="<?= $arrImages[$img]['url_image']; ?>">
										<div class="wrap-pic-w pos-relative" style="display: flex; justify-content: center;">
											<img src="<?= $arrImages[$img]['url_image']; ?>" alt="<?= $arrProducto['nombre']; ?>" class="main-image" style="max-width: 70%; height: auto;">
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?= $arrImages[$img]['url_image']; ?>">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
							<?php
								}
							}
							?>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-5 p-b-30">
				<div class="p-r-50 p-t-5 p-lr-0-lg">
					<h4 class="mtext-105 cl2 js-name-detail p-b-14" style="font-size: 30px; font-weight: bold; text-align: center;">
						<?= $arrProducto['nombre']; ?>
					</h4>

					<div class="p-t-20">
						<div class="flex-w flex-r-m p-b-10 cursor-pointer" onclick="toggleCaracteristicas()" style="justify-content: flex-start; cursor: pointer;">
							<h5 class="mtext-104 cl2" style="margin-right: 10px;">Descripcion</h5>
							<i class="fa fa-chevron-down" id="icon-caracteristicas"></i>
						</div>

						<div id="caracteristicas-content" style="display: none;">
							<?= $arrProducto['descripcion']; ?>
						</div>
						<hr>
					</div>
					<span class="mtext-106 cl2" style="font-size: 24px; font-weight: bold;">
						<?= SMONEY . formatMoney($arrProducto['precio']); ?>
					</span>

					<!-- <p class="stext-102 cl3 p-t-23"></p> -->
					<!--  -->
					<div class="p-t-33">
						<div class="flex-w flex-r-m p-b-10" style="justify-content: flex-start;">
							<div class="size-204 flex-w flex-m respon6-next">
								<div class="wrap-num-product flex-w m-r-20 m-tb-10">
									<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
										<i class="fs-16 zmdi zmdi-minus"></i>
									</div>

									<input id="cant-product" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" min="1">

									<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
										<i class="fs-16 zmdi zmdi-plus"></i>
									</div>
								</div>
								<button id="<?= openssl_encrypt($arrProducto['idproducto'], METHODENCRIPT, KEY); ?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" style="background-color: #624E88; border: none; padding: 10px 15px; color: #fff; cursor: pointer; border-radius: 5px;">
									Agregar al carrito
								</button>
							</div>
						</div>
					</div>
					<div class="flex-w flex-m p-t-40 respon7" style="align-items: center; justify-content: flex-start;">
						<div class="flex-m bor9 p-r-10 m-r-11" style="font-size: 16px; font-weight: bold;">
							Compartir en:
						</div>

						<a href="#" class="fs-16 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook"
							style="font-size: 20px;" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?= $urlShared; ?>&t=<?= $arrProducto['nombre'] ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="https://twitter.com/intent/tweet?text=<?= $arrProducto['nombre'] ?>&url=<?= $urlShared; ?>&hashtags=<?= SHAREDHASH; ?>" target="_blank" class="fs-16 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter"
							style="font-size: 20px;">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="https://api.whatsapp.com/send?text=<?= $arrProducto['nombre'] . ' ' . $urlShared ?>" target="_blank" class="fs-16 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="WhatsApp"
							style="font-size: 20px;">
							<i class="fab fa-whatsapp" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bg6 flex-c-m flex-w size-200 m-t-0 p-tb-10 " style="margin-right: 30px; margin-left: 30px;">
		<h3>Productos Relacionados</h3>
	</div>
</section>

<!-- Related Products -->
<section class="sec-relate-product bg0 p-t-0 p-b-105">
    <div class="container">
        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">

                <?php
                if (!empty($arrProductos)) {
                    for ($p = 0; $p < count($arrProductos); $p++) {
                        $ruta = $arrProductos[$p]['ruta'];
                        $portada = count($arrProductos[$p]['images']) > 0 ? $arrProductos[$p]['images'][0]['url_image'] : media() . '/images/uploads/product.png';
                ?>
                        <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0" style="position: relative; overflow: hidden;">
                                    <img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>" style="width: 100%; height: 300px; object-fit: contain;">
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
                }
                ?>

            </div>
        </div>
    </div>
</section>

<style>
    /* Estilos para la sección de productos relacionados */
    .sec-relate-product {
        margin-top: 45px;
        padding-bottom: 105px;
    }

    .item-slick2 {
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .block2 {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
        text-align: center;
    }

    .block2-pic img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 5px;
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

    .btn-addwish-b2:hover {
        background-color: #7A61B0;
    }
</style>

<script>
	function toggleCaracteristicas() {
		var content = document.getElementById('caracteristicas-content');
		var icon = document.getElementById('icon-caracteristicas');

		if (content.style.display === "none") {
			content.style.display = "block";
			icon.classList.remove('fa-chevron-down');
			icon.classList.add('fa-chevron-up');
		} else {
			content.style.display = "none";
			icon.classList.remove('fa-chevron-up');
			icon.classList.add('fa-chevron-down');
		}
	}
</script>
<?php
footerTienda($data);
?>