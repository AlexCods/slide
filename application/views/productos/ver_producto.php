
        <div class="col-md-9">
          <div class="img-producto col-md-6">
            <div class="col-md-12">
              <img src="<?php echo base_url(); ?>assets/productos/<?php echo $imagen_producto->path; ?>" max-height="250px"  alt="Camiseta Player Unknown" style="width:100%">
            </div>
            <div style="margin-top: 15px;" class="col-md-12">
              <div class="producto-preview">
                <img src="<?php echo base_url(); ?>assets/img/polo.png"  alt="Camiseta Player Unknown">
              </div>
              <div class="producto-preview">
                <img src="<?php echo base_url(); ?>assets/img/polo.png"  alt="Camiseta Player Unknown">
              </div>
              <div class="producto-preview">
                <img src="<?php echo base_url(); ?>assets/img/polo.png"  alt="Camiseta Player Unknown">
              </div>
            </div>
          </div>
          <div class="info-producto col-md-6">
            <div class="col-md-12 producto-titulo">
              <h3><?php echo $producto->nombre_producto; ?></h3>
            </div>
            <div class="col-md-12 producto-review">
              <?php
                if (isset($reviews) && !empty($reviews)) {

                } else {
                  echo '<small>Todabía no hay reviews de este producto</small>';
                }
              ?>

            </div>
            <div style="padding: 0; margin-top: 25px; display: flex;align-items: center;" class="col-md-12">
              <div class="producto-precio col-md-5">
                <span><?php echo number_format($producto->precio_producto,2); ?>€</span>
              </div>
              <div class="col-md-7 producto-disponibilidad">
                Disponibilidad:
                <?php
                  if ($producto->stock > 0) {
                    echo '<span class="success">En stock</span>';
                  }else {
                    echo '<span class="danger">No disponible</span>';
                  }
                ?>

              </div>
            </div>
            <div class="col-md-12 producto-descripcion">
              <?php echo $producto->descripcion_producto; ?>
            </div>
            <div class="col-md-12 producto-tips">
              <ul>
                <li>
                  <i class="fa fa-check"></i>
                  Satisfacción garantizada
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  Envío gratuito
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  Envío en 24h
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  Devolución en 14 días
                </li>
              </ul>
            </div>
            <div style="margin-top: 20px; display: flex; justify-content: center;" class="col-md-12">
              <div class="producto-talla">
                <select>Selecciona tu talla
                  <option>XS</option>
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                </select>
              </div>
              <div class="cantidad">
                <span class="restar_cantidad"><</span>
                <input type="number" value="1">
                <span class="sumar_cantidad">></span>
              </div>
              <?php
                if ($producto->stock > 0) {
                  echo '<input type="button" class="anadir_carro" value="Afegir al cistell">';
                } else {
                  echo '<input type="button" disabled="true" class="anadir_carro" value="No disponible temporalmente">';
                }
              ?>

            </div>
          </div>

          <div class="col-md-12" style="margin-top: 25px;">
            <ul class="nav nav-pills">
              <div class="col-md-4 menu-info-producto">
                <li class="active"><a data-toggle="pill" href="#home">informacio producte</a></li>
              </div>
              <div class="col-md-4 menu-info-producto">
                <li><a data-toggle="pill" href="#menu1">informacio adicional</a></li>
              </div>
              <div class="col-md-4 menu-info-producto">
                <li><a data-toggle="pill" href="#menu2">valoracions usuaris</a></li>
              </div>
            </ul>

            <div style="margin-bottom: 60px" class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h3><?php echo $producto->nombre_producto; ?></h3>
                <p><?php echo $producto->descripcion_producto; ?></p>
              </div>
              <div id="menu1" class="tab-pane fade">
                <h3>Información de las tallas</h3>
                <p>En construcción</p>
              </div>
              <div id="menu2" class="tab-pane fade">
                <?php
                  if (isset($reviews) && !empty($reviews)) {
                    print_r($reviews);
                  } else {
                    echo '<div style="padding: 40px;">';
                    echo "<p>Todavia no hay reviews sobre este producto.</p>";
                    echo '</div>';
                  }
                ?>



              </div>
            </div>
          </div>
        </div>
      </div> <!-- Cierro el col-md-12 con las categorias y el contenido -->
      <div class="clearfix"></div>


    <!-- Termina div del full page -->
    <script type="text/javascript">


    $('.nav-pills div li').click(function(){
      $('.nav-pills div li').removeClass('active');
      $(this).addClass('active');
      var href = $(this).find('a').attr('href');
      $('.tab-content div').removeClass('active in');
      $(href).addClass('in').addClass('active');
    });


    $('.anadir_carro').click(function(){

      var data = {
        id_producto: '<?php echo $producto->id_producto; ?>'
      }

      $.ajax({
        url: "<?php echo base_url() . 'carrito/anadir_carro'; ?>",
        type: 'post',
        data: data
      }).done(function(response){
        $('#carrito').load();
      });
    });

    </script>
