<?php
class Login extends Controllers
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

    public function login()
    {
        $this->views->getView('login');
    }
}
