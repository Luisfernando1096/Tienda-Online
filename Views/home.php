<?php
headerTienda($data);

$arrSlider = $data['slider'];
$arrBanner = $data['banner'];
$arrProductos = $data['productos'];
$contentPage = !empty($data['page']) ? $data['page']['contenido'] : ""; // Asegurarse de que siempre esté definida
?>

<!-- Sección de Productos Nuevos -->
<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10" style="margin-top: 50px;">
            <h3 class="ltext-103 cl5" style="margin-inline-start: 22px; color: #fcb388;">Productos Nuevos</h3>
        </div>
        <hr>
        <!-- Carrusel de Productos -->
        <div class="carousel">
            <?php foreach ($arrProductos as $producto): ?>
                <?php
                $portada = count($producto['images']) > 0 ? $producto['images'][0]['url_image'] : media() . '/images/uploads/product.png';
                ?>
                <div class="box" style="background-image: url('<?= $portada ?>');">
                    <a href="<?= base_url() . '/tienda/producto/' . $producto['idproducto'] . '/' . $producto['ruta']; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">Ver producto</a>
                    <div class="product-price"><?= number_format($producto['precio'], 2) ?> €</div> <!-- Agregando el precio -->
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container text-center p-t-80">
        <hr>
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="<?= base_url() ?>/tienda" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Ver más
            </a>
        </div>
    </div>
</section>

<?php footerTienda($data); ?>

<!-- Estilos del Carrusel -->
<style>
    .carousel {
        position: relative;
        width: 90vw;
        height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: grab;
        /* Cursor de agarre */
    }

    .box {
        position: absolute;
        width: 25vw;
        /* Ajustado para que las imágenes sean un poco más pequeñas */
        height: 55vh;
        /* Ajustado para que las imágenes sean un poco más pequeñas */
        background-size: cover;
        background-position: center;
        transition: transform 0.5s ease, opacity 0.5s ease;
        filter: grayscale(100%);
        opacity: 0.5;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        margin: 0 20px;
        /* Aumentando el margen para más separación */
    }

    .box.center {
        transform: translateX(0) scale(1.2);
        /* Imagen principal más grande */
        opacity: 1;
        filter: grayscale(0);
        z-index: 2;
    }

    .box.left {
        transform: translateX(-80%) scale(0.8);
        /* Ajustado para mayor separación */
        z-index: 1;
    }

    .box.right {
        transform: translateX(80%) scale(0.8);
        /* Ajustado para mayor separación */
        z-index: 1;
    }

    .box.offscreen-left {
        transform: translateX(-140%) scale(0.6);
        /* Imágenes adicionales a la izquierda */
        opacity: 0;
    }

    .box.offscreen-right {
        transform: translateX(140%) scale(0.6);
        /* Imágenes adicionales a la derecha */
        opacity: 0;
    }

    /* Estilo del precio */
    .product-price {
        position: absolute;
        bottom: 10px;
        /* Ajustar según sea necesario */
        left: 10px;
        /* Ajustar según sea necesario */
        color: white;
        background: rgba(0, 0, 0, 0.6);
        padding: 5px 10px;
        border-radius: 5px;
    }
</style>

<!-- Script del Carrusel -->
<script>
    const boxes = document.querySelectorAll('.box');
    let currentIndex = 0;
    let autoRotate;

    function updatePositions() {
        boxes.forEach((box, index) => {
            box.classList.remove('left', 'center', 'right', 'offscreen-left', 'offscreen-right');

            if (index === currentIndex) {
                box.classList.add('center'); // Imagen principal al centro
            } else if (index === (currentIndex - 1 + boxes.length) % boxes.length) {
                box.classList.add('left'); // Imagen a la izquierda de la principal
            } else if (index === (currentIndex + 1) % boxes.length) {
                box.classList.add('right'); // Imagen a la derecha de la principal
            } else {
                // Muestra las imágenes fuera de la vista
                if (index < currentIndex) {
                    box.classList.add('offscreen-left'); // Imágenes adicionales a la izquierda
                } else {
                    box.classList.add('offscreen-right'); // Imágenes adicionales a la derecha
                }
            }
        });
    }

    function showNextImage() {
        currentIndex = (currentIndex + 1) % boxes.length;
        updatePositions();
    }

    function startAutoRotate() {
        if (!autoRotate) { // Solo iniciar si no hay un intervalo activo
            autoRotate = setInterval(showNextImage, 5000); // Cambiar la imagen cada 5 segundos
        }
    }

    function stopRotation() {
        clearInterval(autoRotate); // Detener el auto movimiento
        autoRotate = null; // Restablecer autoRotate para permitir reiniciar
    }

    // Agregar eventos al mouse sobre la imagen central
    boxes.forEach((box, index) => {
        box.addEventListener('mouseenter', () => {
            if (index === currentIndex) {
                stopRotation(); // Detener solo si es la imagen principal
            }
        });

        box.addEventListener('mouseleave', () => {
            if (index === currentIndex) {
                startAutoRotate(); // Reiniciar solo si es la imagen principal
            }
        });

        // Evento para cambiar a la imagen correspondiente al hacer clic
        box.addEventListener('click', () => {
            if (index !== currentIndex) {
                currentIndex = index; // Cambiar el índice actual
                updatePositions(); // Actualizar las posiciones
                stopRotation(); // Detener la rotación automática al cambiar de imagen
                startAutoRotate(); // Reiniciar la rotación automática
            }
        });
    });

    // Inicializa la primera imagen y comienza la rotación automática
    updatePositions();
    startAutoRotate();
</script>