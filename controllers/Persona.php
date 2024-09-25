<?php
class Persona extends Controllers
{
    private $cedula;
    public function __construct($cedula)
    {
        session_start();
        if (!empty($_SESSION['active'])) {
            header('location: ' . base_url() . 'login');
        }
        parent::__construct();

        $this->cedula = $cedula;
    }

    public function persona()
    {
        $this->views->getView('personas');
    }

    public function crear()
    {
        $this->views->getView('registrar_persona');
    }

    public function editar() {
        $this->views->getView('registrar_persona', $this->cedula);
    }

    public function listPersona() {
        $res = $this->model->getPersona();

        if (!$res) {
            $this->jsonResponse();
            echo '{"error": 0}';
            return;
        }

        $this->jsonResponse();
        $json = json_encode($res);
        echo $json;
    }

    public function listPersonaById() {
        $res = $this->model->getPersonaById($this->cedula);

        if (!$res) {
            $this->jsonResponse(500);
            return;
        }

        $this->jsonResponse();
        $json = json_encode($res);
        echo $json;
    }

    public function addPersona() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $data = array_values($data);
        $res = $this->model->insertPersona($data);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }

    public function editPersona() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $data = array_values($data);
        $res = $this->model->updatePersona($data);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }

    public function removePersona() {
        $res = $this->model->deletePersona($this->cedula);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }
}
