<?php
class Buscar_model extends CI_Model {

  public function buscarProductos($busqueda){
    $this->db->like('nombre_producto',$busqueda);
    $this->db->join('tipos_productos','productos.tipo_producto = tipos_productos.id_tipo_producto');
    $productos = $this->db->get('productos')->result();
    return $productos;
  }

}

?>
