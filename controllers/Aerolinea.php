<?php
class Aerolinea extends Controllers
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

    public function aerolinea()
    {
        $this->views->getView('aerolineas');
    }

    public function crear()
    {
        $this->views->getView('registrar_aerolinea');
    }

    public function editar() {
        $this->views->getView('registrar_aerolinea', $this->id);
    }

    public function listAerolinea() {
        $res = $this->model->getAerolinea();

        if (!$res) {
            $this->jsonResponse();
            echo '{"error": 0}';
            return;
        }

        $this->jsonResponse();
        $json = json_encode($res);
        echo $json;
    }

    public function listAerolineaById() {
        $res = $this->model->getAerolineaById($this->id);

        if (!$res) {
            $this->jsonResponse(500);
            return;
        }

        $this->jsonResponse();
        $json = json_encode($res);
        echo $json;
    }

    public function addAerolinea() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $data = array_values($data);
        $res = $this->model->insertAerolinea($data);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }

    public function editAerolinea() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $data = array_values($data);
        $res = $this->model->updateAerolinea($data);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }

    public function removeAerolinea() {
        $res = $this->model->deleteAerolinea($this->id);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }
}
