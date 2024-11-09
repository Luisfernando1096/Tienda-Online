<?php
$total = 0;
if (isset($_SESSION['arrCarrito']) && count($_SESSION['arrCarrito']) > 0) {
?>
    <ul class="header-cart-wrapitem w-full">
        <?php
        foreach ($_SESSION['arrCarrito'] as $producto) {
            $total += $producto['cantidad'] * $producto['precio'];
            $idProducto = openssl_encrypt($producto['idproducto'], METHODENCRIPT, KEY);
        ?>
            <li class="header-cart-item flex-w flex-t m-b-12">
                <!-- Imagen del producto -->
                <div class="header-cart-item-img" idpr="<?= $idProducto ?>" op="1" onclick="fntdelItem(this)">
                    <img src="<?= $producto['imagen'] ?>" alt="<?= $producto['producto'] ?>" class="img-producto">
                </div>
                <!-- Información del producto -->
                <div class="header-cart-item-txt p-t-8">
                    <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04"><?= $producto['producto'] ?></a>
                    <span class="header-cart-item-info"><?= $producto['cantidad'] . ' x ' . SMONEY . formatMoney($producto['precio']) ?></span>
                </div>
            </li>
        <?php } ?>
    </ul>

    <div class="w-full">
        <div class="header-cart-total p-tb-40">
            <strong>Total: <?= SMONEY . formatMoney($total); ?></strong>
        </div>

        <div class="header-cart-buttons">
            <a href="<?= base_url() ?>/carrito" class="btn-carrito w-full">Ver carrito</a>
            <!-- Aplicar la clase 'btn-carrito-procesar' para aplicar la animación -->
            <a href="<?= base_url() ?>/carrito/procesarpago" class="btn-carrito btn-carrito-procesar">Procesar pago</a>
        </div>
    </div>

    <style>
        /* Contenedor principal */
        .header-cart-wrapitem {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        /* Estilo de cada ítem del carrito */
        .header-cart-item {
            display: flex;
            flex-direction: row;
            margin-bottom: 16px;
            align-items: center;
            padding: 12px;
            border-bottom: 1px solid #eee;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Imagen del producto */
        .header-cart-item-img {
            width: 60px;
            height: 60px;
            margin-right: 12px;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }

        .header-cart-item-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .header-cart-item-img:hover img {
            transform: scale(1.1);
        }

        /* Información del producto */
        .header-cart-item-txt {
            flex-grow: 1;
        }

        .header-cart-item-name {
            display: block;
            font-size: 1rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .header-cart-item-name:hover {
            color: #fcb388;
        }

        .header-cart-item-info {
            font-size: 0.9rem;
            color: #666;
        }

        /* Total del carrito */
        .header-cart-total {
            text-align: left;
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            padding-top: 20px;
            margin-bottom: 20px;
        }

        /* Botones del carrito */
        .header-cart-buttons {
            display: flex;
            flex-direction: column; /* Los botones se apilarán verticalmente */
            gap: 12px; /* Espacio entre los botones */
            margin-top: 20px;
            justify-content: center; /* Centra los botones verticalmente */
            align-items: center; /* Centra los botones horizontalmente */
            width: 100%; /* Asegura que el contenedor ocupe todo el ancho */
        }

        .btn-carrito {
            background-color: #624E88;
            color: white;
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            font-size: 1rem;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease;
            width: 100%; /* Los botones ocuparán el 100% del ancho disponible */
            max-width: 250px; /* Limita el tamaño máximo de los botones */
        }

        .btn-carrito:hover {
            background-color: #fcb388;
            color: white;
        }

        /* Animación de crecimiento sin deformar para el botón "Procesar pago" */
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
            animation: pulse 1.5s ease-in-out infinite; /* La animación dura 1.5s y se repite infinitamente */
        }

        /* Responsive: Adaptación para pantallas pequeñas */
        @media (max-width: 768px) {
            .header-cart-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .header-cart-item-img {
                margin-bottom: 12px;
                width: 100px;
                height: 100px;
            }

            .header-cart-item-txt {
                flex-grow: 0;
            }

            .header-cart-buttons {
                gap: 8px;
            }
        }
    </style>

<?php
}
?>
