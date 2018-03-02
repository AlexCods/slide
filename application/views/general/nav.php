<div id="full-page">

  <!-- navegador -->

  <nav>

    <div class="top-nav col-md-12 col-xs-12" style="padding: 15px; justify-content: center; align-items: center">
      <div class="col-md-11" style="display: flex;justify-content: center;align-items: center;">
        <div class="logo col-xs-12 col-md-3">
          <img width="60%" src="<?php echo base_url(); ?>assets/img/logo-sample.png">
        </div>
        <div class="buscador col-xs-12 col-md-6">
          <form class="col-md-12" method="get" action="<?php echo base_url(); ?>buscar">
            <input class="texto-buscar col-md-10" type="text" name="s" placeholder="¿Qué buscas?">
            <input class="buscar col-md-2" type="submit" value="Buscar">
          </form>
        </div>
        <div class="contacto col-md-3">
            <span><i class="fa fa-user" aria-hidden="true"></i></span>
            <span id="carrito"><i class="fa fa-shopping-basket" data-content="<?php echo count($this->cart->contents()); ?>" aria-hidden="true"></i>

              <div style="display: none" id="contenido_carrito">
                <?php
                  foreach ($this->cart->contents() as $items) {
                    
                    echo $items['name'];
                    echo "Cantidad: " . $items['qty'];
                    echo " Total a pagar: " . $items['subtotal'] . '€';
                    echo "<br>";
                  }
                ?>
              </div>

            </span>
        </div>



      </div>
    </div>
    <div class="col-md-12 div-menu">
      <div class="menu">
        <ul>
          <li class="border_bottom">Abrigos
            <ul class="submenu" style="margin-top: 20px;">
              <li>Hombre</li>
              <li>Mujer</li>
            </ul>
          </li>
          <li class="border_bottom">Pantalones</li>
          <li class="border_bottom">Sudaderas</li>
          <li class="border_bottom">Zapatos</li>
          <li class="border_bottom">Accesorios</li>
        </ul>
      </div>
        <div class="info-contacto">
            <div class="">
                <i class="fa fa-phone"></i>
                <span class="faa">+34 674 25 12 15</span>
            </div>
            <div class="">
                <i class="fa fa-envelope"></i><span class="faa">info@slide.com</span>
            </div>
        </div>
    </div>

  </nav>
  <div style="clear: both"></div>
  <!--/navegador -->
