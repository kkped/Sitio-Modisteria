<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Separador extends CI_Controller {
    public function __construct(){
		$this->load->model(listar_model);
		parent::__construct();
		if(!isset($_SESSION['usuario']))
			redirect(base_url().'index.php/login/login');
		$this->load->model('Personas');
	}
	public function panel(){
		
		$datos = array();
		$datos ['listar']= $this->listar_model->listarpersonas();

		$this->load->view('admin/index', $pesonas);
	}

	public function agregar(){}

	public function modificar(){}

	public function eliminar(){}

	public function guardar(){
		if($_POST){
			$this->listar_model->guardarPersona($_POST);
		}
		$this->load->view(admin/mensaje);
	}
	
}
