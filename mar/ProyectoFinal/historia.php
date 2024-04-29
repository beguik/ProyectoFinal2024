<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MalagApp</title>
    <link rel="stylesheet" href="./css/historia.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vidaloka&family=Viga&display=swap" rel="stylesheet">
</head>
<style>
    /*    Estilos para el footer  */
    .footer {
        width: 100%;
        background-color: rgba(0, 37, 92, 0.3);
        border-top: 1px solid #ccc;
        box-shadow: 0px -2px 5px 0px rgba(0, 0, 0, 0.007);
        height: 100%;
    }

    .footer>p {
        text-align: center;
        color: white;
        margin-top: 10px;
    }
</style>
<body class="historia">
    <div class="usuario">
        <?php
        session_start();
        if (isset($_SESSION['usuario'])) {
            echo "<h5 style='color:black;text-align:center;margin-top: 10px; font-size:large'><strong><i>¡Bienvenidx " . $_SESSION['usuario'] . " a . . .!</i></strong> </h5>";
        } else {
            echo "<h5 style='color:black;text-align:center; margin-top: 10px; font-size:large'> <strong><i>Boquerón bienvenido a . . . </i></strong></h5>";
        }
        ?>
    </div>

    <div class="titulo">
        <div class="logo" id="logo">
            <h5>MalagApp </h5>
            <img src="./logoBoqueroncio.png" alt="logotipo MalaApp">
        </div>
        <h1>Festividades</h1>
        <button id="boton">☰</button>
        <div id="menu" class="hidden">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="festividades.php">Festividades</a></li>
                <li><a href="historia.php">Historia</a></li>
                <li><a href="rutas.php">Rutas</a></li>
                <li><a href="sabermas.php">Saber Más</a></li>
                <li><a href="juego.php">Juego del Boquerón</a></li>
            </ul>
        </div>
    </div>

    <div class="contenido">
        <h4>
            El trozo de texto estándar de Lorem Ipsum usado desde el año
            1500 es reproducido debajo para aquellos interesados. Las secciones
            1.10.32 y1.10.33Lorem Ipsum es simplemente el texto de relleno de
            las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de
            relleno estándar de las industrias desde el año 1500, c
            uando un impresor (N. del T. persona que se dedica a la imprenta) des
            conocido usó una galería de textos y los mezcló de tal manera que logró h
        </h4>
    </div>

    <div class="content home">
        <div id="map"></div>        
    </div>


<!--
    <div id="container">
        <div id="anuncio1"><img src="./css/img/large.jpg" alt="Anuncio de Málaga"></div>
        <div id="contenidoGrande">
            <p>
                Málaga, la joya de la Costa del Sol, es un destino que rebosa de cultura, tradición y vida.
                Uno de los aspectos más destacados de esta vibrante ciudad son sus festividades, celebraciones que
                se arraigan profundamente en el corazón de sus habitantes y que atraen a turistas de todo el mundo.</br> </br>
                Desde la emblemática Semana Santa hasta la colorida Feria de Agosto, las festividades en Málaga son
                una manifestación palpable de la riqueza cultural y la identidad local.Cada evento está impregnado
                de historia, música, danza y gastronomía, creando una experiencia única que deja una impresión duradera en todos los que participan.
                Uno de los mayores beneficios de estas festividades es su impacto en el turismo. </br> </br>
                Málaga se convierte en un imán para los visitantes que buscan sumergirse en la autenticidad de su cultura y tradiciones.
                Los hoteles, restaurantes, tiendas y atracciones turísticas florecen durante estas celebraciones,
                generando ingresos significativos que impulsan la economía local y crean oportunidades de empleo para los residentes.
                Pero más allá de los aspectos económicos, las festividades en Málaga fomentan un sentido de comunidad
                y orgullo entre sus habitantes. Son momentos para reunirse con familiares y amigos, para compartir risas
                y alegría, y para celebrar la vida en toda su plenitud. </br> </br>
                Estos eventos fortalecen los lazos sociales, promueven la inclusión y crean recuerdos que perdurarán para siempre.
                Además, las festividades desempeñan un papel crucial en la preservación y promoción de la cultura local.
                A través de desfiles, conciertos, exposiciones y otras actividades, se transmiten de generación en generación
                las tradiciones y costumbres que definen la identidad malagueña. Esto no solo enriquece la experiencia de quienes
                viven en la ciudad, sino que también atrae a aquellos que desean conocer y apreciar la autenticidad de su patrimonio cultural.
                En resumen, las festividades en Málaga son mucho más que simples celebraciones; son expresiones vivas de la esencia
                misma de la ciudad y motores de progreso, tanto en el ámbito económico como social. Al unir a la comunidad, atraer a
                los turistas y preservar la cultura local, estas festividades continúan enriqueciendo la vida de Málaga y dejando una
                huella indeleble en todos los que tienen el privilegio de ser parte de ellas.
            </p>
        </div>
    </div>

     <div id="containerAbajo">
        <div id="anuncio2"><img src="./css/img/anuncio.jpg"></div>
        <div id="juego">
            <img src="./css/img/boton1.png" type="button" id="juego">
        </div>
    </div> -->

    <!-- Footer -
    <footer class="footer">
        <p>&copy; 2024 MalagApp. Todos los derechos reservados.</p>
        <p><a href="#">Términos y Condiciones</a> | <a href="#">Política de Privacidad</a></p>
    </footer> -->

</body>
<script src="paginas.js"></script>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
</html>