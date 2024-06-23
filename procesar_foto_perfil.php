<?php
session_start();
require_once("Config/Config.php");
require_once("Helpers/Helpers.php");

// Variable de conexión
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Función para redirigir a la página de inicio de sesión si el usuario no está identificado
function verificarIdentidad() {
    if (!isset($_SESSION['userData']['idpersona'])) {
        header('Location: ' . base_url() . '/login');
        exit;
    }
}

// Proceso de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT idpersona, foto_perfil FROM persona WHERE username = ? AND password = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['userData']['idpersona'] = $user['idpersona'];
        $_SESSION['userData']['foto_perfil'] = $user['foto_perfil'];
        
        // Redirigir al perfil del usuario
        header('Location: ' . base_url() . '/perfil');
        exit;
    } else {
        echo "Credenciales incorrectas.";
    }

    $stmt->close();
}

// Proceso de cierre de sesión
if (isset($_GET['cerrar_sesion'])) {
    session_destroy();
    header('Location: ' . base_url() . '/login');
    exit;
}

// Verificar si el usuario está identificado para las demás acciones
verificarIdentidad();

// Procesamiento para subir imagen de perfil
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['foto_perfil'])) {
    // Verificar si se seleccionó un archivo
    if ($_FILES['foto_perfil']['error'] == UPLOAD_ERR_NO_FILE) {
        die("Debe seleccionar un archivo para subir.");
    }

    $uploadDir = 'Assets/images/perfil/'; // Directorio donde se guardarán las fotos subidas
    $uploadFile = $uploadDir . basename($_FILES['foto_perfil']['name']);
    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

    // Validaciones adicionales
    $check = getimagesize($_FILES['foto_perfil']['tmp_name']);
    if ($check === false) {
        die("El archivo no es una imagen válida.");
    }

    // Tamaño del archivo (5MB máximo)
    if ($_FILES['foto_perfil']['size'] > 5000000) {
        die("El archivo es demasiado grande.");
    }

    // Extensiones permitidas
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedExtensions)) {
        die("Solo se permiten archivos JPG, JPEG, PNG y GIF.");
    }

    // Crear la carpeta si no existe
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Mover el archivo a la carpeta de destino
    if (move_uploaded_file($_FILES['foto_perfil']['tmp_name'], $uploadFile)) {
        // Guardar la ruta del archivo en la base de datos
        $userId = $_SESSION['userData']['idpersona'];
        $query = "UPDATE persona SET foto_perfil = ? WHERE idpersona = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("si", $uploadFile, $userId);
        if ($stmt->execute()) {
            // Actualizar la sesión con la nueva ruta de la foto de perfil
            $_SESSION['userData']['foto_perfil'] = $uploadFile;
            // Redirigir al perfil del usuario
            header('Location: ' . base_url() . '/perfil');
            exit;
        } else {
            echo "Error actualizando la base de datos: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error subiendo el archivo.";
    }
} else {
    echo "No se recibió ningún archivo.";
}
?>
