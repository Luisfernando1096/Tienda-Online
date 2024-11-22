<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Tienda Virtual Abel OSH">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Abel OSH">
  <meta name="theme-color" content="#009688">
  <link rel="shortcut icon" href="<?= media(); ?>/images/favicon.ico">
  <title><?= $data['page_tag'] ?></title>
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/js/datepicker/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
</head>

<body class="app sidebar-mini">
  <div id="divLoading">
    <div>
      <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
    </div>
  </div>
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button-->
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar">
      <i class="fas fa-bars"></i></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <!-- User Menu-->
      <li class="dropdown">
        <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
          <span class="user-name"><?= $_SESSION['userData']['nombres']; ?></span> <!-- Nombre del usuario -->
          <i class="fa fa-user fa-lg"></i> <!-- Icono al lado del nombre -->
        </a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="<?= base_url(); ?>/usuarios/perfil"><i class="fa fa-user fa-lg"></i> Profile</a></li>
          <li><a class="dropdown-item" href="<?= base_url(); ?>/opciones"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
          <li><a class="dropdown-item" href="<?= base_url(); ?>/logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
        </ul>
      </li>
      <li>
        <a class="app-nav__item" href="<?= base_url(); ?>/carrito/" aria-label="Go to Profile">
          <i class="fa fa-arrow-right fa-lg"> continuar pago</i>
        </a>
      </li>
    </ul>
  </header>
  <style>
    .app-header {
      background-color: #624E88;
    }
    .app-nav__item {
      display: flex;
      /* Usamos flexbox para alinear horizontalmente */
      align-items: center;
      /* Alinea el contenido verticalmente al centro */
      color: white;
      /* El texto será blanco */
      font-size: 16px;
      /* Ajustamos el tamaño de la fuente si es necesario */
    }

    .app-nav__item .user-name {
      margin-right: 10px;
      /* Un poco de espacio entre el nombre y el ícono */
      color: white;
      /* Aseguramos que el texto sea blanco */
      font-weight: normal;
      /* Peso normal del texto */
    }

    .app-sidebar__toggle {
      padding: 0 15px;
      font-family: fontAwesome;
      color: white;
      background-color: #624E88;
      line-height: 2.4;
      -webkit-transition: background-color 0.3s ease;
      -o-transition: background-color 0.3s ease;
      transition: background-color 0.3s ease;
    }

    .app-sidebar__toggle:focus {
      outline: none;
      /* Elimina el borde de enfoque predeterminado */
      background-color: #624E88;
      /* Asegúrate de que el fondo no cambie cuando esté en focus */
    }

    .app-sidebar__toggle:hover {
      color: white;
      background-color: #624E88;
      /* No cambies el fondo en el hover */
      text-decoration: none;
    }

    .app-sidebar__toggle:active {
      background-color: #624E88;
      /* Asegúrate de que no cambie el fondo cuando se hace clic (active) */
      color: white;
      /* Mantén el color blanco al hacer clic */
      
    }
    
  </style>
  <?php require_once("nav_admin.php"); ?>