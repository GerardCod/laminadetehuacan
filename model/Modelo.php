<?php


class Modelo {

    private $baseDeDatos = "th";
    private $usuario = "root";
    private $contra = "";
    private $conexion;

    public function __construct(){
        $this->conexion = new PDO("mysql:host=localhost;dbname=".$this->baseDeDatos.";charset=utf8",$this->usuario,$this->contra);
    }

    public function agregarProducto($categoria, $nombre, $descripcion) {
        $sentencia = $this->conexion->prepare("INSERT INTO producto(categoria, nombre, descripcion) VALUES(?,?,?)");
        $sentencia->bindParam(1,$categoria);
        $sentencia->bindParam(2,$nombre);
        $sentencia->bindParam(3,$descripcion);
        return $sentencia->execute();
    }

    public function actualizarProducto($id_producto, $categoria, $nombre, $descripcion){
        $sentencia = $this->conexion->prepare("UPDATE producto SET categoria = ?, nombre = ?, descripcion = ? WHERE id_producto = ?");
        $sentencia->bindParam(1, $categoria);
        $sentencia->bindParam(2,$nombre);
        $sentencia->bindParam(3, $descripcion);
        $sentencia->bindParam(4, $id_producto);
        return $sentencia->execute();
    }

    public function eliminarProducto($id_producto){
        $sentencia = $this->conexion->prepare("DELETE FROM producto WHERE id_producto = ?");
        $sentencia->bindParam(1, $id_producto);
        return $sentencia->execute();
    }

    public function mostrarCategorias(){
        $sentencia = $this->conexion->prepare("SELECT * FROM categoria");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductosCategoria($categoria){
        $sentencia = $this->conexion->prepare("SELECT * FROM producto WHERE categoria = ?");
        $sentencia->bindParam(1, $categoria);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductos(){
        $sentencia = $this->conexion->prepare("");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDescripcionById($id){
        $sentencia = $this->conexion->prepare("SELECT descripcion from producto where id_producto = ?");
        $sentencia->bindValue(1, $id);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getImagesById($id){
        $sentencia = $this->conexion->prepare("SELECT nombre from imagen WHERE producto = ?");
        $sentencia->bindValue(1,$id);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }


}
