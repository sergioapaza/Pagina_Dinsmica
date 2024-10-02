<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Perfil Profesional</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Formulario para actualizar el Perfil Profesional</h1>
    <form action="guardar_perfil.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" required><br><br>

        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" required><br><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <h3>Experiencia Laboral</h3>
        <textarea id="experiencia" name="experiencia" rows="4" cols="50"></textarea><br><br>

        <h3>Formación</h3>
        <textarea id="formacion" name="formacion" rows="4" cols="50"></textarea><br><br>

        <h3>Idiomas</h3>
        <textarea id="idiomas" name="idiomas" rows="4" cols="50" placeholder="Escribe cada idioma en una línea separada"></textarea><br><br>

        <h3>Aptitudes y Habilidades</h3>
        <textarea id="aptitudes_habilidades" name="aptitudes_habilidades" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Actualizar Perfil">
    </form>
</body>
</html>
