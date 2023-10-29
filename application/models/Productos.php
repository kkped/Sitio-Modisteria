<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Model {

   
  public function enviar1($datos){
    $datosGuardar = array(
     "ropa_fiesta"=>$datos["ropa_fiesta"],
     "ropa_casual"=>$datos["ropa_casual"],
     "ropa_gala"=>$datos["ropa_gala"]

    );

    $resultado = $this->db->enviarOne($datos);
    if($resultado->getInsertedCount() > 0){
      return array("guardar" => true, 'id' => $resultado->getEnviarid());
    }else{
      return array('error' => false);
    }
    var_dump($this->db->insert('productos', $datosGuardar));
  }

 
  
}


