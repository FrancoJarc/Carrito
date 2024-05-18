<?php
include_once('producto.php');
include_once('sesiones_cart.php');
include_once('carrito.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head> 
<body>

    
    <form action="" method="post">
        
        <select name="producto_enviado" id="producto_enviado">
            <?php for ($i=0; $i < count($productos) ; $i++) { ?>
                <option value="<?php echo $productos[$i]->nombre?>"><?php echo $productos[$i]->nombre ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Agregar">
    </form>

    <?php
    if (isset($_POST["producto_enviado"])) {
        $producto_seleccionado = $_POST["producto_enviado"];
        for ($i=0; $i < 3; $i++) { 
            if ($producto_seleccionado==$productos[$i]->nombre) {
                $_SESSION['carrito'][] = $productos[$i];
                $carrito->precio+= $productos[$i]->precio;
                $carrito->cantidad+= 1;
                echo 'El producto '.$productos[$i]->nombre.' se agrego al carrito<br>'; 
            }
        }
         
        
    }
    
    echo 'El carrito tiene '.$carrito->cantidad." productos"
    ?>

   

</body>
</html>