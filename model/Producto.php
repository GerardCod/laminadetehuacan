<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 13/10/2018
 * Time: 01:23 PM
 */

class Producto
{
    private $id_producto;
    private $categoria;
    private $nombre;
    private $descripcion;

    public function __construct($categoria, $nombre, $descripcion)
    {
        $this->categoria = $categoria;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getIdProducto()
    {
        return $this->id_producto;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

}