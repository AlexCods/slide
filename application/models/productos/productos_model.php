<?php
class Productos_model extends CI_Model {

  public function getProducto_from_pseo($pseo){
    $producto = $this->db->get_where('productos', array('pseo_url' => $pseo))->result();
    return $producto[0];
  }

  public function getImagen_from_id_producto($id_producto){
    $imagen = $this->db->get_where('imagenes_productos', array('id_producto' => $id_producto))->result();
    return $imagen[0];
  }

}

?>
