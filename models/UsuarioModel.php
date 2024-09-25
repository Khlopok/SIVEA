<?php
class UsuarioModel extends Mysql
{
    public function getUsuario() {
        $sql = 'SELECT id, apodo, tipo, persona.nombre
                as cedula_persona
                FROM usuario
                INNER JOIN persona
                ON usuario.cedula_persona = persona.cedula';
        $res = $this->select_all($sql);
        return $res;
    }
    public function getUsuarioById($id) {
        $sql = "SELECT * FROM usuario WHERE id = $id";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertUsuario($data) {
        $query = "INSERT INTO usuario(cedula_persona, apodo, password, tipo) VALUES (?,?,?,?)";
        $res = $this->insert($query, $data);
        return $res;
    }
    public function updateUsuario($data) {
        $query = "UPDATE usuario SET apodo=?, password=?, tipo=?  WHERE id=?";
        $res = $this->update($query, $data);
        return $res;
    }
    public function deleteUsuario($id) {
        $query = "DELETE FROM usuario WHERE id=$id";
        $res = $this->delete($query);
        return $res;
    }
}