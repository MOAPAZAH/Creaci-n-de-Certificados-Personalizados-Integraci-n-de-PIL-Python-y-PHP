<?php
//require('fpdf186/fpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = escapeshellarg($_POST['nombre']);
    $usuario = escapeshellarg($_POST['usuario']);
    $contrasena = escapeshellarg($_POST['contrasena']);

    // Llamar al script de Python y pasar los datos
    $output = shell_exec("python cerimg.py $nombre $usuario $contrasena");

    // Puedes manejar la salida del script Python si es necesario
    echo $output;

    header("Location: index.php"); // Cambia 'menu.php' por el nombre de tu archivo de menú
    exit;
}
else {
    echo "Método no permitido.";
}
?>
