<?php
class Controllers
{
    protected $views;
    protected $model;

    public function __construct()
    {
        $this->views = new Views();
        $this->loadModel();
    }

    public function loadModel()
    {
        $model = get_class($this) . 'Model';
        $routClass = 'models/' . $model . '.php';
        if (file_exists($routClass)) {
            require_once $routClass;
            $this->model = new $model();
        }
    }

    public function jsonResponse($type = 200) {
        header('Content-Type: application/json');
        switch ($type) {
            case 201:
                http_response_code(201);
                echo '{"error": 0}';
                break;
            case 400:
                http_response_code(400);
                echo '{"error": 1}';
                break;
            case 500:
                http_response_code(500);
                echo '{"error": 1}';
                break;
            default:
                http_response_code(200);
                break;
        }
    }
}
