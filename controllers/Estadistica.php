<?php
class Estadistica extends Controllers
{
    private $id;
    public function __construct($id)
    {
        session_start();
        if (!empty($_SESSION['active'])) {
            header('location: ' . base_url() . '/login');
        }
        parent::__construct();

        $this->id = $id;
    }

    public function estadistica()
    {
        $this->views->getView('estadisticas');
    }
}
