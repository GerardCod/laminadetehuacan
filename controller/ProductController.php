<?php

class ProductController{
    private $modelo;

    public function __construct(){
        $this->modelo = new Modelo();
    }

    public function mostrarCategorias(){

    }

    public function mostrarProductoCategoria($categoria){
        $productos = $this->modelo->getProductosCategoria($categoria);
        foreach($productos as $producto){
            var_dump();
        }
    }

    public function mostrarProductos(){
        $acu = '';
        $productos = $this->modelo->getProductos();
        foreach($productos as $producto){
            $acu .= '<p>'.$producto["categoria"].'</p>
                    <p>'.$producto["nombre"].'</p>
                    <p>'.$producto["descripcion"].'</p>
                    <p>'.$producto["ruta"].'</p>';
        }
        return $acu;
    }

    public function mostrarProductoPorId($id){
      $acu = '';
      $descripcion = $this->modelo->getDescripcionById($id);
      $imagenes = $this->modelo->getImagesById($id);

      foreach ($descripcion as $des) {
        // code...
        $acu .= '<p>'.$des["descripcion"].'</p>';
      }

      foreach ($imagenes as $imagen) {
        $acu .= '<img src="assets/'.$imagen["nombre"].'">';
      }

      return $acu;
    }
}
