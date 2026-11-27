<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquete turistico</title>
</head>
<body>
    <form action="resultados.php" method="POST">
        <!-- Parte a -->
        <h2>Destinos turisticos</h2><br>
        <select class="destinos" id="destinos" name="destinos[] " multiple>
            <option value="cancun">Cancún</option>
            <option value="p_vallarta">Puerto Vallarta</option>
            <option value="acapulco">Acapulco</option>
            <option value="los_cabos">Los Cabos</option>
            <option value="mazatlan">Mazatlán</option>
            <option value="huatulco">Huatulco</option>
            <option value="p_escondido">Puerto Escondido</option>
        </select><br><br>
        <!-- Parte b -->
        <h2>Actividades turisticas:</h2>
        <label for="opcion-1">
            <input type="checkbox" value="buceo" id="act-1" name="actividades[]">
            Buceo
        </label><br>
        <label for="opcion-2">
            <input type="checkbox" value="paseo_lancha" id="act-2" name="actividades[]">
            Paseo en lancha
        </label><br>
        <label for="opcion-3">
            <input type="checkbox" value="visita_zonas_ar" id="act-3" name="actividades[]">
            Visita a zonas arqueológicas
        </label><br>
        <label for="opcion-4">
            <input type="checkbox" value="Senderismo" id="act-4" name="actividades[]">
            Senderismo
        </label><br>
        <label for="opcion-5">
            <input type="checkbox" value="pesca" id="act-5" name="actividades[]">
            Pesca deportiva
        </label><br>
        <label for="opcion-6">
            <input type="checkbox" value="recorrido_gastro" id="act-6" name="actividades[]">
            Recorrido gastronómico
        </label><br>
        <label for="opcion-7">
            <input type="checkbox" value="visita_museos" id="act-7" name="actividades[]">
            Visita a museos
        </label><br>
        <br><br>
        <!-- Parte c -->
        <h2>Servicios adicionales:</h2>
        <label for="opcion-1">
            <input type="checkbox" value="Transporte" id="ser-1" name="servicios[]">
            Transporte al aeropuerto
        </label><br>
        <label for="opcion-2">
            <input type="checkbox" value="Desayuno" id="ser-2" name="servicios[]">
            Desayuno incluido
        </label><br>
        <label for="opcion-3">
            <input type="checkbox" value="hospedaje_lujo" id="ser-3" name="servicios[]">
            Hospedaje de lujo
        </label><br>
        <label for="opcion-4">
            <input type="checkbox" value="Seguro" id="ser-4" name="servicios[]">
            Seguro de viajero
        </label><br>
        <label for="opcion-5">
            <input type="checkbox" value="renta_automovil" id="ser-5" name="servicios[]">
            Renta de automóvil
        </label><br>
        <label for="opcion-6">
            <input type="checkbox" value="guia_turistico" id="ser-6" name="servicios[]">
            Guía turístico
        </label><br>
        <br><br>
        <!-- parte d -->
         <h2>Datos del cliente:</h2>
        <label for="nombre">Nombre completo:</label>
        <input type="text" step="any" name="nombre" id="nombre" required>
        <br><br>
        <label for="correo">Correo electronico:</label>
        <input type="email" step="any" name="correo" id="correo" required>
        <br><br>
        <button type="submit">Generar Paquete</button>
    </form>
</body>
</html>