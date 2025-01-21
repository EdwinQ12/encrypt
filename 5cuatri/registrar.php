<?php
require 'db_conexion.php';

function alerta_regis($tipo, $mensaje) {
    header("Location: inicio.php?tipo=$tipo&mensaje=" . urlencode($mensaje));
    exit();
}

if (isset($_POST["registrar"])) {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? '';

    // Validar que los campos requeridos no estén vacíos
    if ($nombre && $email && $password) {
        try {
            // Verificar si el email ya está registrado
            $checkEmailSql = $cnnPDO->prepare("SELECT COUNT(*) FROM u1_encriptacion WHERE email = :email");
            $checkEmailSql->bindParam(':email', $email, PDO::PARAM_STR);
            $checkEmailSql->execute();
            $emailExists = $checkEmailSql->fetchColumn();

            if ($emailExists > 0) {
                // Notificar si el email ya existe
                alerta_regis('warning', 'Este email ya está registrado. Intenta usar otro.');
            } else {
                // Insertar el nuevo registro
                $sql = $cnnPDO->prepare(
                    "INSERT INTO u1_encriptacion (nombre, email, password) 
                    VALUES (:nombre, :email, :password)"
                );
                $sql->execute([
                    ':nombre' => $nombre,
                    ':email' => $email,
                    ':password' => password_hash($password, PASSWORD_BCRYPT), // Hashear la contraseña
                ]);

                // Redirigir con éxito
                alerta_regis('success', 'Registro exitoso.');
            }
        } catch (PDOException $e) {
            alerta_regis('danger', 'Error al registrar: ' . $e->getMessage());
        }
    } else {
        alerta_regis('danger', 'Por favor, completa todos los campos.');
    }
}
?>
