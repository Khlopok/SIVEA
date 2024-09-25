<?php
class Mysql extends Conexion
{
    public function insert($query, $arrvalues)
    {
        if (!$this->conexion) return false;

        $insert = $this->conexion->prepare($query);
        $res = $insert->execute($arrvalues);

        return true;
    }
    public function select(string $query)
    {
        if (!$this->conexion) return false;

        $result = $this->conexion->prepare($query);
        $result->execute();

        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function select_all(string $query)
    {
        if (!$this->conexion) return false;

        try {
            $result = $this->conexion->prepare($query);
            $result->execute();
        } catch(PDOException $e) {
            return false;
        }

        $data = $result->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }
    public function update(string $query, array $arrvalues)
    {
        if (!$this->conexion) return false;

        $update = $this->conexion->prepare($query);
        $res = $update->execute($arrvalues);

        return $res;
    }
    public function delete(string $query)
    {
        if (!$this->conexion) return false;

        $result = $this->conexion->prepare($query);
        $result->execute();

        return $result;
    }
}
