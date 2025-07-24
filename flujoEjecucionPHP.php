<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        echo "Este es el primer mensaje <br>";
        
        // declaramos la funcion
        function dameDatos(){

            echo "Este es el mensaje del interior de la funcion <br>";

        }

        include ("flujoEjecucion2PHP.php");

        //llamamos a la funcion
        dameDatos();

        dameDatos2();

        echo "Este es el segundo mensaje <br>";

    ?>

</body>
</html>