



<?php
headerTienda($data);
$arrProductos = $data['productos'];
?>
<br><br><br>
<hr>
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-0">
            <div class="flex-w flex-c-m m-tb-10">
                <div class="filter-button flex-c-m stext-106 cl6 size-104 bor4 pointer js-show-filter">
                    <i class="fas fa-filter m-r-6 fs-15 trans-04"></i>
                    <span class="filter-text">Filtrar por Categoría</span>
                </div>
            </div>

            <!-- Paginación: Anterior y Siguiente -->
            <div class="flex-w flex-c-m m-tb-10">
                <?php
                if (count($data['productos']) > 0) {
                    $prevPagina = $data['pagina'] - 1;
                    $nextPagina = $data['pagina'] + 1; ?>
                    <div class="pagination-buttons">
                        <?php if ($data['pagina'] > 1) { ?>
                            <a href="<?= base_url() ?>/tienda/page/<?= $prevPagina ?>" class="pagination-button">
                                <i class="fas fa-chevron-left"></i> Anterior
                            </a>
                        <?php } ?>
                        <?php if ($data['pagina'] != $data['total_paginas']) { ?>
                            <a href="<?= base_url() ?>/tienda/page/<?= $nextPagina ?>" class="pagination-button">
                                Siguiente <i class="fas fa-chevron-right"></i>
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>

            <div class="dis-none panel-filter w-full p-t-10 mb-3">
                <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                    <div class="filter-col4 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">Categorías</div>
                        <!-- Flexbox con wrap, sin el 'nowrap' -->
                        <div class="flex flex-wrap p-t-4 m-r--5" style="justify-content: flex-start;">
                            <?php
                            if (count($data['categorias']) > 0) {
                                foreach ($data['categorias'] as $categoria) { ?>
                                    <a href="<?= base_url() ?>/tienda/categoria/<?= $categoria['idcategoria'] . '/' . $categoria['ruta'] ?>" class="category-item flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                        <?= $categoria['nombre'] ?> <span>&nbsp;(<?= $categoria['cantidad'] ?>)</span>
                                    </a>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row isotope-grid">
            <?php
            if (count($arrProductos) > 0) {
                for ($p = 0; $p < count($arrProductos); $p++) {
                    $ruta = $arrProductos[$p]['ruta'];
                    $portada = count($arrProductos[$p]['images']) > 0 ? $arrProductos[$p]['images'][0]['url_image'] : media() . '/images/uploads/product.png'; ?>

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
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
    </div>
</div>

<style>
    /* Estilo para el filtro y paginación */
    .filter-button,
    .pagination-button {
        background-color: #624E88;
        color: white;
        padding: 10px 15px;
        border-radius: 25px;
        display: flex;
        align-items: center;
        border: 2px solid transparent;
        transition: background-color 0.3s, color 0.3s, transform 0.3s;
        cursor: pointer;
        font-size: 14px;
        font-weight: normal;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .filter-button:hover,
    .pagination-button:hover {
        background-color: #7A61B0;
        color: #ffffff;
        transform: scale(1.05);
        border: 2px solid #7A61B0;
    }

    .filter-button:active,
    .pagination-button:active {
        transform: scale(0.95);
    }

    /* Paginación en la misma fila que el filtro */
    .pagination-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }

    .pagination-button i {
        margin-left: 5px;
        margin-right: 5px;
    }

    /* Estilos para las categorías */
    .category-item {
        display: inline-block;
        background-color: #f7f7f7;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 10px 15px;
        transition: background-color 0.3s, transform 0.3s;
        margin: 5px;
    }

    .category-item:hover {
        background-color: #e0e0e0;
        transform: translateY(-2px);
    }

    /* Estilos para los productos */
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