<?php 
	/*
		Metodo de envio 1 con HTML incrustado
		----------------------------------
		-Autor: Junior Yauricasa
		-Iteración: 2
		-Descripción: 
			Comprende el método de envio de fomulario obtenido desde consulta que regresa un mensaje
				*Enviado Correctamente a...
				*Error en el envio del email
			Considerar la configuración de tu CPANEL.
	*/

    /*
    	Recibiendo valores enviados desde el fomulario contactanos en el orden establecido.
    */

	
	  $nombres = $_POST['nombrecontacto']; //$nombres = 'Junior Yauricasa'; 
    $from = $_POST['correoelectronico']; //correo remitente recibido desde formulario
    $para = "persigrauperez@gmail.com"; //Correo destinatario (correo de recepcion modificar segun considere conveniente)
    $para2 = "junioryauricasa@gmail.com"; //Correo destinatario (correo de recepcion modificar segun considere conveniente)
    $titulo = 'Contacto HYO Delivery'; //$titulo = 'Consulta - Portal Web CCPJ'
    $mensaje = $_POST['Mensaje']; //este contenido es texto eniquecido
    
    // Las cebeceras determiman el tipo de contenido que se esta enviando y la descripcion del mail.
    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $cabeceras .= 'From: '.$nombres.' - CodAgrem '.$codAgremiado.' - Email<'.$from.'>';

    $enviado = mail($para, $titulo, $mensaje, $cabeceras); //ejecutando envio de mail con los parametros obtenidos.
    $enviado = mail($para2, $titulo, $mensaje, $cabeceras);
     
    if($enviado){
      //$resultado = 'Email enviado correctamente a '.$para; //Mensaje exitoso
      $resultado = '
      		<div class="alert alert-success" role="alert">
      		  <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:white">
			    <span aria-hidden="true">&times;</span>
			  </button>
			  <strong>Exitoso!!</strong> Email enviado correctamente.
			</div>
      ';
    }
    else{
      //$resultado = 'Error en el envío del email'; //Mensaje de error
      $resultado = '
      		<div class="alert alert-danger" role="alert">
      		  <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:white">
			       <span aria-hidden="true">&times;</span>
    			  </button>
    			  <strong>Alerta!!</strong> Error en el envío del email.
    			</div>
      ';
    }

  	echo $resultado; //Imprimie mensaje que se vera en el formulario
  	
?>