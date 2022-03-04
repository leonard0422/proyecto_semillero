<!DOCTYPE html>
<html>

<head>
    <title> Mensaje recibido</title>
</head>

<body>
    <p>Recibiste un mensaje de: {{ $mensaje['name'] }} - {{ $mensaje['email'] }}</p>
    <p><strong>Asunto:</strong> {{ $mensaje['asunto'] }}</p>
    <p><strong>Contenido:</strong> {{ $mensaje['contenido'] }}</p>
</body>

</html>
