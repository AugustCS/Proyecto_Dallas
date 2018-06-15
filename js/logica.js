$(window).load(function (){


  // codigo para carga de consulta de contactos en pagina admin.php
   $(".cargar_contacto").click(function(){
    $("#data-contac").load("consulta_contactos.php");
  })


   // logica platos --- modal
   $(".arti").click(function(){
      $(".modal_carta").fadeIn("fast");
      $("body").css({
        overflow: 'hidden'        
      });
      $(".ul_li_iphone li").removeClass("active_iphone");
      $(".ul_li_iphone").removeClass("active_box_iphone");
   })
    $(".close_modal_carta").click(function(){
      $(".modal_carta").fadeOut("fast");
      $("body").css({
        overflow: 'auto'        
      });
   })

   // LOGICA PARA CAMBIOS EN EL MODAL DE LA CARTA
   $("#bola_carne").click(function(){
      $(".seccion").fadeOut("fast");
      $("#sli_carne").fadeIn("fast");
      $("#ip_carnes").addClass("active_iphone");
   })
   $("#bola_ensalada").click(function(){
      $(".seccion").fadeOut("fast");
      $("#sli_ensaladas").fadeIn("fast");
      $("#ip_ensaladas").addClass("active_iphone");
   })
   $("#bola_especiales").click(function(){
      $(".seccion").fadeOut("fast");
      $("#sli_especiales").fadeIn("fast");
      $("#ip_especiales").addClass("active_iphone");
   })
   $("#bola_pechugas").click(function(){
      $(".seccion").fadeOut("fast");
      $("#sli_pechugas").fadeIn("fast");
      $("#ip_pechugas").addClass("active_iphone");
   })
   $("#bola_pasta").click(function(){
      $(".seccion").fadeOut("fast");
      $("#sli_pastas").fadeIn("fast");
      $("#ip_pastas").addClass("active_iphone");
   })
   $("#bola_piqueos").click(function(){
      $(".seccion").fadeOut("fast");
      $("#sli_piqueos").fadeIn("fast");
      $("#ip_piqueos").addClass("active_iphone");
   })
   $("#bola_pollos").click(function(){
      $(".seccion").fadeOut("fast");
      $("#sli_pollos").fadeIn("fast");
      $("#ip_pollos").addClass("active_iphone");
   })
   $("#bola_postres").click(function(){
      $(".seccion").fadeOut("fast");
      $("#sli_postres").fadeIn("fast");
      $("#ip_postres").addClass("active_iphone");
   })

// Logica para cambio de seleccion en caja iphone
   $(".ul_li_iphone li").click(function(){
      $(".ul_li_iphone li").removeClass("active_iphone");
      var id_op = " ";
      id_op = $(this).attr("id");
      $(".seccion").fadeOut("fast");
      $(".ul_li_iphone").removeClass("active_box_iphone");
      switch(id_op){
        case 'ip_pastas':
            $("#sli_pastas").fadeIn("fast");
            $("#ip_pastas").addClass("active_iphone");
            break;
        case 'ip_piqueos':
            $("#sli_piqueos").fadeIn("fast");
            $("#ip_piqueos").addClass("active_iphone");
            $(".ul_li_iphone").addClass("active_box_iphone");
            break;
        case 'ip_pechugas':
            $("#sli_pechugas").fadeIn("fast");
            $("#ip_pechugas").addClass("active_iphone");
            break;
        case 'ip_ensaladas':
            $("#sli_ensaladas").fadeIn("fast");
            $("#ip_ensaladas").addClass("active_iphone");
            break;
        case 'ip_especiales':
            $("#sli_especiales").fadeIn("fast");
            $("#ip_especiales").addClass("active_iphone");
            break;
        case 'ip_carnes':
            $("#sli_carne").fadeIn("fast");
            $("#ip_carnes").addClass("active_iphone");
            break;
        case 'ip_pollos':
            $("#sli_pollos").fadeIn("fast");
            $("#ip_pollos").addClass("active_iphone");
            break;
        case 'ip_postres':
            $("#sli_postres").fadeIn("fast");
            $("#ip_postres").addClass("active_iphone");
            break;
      }
   })

    $('.flex1').flexslider({
      loop:true,
    	animation: "slide",
    	controlNav: "thumbnails",
    	animationSpeed: 500,
    	SlideshowSpeed: 500,
    });

    $('.flex2').flexslider({
      loop:true,
      animation: "slide",
      animationLoop: false,
      slideshow:true,
      itemWidth: 210,
      itemHeight:200,
      minItems: 2,
      maxItems:4
    });

/*// Slider parrilla segun esfera parrilla!   **********
   /*$('#sli-parr').owlCarousel({
      autoplay:true,
      autoplayTimeout:3000,
      margin:30,
      responsive:{
          0:{
              items:1
          },
          520:{
              items:1
          },
          600:{
              items:2
          },
          900:{
              items:2
          },
          1072:{
              items:3
          },
          1300:{
              items:4
          }
      }
    });*/

// Slider ensalada segun esfera parrilla!   **********
   /*$('#sli-ensa').owlCarousel({
      autoplay:true,
      autoplayTimeout:3000,
      margin:30,
      responsive:{
          0:{
              items:1
          },
          520:{
              items:1
          },
          600:{
              items:2
          },
          900:{
              items:2
          },
          1072:{
              items:3
          },
          1300:{
              items:4
          }
      }
    });

    $('#sli-pastas').owlCarousel({
      autoplay:true,
      autoplayTimeout:3000,
      margin:30,
      responsive:{
          0:{
              items:1
          },
          520:{
              items:1
          },
          600:{
              items:2
          },
          900:{
              items:2
          },
          1072:{
              items:3
          },
          1300:{
              items:4
          }
      }
    });

     $('#sli-espe').owlCarousel({
      autoplay:true,
      autoplayTimeout:3000,
      margin:30,
      responsive:{
          0:{
              items:1
          },
          520:{
              items:1
          },
          600:{
              items:2
          },
          900:{
              items:2
          },
          1072:{
              items:3
          },
          1300:{
              items:4
          }
      }
    });

     $('#sli-pech').owlCarousel({
      autoplay:true,
      autoplayTimeout:3000,
      margin:30,
      responsive:{
          0:{
              items:1
          },
          520:{
              items:1
          },
          600:{
              items:2
          },
          900:{
              items:2
          },
          1072:{
              items:3
          },
          1300:{
              items:4
          }
      }
    });

     $('#sli-piq').owlCarousel({
      autoplay:true,
      autoplayTimeout:3000,
      margin:30,
      responsive:{
          0:{
              items:1
          },
          520:{
              items:1
          },
          600:{
              items:2
          },
          900:{
              items:2
          },
          1072:{
              items:3
          },
          1300:{
              items:4
          }
      }
    });

     $('#sli-poll').owlCarousel({
      autoplay:true,
      autoplayTimeout:3000,
      margin:30,
      responsive:{
          0:{
              items:1
          },
          520:{
              items:1
          },
          600:{
              items:2
          },
          900:{
              items:2
          },
          1072:{
              items:3
          },
          1300:{
              items:4
          }
      }
    });

     $('#sli-post').owlCarousel({
      autoplay:true,
      autoplayTimeout:3000,
      margin:30,
      responsive:{
          0:{
              items:1
          },
          520:{
              items:1
          },
          600:{
              items:2
          },
          900:{
              items:2
          },
          1072:{
              items:3
          },
          1300:{
              items:4
          }
      }
    });
    // fin de sliders de carta arriba!
*/
    $('#sli-vin').owlCarousel({
        autoplay:true,
        loop:true,
        responsive:{
          0:{
              items:1
          },
          520:{
              items:1
          },
          600:{
              items:2
          },
          900:{
              items:2
          },
          1072:{
              items:3
          },
          1300:{
              items:4
         }
       }
    });

   //activando el menu panel
   $('#my-link').panelslider();

   //codigo para marcar seleccion de menu
   /*$('.t-menu ul li a').click(function(){
        $(".t-menu ul li a").removeClass("active");
        $(this).addClass("active");
    })*/

   //codigo para marcar seleccion de nosotros
    $('.eleccion span').click(function(){
        $(".eleccion span").removeClass("elegido");
        $(this).addClass("elegido");
    })

   //codigo para pagina nosotros
   $('#re').click(function(){
        $('.arti-re').fadeIn();
        $('.arti-mi').fadeOut();
        $('.arti-si').fadeOut();
   });

    $('#mi').click(function(){
        $('.arti-re').fadeOut();
        $('.arti-mi').fadeIn();
        $('.arti-si').fadeOut();
   });

     $('#si').click(function(){
        $('.arti-re').fadeOut();
        $('.arti-mi').fadeOut();
        $('.arti-si').fadeIn();
   });

    // codigo para page reservas
    $('#sure').click(function(){
        $('.ti-reserv').fadeOut("fast");
        $('#b-re').fadeIn();
    });

    /**************** CODIGO ADMINISTRADOR****************/
    /*****************************************************/
    $(".nav li ul li").click(function(){
      var rutali = $(this).attr("class");
      $(".cjcon").fadeOut("fast");
      switch(rutali){
        case 'co-re':
          $(".con_reservas").fadeIn("fast");
          break;
        case 'co-pe':
          $(".con_pedidos").fadeIn("fast");
          break;
        case 'co-cl':
          $(".con_contactos").fadeIn("fast");
          break;
        case 'in-pl':
          $(".in_platos").fadeIn("fast");
          break;
        case 'in-cat':
          $(".in_catego").fadeIn("fast");
          break;
      }

    })
    // CODIGO PARA MOSTRAR Y OCULTAR CAJA DE LOGIN
    $("#ic-lo").mouseenter(function(){
      $(".caja-usuario").fadeIn("fast");
    })
    $("#cerrar_usuario").click(function(){
      $(".caja-usuario").fadeOut();
    })

    // funcion para quitar evento predeterminado en elemento donde se llame
    function quitarevento(e){
      e.preventDefault();
    }

    // codigo mensajes de satisfecho envioss
    $("#close_pant").click(function(){
      $(".pant_noticia").fadeOut();
      $(".pant_contacto").fadeOut();
    })

    $("#close_reser").click(function(){
      $(".pant_reserva").fadeOut();
    })


    // CODIGO PARA VALIDAR BOTON DE UP EN BASE A SCROLL
    $(window).scroll(function(){
          var ancho= $(window).width();
          var scroll = $(window).scrollTop();

          //console.log(scroll);
          if(scroll>524 && ancho>1000){
            $(".up").fadeIn();
            $(".up").click(function(){
              $(window).scrollTop(0);
            });
          }else{
            $(".up").fadeOut();
          }

    });

});
