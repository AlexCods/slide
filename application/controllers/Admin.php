<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->database();
			$this->load->helper('general');
			$this->load->model('admin/productos/productos_model');
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
		$this->load->view('general/foot'); // 	
	}

	public function administrador(){

		$data['productos'] = $this->productos_model->getProductos();

		// ----- Vistas -----
		$this->load->view('admin/general/head'); // El <head>
		$this->load->view('admin/general/header'); // Menú superior
		$this->load->view('admin/general/left_menu'); // Menú lateral izquierdo
		$this->load->view('admin/administrador/administrador',$data); // 
		$this->load->view('admin/general/footer'); // </footer> y final del documento
		$this->load->view('general/foot'); // </footer> y final del documento		
		// ------------------

	}

	public function anadir_producto(){
		
		if ($this->input->post()){

			$target_dir = "./assets/productos/";
			$file = generateRandomString() . '_' . basename($_FILES["imagen-producto"]["name"]);
			$target_file = $target_dir . $file;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			
			if ($uploadOk == 0) {
				echo "Lo siento, la imagen del producto no se ha añadido";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["imagen-producto"]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES["imagen-producto"]["name"]). " has been uploaded.";
				} else {
					echo "No se ha podido subir la imagen";
				}
			}

			$post = $this->input->post();

			$this->productos_model->subirProducto($post,$file);

		} else {

			// ----- Vistas -----
			$this->load->view('admin/general/head'); // El <head>
			$this->load->view('admin/general/header'); // Menú superior
			$this->load->view('admin/general/left_menu'); // Menú lateral izquierdo
			$this->load->view('admin/administrador/anadir_producto'); //
			$this->load->view('admin/general/footer'); // </footer> y final del documento
			$this->load->view('general/foot'); //	
			// ------------------

		}

		
		
		
	}

}
