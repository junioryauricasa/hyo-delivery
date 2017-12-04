// Recibe los parametros de formulrio categoria
function realizaEnvio(intidcategoria, intidproducto, nvchnombre, vchdescripcion, nvchimg, dblprecio){
  var parametros = {
    "intidcategoria" : intidcategoria,
    "intidproducto" : intidproducto,
    "nvchnombre" : nvchnombre,//Nombre de contacto
    "vchdescripcion" : vchdescripcion,//Correo electronico
    "nvchimg" : nvchimg,
    "dblprecio" : dblprecio,
  };
  $.ajax({
    data:  parametros, //datos que se envian a traves de ajax
    url:   'datos/registro-producto.php', //archivo que recibe la peticion
    type:  'POST', //método de envio
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