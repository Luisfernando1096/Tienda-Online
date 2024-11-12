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
                        <img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_1280.jpg" alt="Historia" class="img-fluid" />
                    </div>
                </div>
            </div>

            <!-- Columna de Texto (Historia) -->
            <div class="col-md-7 col-lg-8">
                <div>
                    <h3 class="mtext-111 cl2 p-b-16">Historia</h3>
                    <p class="stext-113 cl6 p-b-26">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                    <p class="stext-113 cl6 p-b-26">
                        Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis.
                    </p>
                    <p class="stext-113 cl6 p-b-26">
                        Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
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
                        Mauris non lacinia magna. Sed nec lobortis dolor. Vestibulum rhoncus dignissim risus, sed consectetur erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam maximus mauris sit amet odio convallis, in pharetra magna gravida. Praesent sed nunc fermentum mi molestie tempor. Morbi vitae viverra odio. Pellentesque ac velit egestas, luctus arcu non, laoreet mauris.
                    </p>
                    <p class="stext-113 cl6 p-b-26">
                        Ut mauris ligula, volutpat in sodales in, porta non odio. Pellentesque tempor urna vitae mi vestibulum, nec venenatis nulla lobortis. Proin at gravida ante. Mauris auctor purus at lacus maximus euismod. Pellentesque vulputate massa ut nisl hendrerit, eget elementum libero iaculis.
                    </p>
                    <div class="bor16 p-l-29 p-b-9 m-t-22">
                        <p class="stext-114 cl6 p-r-40 p-b-11">
                            Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
                        </p>
                        <span class="stext-111 cl8">- Steve Job’s</span>
                    </div>
                </div>
            </div>

            <!-- Columna de Imagen (Misión) -->
            <div class="col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor2">
                    <div class="hov-img0">
                        <img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849822_1280.jpg" alt="Misión" class="img-fluid" />
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
