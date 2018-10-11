<?php

class ConexionSingleton {

    private $bd = "th";
    private $usuario = "root";
    private $contra = "";
    private static $conexion = null;

    private function __construct() {
        $this->conexion = new PDO("mysql:host=localhost;dbname=" . $this->bd, $this->usuario, $this->contra);
        $this->conexion->exec("set character set utf8");
    }

    public static function getConexion() {
        if ($thia->conexion == null) {
            return new ConexionSingleton();
        }
        return $this->conexion;
    }

}
