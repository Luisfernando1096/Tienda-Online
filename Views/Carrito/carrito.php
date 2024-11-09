<?php
headerTienda($data);
?>
<br>
<div class="container my-5" style="margin-top: 10px;">
    <div class="breadcrumb">
        <a href="<?= base_url() ?>/tienda" style="color: #624E88; font-weight: bold;">
            Ir a inicio
            <i class="fa fa-angle-right mx-2" aria-hidden="true"></i>
        </a>
        <span class="text-muted"><?= $data['page_title'] ?></span>
    </div>
</div>
<hr style="margin-top: 10px; margin-bottom: 10px;">
<?php
$subtotal = 0;
$total = 0;

function sanitizeUrl($string)
{
    $string = strtolower($string);
    $string = preg_replace('/[^\w]+/', '-', $string);
    $string = preg_replace('/-+/', '-', $string);
    return trim($string, '-');
}

if (isset($_SESSION['arrCarrito']) && count($_SESSION['arrCarrito']) > 0) {
?>
    <form class="bg0 p-t-0 p-b-85" style="margin-top: 0;">
        <div class="container" style="padding-top: 0; margin-top: 0;">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-30">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table id="tblCarrito" class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Producto</th>
                                    <th class="column-2"></th>
                                    <th class="column-3">Precio</th>
                                    <th class="column-4">Cantidad</th>
                                    <th class="column-5">Total</th>
                                    <th class="column-6">Acción</th>
                                </tr>
                                <?php
                                foreach ($_SESSION['arrCarrito'] as $producto) {
                                    $totalProducto = $producto['precio'] * $producto['cantidad'];
                                    $subtotal += $totalProducto;
                                    $idProducto = openssl_encrypt($producto['idproducto'], METHODENCRIPT, KEY);
                                    $rutaProducto = sanitizeUrl($producto['producto']);
                                ?>
                                    <tr class="table_row <?= $idProducto ?>">
                                        <td class="column-1">
                                            <div class="product-info">
                                                <div class="block2-pic hov-img0" style="position: relative; overflow: hidden;">
                                                    <a href="<?= base_url() . '/tienda/producto/' . $producto['idproducto'] . '/' . $rutaProducto; ?>">
                                                        <img src="<?= $producto['imagen'] ?>" alt="<?= $producto['producto'] ?>" style="width: 150px; height: auto;">
                                                        <span class="ver-text">Ver detalles</span>
                                                    </a>
                                                </div>
                                                <div class="product-name"><?= htmlspecialchars($producto['producto']) ?></div>
                                            </div>
                                        </td>
                                        <td class="column-2"></td>
                                        <td class="column-3"><?= SMONEY . formatMoney($producto['precio']) ?></td>
                                        <td class="column-4">
                                            <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" idpr="<?= $idProducto ?>">
                                                    <i class="fs-16 zmdi zmdi-minus"></i>
                                                </div>
                                                <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="<?= $producto['cantidad'] ?>" idpr="<?= $idProducto ?>">
                                                <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" idpr="<?= $idProducto ?>">
                                                    <i class="fs-16 zmdi zmdi-plus"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="column-5"><?= SMONEY . formatMoney($totalProducto) ?></td>
                                        <td class="column-6">
                                            <div onclick="fntdelItem(this)" idpr="<?= $idProducto ?>" op="2" style="display: inline-block; cursor: pointer;">
                                                <i class="fa fa-trash trash-icon" style="color: red; font-size: 24px;"></i>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-30">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-20">Totales</h4>

                        <div class="flex-w flex-t bor12 p-b-13">
                            <div class="size-208">
                                <span class="stext-110 cl2">Subtotal:</span>
                            </div>
                            <div class="size-209">
                                <span id="subTotalCompra" class="mtext-110 cl2"><?= SMONEY . formatMoney($subtotal) ?></span>
                            </div>
                            <div class="size-208">
                                <span class="stext-110 cl2">Envío:</span>
                            </div>
                            <div class="size-209">
                                <span class="mtext-110 cl2"><?= SMONEY . formatMoney(COSTOENVIO) ?></span>
                            </div>
                        </div>
                        <div class="flex-w flex-t p-t-20 p-b-33">
                            <div class="size-208">
                                <span class="mtext-101 cl2">Total:</span>
                            </div>
                            <div class="size-209 p-t-1">
                                <span id="totalCompra" class="mtext-110 cl2"><?= SMONEY . formatMoney($subtotal + COSTOENVIO) ?></span>
                            </div>
                        </div>
                        <a href="<?= base_url() ?>/carrito/procesarpago" id="btnComprar" class="btn-carrito btn-carrito-procesar" style="background-color: #624E88; color: white;">Procesar pago</a>

                        <a href="<?= base_url() ?>/tienda/" class="btn-carrito bg-seguir-comprando" style="color: white; margin-top: 8px;">Seguir comprando</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php } else { ?>
    <br>
    <div class="container">
        <p>No hay producto en el carrito <a href="<?= base_url() ?>/tienda"> Ver productos</a></p>
    </div>
    <br>
<?php
}
footerTienda($data);
?>

<style>
    .trash-icon {
        transition: transform 0.3s;
        font-size: 24px;
    }

    .trash-icon:hover {
        transform: scale(1.5);
    }

    .how-itemcart1 {
        position: relative;
    }

    .ver-text {
        display: none;
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        background: black;
        color: white;
        padding: 3px;
        border-radius: 5px;
        font-size: 12px;
        width: 80px;
    }

    .block2-pic:hover .ver-text {
        display: block;
    }

    .block2-pic img {
        width: 150px;
        height: auto;
        transition: transform 0.3s;
    }

    .block2-pic:hover img {
        transform: scale(1.1);
    }

    /* Contenedor para la imagen y el nombre del producto */
    .product-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    /* Estilo para el nombre del producto */
    .product-name {
        margin-top: 10px;
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }

    /* Nuevos estilos para centrar todos los elementos de la tabla */
    .table-shopping-cart {
        width: 100%;
        border-collapse: collapse;
    }

    .table-shopping-cart th,
    .table-shopping-cart td {
        text-align: center;
        vertical-align: middle;
        padding: 10px;
    }

    .table_head {
        background-color: #f8f9fa;
    }

    /* Estilos comunes para ambos botones */
    .btn-carrito {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.16rem;
        font-weight: bold;
        padding: 12px 15px;
        border-radius: 14px;
        text-align: center;
        transition: background-color 0.3s ease;
        text-decoration: none;
        cursor: pointer;
    }

    .bg-black {
        background-color: #624E88;
    }

    .bg-seguir-comprando {
        background-color: #D79B6A;
    }

    .btn-carrito:hover {
        opacity: 0.8;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }

    .btn-carrito-procesar {
        animation: pulse 1.5s ease-in-out infinite;
    }
</style>
