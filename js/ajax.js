$(document).ready(function(){
  //carga de contenido en diferentes partes de la web
  $("#data-plat").load('consulta_platos.php');
  $("#data-cate").load("consulta_categoria.php");
  $("#data_opciones").load("opciones_categoria.php");
  $("#data-contac").load("consulta_contactos.php");

  //carga de contenido en platos.php (sliders)
  $("#sli-parr").load("contenido_carnes.php");
  $("#sli-poll").load("contenido_pollos.php");
  $("#sli-ensa").load("contenido_ensaladas.php");
  $("#sli-espe").load("contenido_especiales.php");
  $("#sli-pechu").load("contenido_pechugas.php");
  $("#sli-pas").load("contenido_pastas.php");
  $("#sli-post").load("contenido_postres.php");
  $("#sli-piq").load("contenido_piqueos.php");

// codigo para el boton de flecha arriba (subir)
 $('.up').click(function(){
      $('body, html').animate({
        scrollTop: '0px'
      }, 600);
  });

//codigo para validar insercion de nuevo plato
  $("#f-pl").submit(function(e) {
        e.preventDefault();
        var data=$(this).serializeArray();
        data.push({name:'tag',value:'inserplato'});

       $.ajax({
         url: 'calculo.php',
         type: 'POST',
         dataType: 'json',
         data: data,
         beforeSend:function(){
            $(".form-plat").find(".s-carga").css('display','inline-block');
         }
       })
       .done(function() {
        setTimeout(function(){
            $(".form-plat").find(".s-check").fadeIn();
          },700);
        setTimeout(function(){
            $(".form-plat").find(".s-check").fadeOut();
          },2500);
        $("#data-plat").load('consulta_platos.php');
        //$("#sli-parr").load("slider_carnes.php");
       })
       .fail(function() {
         $(".form-plat").find(".s-close").fadeIn();
       })
       .always(function() {
          setTimeout(function(){
            $(".form-plat").find(".s-carga").hide();
          },500);
       });
       $(".form-plat input[type='text']").val("");
       $(".form-plat textarea").val("");
       $(".form-plat input[type='number']").val("");
  })

//codigo para insertar categoria nueva
  $("#f-cat").submit(function(e) {
        e.preventDefault();
        var data=$(this).serializeArray();
        data.push({name:'tag',value:'insercate'});

       $.ajax({
         url: 'calculo.php',
         type: 'POST',
         dataType: 'json',
         data: data,
         beforeSend:function(){
            $(".form-cate").find(".s-carga").css('display','inline-block');
         }
       })
       .done(function() {
          setTimeout(function(){
            $(".form-cate").find(".s-check").fadeIn();
          },700);
          setTimeout(function(){
            $(".form-cate").find(".s-check").fadeOut();
          },2500);
         $("#data-cate").load("consulta_categoria.php");
        $("#data_opciones").load("opciones_categoria.php");
       })
       .fail(function() {
         $(".form-cate").find(".s-close").fadeIn();
       })
       .always(function() {
          setTimeout(function(){
            $(".form-cate").find(".s-carga").hide();
          },500);
       });
       $(".form-cate input[type='text']").val("");
  })


//codigo para suscripcion a newsletter
  $("#f-noti").submit(function(e){
    e.preventDefault();
    var data = $(this).serializeArray();
    data.push({name:'tag',value:'insernoti'});

    $.ajax({
      url: 'calculo.php',
      type: 'POST',
      dataType: 'json',
      data: data,
    })
    .done(function() {
      $(".pant_noticia").fadeIn();
    })
    .fail(function() {
      console.log("Error al enviar Correo")
    })
    
    $(".form-sus input[type='email']").val("");
  })

//codigo para formulario de contactanos
  $("#f-llama").submit(function(e){
    e.preventDefault();
    var data = $(this).serializeArray();
    data.push({name:'tag',value:'contactanos'});

    $.ajax({
      url: 'calculo.php',
      type: 'POST',
      dataType: 'json',
      data: data,
    })
    .done(function() {
      $(".pant_contacto").fadeIn();
    })
    .fail(function() {
      console.log("Error al enviar Datos")
    })
    
    $(".form-contac input[type='email']").val("");
    $(".form-contac input[type='text']").val("");
    $(".form-contac textarea").val("");
  })

//codigo para formulario de reserva
  $("#f-reserva").submit(function(e){jtm
    e.preventDefault();
    var data = $(this).serializeArray();
    data.push({name:'tag',value:'reservando'});

    $.ajax({
      url: 'calculo.php',
      type: 'POST',
      dataType: 'json',
      data: data,
    })
    .done(function() {
      $(".pant_reserva").fadeIn();
    })
    .fail(function() {
      console.log("Error al enviar Datos")
    })
    
    $(".form-reserv input[type='email']").val("");
    $(".form-reserv input[type='text']").val("");
    $(".form-reserv textarea").val("");
  })

   
})

