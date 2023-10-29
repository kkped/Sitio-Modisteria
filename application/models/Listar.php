<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Model {

   public function guardarPersona(){
    $this->db->insert('persona', $persona);
   }

   public function listarProductos(){
    $query = $this->db->get(persona);
    return $query->result();
   }

   public function eliminarProductos(){}

   public  function modificarProductos(){}

   public  function cargarProductos(){}

}