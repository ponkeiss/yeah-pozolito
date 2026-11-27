<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen</title>
    <link rel="stylesheet" href="estail.css">
</head>
<body>
    <h1>Tu paquete ha sido generado con exito!</h1>
    <hr>
    <h3>RESUMEN:</h3>
    <p class="resumen">
    <?php
        echo "Datos:" . "<br>";
        $n=$_POST['nombre'];
        $c=$_POST['correo'];
        echo $n . "<br>" . $c . "<br>";
        echo "<br> Destinos turisticos: <br>";
        $des=$_POST['destinos'];
        foreach($des as $d){
            echo $d . "<br>";
        }
        echo "<br> Actividades turisticas: <br>";
        $act=$_POST['actividades'];
        foreach($act as $a){
            echo $a . "<br>";
        }
        echo "<br> Servicios adicionales: <br>";        
        $ser=$_POST['servicios'];
        foreach($ser as $s){
            echo $s . "<br>";
        }
    ?>
    </p>
</body>
</html>