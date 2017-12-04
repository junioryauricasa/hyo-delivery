<?php 
	include('_include/_header.php'); 
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function realizaEnvio(nombrecontacto, correoelectronico, Mensaje){
        var parametros = {
          "nombrecontacto" : nombrecontacto,//Nombre de contacto
          "correoelectronico" : correoelectronico,//Correo electronico
          "Mensaje" : Mensaje,//Código agremiado
        };
        $.ajax({
          data:  parametros, //datos que se envian a traves de ajax
          url:   'contact-process.php', //archivo que recibe la peticion
          type:  'post', //método de envio
          beforeSend: function () {
              /*
                Mensaje mientras dura el proceso de consulta
              */
              $("#resultado").html("<img src='https://c.s-microsoft.com/en-us/CMSImages/big-loading-gif.gif?version=eac3284f-fcba-ea1d-70e3-010e22fefd05' alt='' width='20px' style='margin-right: 10px; margin-left:20px'>Procesando, espere por favor...");
          },
          success:  function (response) { 
              //una vez que el archivo recibe el request lo procesa y lo devuelve
              $("#resultado").html(response);
          }
        });
    }
</script>  

 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Contáctanos</h3>
		<h4><a href="index.html">Inicio</a><label>/</label>Contáctanos</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3>Contáctanos</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
		<div class=" contact-w3">	
			<div class="col-md-6 contact-right">	
				<img src="images/cac.jpg" class="img-responsive" alt="" width="100%">
			</div>
			<div class="col-md-6 contact-left">
				<h4>Información de Contacto</h4>
				<p>
					Ante dudas consultas y/o sugerencias no dudes en contactarte con nosotros, estaremos gustosos de atenderte
				</p>
				<ul class="contact-list">
					<!--li> <i class="fa fa-map-marker" aria-hidden="true"></i> 756 Global Place, New York.</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com">mail@example.com</a></li-->
					<li> <i class="fa fa-phone" aria-hidden="true"></i>+51 940 285 341</li>
				</ul>
				<br>
				<div id="container">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<div class="resp-tabs-container hor_1">
							<div>
								<form action="" method="post">
									<input type="text" placeholder="Ingresa Nombre" name="nombrecontacto" id="nombrecontacto" onfocus="" required="">
									<input type="Email" placeholder="Ingresa Mail" name="correoelectronico" id="correoelectronico" onfocus="" required="">
									<textarea name="Mensaje" id="Mensaje" placeholder="Mensaje"></textarea>
									<button type="submit" href="javascript:;" class="btn btn-success" onclick="realizaEnvio($('#nombrecontacto').val(), $('#correoelectronico').val(),$('#Mensaje').val());return false;">Enviar Mensaje</button>
								</form>
							</div>
							<br>
						</div>
					</div>
					<div class="box-footer">
	                  <span id="resultado"></span>
	                </div>
	                <br>
	                <br>
				</div>
				
				<!--Plug-in Initialisation-->
				<script type="text/javascript">
					$(document).ready(function() {
						//Horizontal Tab
						$('#parentHorizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion
							width: 'auto', //auto or any width like 600px
							fit: true, // 100% fit in a container
							tabidentify: 'hor_1', // The tab groups identifier
							activate: function(event) { // Callback function if tab is switched
								var $tab = $(this);
								var $info = $('#nested-tabInfo');
								var $name = $('span', $info);
								$name.text($tab.text());
								$info.show();
							}
						});

						// Child Tab
						$('#ChildVerticalTab_1').easyResponsiveTabs({
							type: 'vertical',
							width: 'auto',
							fit: true,
							tabidentify: 'ver_1', // The tab groups identifier
							activetab_bg: '#fff', // background color for active tabs in this group
							inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
							active_border_color: '#c1c1c1', // border color for active tabs heads in this group
							active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
						});

						//Vertical Tab
						$('#parentVerticalTab').easyResponsiveTabs({
							type: 'vertical', //Types: default, vertical, accordion
							width: 'auto', //auto or any width like 600px
							fit: true, // 100% fit in a container
							closed: 'accordion', // Start closed if in accordion view
							tabidentify: 'hor_1', // The tab groups identifier
							activate: function(event) { // Callback function if tab is switched
								var $tab = $(this);
								var $info = $('#nested-tabInfo2');
								var $name = $('span', $info);
								$name.text($tab.text());
								$info.show();
							}
						});
					});
				</script>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="col-lg-12">
			<!-- colocar la ubicacion de maps referente -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1071.386204067577!2d-75.20801547444277!3d-12.071767574895159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e9651bff01963%3A0x281c44c04158934e!2sBijouterie+Abigail!5e0!3m2!1ses!2spe!4v1510734980881" style="border:0; width: 100%; height: 400px"></iframe>
		</div>
	</div>
</div>
<!-- //contact -->

<?php include('_include/_footer.php'); ?>