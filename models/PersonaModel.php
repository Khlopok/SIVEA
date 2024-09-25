<?php
class PersonaModel extends Mysql
{
    public function getPersona() {
        $sql = 'SELECT null as nullcol,
                cedula, persona.nombre, apellido, telefono, correo, cargo.nombre
                as id_cargo
                FROM persona
                INNER JOIN cargo
                ON persona.id_cargo = cargo.id';
        $res = $this->select_all($sql);
        return $res;
    }
    public function getPersonaById($cedula) {
        $sql = "SELECT * FROM persona WHERE cedula = $cedula";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertPersona($data) {
        $query = "INSERT INTO persona(cedula, nombre, correo, id_cargo, apellido, telefono) VALUES (?,?,?,?,?,?)";
        $res = $this->insert($query, $data);
        return $res;
    }
    public function updatePersona($data) {
        $query = "UPDATE persona SET nombre=?, correo=?, id_cargo=?, apellido=?, telefono=? WHERE cedula=?";
        $res = $this->update($query, $data);
        return $res;
    }
    public function deletePersona($cedula) {
        $query = "DELETE FROM persona WHERE cedula=$cedula";
        $res = $this->delete($query);
        return $res;
    }
}
