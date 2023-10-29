<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_hechos extends CI_Model {

   
  public function enviar2($datos){
    $datosGuardar = array(
      "vestidos"=>$datos["vestidos"],
      "pantalones"=>$datos["pantalones"],
      "conjuntos"=>$datos["conjuntos"],
      "blusas"=>$datos["blusas"],
      "mochos"=>$datos["mochos"],
      "short"=>$datos["short"],
      "kimono"=>$datos["kimono"],
      "enterizos"=>$datos["enterizos"],
      "uniformes"=>$datos["uniformes"],
      "crotop"=>$datos["crotop"],
      "ropadeportiva"=>$datos["ropadeportiva"],
      "sueteres"=>$datos["sueteres"],
      "camisas"=>$datos["camisas"],
      "chaqueta"=>$datos["chaqueta"],
      "blazer"=>$datos["blazer"]
      

    );
    var_dump($this->db->insert('productos_hechos', $datosGuardar));
    


     
  }


	

}

