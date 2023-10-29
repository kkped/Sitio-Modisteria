<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

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
	
	public function clientes(){
		$this->load->view('admin/agregar/index');
           
	}
	//2 prueba
	public function personas(){
		
		$this->load->view('admin/agregar/personas');
           
	}
	//3 prueba
	public function productos(){
		$this->load->view('admin/agregar/productos');
           
	}

	//4prueba

	public function productos_hechos(){
		$this->load->view('admin/agregar/productos_hechos');
	}   
	
	//5prueba
	public function seccion_telas(){
		$this->load->view('admin/agregar/seccion_telas');
	}     
	//6prueba
	public function sobre_nosotros(){
		$this->load->view('admin/agregar/sobre_nosotros');
	} 

	//
	public function gestionar_listar(){
		
		$this->load->view ('admin/agregar/listar');
		/*
	$this->load->view("admin/agregar/listar"/*, array("productos" => $resultado));

		//lista_producto = $this->load->model->listar();

		//*/
	} 
	public function producto_guardar(){
		$this->load->model("Prueba");
		$this->Prueba->guardar($_POST);
	}

	public function personas_enviar(){
		$this->load->model('Personas');
		$this->Personas->enviar($_POST);
		
	}
	
	public function productos_enviar1(){
		$this->load->model("Productos");
		$this->Productos->enviar1($_POST);
	}

	public function productos_hechos_enviar2(){
		$this->load->model("Productos_hechos");
		$this->Productos_hechos->enviar2($_POST);
		
	}

	public function seccion_telas_enviar3(){
		$this->load->model("Seccion_telas");
		$this->Seccion_telas->enviar3($_POST);
	}

	public function sobre_nosotros_enviar4(){
		$this->load->model("Sobre_nosotros");
		$this->Sobre_nosotros->enviar4($_POST);
	}
// 		SESION PARA EL ADMIN
	public function login(){
		$this->load->view('admin/login');
	} 

	public function session(){
		$this->load->model('Session');
		$resultado = $this->Session->verificar($this->input->post('correo'));
		if($resultado){
			$usuario = array(
				'nombre' => $resultado
			);
			$this->session->set_userdata('usuario', $resultado);
			redirect(base_url().'index.php/panel');
		}else{
			$this->session->set_userdata('error_session', true);
			redirect(base_url().'index.php/login/login');
		}
	}
	//TERMINA SESION ADMIN
	
	/*public function login(){
		$this->session->set_userdata('usuario');
       redirect(base_url().'index.php/login/login');
	} */
	//Sesion Tienda
	public function contacto(){
		$this->load->view('sitio/contacto');
	}
	public function nosotros(){
		$this->load->view('sitio/nosotros');
	}
	public function servicios(){
		$this->load->view('sitio/servicios');
	}
	public function carro(){
		$this->load->view('sitio/carro');
	}
	public function verificar(){
		$this->load->view('sitio/verificar');
	}
	public function cuenta(){
		$this->load->view('sitio/cuenta');
	}
	public function deseo(){
		$this->load->view('sitio/deseo');
	}
	public function tienda(){
		$this->load->view('sitio/tienda');
	}

	//Sesion Productos
	public function vestidos(){
		$this->load->view('sitio/vestidos');
	}
	public function pantalones(){
		$this->load->view('sitio/pantalones');
	}
	public function conjuntos(){
		$this->load->view('sitio/conjuntos');
	}
	public function blusas(){
		$this->load->view('sitio/blusas');
	}
	public function scuba(){
		$this->load->view('sitio/scuba');
	}
	public function dril(){
		$this->load->view('sitio/dril');
	}
	public function lino(){
		$this->load->view('sitio/lino');
	}
	public function satin(){
		$this->load->view('sitio/satin');
	}
	public function casual(){
		$this->load->view('sitio/casual');
	}
	public function fiesta(){
		$this->load->view('sitio/fiesta');
	}
	public function gala(){
		$this->load->view('sitio/gala');
	}
	public function bano(){
		$this->load->view('sitio/bano');
	}
	public function sueter(){
		$this->load->view('sitio/sueter');
	}
	public function uniformes(){
		$this->load->view('sitio/uniformes');
	}
	public function short(){
		$this->load->view('sitio/short');
	}
	public function enterizos(){
		$this->load->view('sitio/enterizos');
	}
	public function crotop(){
		$this->load->view('sitio/crotop');
	}
	public function kimono(){
		$this->load->view('sitio/kimono');
	}
	public function chaqueta(){
		$this->load->view('sitio/chaqueta');
	}
	public function algodon(){
		$this->load->view('sitio/algodon');
	}
	public function cuero(){
		$this->load->view('sitio/cuero');
	}
	public function chali(){
		$this->load->view('sitio/chali');
	}
	public function africana(){
		$this->load->view('sitio/africana');
	}
	public function mezclilla(){
		$this->load->view('sitio/mezclilla');
	}
	/*public function registro_ped(){
		$this->load->model('Registro');
		$this->Registro->ped($_POST);
	}*/

	public function registro(){
		$this->load->view('sitio/registro');
	}
	public function lino_p(){
		$this->load->view('sitio/lino_p');
	}
	public function carro_car(){
		$this->load->model("Carro");
		$this->Carro->carro($_POST);
	}
	
}
?>