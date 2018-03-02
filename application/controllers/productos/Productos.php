<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->database();
			$this->load->helper('cookie');
			$this->load->helper('url');
			$this->load->model('productos/productos_model');


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
		echo "pagina productos";
	}

	public function ver_producto(){
		$pseo = $this->uri->segment(2);
		$data['producto'] = $this->productos_model->getProducto_from_pseo($pseo);

		if (isset($data['producto']) && !empty($data['producto'])) {
			$data['imagen_producto'] = $this->productos_model->getImagen_from_id_producto($data['producto']->id_producto);

			$this->load->view('general/head');
			$this->load->view('general/nav');
			$this->load->view('general/barra_posicion');
			$this->load->view('general/categorias');
	    $this->load->view('productos/ver_producto',$data);
			$this->load->view('general/footer');
			$this->load->view('general/foot');

		} else {
			$this->load->view('errors/404');
		}
	}

}
