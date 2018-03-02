<!-- SECTION PORTOFOLIO -->
<div id="myBtnContainer" class="container buttons-portfolio">
  <button class="port-button active" onclick="filterSelection('all')"> Mostrar tot</button>
  <button class="port-button" onclick="filterSelection('samarreta')"> Samarretes</button>
  <button class="port-button" onclick="filterSelection('desuadora')"> Desuadores</button>
  <button class="port-button" onclick="filterSelection('pantalo')"> Pantalons</button>
</div>

<!-- Empieza la galeria-->
<div class="container columns">

  <?php
  foreach ($productos as $producto) {

  ?>
  <a href="<?php echo base_url() . 'productos/' . $producto->pseo_url; ?>">
    <div class="column <?php echo $producto->type; ?>">
      <div class="content">
        <div class="content-image">
          <img src="assets/img/polo.png" alt="Camiseta Player Unknown" style="width:100%">
        </div>
        <div class="content-text">
          <h4><?php echo $producto->nombre_producto; ?></h4>
          <div class="bottom-content-text">
            <h2><?php echo number_format($producto->precio_producto,2); ?>€</h2>
            <a class="afegir">
              Afegir al cistell
            </a>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </a>
  <?php
    }
  ?>
<!-- END GRID -->
</div>

<script type="text/javascript">
// Add active class to the current button (highlight it)

var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("port-button");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    $('.buttons-portfolio .active').removeClass('active');
    this.className += " active";
  });
}


/* ------------------------------------- */
</script>
<!-- /section PORTOFOLIO -->
