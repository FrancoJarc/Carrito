<?php
include_once('objetos_cart.php');
include_once('sesiones_cart.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>

    <h3>Bievenvenido al carrito</h3>
    <h3>Tu carrito tiene: <?php echo count($carrito);?></h3>
    <?php for ($i=0; $i < count($producto);$i++) { ?>

    
    <div>
        <?php echo $producto[$i]->producto?> <br>
        <?php echo $producto[$i]->precio?> <br>
        <?php echo $producto[$i]->cantidad?>
        <button class="agregar">Agregar </button>

    </div>
    <?php }  ?>



</body>
</html>