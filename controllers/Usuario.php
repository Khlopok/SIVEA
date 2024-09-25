<?php
class Usuario extends Controllers
{
    private $id;
    public function __construct($id)
    {
        session_start();
        if (!empty($_SESSION['active'])) {
            header('location: ' . base_url() . 'login');
        }
        parent::__construct();

        $this->id = $id;
    }

    public function usuario()
    {
        $this->views->getView('usuarios');
    }

    public function crear()
    {
        $this->views->getView('registrar_usuario');
    }

    public function editar() {
        $this->views->getView('registrar_usuario', $this->id);
    }

    public function listUsuario() {
        $res = $this->model->getUsuario();

        if (!$res) {
            $this->jsonResponse();
            echo '{"error": 0}';
            return;
        }

        $this->jsonResponse();
        $json = json_encode($res);
        echo $json;
    }

    public function listUsuarioById() {
        $res = $this->model->getUsuarioById($this->id);

        if (!$res) {
            $this->jsonResponse(500);
            return;
        }

        $this->jsonResponse();
        $json = json_encode($res);
        echo $json;
    }

    public function addUsuario() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $data = array_values($data);
        $res = $this->model->insertUsuario($data);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }

    public function editUsuario() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $data = array_values($data);
        $res = $this->model->updateUsuario($data);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }

    public function removeUsuario() {
        $res = $this->model->deleteUsuario($this->id);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }
}
