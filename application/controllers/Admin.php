<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->view('admin/admin');
	}

	public function dashboard(){
		$this->load->helper('url');
		$this->load->view('admin/general/head');
		$this->load->view('admin/general/header');
		$this->load->view('admin/general/left_menu');
		$this->load->view('admin/dashboard/dashboard');
		$this->load->view('admin/general/footer');
	}

	public function clientes(){
		$this->load->database(); //Cargamos base de datos

		// ----- Modelos -----
		$this->load->model('admin/clientes/clientes_model');
		// -------------------

		// Cogemos la lista de clientes
		$data['lista_clientes'] = $this->clientes_model->getListaclientes();


		// ----- Vistas -----
		$this->load->view('admin/general/head'); // El <head>
		$this->load->view('admin/general/header'); // Menú superior
		$this->load->view('admin/general/left_menu'); // Menú lateral izquierdo
		$this->load->view('admin/clientes/clientes',$data); // Tablas clientes
		$this->load->view('admin/general/footer'); // </footer> y final del documento
		// ------------------
	}
}
