<?php

require("../models/conexion.php");

class Estudiante
{
    private $codigo;
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;
    private $conexion;
    private $estudianteDAO;

    public function Estudiante($codigo, $nombre, $apellido, $fecha_nacimiento)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->conexion = new Conexion();
        $this->estudianteDAO = new EstudianteDAO($this->id, $this->nombre, $this->apellido, $this->fecha_nacimiento);
    }
}
