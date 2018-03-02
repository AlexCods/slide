$(document).ready(function(){




        var owl = $('.owl-carousel');

        owl.owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            navText : ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        $('.customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
        })


  /* Scroll
  $('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
  // /Scroll */

  /*
  var slider = $('.item img').outerHeight() - $('.carousel-inner').height();
  $('.item img').css('margin-top','-'+slider);
  $('.text-item-container').height($('.item img').outerHeight());

  // Margin top de la bola del banner
  var height = $('.banner-info').outerHeight();
  $('.banner-info').css('margin-top','-'+height);

  // Centramos verticalmente los elementos del nav
  var contacto = $('.logo img').outerHeight();
  $('.contacto').outerHeight(contacto); // Altura Telefono Email HEADER
  $('.menu li').outerHeight(contacto); // Altura Menu HEADER

  */
  // Añadimos la aparición de los submenús
  $('.menu li').hover(function(){
    $(this).find('.submenu').css({
      "opacity":"1",
      "max-height":"100%"

    });
    $(this).find('.submenu li').css({
      "padding":"20px",
      "overflow":"visible",
      "max-height":"100%"
    });
  }, function(){
    $(this).find('.submenu').css({
      "opacity":"0",
      "max-height":"0"
    });
    $(this).find('.submenu li').css({
      "padding":"0px",
      "overflow":"hidden",
      "max-height":"0"

    });
  });

  $('.contacto').height($('.menu').outerHeight());


  // Igualamos altura boton buscar con el buscador
  $('.buscar').height($('.texto-buscar').height());


  // SLIDER DEL overbanner

    $('.arrow-overbanner-left').click(function(){
      toggle_background();
    });

    $('.arrow-overbanner-right').click(function(){
      toggle_background();
    });



  // TERMINA SLIDER DEL OVERBANNER


  // Slide de los productos
  $('.container-producto').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 2,
    nextArrow: '<img class="arrows right-arrow" src="assets/img/right-arrow.png">',
    prevArrow: '<img class="arrows left-arrow" src="assets/img/left-arrow.png">',
    autoplay: true,
    responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      nextArrow: '<img class="arrows right-arrow" src="assets/img/right-arrow.png">',
      prevArrow: '<img class="arrows left-arrow" src="assets/img/left-arrow.png">',
      autoplay: true,
    }
  },
  {
    breakpoint: 800,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      autoplay: true,
      arrows: false
    }
  },
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]

});
  // /Termina el slide de productos

  // Centrado vertical del las flechas del slide de productos
  $('.arrows').css("margin-top",($('.producto').outerHeight()/2)-30);


  var rtime;
var timeout = false;
var delta = 200;
$(window).resize(function() {
    rtime = new Date();
    if (timeout === false) {
        timeout = true;
        setTimeout(resizeend, delta);
    }
});

function resizeend() {
    if (new Date() - rtime < delta) {
        setTimeout(resizeend, delta);
    } else {
        timeout = false;
        $('.arrows').css("margin-top",$('.producto').outerHeight()/2);
    }
}





});

/* ------------ PORTOFOLIO ------------- */
/*
filterSelection("all");

function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
*/
/* ------------------------------------- */

/* ------------ PORTOFOLIO ------------- */

function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

filterSelection("all");

function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}
