<?php
//galería de imágenes desde la base de datos
include_once 'config.php';
session_start();
if (isset($_SESSION['nombre'])) {
    $nombre = $_SESSION['nombre'];
} else {
    $nombre = 'Invitado';
}
$query = "SELECT * FROM cuadros ORDER BY id DESC";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Error en la consulta: " . mysqli_error($conn));
}
$obras = [];
while ($row = mysqli_fetch_assoc($result)) {
    $obras[] = [
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'descrip' => $row['descrip'],
        'imagen' => $row['imagen'],
        'id_artistas' => $row['id_artistas']
    ];
}


$obras = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['limpiar']) && !empty($_POST['termino'])) {
    $termino = mysqli_real_escape_string($conn, $_POST['termino']);

    $query = "SELECT * FROM cuadros 
              WHERE nombre LIKE '%$termino%' 
              OR descrip LIKE '%$termino%' 
              ORDER BY id DESC";
} else {
    $query = "SELECT * FROM cuadros ORDER BY id DESC";
}

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    $obras[] = [
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'descrip' => $row['descrip'],
        'imagen' => $row['imagen'],
        'id_artistas' => $row['id_artistas']
    ];
}
?>