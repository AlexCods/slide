<?php
class General_model extends CI_Model {

  public function productosPortfolio(){

    $this->db->limit(10);
    $productos = $this->db->get('productos')->result();
    return $productos;

  }

}

?>
