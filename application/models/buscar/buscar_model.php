<?php
class Buscar_model extends CI_Model {

  public function buscarProductos($busqueda){
    $this->db->like('nombre_producto',$busqueda);
    $productos = $this->db->get('productos')->result();
    return $productos;
  }

}

?>
