<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Model {

   
  public function enviar($datos){
    
    $datosGuardar = array(
      'identificacion'=>$datos['identificacion'],
      'nombre'=>$datos['nombre'],
      'apellido'=>$datos['apellido'],
      'correo'=>$datos['correo'],
      'telefono'=>$datos['telefono'],
      'clave'=>$datos['clave'],
      'preferencia'=>$datos['preferencia'],
      'fecha_registro'=>date('y-m-d')
    );   
    var_dump($this->db->insert("personas",$datosGuardar));
  }


	

}