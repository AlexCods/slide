
        <div class="col-md-9">
          <div class="img-producto col-md-6">
            <div class="col-md-12">
              <img src="<?php echo base_url(); ?>assets/img/polo.png" max-height="250px"  alt="Camiseta Player Unknown" style="width:100%">
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
              <h3>Chicken Winner Dinner PUBG</h3>
            </div>
            <div class="col-md-12 producto-review">
              <small>Todabía no hay reviews de este producto</small>
            </div>
            <div style="padding: 0; margin-top: 25px; display: flex;align-items: center;" class="col-md-12">
              <div class="producto-precio col-md-6">
                <span>20.00€</span>
              </div>
              <div class="col-md-6 producto-disponibilidad">
                Disponibilidad: <span>En stock</span>
              </div>
            </div>
            <div class="col-md-12 producto-descripcion">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
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
              <input type="button" class="anadir_carro" value="Afegir al cistell">
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

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h3>HOME</h3>
                <p>Some content.</p>
              </div>
              <div id="menu1" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Some content in menu 1.</p>
              </div>
              <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
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
    });

    </script>
