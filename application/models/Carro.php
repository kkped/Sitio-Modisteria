<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carro extends CI_Model {

   
  public function carro($datos){
    $datosGuardar = array(
      "chali"=>$datos["chali"],
      "tela_de_cuero"=>$datos["tela_de_cuero"],
      "algodon"=>$datos["algodon"],
      "tela_africana"=>$datos["tela_africana"],
      "satin"=>$datos["satin"],
      "mezclilla"=>$datos["mezclilla"],
      "lino_italia"=>$datos["lino_italia"],
      "seda"=>$datos["seda"],
      "crepe"=>$datos["crepe"],
      "	lino"=>$datos["	lino"],
      "dril"=>$datos["dril"],
      "super_scuba"=>$datos["super_scuba"],
      "ropa_gala"=>$datos["ropa_gala"],
      "ropa_casual"=>$datos["ropa_casual"],
      "ropa_fiesta"=>$datos["ropa_fiesta"],
      "blazer"=>$datos["blazer"],
      "chaqueta"=>$datos["chaqueta"],
      "camisas"=>$datos["camisas"],
      "sueteres"=>$datos["sueteres"],
      "ropadeportiva"=>$datos["ropadeportiva"],
      "crotop"=>$datos["crotop"],
      "uniformes"=>$datos["uniformes"],
      "enterizos"=>$datos["enterizos"],
      "kimono"=>$datos["kimono"],
      "short"=>$datos["short"]
    );
    var_dump($this->db->insert('carro', $datosGuardar));
    
     
  }


	

}