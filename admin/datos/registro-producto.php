<?php 
	$intidcategoria = $_POST["intidcategoria"];
	$intidproducto = $_POST["intidproducto"];
	$nvchnombre = $_POST["nvchnombre"];
	$vchdescripcion = $_POST["vchdescripcion"]; 
	$nvchimg = $_POST["nvchimg"];
	$dblprecio = $_POST["dblprecio"];

	//$resultado = 'El id es'.$intidcodigo;
	if($intidcategoria == null || $nvchnombre == null || $vchdescripcion == null || $nvchimg == null || $dblprecio == null){
		$resultado = '<span style="color: orange; font-weight: bolder">Rellene todos los campos por favor</span>';
	}else{
		    
	    include ('dbconnect.php'); //incluytendo cadena de coneccion
		if (!$con) {
		    die("coneccion fallo: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO tb_producto (intidproducto, intidcategoria, nvchnombre, vchdescripcion, nvchimg, dblprecio)
		VALUES (null, '$intidcategoria', '$nvchnombre', '$vchdescripcion', '$nvchimg', '$dblprecio')";

		if (mysqli_query($con, $sql)) {
		    //echo "New record created successfully";
		    $resultado = '<span style="color: green; font-weight: bolder">se procedio a realizar el registro exitosamente</span>';//mensaje exitoso
		} else {
		    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		    $resultado = '<span style="color: red; font-weight: bolder">se procedio a realizar el registro exitosamente</span>';
		}
		mysqli_close($con); // cierre de la coneccion		

	}
	
	echo $resultado; // Imprimie mensaje que se vera en el formulario
?>