<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto Docker PHP</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding: 20px; }
        table { margin: 0 auto; border-collapse: collapse; width: 80%; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f2f2f2; }
        .logo { max-width: 150px; margin-bottom: 20px; }
        .row-img { width: 50px; height: auto; }
        .status-ok { color: green; font-weight: bold; }
        .status-err { color: red; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Panel de Control</h1>
    <img src="static/img/logo.png" alt="Logo insanso" class="logo">

    <?php
    $servername = "bd"; 
    $username = "php";
    $password = "12345";
    $dbname = "php";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        echo "<p class='status-err'>Error de conexión: " . $conn->connect_error . "</p>";
    } else {
        echo "<p class='status-ok'>Conexión correcta a la Base de Datos</p>";
    }
    ?>

    <h2>Tabla LOG</h2>
    <table>
        <thead>
            <tr>
                <th>Hora</th>
                <th>Actividad</th>
                <th>Estado</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($conn->connect_error == false) {
                $sql = "SELECT hora, actividad, estado, imagen FROM log";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["hora"] . "</td>";
                        echo "<td>" . $row["actividad"] . "</td>";
                        echo "<td>" . $row["estado"] . "</td>";
                        echo "<td><img src='" . $row["imagen"] . "' class='row-img'></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>0 resultados</td></tr>";
                }
                $conn->close();
            }
            ?>
        </tbody>
    </table>

</body>
</html>