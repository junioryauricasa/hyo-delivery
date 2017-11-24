<?php 
  $metadescripcion = 'Error 404 - Colegio de Contadores Públicos de Junín, algo sucedio mal';
	include('_include/header.php');
?>


<div class="content-wrapper" style="">

    <!-- div con backgrond incluido -->
    <section class="content" style="    min-height: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="div-with-background-img" style="background:url('dist/img/parallax/bckgnd-eventos.jpg'); ">
                <h1 class="text-center header-page-h1">
                    404 Página no Encontrada
                </h1>
                <p class="text-center text-description-header ">
                    Lo sentimos no hemos encontrado coincidencias con tu busqueda, pero tienes muchas más opciones a tu disposición. <br> 
                    <br>
                    <br>
                    <a href="#" class="btn btn-transparente" action="action" onclick="window.history.go(-1); return false;" >Ponme a Salvo</a>
                </p>
          </div>
        </div>
      </div>
    </section>
    <!-- div con backgrond incluido -->

    <section class="content" style="">          
      <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
              <img style="padding:50px;" src="dist/img/logo_horizontal_ccpj.png" alt="logo institucional colegio de contadores publicos de junín" width="100%">
            </div>
        </div>
      </div>
    </section>
</div>

<?php 
	include('_include/footer.php');
?>

<script>
	/*
		function return back
	*/
	function volver(){
		history.back();
	}
</script>