<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Model {

   
  public function guardar($datos){
    $datosGuardar = array(
      "nombre"=>$datos["nombre"],
      "apellido"=>$datos["apellido"],
      "fecha_registro"=> date("y-m-d")

    );
    var_dump($this->db->insert('prueba', $datosGuardar));
    


     
  }


	

}

