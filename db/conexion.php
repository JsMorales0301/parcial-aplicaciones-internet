<?php

$usuario = "root";
$contraseña = "1234";
$nombre_bd = "escuela";

try {
    $bd = new PDO(
        'mysql:host=localhost:3200;dbname=' . $nombre_bd,
        $usuario,
        $contraseña,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (Exception $e) {
    print_r("Problemas de conexión: " . $e->getMessage());
}
