<?php
$catFotter = getCatFooter();
?>
<!-- Footer -->
<footer style="background-color: #624E88; color: white;" class="p-t-30 p-b-32">
    <div class="container">
        <div class="text-center p-t-20">
            <h4 class="stext-301 cl0 p-b-30">En Colaboración con</h4>
            <div class="row justify-content-center">
                <div class="col-4 d-flex justify-content-center">
                    <img src="https://img.freepik.com/premium-vector/elegant-minimal-cosmetics-logo_278222-3305.jpg?w=2000" alt="Maybelline" class="img-fluid collaboration-logo" />
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <img src="https://th.bing.com/th/id/OIP.KbafkxzR5yfIs62Qz8WWEgHaHa?rs=1&pid=ImgDetMain" alt="L'Oréal" class="img-fluid collaboration-logo" />
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <img src="https://static.vecteezy.com/system/resources/previews/002/219/879/large_2x/logo-natural-cosmetics-icon-isolated-on-a-white-background-flat-style-vector.jpg" alt="Estée Lauder" class="img-fluid collaboration-logo" />
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-6 col-lg-4 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">Categorías</h4>
                <?php if (count($catFotter) > 0) { ?>
                    <ul>
                        <?php foreach ($catFotter as $cat) { ?>
                            <li class="p-b-10">
                                <a href="<?= base_url() ?>/tienda/categoria/<?= $cat['idcategoria'] . '/' . $cat['ruta'] ?>" class="stext-107 cl7 hov-cl1 trans-04">
                                    <?= $cat['nombre'] ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>

            <div class="col-sm-6 col-lg-4 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">Contacto</h4>
                <p class="stext-107 cl7 size-201">
                    <?= DIRECCION ?> <br>
                    Tel: <a class="linkFooter" href="tel:<?= TELEMPRESA ?>"><?= TELEMPRESA ?></a><br>
                    Email: <a class="linkFooter" href="mailto:<?= EMAIL_EMPRESA ?>"><?= EMAIL_EMPRESA ?></a>
                </p>
                <div class="p-t-27">
                    <a href="<?= FACEBOOK ?>" target="_blanck" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="<?= INSTAGRAM ?>" target="_blanck" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/<?= WHATSAPP ?>" target="_blanck" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">Suscríbete</h4>
                <form id="frmSuscripcion" name="frmSuscripcion">
                    <div class="wrap-input1 w-full p-b-4">
                        <input class="input1 bg-none plh1 stext-107 cl7" type="text" id="nombreSuscripcion" name="nombreSuscripcion" placeholder="Nombre completo" required>
                        <div class="focus-input1 trans-04"></div>
                    </div>
                    <br>
                    <div class="wrap-input1 w-full p-b-4">
                        <input class="input1 bg-none plh1 stext-107 cl7" type="email" id="emailSuscripcion" name="emailSuscripcion" placeholder="email@example.com" required>
                        <div class="focus-input1 trans-04"></div>
                    </div>
                    <div class="p-t-18">
                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                            Suscribirme
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="p-t-40">
            <p class="stext-107 cl6 txt-center">
                <?= NOMBRE_EMPESA; ?> | <?= WEB_EMPRESA; ?> | <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </p>
        </div>
    </div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="zmdi zmdi-chevron-up"></i>
    </span>
</div>
<script>
    const base_url = "<?= base_url(); ?>";
    const smony = "<?= SMONEY; ?>";
</script>

<!-- JavaScript includes -->
<script src="<?= media() ?>/tienda/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?= media() ?>/tienda/vendor/animsition/js/animsition.min.js"></script>
<script src="<?= media() ?>/tienda/vendor/bootstrap/js/popper.js"></script>
<script src="<?= media() ?>/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= media() ?>/tienda/vendor/select2/select2.min.js"></script>
<script src="<?= media() ?>/tienda/vendor/daterangepicker/moment.min.js"></script>
<script src="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.js"></script>
<script src="<?= media() ?>/tienda/vendor/slick/slick.min.js"></script>
<script src="<?= media() ?>/tienda/js/slick-custom.js"></script>
<script src="<?= media() ?>/tienda/vendor/parallax100/parallax100.js"></script>
<script src="<?= media() ?>/tienda/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script src="<?= media() ?>/tienda/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="<?= media() ?>/tienda/vendor/sweetalert/sweetalert.min.js"></script>
<script src="<?= media() ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= media(); ?>/js/fontawesome.js"></script>
<script src="<?= media() ?>/tienda/js/main.js"></script>
<script src="<?= media(); ?>/js/functions_admin.js"></script>
<script src="<?= media() ?>/js/functions_login.js"></script>
<script src="<?= media() ?>/tienda/js/functions.js"></script>

<style>
    .collaboration-logo {
        width: 80px; /* Tamaño más pequeño */
        height: 80px; /* Mantiene la proporción circular */
        object-fit: cover; /* Recorta la imagen para mantener proporciones */
        border-radius: 50%; /* Bordes totalmente redondos */
        border: 2px solid #ffffff; /* Borde blanco */
        display: block; /* Asegura que se alinee correctamente */
        margin: 0 auto; /* Centra la imagen */
    }
</style>

</body>
</html>
