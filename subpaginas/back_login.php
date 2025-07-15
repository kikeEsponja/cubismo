<?php
include "config.php";
session_start();

if ($_POST) {
    $email = mysqli_real_escape_string($conn, $_POST['correo']);
    $password = mysqli_real_escape_string($conn, $_POST['contras']);

    $sql = "SELECT id, nombre, correo FROM usuarios WHERE correo = '" . $email . "' and contras = '" . $password . "' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['logged_in'] = true;
        $_SESSION['usuario_id'] = $row['usuario_id'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['correo'] = $row['correo'];

        header('Location: ../index.php');
        exit();
    } else {
        echo "<center>";
        //echo "<div class='bienvenido'>";
        echo "<script> alert('Correo o contraseña incorrectas.'); </script><br>";
        echo "<h4>Has introducido una contraseña o un correo no válidos</h4>";
        echo '<a href="./login.php">volver</a><br>';
        echo "<img src='../img/incorrect.jpg' class='cuadro'>";
        //echo "</div>";
        echo "</center>";
    }
}else{
    echo "acceso denegado";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/clara.jpg">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Cubism</title>
</head>
<body>
	<div class="blue" style="height:450px;"></div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>