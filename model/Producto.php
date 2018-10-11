<?php 
    class Producto{
        private $id_producto;
        private $categoria;
        private $nombre;
        private $descripcion;

        public function __contruct($id_producto, $categoria, $nombre, $descripcion){
            $this->id_producto = $id_producto;
            $this->categoria = $categoria;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
        }

        public function getIdProducto(){
            return $this->id_producto;
        }
        
        public function getCategoria(){
            return $this->categoria;
        }

        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

    }