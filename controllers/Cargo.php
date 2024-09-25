<?php
class Cargo extends Controllers
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

    public function cargo()
    {
        $this->views->getView('cargos');
    }

    public function crear()
    {
        $this->views->getView('registrar_cargo');
    }

    public function editar() {
        $this->views->getView('registrar_cargo', $this->id);
    }

    public function listCargo() {
        $res = $this->model->getCargo();

        if (!$res) {
            $this->jsonResponse();
            echo '{"error": 0}';
            return;
        }

        $this->jsonResponse();
        $json = json_encode($res);
        echo $json;
    }

    public function listCargoById() {
        $res = $this->model->getCargoById($this->id);

        if (!$res) {
            $this->jsonResponse(500);
            return;
        }

        $this->jsonResponse();
        $json = json_encode($res);
        echo $json;
    }

    public function addCargo() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $data = array_values($data);
        $res = $this->model->insertCargo($data);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }

    public function editCargo() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $data = array_values($data);
        $res = $this->model->updateCargo($data);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }

    public function removeCargo() {
        $res = $this->model->deleteCargo($this->id);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }
}
