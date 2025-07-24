<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $db_host = "localhost";
        $db_nombre = "cursophp";
        $db_usuario = "root";
        $db_contra = "";

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

        //condicion cuando no conectemos con la base de datos

        if(mysqli_connect_errno()){

            echo "Fallo con conectar con la base de datos";

            exit();

        }

        mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la base de datos.");

        mysqli_set_charset($conexion, "utf8");

        //la consulta
        $consulta = "SELECT * FROM datospersonales";

        //para ejecutar la consulta
        $resultados = mysqli_query ($conexion, $consulta);

        $registros = 1;

        while ($registros <=4){

            //para mirar lo que se almaceno en cada tabla fila a fila
            $fila = mysqli_fetch_row($resultados);

            echo $fila[0] ." ";

            //muestra por columna
            echo $fila[1] ." ";
            echo $fila[2] ." ";
            echo $fila[3] ." ";

            echo "<br>";

            $registros ++;

        }

    ?>
</body>
</html>