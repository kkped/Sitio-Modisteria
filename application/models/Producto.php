<?php
class Producto extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function obtenerTodos($datos, $imagen) {
        $query = $this->db->get(
            "id" -> $datos ["id"],
            "nombre" -> $datos ["nombre"],
            "descripcion" -> $datos ["descripcion"],
            "precio" ->$datos ["precio"],
            "imagen" ->$imagen ["file_name"]
        );
        return $query->result();
    }

    public function obtenerPorId($id) {
        $query = $this->db->get_where( "id" -> $datos ["id"],
        "nombre" -> $datos ["nombre"],
        "descripcion" -> $datos ["descripcion"],
        "precio" ->$datos ["precio"],
        "imagen" ->$imagen ["file_name"], array('id' => $id));
        return $query->row();
    }

    public function insertar($data) {
        $this->db->insert( "id" -> $datos ["id"],
        "nombre" -> $datos ["nombre"],
        "descripcion" -> $datos ["descripcion"],
        "precio" ->$datos ["precio"],
        "imagen" ->$imagen ["file_name"], $data);
        return $this->db->insert_id();
    }

    public function actualizar($id, $data) {
        $this->db->where('id', $id);
        $this->db->update( "id" -> $datos ["id"],
        "nombre" -> $datos ["nombre"],
        "descripcion" -> $datos ["descripcion"],
        "precio" ->$datos ["precio"],
        "imagen" ->$imagen ["file_name"], $data);
        return $this->db->affected_rows();
    }

    public function eliminar($id) {
        $this->db->where('id', $id);
        $this->db->delete( "id" -> $datos ["id"],
        "nombre" -> $datos ["nombre"],
        "descripcion" -> $datos ["descripcion"],
        "precio" ->$datos ["precio"],
        "imagen" ->$imagen ["file_name"]);
        return $this->db->affected_rows();
    }
}
