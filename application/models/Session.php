<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session extends CI_Model {

   
  public function verificar($correo){
    $this->db->select("*");
    $this->db->from("personas");
    $this->db->where("correo", $correo );
    $resultado = $this->db->get();
    return $resultado->first_row();
   
     
  }


	

}