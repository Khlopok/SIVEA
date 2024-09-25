<?php
class AeronaveModel extends Mysql
{
    public function getAeronave() {
        $sql = 'SELECT * FROM aeronave';
        $res = $this->select_all($sql);
        return $res;
    }
    public function getAeronaveById($id) {
        $sql = "SELECT * FROM aeronave WHERE id = $id";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertAeronave($data) {
        $query = "INSERT INTO aeronave(modelo, carga_maxima) VALUES (?,?)";
        $res = $this->insert($query, $data);
        return $res;
    }
    public function updateAeronave($data) {
        $query = "UPDATE aeronave SET modelo=?, carga_maxima=? WHERE id=?";
        $res = $this->update($query, $data);
        return $res;
    }
    public function deleteAeronave($id) {
        $query = "DELETE FROM aeronave WHERE id=$id";
        $res = $this->delete($query);
        return $res;
    }
}
