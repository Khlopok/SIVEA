<?php
class CargoModel extends Mysql
{
    public function getCargo() {
        $sql = 'SELECT * FROM cargo';
        $res = $this->select_all($sql);
        return $res;
    }
    public function getCargoById($id) {
        $sql = "SELECT * FROM cargo WHERE id = $id";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertCargo($data) {
        $query = "INSERT INTO cargo(nombre) VALUES (?)";
        $res = $this->insert($query, $data);
        return $res;
    }
    public function updateCargo($data) {
        $query = "UPDATE cargo SET nombre=? WHERE id=?";
        $res = $this->update($query, $data);
        return $res;
    }
    public function deleteCargo($id) {
        $query = "DELETE FROM cargo WHERE id=$id";
        $res = $this->delete($query);
        return $res;
    }
}