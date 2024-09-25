<?php
class AeropuertoModel extends Mysql
{
    public function getAeropuerto() {
        $sql = 'SELECT * FROM aeropuerto';
        $res = $this->select_all($sql);
        return $res;
    }
    public function getAeropuertoById($id) {
        $sql = "SELECT * FROM aeropuerto WHERE id = $id";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertAeropuerto($data) {
        $query = "INSERT INTO aeropuerto(ubicacion, codigo) VALUES (?,?)";
        $res = $this->insert($query, $data);
        return $res;
    }
    public function updateAeropuerto($data) {
        $query = "UPDATE aeropuerto SET ubicacion=?, codigo=? WHERE id=?";
        $res = $this->update($query, $data);
        return $res;
    }
    public function deleteAeropuerto($id) {
        $query = "DELETE FROM aeropuerto WHERE id=$id";
        $res = $this->delete($query);
        return $res;
    }
}