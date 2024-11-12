<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Abel OSH">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media(); ?>/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
    <style>
        body,
        html {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .rectangle {
            width: 800px;
            height: 400px;
            background: linear-gradient(406deg, white 55%, #624E88 45%);
            display: flex;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .login-section {
            width: 50%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            color: black;
        }

        .welcome-section {
            width: 50%;
            padding: 20px;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: right;
        }

        .login-form,
        .forget-form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
            /* Espacio entre grupos */
        }

        .login-form input,
        .forget-form input {
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            width: 100%;
            /* Asegura que el input use el 100% del contenedor */
        }

        .login-form button,
        .forget-form button {
            padding: 10px;
            background-color: #624E88;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .login-form button:hover,
        .forget-form button:hover {
            background-color: #444;
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            pointer-events: none;
        }

        .form-control {
            border: none;
            border-bottom: 2px solid black;
            outline: none;
            padding-right: 30px;
            padding-bottom: 5px;
        }

        .form-control:focus {
            border-bottom: 2px solid black;
        }

        .btn-container {
            margin-top: 10px;
            /* Espacio encima del botón */
            text-align: center;
            /* Centra el botón */
        }

        .btn-container {
            margin-top: 10px;
            /* Menos espacio entre el texto y el botón */
            width: 100%;
            /* Asegura que el contenedor ocupe el 100% del ancho disponible */
            display: flex;
            justify-content: flex-end;
        }

        .btn-website {
            padding: 8px 20px;
            background-color: white;
            color: #624E88;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 4px;
            border: 2px solid #624E88;
            transition: background-color 0.3s, color 0.3s, transform 0.3s;
        }

        .btn-website:hover {
            background-color: #624E88;
            color: white;
            transform: scale(1.05);
        }

        .btn-website:active {
            transform: scale(0.95);
        }
    </style>
    <title><?= $data['page_tag']; ?></title>
</head>

<body>
    <div class="rectangle">
        <div class="login-section">
            <div id="divLoading">
                <div>
                    <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
                </div>
            </div>
            <form class="login-form" name="formLogin" id="formLogin" action="">
                <h1 style="text-align: center;">Login</h1>
                <hr style="border: 1px solid black; width: 30%;">
                <div class="form-group" style="margin-top: 15px;">
                    <div class="input-icon">
                        <input id="txtEmail" name="txtEmail" class="form-control" type="email" placeholder="Ingrese su email" autofocus>
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Ingrese su contraseña">
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
                <div class="form-group">
                    <div class="utility">
                        <p class="semibold-text mb-2"><a href="#" id="forgotPassword">¿Olvidaste tu contraseña?</a></p>
                    </div>
                </div>
                <div id="alertLogin" class="text-center"></div>
                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> INICIAR SESIÓN</button>
                </div>
            </form>
            <form id="formRecetPass" name="formRecetPass" class="forget-form" action="" style="display: none; margin-top: 60px;">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i> ¿Olvidaste contraseña?</h3>
                <div class="form-group">
                    <input id="txtEmailReset" name="txtEmailReset" class="form-control" type="email" placeholder="Email" required style="margin-top: 10px;">
                </div>
                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i> REINICIAR</button>
                </div>
                <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="#" id="backToLogin"><i class="fa fa-angle-left fa-fw"></i> Iniciar sesión</a></p>
                </div>
            </form>
        </div>
        <div class="welcome-section">
            <h2>Bienvenido a nuestro sistema online</h2>
            <h5>Gracias por visitarnos, agradecemos la oportunidad que nos brinda</h5>
            <div class="btn-container">
                <a href="<?= base_url(); ?>" class="btn-website">Ir a Sitio Web</a>
            </div>
        </div>
    </div>
    <script>
        const base_url = "<?= base_url(); ?>";

        // Toggle between login and reset password forms
        document.getElementById('forgotPassword').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.login-form').style.display = 'none';
            document.getElementById('formRecetPass').style.display = 'flex';
        });

        document.getElementById('backToLogin').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.login-form').style.display = 'flex';
            document.getElementById('formRecetPass').style.display = 'none';
        });
    </script>
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/js/plugins/sweetalert.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
</body>

</html>