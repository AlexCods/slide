<div class="col-md-9 resultados_busqueda">
  <div style="display: flex; justify-content: space-between" class="filtros_busqueda col-md-12">
    <select>
      <option>Relevancia</option>
    </select>
    <select>
      <option>1-20 Productos</option>
    </select>
    <div>
      <div class="busqueda_grid">
        Grid
      </div>
      <div class="busqueda_column">
        Column
      </div>
    </div>
  </div>
  <?php foreach ($productos as $producto) { ?>

  <div style="margin-top: 30px" class="col-md-12 producto_resultado">
    <div class="col-md-4 busqueda_imagen">
      <img style="width: 100%;" src="<?php echo base_url(); ?>assets/img/polo.png">
    </div>
    <div class="col-md-8 producto-titulo">
      <h3 class="col-md-12 titulo_producto_busqueda"><?php echo $producto->nombre_producto; ?></h3>
      <small class="col-md-12 categoria_producto"><?php echo $producto->type; ?></small>
      <div class="col-md-12 producto-precio m-t">
        <span><?php echo number_format($producto->precio_producto,2); ?>€</span>
      </div>
      <div class="col-md-12 producto-descripcion">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
      </div>
      <a href="<?php echo base_url(); ?>productos/producto">
        <input type="button" class="ver_producto m-t" value="Veure producte">
      </a>
    </div>
  </div>

<?php } ?>

</div>



</div> <!-- Cierro div de col-md-12 con categorias -->
