<?php 
headerTienda($data);
//$banner = media()."/tienda/images/bg-01.jpg";
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];
?>
<script>
    document.querySelector('header').classList.add('header-v4');
</script>

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-t-30 p-b-30" style="background-image: url(<?= $banner ?>);"> <!-- Aumentar padding -->
    <h2 class="ltext-105 cl0 txt-center" style="color: #fcb388; margin: 0;">Nosotros</h2> <!-- Sin cambios -->
</section>

<section class="bg0 p-t-0 p-b-0">
    <div class="container">
        <!-- Sección de Historia -->
        <div class="row historia-group mb-4">
            <!-- Columna de Imagen (Historia) -->
            <div class="col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1">
                    <div class="hov-img0">
                        <img src="https://th.bing.com/th/id/OIP.LJQ096ANWBqONIZ20-JTqAHaF1?rs=1&pid=ImgDetMain" alt="Historia" class="img-fluid" />
                    </div>
                </div>
            </div>

            <!-- Columna de Texto (Historia) -->
            <div class="col-md-7 col-lg-8">
                <div>
                    <h3 class="mtext-111 cl2 p-b-16">Historia</h3>
                    <p class="stext-113 cl6 p-b-26">
                    Cosmetify: Tu Tienda de Belleza en Línea, surge como una iniciativa para aprovechar el creciente mercado del comercio electrónico en El Salvador, especialmente en el sector de la belleza. Inspirado por la necesidad de ofrecer un acceso más amplio a productos cosméticos de calidad, se plantea la creación de una plataforma que permita a los consumidores comprar productos de belleza de manera sencilla, segura y desde cualquier lugar del país.
                    </p>
                    <p class="stext-113 cl6 p-b-26">
                    Con el objetivo de ofrecer una experiencia única de compra, Cosmetify busca ser una plataforma confiable donde las personas puedan acceder a una amplia variedad de productos cosméticos, desde los más conocidos hasta las marcas más exclusivas. A través de nuestra tienda en línea, nuestros clientes pueden disfrutar de la comodidad de adquirir productos de calidad con solo un clic, asegurando su satisfacción y bienestar.
                    </p>
                    <p class="stext-113 cl6 p-b-26">
                    Cosmetify ha nacido para transformar la forma en que los salvadoreños compran productos de belleza, haciendo que el acceso a estos productos sea más fácil y accesible para todos. Nuestro compromiso con la calidad y el servicio al cliente nos impulsa a seguir creciendo y adaptándonos a las necesidades de nuestros usuarios, garantizando su confianza y lealtad.
                    </p>
                </div>
            </div>
        </div>


        <!-- Sección de Misión -->
        <div class="row mision-group">
            <!-- Columna de Texto (Misión) -->
            <div class="col-md-7 col-lg-8">
                <div>
                    <h2 class="mtext-111 cl2 p-b-16"><span style="color: #236fa1;">Nuestra Misión</span></h2>
                    <p class="stext-113 cl6 p-b-26">
                    En Cosmetify, nuestra misión es proporcionar una plataforma en línea eficiente y accesible para la comercialización de productos de belleza, permitiendo a nuestros usuarios comprar desde la comodidad de su hogar. Nos comprometemos a ofrecer una amplia gama de productos cosméticos de alta calidad, adaptados a las necesidades y gustos de cada cliente, asegurando una experiencia de compra sencilla, segura y satisfactoria.
                    </p>
                    <p class="stext-113 cl6 p-b-26">
                    Buscamos constantemente mejorar la experiencia de nuestros usuarios, innovando con nuevas funcionalidades en nuestra plataforma y garantizando un servicio excepcional. Nuestro objetivo es convertirnos en el sitio de referencia para la compra de productos de belleza en línea en El Salvador, brindando a nuestros clientes acceso a marcas tanto nacionales como internacionales.
                    </p>
                    <div class="bor16 p-l-29 p-b-9 m-t-22">
                        <p class="stext-114 cl6 p-r-40 p-b-11">
                        "Nuestro compromiso es conectar a las personas con la belleza, transformando su forma de vivirla y disfrutarla."
                        </p>
                    </div>
                </div>
            </div>

            <!-- Columna de Imagen (Misión) -->
            <div class="col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor2">
                    <div class="hov-img0">
                        <img src="https://i0.wp.com/directorioindispensable.com/directorio-merida-yucatan/wp-content/uploads/2017/07/saludabit-cosmeticos.jpg?resize=1080%2C675&ssl=1" alt="Misión" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Sombra suave para el contenedor de cada grupo (Historia y Misión) */
    .historia-group, .mision-group {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Sombra suave */
        border-radius: 8px;
        margin-bottom: 30px; /* Espacio entre las secciones */
        padding: 20px; /* Padding dentro del contenedor */
        transition: box-shadow 0.3s ease-in-out;
    }

    /* Efecto hover para Historia y Misión, intensificando la sombra */
    .historia-group:hover, .mision-group:hover {
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    .how-bor1, .how-bor2 {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
    }

    .hov-img0 img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease-in-out;
    }

    .hov-img0:hover img {
        transform: scale(1.05);
    }

    .mtext-111 {
        font-size: 2rem;
        font-weight: bold;
    }

    .stext-113, .stext-114 {
        font-size: 1rem;
        line-height: 1.5;
        color: #6c757d;
    }

    .bor16 {
        border: 2px solid #ddd;
        padding: 20px;
        border-radius: 8px;
    }
</style>

<!-- Content page -->
<?php
/*if(viewPage($idpagina)){
    echo $data['page']['contenido'];
}else{
?>
<div>
    <div class="container-fluid py-5 text-center" >
        <img src="<?= media() ?>/images/construction.png" alt="En construcción">
        <h3>Estamos trabajando para usted.</h3>
    </div>
</div>
<?php 
}*/

footerTienda($data);
?>
