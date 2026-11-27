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
            <option value="Cancun">Cancún</option>
            <option value="Puerto Vallarta">Puerto Vallarta</option>
            <option value="Acapulco">Acapulco</option>
            <option value="Los Cabos">Los Cabos</option>
            <option value="Mazatlan">Mazatlán</option>
            <option value="Huatulco">Huatulco</option>
            <option value="Puerto Escondido">Puerto Escondido</option>
        </select><br><br>
        <!-- Parte b -->
        <h2>Actividades turisticas:</h2>
        <label for="opcion-1">
            <input type="checkbox" value="buceo" id="act-1" name="actividades[]">
            Buceo
        </label><br>
        <label for="opcion-2">
            <input type="checkbox" value="Paseo en lancha" id="act-2" name="actividades[]">
            Paseo en lancha
        </label><br>
        <label for="opcion-3">
            <input type="checkbox" value="Visita a zonas arqueológicas" id="act-3" name="actividades[]">
            Visita a zonas arqueológicas
        </label><br>
        <label for="opcion-4">
            <input type="checkbox" value="Senderismo" id="act-4" name="actividades[]">
            Senderismo
        </label><br>
        <label for="opcion-5">
            <input type="checkbox" value="Pesca deportiva" id="act-5" name="actividades[]">
            Pesca deportiva
        </label><br>
        <label for="opcion-6">
            <input type="checkbox" value="Recorrido gastronómico" id="act-6" name="actividades[]">
            Recorrido gastronómico
        </label><br>
        <label for="opcion-7">
            <input type="checkbox" value="Visita a museos" id="act-7" name="actividades[]">
            Visita a museos
        </label><br>
        <br><br>
        <!-- Parte c -->
        <h2>Servicios adicionales:</h2>
        <label for="opcion-1">
            <input type="checkbox" value="Transporte  al aeropuerto" id="ser-1" name="servicios[]">
            Transporte al aeropuerto
        </label><br>
        <label for="opcion-2">
            <input type="checkbox" value="Desayuno incluido" id="ser-2" name="servicios[]">
            Desayuno incluido
        </label><br>
        <label for="opcion-3">
            <input type="checkbox" value="Hospedaje de lujo" id="ser-3" name="servicios[]">
            Hospedaje de lujo
        </label><br>
        <label for="opcion-4">
            <input type="checkbox" value="Seguro de viajero" id="ser-4" name="servicios[]">
            Seguro de viajero
        </label><br>
        <label for="opcion-5">
            <input type="checkbox" value="Renta de automóvil" id="ser-5" name="servicios[]">
            Renta de automóvil
        </label><br>
        <label for="opcion-6">
            <input type="checkbox" value="Guía turístico" id="ser-6" name="servicios[]">
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