<!DOCTYPE html>
<?php
	include "comprobar.php";
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="../recursos/bootstrap/css/bootstrap.css">
		<link type="text/css" rel="stylesheet" href="../recursos/css/jquery.fullpage.css">
		<link tyoe="text/css" rel="stylesheet" href="../recursos/css/cssindex.css">
		<title>Mensajeria</title>
	</head>
	<body>
		<!--Esta es la seccion de ambos botones-->
		<section id="opciones" class="BotonesOpcion">
			<article id="Opcion">
				<!--Este botón se va a encargar de las opciones sobre la gestion de usuarios, es decir, de insertar o borrar usuarios de la base de datos.-->
				<div class="gestion">
					<div class="btn-group">
						<button type="button" class="btn btn-primary">Gestión de usuarios</button>
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="AltaUsuario/AltaUsuario.php">Añadir usuario</a></li>
							<li class="divider"></li>
							<li><a href="BajaUsuario/BajaUsuario.php">Eliminar usuario</a></li>
						</ul>
					</div>
				</div>
				<!--Este boton se encarga de enseñar los distintos canales de mensajeria instantanea qje puede usar el usuario para mandar el mensaje que desea.-->
				<div class="social">
					<div class="btn-group">
						<button type="button" class="btn btn-primary">Elige una opción</button>
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Telegram</a></li>
							<!--Este comando pone una separación entre las distintas opciones.-->
							<li class="divider"></li>
							<li><a href="#">Whatsapp</a></li>
							<li class="divider"></li>
							<li><a href="#">SMS</a></li>
							<li class="divider"></li>
							<li><a href="#">Otra</a></li>
						</ul>
					</div>
				</div>
			</article>
		</section>
		<!--Esta sección contiene la lista de cointactos que van a recibir el mensaje-->
		<section class="lista">
				<div class="checkbox">
					<label><input type="checkbox" value="">Option 1</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" value="">Option 2</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" value="">Option 3</label>
				</div>
		</section>
		<!--Esta sección contiene el mensaje que quiere ser enviado.-->
		<section id="Texto" class="Mensaje">
			<article id="MensajeTexto">
				<div class="form-group">
					<div class="panel panel-default">
						<div class="panel-heading">Mensaje</div>
							<div class="controls">
								<textarea rows="6" placeholder="Escribe el mensaje que deseas enviar a tus contactos..." name="mensaje" id="mensaje" class="form-control txtarea requiredField"></textarea>	
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="../recursos/bootstrap/js/bootstrap.js"></script>
	  	<script type="text/javascript" src="../recursos/js/main.js"></script>
		<script type="text/javascript" src="../recursos/js/jquery.fullpage.js"></script>  
	</body>
</html>
			