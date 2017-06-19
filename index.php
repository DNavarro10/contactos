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
				<div><h1>Formulario de contactos</h1></div>
			</header>
		</div>
		<div class="main">
			<form action="<php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				<input type="text" class="form-control" id="nombre" name="Nombre" placeholder="Nombre" value="">
				<input type="text" class="form-control" id="correo" name="Correo" placeholder="Correo" value="">
				
				<textarea class="form-control" name="mensaje" id="txt-area" cols="25" rows="10"></textarea>
					
				<input type="submit" name="submit" class="btn btn-primary" id="enviar" value="Enviar Correo">
		
			</form>
		</div>
		<footer>
			<div>
				<p>
					Diego Navarro -  2017
				</p>
			</div>
		</footer>
	</div>
</body>

</html>
