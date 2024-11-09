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
            <h3 class="ltext-103 cl5" style="margin-inline-start: 22px; color: #fcb388;">Categorias disponibles</h3>
        </div>
        <hr>
        <?php /* 
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
        */ ?>
        <div class="carousel">
            <?php foreach ($arrSlider as $categoria): ?>
                <div class="box" style="background-image: url('<?= $categoria['portada'] ?>');">
                    <a href="<?= base_url() . '/tienda/categoria/' . $categoria['idcategoria'] . '/' . $categoria['ruta']; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">Ver categoria</a>
                    <div class="category-name"><?= $categoria['nombre'] ?></div> <!-- Nombre de la categoría -->
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

<!-- Osito Blanco -->
<div class="bear" id="bear">
    <img src="https://i.pinimg.com/originals/1a/19/60/1a19605a88ae5f96ffa0558b575e0871.gif" alt="Bear" style="width: 100px;">
    <div class="welcome-message" id="welcome-message">¡Eres hermosa tal como eres, pero un toque de brillo nunca está de más!</div>
</div>

<!-- Cuadro de Mensajes -->
<div class="message-box" id="message-box"></div>

<?php footerTienda($data); ?>

<!-- Estilos del Carrusel y Osito -->
<style>
    .box {
        position: relative;
        /* Cambiado para permitir posicionamiento absoluto del nombre */
        width: 25vw;
        height: 55vh;
        background-size: cover;
        background-position: center;
        transition: transform 0.5s ease, opacity 0.5s ease;
        filter: grayscale(100%);
        opacity: 0.5;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        margin: 0 20px;
    }

    .category-name {
        position: absolute;
        bottom: 10px;
        /* Ajusta la distancia desde la parte inferior */
        left: 50%;
        transform: translateX(-50%);
        /* Centra el texto horizontalmente */
        color: white;
        /* Color del texto */
        background: rgba(0, 0, 0, 0.5);
        /* Fondo semi-transparente */
        padding: 5px 10px;
        /* Espaciado alrededor del texto */
        border-radius: 5px;
        /* Esquinas redondeadas */
        text-align: center;
        /* Centra el texto dentro del div */
    }

    @keyframes moveBear {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
            /* Ajusta la distancia del movimiento vertical */
        }

        100% {
            transform: translateY(0);
        }
    }

    .carousel {
        position: relative;
        width: 80vw;
        height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: grab;
    }

    .box {
        position: absolute;
        width: 25vw;
        height: 55vh;
        background-size: cover;
        background-position: center;
        transition: transform 0.5s ease, opacity 0.5s ease;
        filter: grayscale(100%);
        opacity: 0.5;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        margin: 0 20px;
    }

    .box.center {
        transform: translateX(0) scale(1.2);
        opacity: 1;
        filter: grayscale(0);
        z-index: 2;
    }

    .box.left {
        transform: translateX(-80%) scale(0.8);
        z-index: 1;
    }

    .box.right {
        transform: translateX(80%) scale(0.8);
        z-index: 1;
    }

    .box.offscreen-left {
        transform: translateX(-140%) scale(0.6);
        opacity: 0;
    }

    .box.offscreen-right {
        transform: translateX(140%) scale(0.6);
        opacity: 0;
    }

    /* Estilo del precio */
    .product-price {
        position: absolute;
        bottom: 10px;
        left: 10px;
        color: white;
        background: rgba(0, 0, 0, 0.6);
        padding: 5px 10px;
        border-radius: 5px;
    }

    /* Estilos del osito */
    .bear {
        position: fixed;
        bottom: 20px;
        left: 20px;
        /* Cambiado a la izquierda */
        transition: transform 0.3s;
        z-index: 10;
        display: flex;
        flex-direction: column;
        align-items: center;
        animation: moveBear 1s infinite;
        /* Animación continua */
    }

    .bear:hover {
        transform: scale(1.1);
    }

    .welcome-message {
        margin-top: 10px;
        font-size: 14px;
        color: #333;
        text-align: center;
        display: block;
        /* Asegúrate de que se muestre */
    }

    /* Estilos del cuadro de mensajes */
    .message-box {
        position: fixed;
        bottom: 120px;
        /* Ajusta según necesites */
        left: 20px;
        /* Mantener la posición a la izquierda */
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        display: none;
        /* Ocultar inicialmente */
        z-index: 20;
    }
</style>

<!-- Script del Carrusel y Osito -->
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

    // Sistema de mensajes
    const messages = [
        "¡Bienvenido a nuestra tienda!",
        "¡Descubre nuestras ofertas especiales!",
        "¡No te pierdas nuestras novedades!",
        "¡Estamos aquí para ayudarte!"
    ];

    let messageIndex = 0;

    function showNextMessage() {
        const messageBox = document.getElementById('message-box');
        messageBox.textContent = messages[messageIndex];
        messageBox.style.display = 'block'; // Mostrar el cuadro

        messageIndex++;

        if (messageIndex >= messages.length) {
            setTimeout(() => {
                messageBox.style.display = 'none'; // Ocultar después de mostrar todos
                document.getElementById('bear').style.display = 'none'; // Ocultar el osito también
            }, 3000); // Mantener visible el último mensaje
            clearInterval(messageInterval); // Detener el intervalo
        } else {
            setTimeout(() => {
                messageBox.style.display = 'none'; // Ocultar el cuadro después de 5 segundos
            }, 5000); // Duración del mensaje visible
        }
    }

    // Iniciar la rotación de mensajes
    const messageInterval = setInterval(showNextMessage, 8000); // Cambiar cada 8 segundos
    showNextMessage(); // Mostrar el primer mensaje inmediatamente
</script>

<?php footerTienda($data); ?>