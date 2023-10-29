<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seccion_telas extends CI_Model {

   
  public function enviar3($datos){
    $datosGuardar = array(
      "super_scuba"=>$datos["super_scuba"],
      "dril"=>$datos["dril"],
      "lino"=>$datos["lino"],
      "crepe"=>$datos["crepe"],
      "seda"=>$datos["seda"],
      "lino_italia"=>$datos["lino_italia"],
      "mezclilla"=>$datos["mezclilla"],
      "satin"=>$datos["satin"],
      "tela_africana"=>$datos["tela_africana"],
      "algodon"=>$datos["algodon"],
      "tela_de_cuero"=>$datos["tela_de_cuero"],
      "chali"=>$datos["chali"]
    );
    var_dump($this->db->insert('seccion_telas', $datosGuardar));
    


     
  }


	

}

