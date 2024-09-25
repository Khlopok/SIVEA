<?php
class Conexion
{
    protected $conexion;

    public function __construct()
    {
        $conexionStr = 'mysql:host=' . HOST . ';dbname=' . BD . ';.CHARSET.';
        try {
            $this->conexion = new PDO($conexionStr, DB_USER, PASS);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->conexion = false;
            echo 'Error: ' . $e->getMessage();
        }
    }
}
