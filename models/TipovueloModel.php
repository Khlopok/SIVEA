<?php
class TipovueloModel extends Mysql
{
    public function getTipovuelo() {
        $sql = 'SELECT * FROM tipo_vuelo';
        $res = $this->select_all($sql);
        return $res;
    }
    public function getTipovueloById($id) {
        $sql = "SELECT * FROM tipo_vuelo WHERE id = $id";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertTipovuelo($data) {
        $query = "INSERT INTO tipo_vuelo(nombre, tipo, descripcion) VALUES (?, ?, ?)";
        $res = $this->insert($query, $data);
        return $res;
    }
    public function updateTipovuelo($data) {
        $query = "UPDATE tipo_vuelo SET nombre=?, tipo=?, descripcion=?  WHERE id=?";
        $res = $this->update($query, $data);
        return $res;
    }
    public function deleteTipovuelo($id) {
        $query = "DELETE FROM tipo_vuelo WHERE id=$id";
        $res = $this->delete($query);
        return $res;
    }
}