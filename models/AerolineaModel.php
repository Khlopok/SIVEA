<?php
class AerolineaModel extends Mysql
{
    public function getAerolinea() {
        $sql = 'SELECT * FROM aerolinea';
        $res = $this->select_all($sql);
        return $res;
    }
    public function getAerolineaById($id) {
        $sql = "SELECT * FROM aerolinea WHERE id = $id";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertAerolinea($data) {
        $query = "INSERT INTO aerolinea(nombre) VALUES (?)";
        $res = $this->insert($query, $data);
        return $res;
    }
    public function updateAerolinea($data) {
        $query = "UPDATE aerolinea SET nombre=? WHERE id=?";
        $res = $this->update($query, $data);
        return $res;
    }
    public function deleteAerolinea($id) {
        $query = "DELETE FROM aerolinea WHERE id=$id";
        $res = $this->delete($query);
        return $res;
    }
}