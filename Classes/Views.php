<?php
class Views
{
    public function getView($view, $update = 'false')
    {
        $viewPath = 'views/' . strtolower($view) . '.php';
        require_once $viewPath;
    }
}
