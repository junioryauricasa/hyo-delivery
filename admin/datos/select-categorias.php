<?php 	    
    include ('datos/dbconnect.php'); //incluytendo cadena de coneccion
	if (!$con) {
	    die("coneccion fallo: " . mysqli_connect_error());
	}
	$resultado = ""; //mensaje
	$sql="SELECT * from tb_categoria";
	$result = $con->query($sql); //usamos la conexion para dar un resultado a la variable

	if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
	    $combobit="";
	    while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
	    {
	        $combobit .=" <option value='".$row['intidcodigo']."'>".$row['nvchnombre']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
	    }
	}
	else
	{
	     $resultado = "no tiene registrado cateogiras aun... <br/> <a href='registro-categoria.php'>registrar categoria</a>";
	}
	//$conexion->close(); //cerramos la conexión
	
	echo $resultado; // Imprime mensaje que se vera en el formulario
?>
