
$('.do-tallas').on('click', function(){
  
    mostrarTallas();

});

  function mostrarTallas(text = ""){

        

            var datos = {
                texto: text
            }

            $.ajax({
                url: HELPER_URL + 'getTallas',
                type: 'post',
                data: datos,
                success: function(respuesta){
                    var response = JSON.parse(respuesta);
                    $('.option-tallas').html('');
                   
                    var html = "";
                    $.each(response, function(index,value){
                        
                        html += "<li class='li-talla' data-tag='" + value.tag_talla + "' data-nombre='" + value.nombre_talla + "' data-id_talla='" + value.id_talla + "'>" + value.tag_talla + " - " + value.nombre_talla + "</li>";
                    });
                    
                    $('.option-tallas').html(html);
                }
            })
        
      
  }

  $(document).on('click','.li-talla',function(){
    alert('test');
    var nombre = $(this).data('nombre');
    var tag = $(this).data('tag');
    var id_talla = $(this).data('id_talla');

    html = '<span class="talla-actual"><i class="fa fa-times mr-2"></i>' + tag + '</span>';

    $('.tallas-actuales').append(html);
  })

  