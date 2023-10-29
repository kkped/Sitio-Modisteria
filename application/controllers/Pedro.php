<?php
class Pedro extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Producto');
    }
//ESTO SIMPLEMENTE TE PUEDE SERVIR DE GUIA PARA EL CRUD, UNA VEZ TERMUNES ELIMINAS ESTO PAARA QUE NO TE CONFUNDAS 
    public function panel() {
        $data['registros'] = $this->Producto->obtenerTodos();
        $this->load->view('admin/index', $data);
    }

    public function crear() {
        // Lógica para mostrar el formulario de creación
        $this->load->view('formulario_creacion');
    }

    public function guardar() {
        // Lógica para guardar los datos enviados desde el formulario de creación
        $data = array(
            'campo1' => $this->input->post('campo1'),
            'campo2' => $this->input->post('campo2'),
            // Agrega los demás campos del formulario
        );
        $this->Producto->insertar($data);
        redirect('tucontrolador/index');
    }

    public function editar($id) {
        // Lógica para mostrar el formulario de edición con los datos del registro seleccionado
        $data['registro'] = $this->TuModelo->obtenerPorId($id);
        $this->load->view('formulario_edicion', $data);
    }

    public function actualizar($id) {
        // Lógica para actualizar los datos enviados desde el formulario de edición
        $data = array(
            'campo1' => $this->input->post('campo1'),
            'campo2' => $this->input->post('campo2'),
            // Agrega los demás campos del formulario
        );
        $this->Producto->actualizar($id, $data);
        redirect('tucontrolador/index');
    }

    public function eliminar($id) {
        // Lógica para eliminar el registro seleccionado
        $this->Producto->eliminar($id);
        redirect('tucontrolador/index');
    }
}
