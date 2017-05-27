<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>AgroFeria</title>
	  <!-- Fonts -->
    

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" type="text/css" href="\css\estilos.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class="contenido-encabezado">
			<div class="encabezado">
				<div class="logo"><img src="/images/agroferialogo.png" class="logotipo"></div>
			</div>
			<div class="menubar">
				<a href="#" class="btn"><span></span>Menu</a>
			</div>
		</div>
		
		<nav>
			<ul>
				<li><a href="/"><span><img src="/images/inicio.png" class="iconos">Inicio</span></a></li>
				<li><a href="/productos"><span><img src="/images/producto.png" class="iconos">Productos</span></a></li>
				<li><a href="/login"><span><img src="/images/acceso.png" class="iconos">Acceso</span></a></li>
				<li><a href="/contacto"><span><img src="/images/contacto.png" class="iconos">Contactos</span></a></li>
				<li><a href="/acerca"><span><img src="/images/acerca.png" class="iconos">Acerca de</span></a></li>
			</ul>
		</nav>
	</header>

	@yield('section')
	<footer>
		<h1>pie de pagina</h1>
	</footer>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/main.js"></script>
</body>
</html>