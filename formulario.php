<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de Autorización</h1>
    
                <form method="post" action="">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <br>
                    <br>
                    <label for="codigo">Código:</label>
                    <input type="text" id="codigo" name="codigo" required>
                    <br>
                    <br>
                    <input type="submit" value="Enviar">
                </form>

    <?php
                // Datos de autorización (puedes cambiar estos valores)
            $datosAutorizados = [
                "Juan" => "1234",
                "Maria" => "5678",
                "Pedro" => "91011"
            ];
            
            $mensaje = ""; // Variable para almacenar el mensaje
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombre = $_POST['nombre'];
                $codigo = $_POST['codigo'];
            
                // Verificamos si el nombre y el código son correctos
                if (isset($datosAutorizados[$nombre]) && $datosAutorizados[$nombre] === $codigo) {
                    header("Location: Bienvenida.html");
                        exit();
                } else {
                    $mensaje = "Usted no está autorizado.";
                }
            }

            if ($mensaje) {
                echo "<p>$mensaje</p>";
            }
    ?>
</body>
</html>