<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->database();
			$this->load->library('cart');

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "pagina carrito";
	}

	public function anadir_carro(){
    if ($this->input->post('id_producto')) {

      $id_producto = $this->input->post('id_producto');
      $result = $this->db->get_where('productos',array('id_producto' => $id_producto))->result();

      $data = array(
        'id' => $result[0]->id_producto,
        'name' => $result[0]->nombre_producto,
        'price' => $result[0]->precio_producto,
        'qty' => 1,
      );

      $this->cart->insert($data);

    } else {
      echo "hola";
    }
	}

}
