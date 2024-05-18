<?php
class Carrito{

    function __construct($nombre, $cantidad=0, $precio=0){
        $this->nombre=$nombre;
        $this->cantidad=$cantidad;
        $this->precio=$precio;
    }

    function setCantidad($cantidad) {
    $this->cantidad = $cantidad;
    }


    function setPrecio($precio){
        $this->precio=$precio;
    }


}

$carrito= new Carrito("Carrito",0,0);

?>