<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->database();
			$this->load->helper('cookie');
			$this->load->helper('url');
			$this->load->model('buscar/buscar_model');
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

		if ($this->input->get('s')) {
			$busqueda = $this->input->get('s');

			$data['productos'] = $this->buscar_model->buscarProductos($busqueda);
		}

		print_r($data['productos']);

		$this->load->view('general/head');
    $this->load->view('general/nav');
    $this->load->view('general/barra_posicion');
    $this->load->view('general/categorias');
    $this->load->view('buscar/resultados_busqueda',$data);
    $this->load->view('general/footer');
    $this->load->view('general/foot');

	}



}
