<?php
class Errors extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function errors() {
        $this->views->getView('500');
    }
    public function notFound()
    {
        $this->views->getView('404');
    }
}
