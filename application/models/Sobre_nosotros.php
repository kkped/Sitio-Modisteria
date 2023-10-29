<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre_nosotros extends CI_Model {

   
  public function enviar4($datos){
    $datosGuardar = array(
      "contacto1"=>$datos["contacto1"],
      "contacto2"=>$datos["contacto2"],
      "contacto3"=>$datos["contacto3"],
      "correo1"=>$datos["correo1"],
      "correo2"=>$datos["correo2"],
      "correo3"=>$datos["correo3"]
    );
    var_dump($this->db->insert('sobre_nosotros', $datosGuardar));
    


     
  }


	

}

