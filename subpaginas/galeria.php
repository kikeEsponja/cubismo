<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <title>Cubism </title>
  <style>
    /* buscador */
    #galeria {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }
  </style>
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
      <li class="nav-item"><a class="nav-link" href="galeria.html">Galería</a></li>
      <li class="nav-item"><a class="nav-link" href="contacto.html">Contactos</a></li>
      <li class="nav-item"><a class="nav-link" href="login.php"><i class="bi bi-person fs-5"></i></a></li>
    </ul>
  </div>
</header>
    <main class="container py-5 text-center">
      <h1 class="mb-4">Galería de obras cubistas</h1>
      <?php
      //session_start();
      include_once 'config.php';
      include 'back_galeria.php';
      /*if (isset($_SESSION['nombre'])) {
          echo '<p class="text-success">Bienvenido, ' . htmlspecialchars($_SESSION['nombre']) . '!</p>';
      } else {
          echo '<p class="text-danger">Por favor, inicia sesión para ver la galería.</p>';
          echo '<a href="login.php" class="btn btn-primary">Iniciar sesión</a>';
      }*/
      ?>
      <p class="lead mb-5">Descubre 12 obras representativas con una breve descripción.</p>
      <form method="POST" action="./galeria.php">
        <div class="input-group mb-4">
          <input type="text" class="form-control" name="termino" placeholder="Buscar por título o artista" id="searchInput">
          <button class="btn btn-primary" type="submit">Buscar</button>
          <button class="btn btn-secondary" type="reset" onclick="limpiar()">Limpiar</button>
        </div>
      </form>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="galeria">
        <?php foreach ($obras as $obra): ?>
          <div class="gallery-item">
              <img src="<?= $obra['imagen'] ?>" alt="<?= htmlspecialchars($obra['nombre']) ?>">
              <h3><?= htmlspecialchars($obra['nombre']) ?></h3>
              <p><?= htmlspecialchars($obra['descrip']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </main>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
      <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
      <img id="lightbox-img" class="lightbox-img" src="" alt="Imagen ampliada">
      <div class="lightbox-description">
        <h4 id="lightbox-title"></h4>
        <p id="lightbox-text"></p>
      </div>
      <div class="lightbox-thumbnails" id="lightbox-thumbnails"></div>
    </div>

<script>
  const limpiar = () => {
    window.location.href = "galeria.php";
  };
  /*const obras = [
    {
      src: "../img/galeria/galeria 1.png",
      titulo: "Les Demoiselles d'Avignon",
      descripcion: "1907 por Pablo Picasso. Esta obra muestra figuras femeninas desnudas. Se considera el inicio del Cubismo."
    },
    {
      src: "../img/galeria/galeria2.png",
      titulo: "Violin and Candlestick",
      descripcion: "1910 por Georges Braque. Cubismo analítico: descomposición geométrica de objetos sobre fondo fusionado."
    },
    {
      src: "../img/galeria/galeria3.png",
      titulo: "Portrait of Picasso",
      descripcion: "1912 por Juan Gris. Retrato con planos superpuestos, formas geométricas y colores brillantes."
    },
    {
      src: "../img/galeria/galeria4.png",
      titulo: "La Ville",
      descripcion: "1919 por Fernand Léger. Representación de ciudad moderna con líneas mecánicas y color vibrante."
    },
    {
      src: "../img/galeria/galeria5.jpg",
      titulo: "L'Accordéoniste",
      descripcion: "1911 por Pablo Picasso. Hombre tocando acordeón visto desde múltiples puntos geométricos."
    },
    {
      src: "../img/galeria/galeria6.jpg",
      titulo: "L'Homme à la Guitare",
      descripcion: "1911–1912 por Georges Braque. Figura masculina con guitarra fusionada al fondo geométrico."
    },
    {
      src: "../img/galeria/galeria7.jpg",
      titulo: "Portrait d'Ambroise Vollard",
      descripcion: "1910 por Pablo Picasso. Retrato del marchante representado desde múltiples planos."
    },
    {
      src: "../img/galeria/galeria8.jpg",
      titulo: "La bouteille de Suze",
      descripcion: "1912 por Pablo Picasso. Técnica de collage representando una botella y texto impreso."
    },
    {
      src: "../img/galeria/galeria9.png",
      titulo: "Nature morte au compotier",
      descripcion: "1914 por Juan Gris. Naturaleza muerta con objetos descompuestos en planos vivos."
    },
    {
      src: "../img/galeria/galeria10.jpg",
      titulo: "Le Portugais",
      descripcion: "1911 por Georges Braque. Hombre portugués tocando guitarra, figura y fondo fragmentados."
    },
    {
      src: "../img/galeria/galeria11.jpg",
      titulo: "Le Fumeur",
      descripcion: "1913 por Juan Gris. Hombre fumando con formas claras, colores brillantes y geometría definida."
    },
    {
      src: "../img/galeria/galeria12.jpg",
      titulo: "La danseuse bleue",
      descripcion: "1927 por Fernand Léger. Figura humana geométrica y colorida con enfoque moderno."
    }
  ];*/

  const galeria = document.getElementById("galeria");
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");
  const lightboxTitle = document.getElementById("lightbox-title");
  const lightboxText = document.getElementById("lightbox-text");
  const lightboxThumbs = document.getElementById("lightbox-thumbnails");

  obras.forEach((obra, index) => {
    const col = document.createElement("div");
    col.className = "col";
    col.innerHTML = `
      <div class="gallery-item">
        <img src="${obra.src}" alt="${obra.titulo}" data-index="${index}">
        <h5>${obra.titulo}</h5>
        <p>${obra.descripcion}</p>
      </div>
    `;
    galeria.appendChild(col);
  });

  function openLightbox(index) {
    const obra = obras[index];
    lightbox.classList.add("active");
    lightboxImg.src = obra.src;
    lightboxTitle.textContent = obra.titulo;
    lightboxText.textContent = obra.descripcion;
    renderThumbnails(index);
  }

  function renderThumbnails(activeIndex) {
    lightboxThumbs.innerHTML = "";
    obras.forEach((obra, i) => {
      const thumb = document.createElement("img");
      thumb.src = obra.src;
      if (i === activeIndex) thumb.classList.add("active");
      thumb.onclick = () => openLightbox(i);
      lightboxThumbs.appendChild(thumb);
    });
  }

  function closeLightbox() {
    lightbox.classList.remove("active");
  }

  document.addEventListener("click", function(e) {
    if (e.target.matches(".gallery-item img")) {
      const index = e.target.dataset.index;
      openLightbox(Number(index));
    }
  });

    function searchGallery() {
    const query = document.querySelector('input[type="text"]').value.toLowerCase();
    const resultados = obras.filter(obra =>
      obra.titulo.toLowerCase().includes(query) ||
      obra.descripcion.toLowerCase().includes(query)
    );

    const galeriaDiv = document.getElementById("galeria");
    galeriaDiv.innerHTML = ""; // Limpiar resultados anteriores

    if (resultados.length === 0) {
      galeriaDiv.innerHTML = "<p>No se encontraron coincidencias.</p>";
      return;
    }

    resultados.forEach(obra => {
      const contenedor = document.createElement("div");
      contenedor.className = "gallery-item";
      contenedor.innerHTML = `
        <img src="${obra.src}" alt="${obra.titulo}" />
        <h3>${obra.titulo}</h3>
        <p>${obra.descripcion}</p>
      `;
      galeriaDiv.appendChild(contenedor);
    });
  }
</script>
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
    ></script>
  </body>
</html>
