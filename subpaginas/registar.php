<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <title>Cubism </title>
</head>


<header class="barra-navegacion navbar navbar-dark bg-dark">
  <div class="container d-flex align-items-center">
    <a href="../index.php" class="navbar-brand d-flex align-items-center"><img src="../img/logo.svg" alt="Logo de Cubismo" class="logo-imagen"></a>
    
    <ul class="lista-navegacion navbar-nav ms-auto flex-row gap-3">
      <li class="nav-item"><a class="nav-link" href="historia.html">Historia</a></li>
      <li class="nav-item"><a class="nav-link" href="artistas.html">Artistas</a></li>
      <li class="nav-item"><a class="nav-link" href="filosofia.html">Filosofía y Conceptos</a></li>
      <li class="nav-item"><a class="nav-link" href="galeria.html">Galería</a></li>
      <li class="nav-item"><a class="nav-link" href="contacto.html">Contactos</a></li>
      <li class="nav-item"><a class="nav-link" href="./login.html"><i class="bi bi-person fs-5"></i></a></li>
    </ul>
  </div>
</header>

  <main class="content-container">
      <?php
  include "./config.php";
  ?>
    <h1 class="page-title">Crea una Cuenta</h1>
    <p class="page-description">Regístrate para unirte al maravilloso mundo del Cubismo y acceder a contenido exclusivo</p>

    <div class="form-container">
      <div class="form-card">
        <div class="form-card-body">
          <form action="./back_registrar.php" method="POST" id="form_reg" class="form_reg">
            <div class="form-group">
              <label for="registerName" class="form-label">Nombre</label>
              <input type="text" name="nombre" class="form-input" id="registerName" placeholder="Tu nombre completo"/>
            </div>
            <div class="form-group">
              <label for="registerEmail" class="form-label">Correo electrónico</label>
              <input type="email" name="correo" class="form-input" id="registerEmail" placeholder="tuemail@ejemplo.com"/>
            </div>
            <div class="form-group">
              <label for="registerPassword" class="form-label">Contraseña</label>
              <input type="password" name="contras" class="form-input" id="registerPassword" placeholder="Crea una contraseña"/>
            </div>
            <button type="submit" class="form-button">Regístrate</button>
          </form>
          <p class="form-footer">¿Ya tienes cuenta? <a href="./login.php">Inicia sesión aquí</a></p>
        </div>
      </div>
    </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script>
    const empty = document.getElementById('empty');
    empty.addEventListener('input', function(){
      if(empty){
        alert('elija una opción')
      }
    });
  </script>
</body>
</html>
