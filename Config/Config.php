<?php 
	const BASE_URL = "http://localhost/tienda_virtual";
	//const BASE_URL = "https://abelosh.com/tiendavirtual";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_tiendavirtual";
	const DB_USER = "root";
	const DB_PASSWORD = "Pa55word";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.paypal.com";
	const IDCLIENTE = "AY9OMrOGDLT2ZvWO0G0mTYiLblQYuCgzU04UmWHbOZ0SbX_ExRlWRCJr5CfR2Zk3i1G9-mbw5qbhlVSU";
	const SECRET = "EN-IIb1A2Ei2KDJ_qf4c54L4CfJAhyWtvd4wb71XrXHLToxjk0UAdwIiTWXo4jxL0SZwQXgK3qzLNHV0";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "cosmetify@gmail.com";
	const NOMBRE_EMPESA = "Cosmetify";
	const WEB_EMPRESA = "cosmetify@gmail.com";

	const DESCRIPCION = "La mejor tienda en línea con productos de belleza.";
	const SHAREDHASH = "Cosmetify";

	//Datos Empresa
	const DIRECCION = "Sonsonate Centro, Sonsonate";
	const TELEMPRESA = "+(503)60586125";
	const WHATSAPP = "+50360586125";
	const EMAIL_EMPRESA = "cosmetify@gmail.com";
	const EMAIL_PEDIDOS = "cosmetify@gmail.com"; 
	const EMAIL_SUSCRIPCION = "cosmetify@gmail.com";
	const EMAIL_CONTACTO = "cosmetify@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "#";
	const INSTAGRAM = "#";

 ?>