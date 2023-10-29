<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function saludar(){
		$this->load->view('saludar');
	}
	public function panel(){
		$this->load->view('admin/index');
		
	}
	
	//NUevo administrador del sitio
	public function admin(){
		$this->load->view('adminmod/index');
		
	}

	public function portal(){
		$this->load->view('sitio/index');
	}
	public function carro(){
		
		$this->load->library('sitio/carro');
	}
	public function Session(){
		$this->load->library('session');
	}

	public function verificar(){}

	public function agregar_carrito()
	{
		$this->load->view('carrito/agregar_carrito');
	}

	

}
