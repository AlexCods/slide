<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->database();
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
		
		$data['productos'] = $this->general_model->productosPortfolio();

		$this->load->view('general/head');
		$this->load->view('general/nav');
		$this->load->view('home/tipos');
		$this->load->view('home/destacados');
		$this->load->view('home/portofolio',$data);
		$this->load->view('home/testimonios');
		$this->load->view('general/footer');
		$this->load->view('general/foot');
		

	}

	public function dashboard(){
		$this->load->helper('url');
		$this->load->view('admin/general/head');
		$this->load->view('admin/general/header');
		$this->load->view('admin/general/left_menu');
		$this->load->view('admin/dashboard/dashboard');
		$this->load->view('admin/general/footer');
	}

	public function administrador(){
		
		$this->load->model('admin/productos/productos_model');

		$data['productos'] = $this->productos_model->getProductos();

		// ----- Vistas -----
		$this->load->view('admin/general/head'); // El <head>
		$this->load->view('admin/general/header'); // Menú superior
		$this->load->view('admin/general/left_menu'); // Menú lateral izquierdo
		$this->load->view('admin/administrador/administrador',$data); // 
		$this->load->view('admin/general/footer'); // </footer> y final del documento
		// ------------------

	}

	public function anadir_producto(){
		// ----- Vistas -----
		$this->load->view('admin/general/head'); // El <head>
		$this->load->view('admin/general/header'); // Menú superior
		$this->load->view('admin/general/left_menu'); // Menú lateral izquierdo
		$this->load->view('admin/administrador/anadir_producto'); //
		$this->load->view('admin/general/footer'); // </footer> y final del documento
		// ------------------
	}

}
