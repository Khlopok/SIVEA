<?php
class Vuelogeneral extends Controllers
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

    public function vuelogeneral()
    {
        $this->views->getView('vuelos_generales');
    }

    public function crear()
    {
        $this->views->getView('registrar_vuelo_general');
    }

    public function editar() {
        $this->views->getView('registrar_vuelo_general', $this->id);
    }

    public function listVuelogeneral() {
        $res = $this->model->getVuelogeneral();

        if (!$res) {
            $this->jsonResponse();
            echo '{"error": 0}';
            return;
        }

        $this->jsonResponse();
        $json = json_encode($res);
        echo $json;
    }

    public function listVuelogeneralById() {
        $res = $this->model->getVuelogeneralById($this->id);

        if (!$res) {
            $this->jsonResponse(500);
            return;
        }

        $this->jsonResponse();
        $json = json_encode($res);
        echo $json;
    }

    public function addVuelogeneral() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $data = array_values($data);
        $res = $this->model->insertVuelogeneral($data);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }

    public function editVuelogeneral() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $data = array_values($data);
        $res = $this->model->updateVuelogeneral($data);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }

    public function removeVuelogeneral() {
        $res = $this->model->deleteVuelogeneral($this->id);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }
}
