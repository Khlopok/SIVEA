<?php
class InstitucionModel extends Mysql
{
    public function getInstitucion() {
        $sql = 'SELECT * FROM institucion';
        $res = $this->select_all($sql);
        return $res;
    }
    public function getInstitucionById($id) {
        $sql = "SELECT * FROM institucion WHERE id = $id";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertInstitucion($data) {
        $query = "INSERT INTO institucion(nombre, direccion_fiscal, rif, telefono) VALUES (?,?,?,?)";
        $res = $this->insert($query, $data);
        return $res;
    }
    public function updateInstitucion($data) {
        $query = "UPDATE institucion SET nombre=?, direccion_fiscal=?, rif=?, telefono=? WHERE id=?";
        $res = $this->update($query, $data);
        return $res;
    }
    public function deleteInstitucion($id) {
        $query = "DELETE FROM institucion WHERE id=$id";
        $res = $this->delete($query);
        return $res;
    }
}