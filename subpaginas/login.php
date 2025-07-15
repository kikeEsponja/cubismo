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
    <a href="../index.php" class="navbar-brand d-flex align-items-center">
      <img src="../img/logo.svg" alt="Logo de Cubismo" class="logo-imagen">
    </a>
    
    <ul class="lista-navegacion navbar-nav ms-auto flex-row gap-3">
      <li class="nav-item"><a class="nav-link" href="historia.html">Historia</a></li>
      <li class="nav-item"><a class="nav-link" href="artistas.html">Artistas</a></li>
      <li class="nav-item"><a class="nav-link" href="filosofia.html">Filosofía y Conceptos</a></li>
      <li class="nav-item"><a class="nav-link" href="galeria.php">Galería</a></li>
      <li class="nav-item"><a class="nav-link" href="contacto.html">Contactos</a></li>
      <li class="nav-item">
        <a class="nav-link" href="login.html"><i class="bi bi-person fs-5"></i></a>
      </li>
    </ul>
  </div>
</header>
  <main class="content-container">
    <h1 class="page-title">Acceso a Tu Cuenta</h1>
    <p class="page-description">
      Inicia sesión o crea tu cuenta para explorar el maravilloso mundo del Cubismo
    </p>
    <div class="form-container">
      <div class="form-column">
        <div class="form-card">
          <div class="form-card-body">
            <form action="./back_login.php" method="POST" id="form_log" class="form_log">
              <div class="form-group">
                <label for="loginEmail" class="form-label">Correo electrónico</label>
                <input
                  name="correo"
                  type="email"
                  class="form-input"
                  id="loginEmail"
                  placeholder="tuemail@ejemplo.com"
                />
              </div>
              <div class="form-group">
                <label for="loginPassword" class="form-label">Contraseña</label>
                <input
                  name="contras"
                  type="password"
                  class="form-input"
                  id="loginPassword"
                  placeholder="Ingresa tu contraseña"
                />
              </div>
                  <?php
                    include_once 'config.php';
                    session_start();
                    if (isset($_SESSION['nombre'])) {
                        echo '<p class="text-success">Bienvenido, ' . htmlspecialchars($_SESSION['nombre']) . '!</p>';
                        echo '<button type="button" class="form-button cerrar" id="cerrar">Cerrar Sesión</button>';
                    } else {
                        echo '<p class="text-danger">Por favor, inicia sesión para acceder a tu cuenta.</p>';
                        echo '<button type="submit" class="form-button">Iniciar Sesión</button>';
                    }
                  ?>
              <!--<button type="submit" class="form-button">
                Iniciar Sesión
              </button>
              <button type="button" class="form-button cerrar" id="cerrar">
                cerrar sesión
              </button>-->
            </form>
            <p class="form-footer">
              ¿No tienes cuenta? <a href="registar.php">Regístrate aquí</a>
            </p>
          </div>
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
   /* const empty = document.getElementById('empty');
    empty.addEventListener('input', function(){
      if(empty){
        alert('elija una opción')
      }
    }); */
    
    const cerrar = document.getElementById('cerrar');
    cerrar.addEventListener('click', function(){
      window.location.href = './logout.php';
    });
  </script>
</body>
</html>
