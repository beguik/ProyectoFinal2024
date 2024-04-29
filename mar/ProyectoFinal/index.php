<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">

    <title>MalagApp</title>
</head>

<body class="body">

    <div class="usuario">
        <?php
        session_start();
        if (isset($_SESSION['usuario'])) {
            echo "<h5 style='color:white;text-align:center;margin-top: 10px;'>¡Bienvenidx de vuelta, <strong><i>" . $_SESSION['usuario'] . "</i></strong>!</h5>";
            } else {
            echo "<h5 style='color:white;text-align:center; margin-top: 10px;'> Hola, <strong><i>boquerón</i></strong>. . . </h5>";
        }
        ?>
    </div>

    <div class="titulo">
        <h1>¡Bienvenidx a MalagApp!</h1>
        <?php
        if (!isset($_SESSION['usuario'])) {
            echo "<div>
                  <input type='button' class='btn btn-outline-dark' value='Login' id='login'>
                  <input type='button' class='btn btn-dark' value='Registrarse' id='registro'>
              </div>";
        } else if (isset($_SESSION['usuario'])) {
            echo "<form action='funcionCerrarSesion.php' method='post'><input type='submit' class='btn btn-outline-dark' value='Cerrar Sesión'></form>";
        }
        ?>
    </div>

    <div class="containerGrande">
        <div class="logo" id="logo">
            <img src="./logoBoqueroncio.png" alt="logotipo MalaApp">
        </div>

        <div class="menu">
            <div class="festividades" id="festividades" type='button'>
                <h5>Festividades</h5>
            </div>
            
            <div class="historia" id="historia" type='button'>
                <h5>Historia</h5>
            </div>

            <div class="rutas" id="rutas" type='button'>
                <h5>Rutas</h5>
            </div>

            <div class="opcion" id="opcion" type='button'>
                <h5>Saber Más</h5>
            </div>

            <div class="juego" id="juego" type='button'>
                <h5>Juego del <br>Boquerón</h5>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>informacion footer</p>
    </footer>

    <script src="jquery-3.7.1.min.js"></script>
    <script src="codigo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>