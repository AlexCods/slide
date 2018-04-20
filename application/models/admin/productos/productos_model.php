<?php
class Productos_model extends CI_Model {

  public function getProductos(){
    $productos = $this->db->get('productos')->result();
    return $productos;
  }

  public function getImagenProducto($id_producto){
    $imagen = $this->db->get_where('imagenes_productos', array('id_producto' => $id_producto))->result();
    return $imagen[0];
  }

}

?>
