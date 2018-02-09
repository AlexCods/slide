<?php
class Clientes_model extends CI_Model {

  public function getListaclientes(){
    $this->db->limit(25);
    $clientes = $this->db->get('clients')->result();
    return $clientes;
  }

}

?>
