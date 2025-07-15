<?php
include_once 'config.php';
session_start();

$nombre = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Invitado';

$obras = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['termino'])) {
    $termino = mysqli_real_escape_string($conn, $_POST['termino']);

    $query = "SELECT * FROM cuadros 
              WHERE nombre LIKE '%$termino%' 
              OR descrip LIKE '%$termino%' 
              ORDER BY id DESC";

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
}
?>

<!-- HTML para mostrar resultados -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultados de búsqueda</title>
  <style>
    .galeria {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
    .cuadro {
      width: 200px;
      border: 1px solid #ccc;
      padding: 10px;
      border-radius: 8px;
      text-align: center;
      background-color: #f9f9f9;
    }
    .cuadro img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<h1>Bienvenido, <?= htmlspecialchars($nombre) ?></h1>
<h2>Resultados de búsqueda</h2>

<a href="galeria.php">← Volver a la galería</a>

<div class="galeria">
  <?php if (count($obras) > 0): ?>
    <?php foreach ($obras as $obra): ?>
      <div class="cuadro">
        <img src="imagenes/<?= htmlspecialchars($obra['imagen']) ?>" alt="<?= htmlspecialchars($obra['nombre']) ?>">
        <h3><?= htmlspecialchars($obra['nombre']) ?></h3>
        <p><?= htmlspecialchars($obra['descrip']) ?></p>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p>No se encontraron resultados para “<?= htmlspecialchars($_POST['termino']) ?>”.</p>
  <?php endif; ?>
</div>

</body>
</html>