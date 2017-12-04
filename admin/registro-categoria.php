<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registro de categorias</title>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- invoca a registro categoria ubicado en la capa de negocio -->
<script src="negocio/nregistro-categoria.js"></script>

<body>
	
	<form action="" method="POST">
		<h1>registro de categorias</h1>
		<input type="hidden" id="intidcodigo" name="intidcodigo" placeholder="id registro" value="" required="">
		<input type="text" placeholder="Ingresa categoria" name="nvchnombre" id="nvchnombre" onfocus="" required="">
		<br>
		<input type="Email" placeholder="Ingresa descripcion" name="nvchdescripcion" id="nvchdescripcion" onfocus="" required="">
		<br>

		<button type="submit" href="javascript:;" class="btn btn-success" onclick="realizaEnvio($('#intidcodigo').val(),$('#nvchnombre').val(), $('#nvchdescripcion').val());return false;">registrar categoria</button>
		<input type="reset" value="Limpiar campos">
	</form>
	<br>
	<span id="resultado"></span>

	<br>
	<a href="registro-producto">registrar producto</a>
</body>
</html>