<?php
session_start();

/*if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
    //header("Location: ./nouser.php");
    exit();
}*/
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
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #e1dede;
            color: #212529;
        }
        .bienvenido{
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .logo{
            width: 200px;
            height: 200px;
        }
        .h1{
            font-size: 2.5rem;
            margin-top: 20px;
        }
        .marco{
            width: 300px;
            height: 300px;
            border-radius: 50%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <center>
        <header class="header-vista">
            <img src="../img/logo.svg" alt="aquí va el logo" class="logo">
        </header>
            <h1 class="h1">Bienvenido: <span id="bienvenido"><?php echo $_SESSION['nombre']; ?></span></h>
            <h2>Gracias por registrarte</h2>
        <div class="bienvenido">
            <button id="ir-inicio" class="form-button">Ir a inicio</button>
            <!--<button id="ir-plataforma" class="form-button">Inicia sesión</button>-->
        </div>
        <br>
        <!--<img src="../img/guitarra.jpg" alt="" class="marco">-->
    </center>

    <script>
        const irInicio = document.getElementById('ir-inicio');
    	irInicio.addEventListener('click', ()=>{
        	window.location.href = '../index.php';
        });
    
        const irPlat = document.getElementById('ir-plataforma');
    	irPlat.addEventListener('click', ()=>{
        	window.location.href = './login.php';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>