<?php
session_start();
class Carrito{

    function __construct($producto, $cantidad=0, $precio){
        $this->producto=$producto;
        $this->cantidad=$cantidad;
        $this->precio=$precio;
    }

    function setProducto($nombre){
        $this->producto=$nombre;
    }


    function setCantidad(){
        $this->cantidad=$carritovacio;
    }

    function setPrecio($precio){
        $this->precio=$precio;
    }


}

$mesa= new Carrito('Mesa de madera de ocre', 0 , 500);
$heladera= new Carrito('Heladera', 0 , 500);
$campana= new Carrito('Campana', 0 , 500);
$producto=[$mesa,$heladera,$campana];

?>