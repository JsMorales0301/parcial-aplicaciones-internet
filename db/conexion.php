<?php

class Conexion
{
    private $host;
    private $user;
    private $pass;
    private $db;
    private $conexion;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "1234";
        $this->db = "escuela";
    }

    public function abrir()
    {
        $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);
        $this->conexion->set_charset("utf8");
        if ($this->conexion->connect_errno) {
            echo "Fallo al conectar a la base de datos";
            return;
        }
    }
}
