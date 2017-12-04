<?php include('datos/select-categorias.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registro de Productos</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- invoca a registro categoria ubicado en la capa de negocio -->
<script src="negocio/nregistro-producto.js"></script>

<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<h1>registro de productos</h1>
	
		<!-- INICIO select categoria del producto registrado -->
		<select name="color1" id='color1' id='' onclick="">
	       <?php echo $combobit; ?>
		</select>
		<input type="hidden" name="intidcategoria" id="intidcategoria" size="40" placeholder="Aquí saldrá el valor del select cuando cambie" value="">
		<br>
		<!-- END select categoria del producto registrado -->

		<input type="hidden" id="intidproducto" name="intidproducto" placeholder="id registro" value="null">

		<input type="text" placeholder="Ingresa nombre" name="nvchnombre" id="nvchnombre" onfocus="" >
		<br>

		<input type="text" placeholder="Ingresa descripcion" name="vchdescripcion" id="vchdescripcion" onfocus="" >
		<br>

		<input type="text" accept="" id="nvchimg" name="nvchimg" placeholder="imagen del producto" onclick="">
		<br>

		<input type="text" placeholder="Ingrese Precio" name="dblprecio" id="dblprecio" onfocus="" >
		<br>
	
		<button type="submit" href="javascript:;" class="btn btn-success" onclick="realizaEnvio($('#intidcategoria').val(),$('#intidproducto').val(),$('#nvchnombre').val(),$('#vchdescripcion').val(),$('#nvchimg').val(),$('#dblprecio').val(),); return false;">registrar</button>
		<input type="reset" value="limpiar">
		<br>
		<a href="registro-categoria">registrar categoria</a>
	</form>
	<br>
	<span id="resultado"></span>
</body>
</html>

<script>
	$(document).ready(function(){
		$("select[name=color1]").change(function(){
	            //alert($('select[name=color1]').val());
	            $('input[name=intidcategoria]').val($(this).val());
	    });
	});
</script>