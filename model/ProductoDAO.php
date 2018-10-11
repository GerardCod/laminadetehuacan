<?php

class ProductoDAO {

    public function __contruct() {

    }

    public function guardarProducto(Producto $producto) {
        $sentencia = ConexionSingleton::getConexion()->prepare("INSERT INTO producto(categoria, nombre, descripcion) VALUES(?,?,?)");
        //ConexionSingleton->getConexion()->prepare("INSERT INTO producto(categoria, nombre, descripcion) VALUES(?,?,?)");
        $sentencia->bindParam(1, $producto->getCategoria());
        $sentencia->bindParam(2, $producto->getNombre());
        $sentencia->bindParam(3, $producto->getDescripcion());
        return $sentencia->execute();
    }

    public function borrarProducto($id_producto) {
        $sentencia = ConexionSingleton::getConexion()->prepare("DELETE FROM producto WHERE id_producto = ?");
        $sentencia->bindParam(1, $id_producto);
        return $sentencia->execute();
    }

    public function actualizarProducto(Producto $producto) {
        $sentencia = ConexionSingleton::getConexion()->prepare("UPDATE producto SET categoria = ?, nombre = ?, descripcion = ? WHERE id_producto = ?");
        $sentencia->bindParam(1, $producto->getCategoria());
        $sentencia->bindParam(2, $producto->getNombre());
        $sentencia->bindParam(3, $producto->getDescripcion());
        $sentencia->bindParam(4, $producto->getIdProducto());
        return $sentencia->execute();
    }

}
