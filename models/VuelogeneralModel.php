<?php
class VuelogeneralModel extends Mysql
{
    public function getVuelogeneral() {
        $sql = 'SELECT vuelo_general.id, institucion.nombre AS id_institucion, aeronave.modelo AS id_aeronave, tipo_vuelo.nombre AS id_tipo_vuelo, ruta
                FROM vuelo_general
                INNER JOIN institucion ON vuelo_general.id_institucion = institucion.id 
                INNER JOIN aeronave ON vuelo_general.id_aeronave = aeronave.id
                INNER JOIN tipo_vuelo ON vuelo_general.id_tipo_vuelo = tipo_vuelo.id';
        $res = $this->select_all($sql);
        return $res;    
    }
    public function getVuelogeneralById($id) {
        $sql = "SELECT vuelo_general.id, institucion.nombre AS id_institucion, matricula, fecha_llegada, fecha_salida, hora_llegada, hora_salida, pasajeros_embarcados, pasajeros_desembarcados, aeronave.modelo AS id_aeronave, operacion, tipo_vuelo.nombre AS id_tipo_vuelo, ruta, observaciones
                FROM vuelo_general
                INNER JOIN institucion ON vuelo_general.id_institucion = institucion.id 
                INNER JOIN aeronave ON vuelo_general.id_aeronave = aeronave.id
                INNER JOIN tipo_vuelo ON vuelo_general.id_tipo_vuelo = tipo_vuelo.id
                WHERE vuelo_general.id = $id";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertVuelogeneral($data) {
        $query = "INSERT INTO vuelo_general(
                    id_institucion,
                    fecha_llegada,
                    hora_llegada,
                    pasajeros_embarcados,
                    id_aeronave,
                    id_tipo_vuelo,
                    matricula,
                    fecha_salida,
                    hora_salida,
                    pasajeros_desembarcados,
                    operacion,
                    ruta,
                    observaciones
                    )
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $res = $this->insert($query, $data);
        return $res;
    }
    public function updateVuelogeneral($data) {
        $query = "UPDATE vuelo_general SET
                    id_institucion=?,
                    fecha_llegada=?,
                    hora_llegada=?,
                    pasajeros_embarcados=?,
                    id_aeronave=?,
                    id_tipo_vuelo=?,
                    matricula=?,
                    fecha_salida=?,
                    hora_salida=?,
                    pasajeros_desembarcados=?,
                    operacion=?,
                    ruta=?,
                    observaciones=?
                    WHERE id=?";
        $res = $this->update($query, $data);
        return $res;
    }
    public function deleteVuelogeneral($id) {
        $query = "DELETE FROM vuelo_general WHERE id=$id";
        $res = $this->delete($query);
        return $res;
    }
}