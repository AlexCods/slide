<?php
class Helper_model extends CI_Model {

  public function getTallas($text = ""){
    return $this->db
    ->like('tag_talla',$text)
    ->where('is_active',1)
    ->get('tallas_camisetas')
    ->result();
  }

}

?>