<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Forms</title>
	<link rel="stylesheet" href="css/Style.css">
	<link rel="icon" href="img/estudio.ico">
</head>

<body>
	<div class="contenedor">
		<div class="titulo">
			<header>
				<div>
					<h1>Formulario de contactos</h1>
				</div>
			</header>
		</div>
		<div class="main">

			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
							<!-- Php en Value permite consevar valores tras envio o error-->
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre?>">

				<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">

				<textarea class="form-control" name="mensaje" id="txt-area" cols="25" rows="10"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
							<!-- validado php -->
				<?php
	
				if(!empty($errores)): ?>
				
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
				<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Enviado Correctamente</p>
				</div>
				<?php endif ?>

				<input type="submit" name="submit" class="btn btn-primary" id="enviar" value="Enviar Correo">

			</form>
		</div>
		<footer>
			<div>
				<p>
					Diego Navarro - 2017
				</p>
			</div>
		</footer>
	</div>
</body>

</html>
