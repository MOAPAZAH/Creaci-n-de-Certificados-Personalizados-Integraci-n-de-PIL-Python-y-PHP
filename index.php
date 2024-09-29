<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9; /* Fondo suave */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Organiza los elementos verticalmente */
        }

        h1 {
            font-size: 3em; /* Tamaño grande del título */
            color: #4CAF50; /* Color verde */
            text-align: center; /* Centrar título */
            margin-bottom: 20px; /* Espacio debajo del título */
            font-family: Arial, sans-serif; /* Fuente */
        }

        form {
            background-color: #fff; /* Fondo blanco para el formulario */
            padding: 20px;
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
            width: 300px; /* Ancho del formulario */
            text-align: left; /* Alinea el texto del formulario a la izquierda */
        }

        label, input {
            display: block;
            margin-bottom: 10px;
            width: 100%; /* Ancho completo de los campos */
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Color de fondo del botón */
            color: white; /* Color de texto del botón */
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Color al pasar el mouse */
        }
    </style>
</head>
<body>
    <h1>CREAR CERTIFICADOS</h1><br>

    <form action="generar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="usuario">Titulo:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        
        <label for="contrasena">Fecha:</label>
        <input type="text" id="contrasena" name="contrasena" required><br><br>
        
        <input type="submit" value="Generar PDF">
    </form>
</body>
</html>