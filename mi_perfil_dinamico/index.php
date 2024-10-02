<?php
// Conectar a la base de datos
$conexion = new mysqli("localhost", "root", "", "perfil_dinamico");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos del perfil
$sql = "SELECT * FROM perfil WHERE id = 1";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
} else {
    echo "No hay datos disponibles.";
    exit;
}

$conexion->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Profesional</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="profile-container">
        <!-- Sección del perfil -->
        <div class="profile-header">
            <img src="img/perfil.jpg" alt="Foto de perfil" class="profile-photo">
            <div class="profile-info">
                <h1><?php echo $fila['nombre']; ?></h1>
                <p><?php echo $fila['pais']; ?> 
                    <button id="contact-btn" class="contact-btn">Información de contacto</button> • 26 contactos
                </p>
            </div>
        </div>

        <!-- Sección de Experiencia -->
        <div class="section experience">
            <h2>Experiencia Laboral</h2>
            <p><?php echo nl2br($fila['experiencia']); ?></p>
        </div>

        <!-- Sección de Formación -->
        <div class="section formacion">
            <h2>Formación</h2>
            <p><?php echo nl2br($fila['formacion']); ?></p>
        </div>

        <!-- Sección de Idiomas -->
        <div class="section idiomas">
            <h2>Idiomas</h2>
            <p><?php echo nl2br($fila['idiomas']); ?></p>
        </div>

        <!-- Sección de Aptitudes y Habilidades -->
        <div class="section aptitudes_habilidades">
            <h2>Aptitudes y Habilidades</h2>
            <p><?php echo nl2br($fila['aptitudes_habilidades']); ?></p>
        </div>

        <!-- Modal de Información de Contacto -->
        <div id="contact-modal" class="modal">
            <div class="modal-content">
                <span id="close-modal" class="close">&times;</span>
                <h2>Información de Contacto</h2>
                <p><strong>Número:</strong> <?php echo $fila['numero']; ?></p>
                <p><strong>Correo:</strong> <?php echo $fila['correo']; ?></p>
                <p><strong>Dirección:</strong> <?php echo $fila['direccion']; ?></p>
                <p><strong>Email:</strong> <?php echo $fila['email']; ?></p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
