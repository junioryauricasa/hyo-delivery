<?php 

	$intidcodigo = $_POST['intidcodigo'];
	$nvchnombre = $_POST['nvchnombre'];
	$nvchdescripcion = $_POST['nvchdescripcion'];

	//$resultado = 'El id es'.$intidcodigo;


	// funcion registrar 
	//function registrar($titulo, $descripcion, $fechadoc, $src, $tipo){
	if($nvchnombre == null || $nvchdescripcion == null){
		$resultado = '<span style="color: orange; font-weight: bolder">Rellene todos los campos por favor</span>';
	}else
	{
	    include ('dbconnect.php'); //incluytendo cadena de coneccion

		// Check connection
		if (!$con) {
		    die("coneccion fallor: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO tb_categoria (intidcodigo, nvchnombre, nvchdescripcion)
		VALUES ('$intidcodigo', '$nvchnombre', '$nvchdescripcion')";

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