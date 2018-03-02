</div>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
<?php if ($this->uri->segment(1) == 'buscar') { ?><script src="<?php echo base_url(); ?>assets/js/buscador.js"></script><?php } ?>
<script type="text/javascript">

  $('.fa-shopping-basket').click(function(){
    if ($('#contenido_carrito').is(':visible')) {
      $('#contenido_carrito').slideUp('fast');
    } else {
      $('#contenido_carrito').slideDown('fast');
    }
  });

  $(document).click(function(e) {

    var target = e.target;

      if (!$(target).is('.fa-shopping-basket') && !$(target).is('#contenido_carrito')) {
        $('#contenido_carrito').slideUp('fast');
      }

  });





</script>
</body>
</html>
