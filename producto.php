<?php
class Producto{

    function __construct($nombre, $cantidad=0, $precio){
        $this->nombre=$nombre;
        $this->cantidad=$cantidad;
        $this->precio=$precio;
    }

    function setProducto($nombre){
        $this->nombre=$nombre;
    }


    function setCantidad($cantidad) {
    $this->cantidad = $cantidad;
    }


    function setPrecio($precio){
        $this->precio=$precio;
    }


}

$mesa= new Producto('Mesa de madera de ocre', 0 , 500);
$heladera= new Producto('Heladera', 0 , 500);
$campana= new Producto('Campana', 0 , 500);
$productos=[$mesa,$heladera,$campana];

?>