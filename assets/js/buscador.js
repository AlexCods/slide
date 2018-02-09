$('.busqueda_grid').click(function(){
  $('.producto_resultado').removeClass('col-md-12').addClass('col-md-4');
  $('.producto_resultado .busqueda_imagen').removeClass('col-md-4').addClass('col-md-12');
  $('.producto_resultado .producto-titulo').removeClass('col-md-8').addClass('col-md-12').find('h3').css('font-size','120%');
  $('.producto_resultado .producto-descripcion').hide();
  $('.producto_resultado .ver_producto').css({'margin-left':'0','width':'100%'});
});

$('.busqueda_column').click(function(){
  $('.producto_resultado').removeClass('col-md-4').addClass('col-md-12');
  $('.producto_resultado .busqueda_imagen').removeClass('col-md-12').addClass('col-md-4');
  $('.producto_resultado .producto-titulo').removeClass('col-md-12').addClass('col-md-8').find('h3').css('font-size','24px');;
  $('.producto_resultado .producto-descripcion').show();
  $('.producto_resultado .ver_producto').css({'margin-left':'15px','width':'auto'});


});
