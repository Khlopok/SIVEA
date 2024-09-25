<?php
class Vuelocomercial extends Controllers
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

    public function vuelocomercial()
    {
        $this->views->getView('vuelos_comerciales');
    }

    public function crear()
    {
        $this->views->getView('registrar_vuelo_comercial');
    }

    public function editar() {
        $this->views->getView('registrar_vuelo_comercial', $this->id);
    }

    // EN DESARROLLO

    public function listPersonas() {
        $res = $this->model->getPersonas();

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
        $res = $this->model->deletePersona($this->personaId);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }
}
