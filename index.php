<!DOCTYPE html>
<html>
<head>
    <title>Página de ejemplo</title>
</head>
<body>
    <h1>Página de ejemplo</h1>
    <a href="procesar.php?nombre=Diego&apellido=Forlan">Enviar parámetros por enlace</a>
    
    <h2>Formulario</h2>
    <form action="procesar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
