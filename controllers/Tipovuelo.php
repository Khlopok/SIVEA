<?php
class Tipovuelo extends Controllers
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

    public function tipovuelo()
    {
        $this->views->getView('tipos_de_vuelo');
    }

    public function crear()
    {
        $this->views->getView('registrar_tipo_de_vuelo');
    }

    public function editar() {
        $this->views->getView('registrar_tipo_de_vuelo', $this->id);
    }

    public function listTipovuelo() {
        $res = $this->model->getTipovuelo();

        if (!$res) {
            $this->jsonResponse();
            echo '{"error": 0}';
            return;
        }

        $this->jsonResponse();
        $json = json_encode($res);
        echo $json;
    }

    public function listTipovueloById() {
        $res = $this->model->getTipovueloById($this->id);

        if (!$res) {
            $this->jsonResponse(500);
            return;
        }

        $this->jsonResponse();
        $json = json_encode($res);
        echo $json;
    }

    public function addTipovuelo() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $data = array_values($data);
        $res = $this->model->insertTipovuelo($data);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }

    public function editTipovuelo() {
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        $data = array_values($data);
        $res = $this->model->updateTipovuelo($data);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }

    public function removeTipovuelo() {
        $res = $this->model->deleteTipovuelo($this->id);
        if (!$res) {
            $this->jsonResponse(500);
            return;
        }
        $this->jsonResponse(201);
    }
}
