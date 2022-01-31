<?php

class EstudianteDAO
{
    private $codigo;
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    public function EstudianteDAO($codigo = "", $nombre = "", $apellido = "", $fecha_nacimiento = "")
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function consultar()
    {
        $query = "SELECT * FROM estudiante";
        return $query;
    }

    public function insertar()
    {
        $query = "INSERT INTO estudiante (codigo, nombre, apellido, fecha_nacimiento) VALUES ('$this->codigo', '$this->nombre', '$this->apellido', '$this->fecha_nacimiento')";
        return $query;
    }
}
