<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conectar a la base de datos
    $conexion = new mysqli("localhost", "root", "", "perfil_dinamico");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Recibir los datos del formulario
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $pais = $conexion->real_escape_string($_POST['pais']);
    $numero = $conexion->real_escape_string($_POST['numero']);
    $correo = $conexion->real_escape_string($_POST['correo']);
    $direccion = $conexion->real_escape_string($_POST['direccion']);
    $email = $conexion->real_escape_string($_POST['email']);
    $experiencia = $conexion->real_escape_string($_POST['experiencia']);
    $formacion = $conexion->real_escape_string($_POST['formacion']);
    $idiomas = $conexion->real_escape_string($_POST['idiomas']);
    $aptitudes_habilidades = $conexion->real_escape_string($_POST['aptitudes_habilidades']);

    // Insertar o actualizar los datos
    $sql = "INSERT INTO perfil (id, nombre, pais, numero, correo, direccion, email, experiencia, formacion, idiomas, aptitudes_habilidades)
            VALUES (1, '$nombre', '$pais', '$numero', '$correo', '$direccion', '$email', '$experiencia', '$formacion', '$idiomas', '$aptitudes_habilidades') 
            ON DUPLICATE KEY UPDATE 
            nombre='$nombre', pais='$pais', numero='$numero', correo='$correo', direccion='$direccion', email='$email', experiencia='$experiencia', formacion='$formacion', idiomas='$idiomas', aptitudes_habilidades='$aptitudes_habilidades'";

    if ($conexion->query($sql) === TRUE) {
        echo "Perfil actualizado correctamente. <a href='index.php'>Ver Perfil</a>";
    } else {
        echo "Error al actualizar el perfil: " . $conexion->error;
    }

    $conexion->close();
}
?>
