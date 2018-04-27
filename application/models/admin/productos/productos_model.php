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

  public function subirProducto($post,$nombre_imagen){

    $pseo_url = $this->do_pseo($post['nombre-producto']);

    $params = array(
      'nombre_producto' => $post['nombre-producto'],
      'descripcion_producto' => $post['descripcion-producto'],
      'precio_producto' => $post['precio-producto'],
      'stock' => 1,
      'tipo_producto' => 1,
      'pseo_url' => $pseo_url
    );

    $this->db->insert('productos',$params);

    $insert_id = $this->db->insert_id();

    $params = array(
      'id_producto' => $insert_id,
      'path' => $nombre_imagen
    );

    $this->db->insert('imagenes_productos',$params);

  }

  public function do_pseo($nombre){
    $pseo = str_replace(' ','-',$nombre);

    $query = $this->db->get_where('productos', array('pseo_url' => $pseo));

    while ($query->num_rows() > 0){
      $pseo .= "-1";
      $query = $this->db->get_where('productos', array('pseo_url' => $pseo));
    }

    return $pseo;
  }

}

?>
