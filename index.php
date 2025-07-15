<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="./css/estilos.css">
  <title>Cubism </title>
</head>


<header class="barra-navegacion navbar navbar-dark bg-dark">
  <div class="container d-flex align-items-center">
    <a href="../index.php" class="navbar-brand d-flex align-items-center">
      <img src="./img/logo.svg" alt="Logo de Cubismo" class="logo-imagen">

    </a>
    
    <ul class="lista-navegacion navbar-nav ms-auto flex-row gap-3">
      <li class="nav-item"><a class="nav-link" href="./subpaginas/historia.html">Historia</a></li>
      <li class="nav-item"><a class="nav-link" href="./subpaginas/artistas.html">Artistas</a></li>
      <li class="nav-item"><a class="nav-link" href="./subpaginas/filosofia.html">Filosofía y Conceptos</a></li>
      <li class="nav-item"><a class="nav-link" href="./subpaginas/galeria.php">Galería</a></li>
      <li class="nav-item"><a class="nav-link" href="./subpaginas/contacto.html">Contactos</a></li>
      <li class="nav-item">
        <a class="nav-link" href="./subpaginas/login.php"><i class="bi bi-person fs-5"></i></a>
      </li>
    </ul>
  </div>
</header>
    <section class="container my-5">
      <div class="text-center">
        <h1>¡Bienvenido al mundo del Cubismo!</h1>
       <?php
       //Para que aparezca el nombre
        session_start();
        if (isset($_SESSION['nombre'])) {
          echo "<h2>Hola, " . $_SESSION['nombre'] . "!</h2>";
        } else {
          echo "<h2>Hola, visitante!</h2>";
        }
        ?>
        <p class="mt-3">
          Sumérgete en uno de los movimientos artísticos más revolucionarios del
          siglo XX. Explora su historia, conoce a sus principales artistas,
          descubre su filosofía y conceptos, y admira algunas de las obras más
          representativas.
        </p>
      </div>
    </section>

    <section class="hero">
      <div id="carruselPrincipal" class="carousel slide" data-bs-ride="carousel">      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="./img/1.jpeg"
              class="d-block w-100"
              alt="Imagen Hero"
            />
          </div>
          <div class="carousel-item">
            <img
              src="./img/Cubist_Synthesis.jpg"
              class="d-block w-100"
              alt="Galería 4"
            />
          </div>
          <div class="carousel-item">
            <img
              src="./img/3.jpeg"
              class="d-block w-100"
              alt="Galería 2"
            />
          </div>
          <div class="carousel-item">
            <img
              src="./img/4.jpeg"
              class="d-block w-100"
              alt="Galería 12"
            />
          </div>
          <div class="carousel-item">
            <img
              src="./img/5.jpeg"
              class="d-block w-100"
              alt="Galería 12"
            />
          </div>
          <div class="carousel-item">
            <img
              src="./img/6.jpeg"
              class="d-block w-100"
              alt="Galería 12"
            />
          </div>
          <div class="carousel-item">
            <img
              src="./img/7.jpeg"
              class="d-block w-100"
              alt="Galería 12"
            />
          </div>
        </div>

        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carruselPrincipal"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carruselPrincipal"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
    </section>
 
  </main>

  
  <footer class="footer-section">
    <div class="footer-container">
      <p class="footer-contact-info">
        Contacto:
        <i class="bi bi-telephone-fill"></i> +54 9 11 4578229
        | <i class="bi bi-envelope-fill"></i> cubism@hotmail.com
      </p>
      <div class="social-links">
        <a href="#" class="social-link" aria-label="Instagram">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="#" class="social-link" aria-label="Facebook">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="#" class="social-link" aria-label="Twitter">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="#" class="social-link" aria-label="YouTube">
          <i class="bi bi-youtube"></i>
        </a>
      </div>
      <p class="footer-rights">
        © 2025 Cubism. Todos los derechos reservados.
      </p>
      <p class="footer-author">
        Clara Sorzana
      </p>
    </div>
  </footer>
  <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  crossorigin="anonymous"
></script>
</body>
</html>

