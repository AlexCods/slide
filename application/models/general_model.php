<?php
class General_model extends CI_Model {

  public function productosPortfolio(){

    $this->db->limit(10);
    $this->db->from('productos');
    $this->db->join('tipos_productos','productos.tipo_producto = tipos_productos.id_tipo_producto');
    $productos = $this->db->get()->result();
    if (isset($productos) && !empty($productos)) {
      return $productos;
    }

  }

}

?>
