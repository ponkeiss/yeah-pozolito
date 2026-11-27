<?php
    $des = $_POST['destinos'] ?? [];
    $act = $_POST['actividades'] ?? [];
    $ser = $_POST['servicios'] ?? [];
    if (empty($des) or empty($act) or empty($ser)) {
        header("Location: principal.php?error=1");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen</title>
    <link rel="stylesheet" href="estail.css">
</head>
<body>
    <h1>¡Tu paquete ha sido generado con exito!</h1>
    <hr>
    <h3>RESUMEN:</h3>
    <p class="resumen">
    <?php
        $n=$_POST['nombre'];
        $c=$_POST['correo'];
        $cnt1 = 0; $cnt2 = 0; $cnt3 = 0;
        echo "Datos:" . "<br>";
        echo $n . "<br>" . $c . "<br>";
        foreach($des as $d){
            $cnt1++;
        }
        foreach($act as $a){
            $cnt2++;
        }
        foreach($ser as $s){
            $cnt3++;
        }
        $cnt = $cnt1 + $cnt2 + $cnt3;
        echo "<br>Total de elementos seleccionados: $cnt <br>";
        echo "<br>Destinos Turisticos seleccionados: $cnt1 <br>";
        foreach($des as $d){
            echo "*" . $d . "<br>";
        }
        echo "<br>Actividades turisticas seleccionados: $cnt2 <br>";
        foreach($act as $a){
            echo "*" . $a . "<br>";
        }
        echo "<br>Servicios adicionales seleccionados: $cnt3 <br>";
        foreach($ser as $s){
            echo "*" . $s . "<br>";
        }
    ?>
    </p>
</body>
</html>