<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/header_footer.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" href="./img/logo.png" type="image/x-icon">
    <title>TURISMO</title>
</head>
<body class="page">
    <?php
    include 'header_footer/header.php';
    ?>

    <main class="page__content">
        <section class="page__welcome" id="welcome">
            <div class="page__welcome__content">
                <h1>BIENVENIDO A SOACHA</h1>
                <p>¡EXPLOREMOS JUNTOS!</p>
            </div>
        </section>

        <section class="page__description" id="description">
            <div class="page__description__content">
                <video class="page__description__content__video" controls autoplay loop muted preload="auto">
                    <source src="videos/soacha.mp4" type="video/mp4">
                </video>
                    <div class="page__description__content__text-block">
                        <h2 class="page__description__content__title">SOACHA</h2>
                        <p class="page__description__text">Ubicada al suroccidente de Bogotá, Soacha es un
                            municipio lleno de contrastes donde la historia precolombina, la riqueza cultural y el
                            desarrollo moderno se encuentran. Con una mezcla única de tradición y progreso, Soacha
                            ofrece a sus visitantes una variedad de atractivos desdde el emblemático Salto del Tequendama, hasta eventos vibrantes como el Festival Sol
                            y Luna.</p>
                    </div>
            </div>
        </section>

        <section class="page__destinations" id="destinations">
            <h2>DESTINOS</h2>
            <div class="page__destinations__content">
                <a class="page__destination" href="destinations/salto_tequendama.php">
                    <div class="page__destination__content">
                        <img class="page__destination__content__img" src="img/tequendama.png" alt="">
                        <h3 class="page__destination__content__title">Salto del Tequendama</h3>
                        <p class="page__destination__content__text">Una impresionante cascada que se encuentra cerca de Soacha, conocida por su belleza natural y su importancia histórica.</p>
                    </div>
                </a>

                <a class="page__destination" href="destinations/iglesia.php">
                    <div class="page__destination__content">
                        <img class="page__destination__content__img" src="img/iglesia.png" alt="">
                        <h3 class="page__destination__content__title">Iglesia de San Bernardino</h3>
                        <p class="page__destination__content__text">Un monumento histórico que destaca por su arquitectura colonial y su relevancia cultural en la comunidad.</p>
                    </div>
                </a>

                <a class="page__destination" href="destinations/parque_soacha.php">
                    <div class="page__destination__content">
                        <img class="page__destination__content__img" src="img/parque_soacha.png" alt="">
                        <h3 class="page__destination__content__title">Parque Soacha</h3>
                        <p class="page__destination__content__text">Un espacio recreativo en el corazón de la ciudad, ideal para actividades al aire libre y eventos comunitarios.</p>
                    </div>
                </a>

                <a class="page__destination" href="destinations/museo.php">
                    <div class="page__destination__content">
                        <img class="page__destination__content__img" src="img/museo.png" alt="">
                        <h3 class="page__destination__content__title">Museo Arqueológico de Soacha</h3>
                        <p class="page__destination__content__text">Este museo alberga una colección de piezas y objetos de culturas precolombinas, ofreciendo a los visitantes una visión profunda de la historia de la región.</p>
                    </div>
                </a>

                <a class="page__destination" href="destinations/piedra.php">
                    <div class="page__destination__content">
                        <img class="page__destination__content__img" src="img/piedra.png" alt="">
                        <h3 class="page__destination__content__title">Piedra del dios Varón</h3>
                        <p class="page__destination__content__text">Un monolito emblemático de la región, con significado cultural y ritual para las comunidades indígenas.</p>
                    </div>
                </a>

                <a class="page__destination" href="destinations/mirador.php">
                    <div class="page__destination__content">
                        <img class="page__destination__content__img" src="img/mirador.png" alt="">
                        <h3 class="page__destination__content__title">Parque Mirador</h3>
                        <p class="page__destination__content__text">Un punto elevado que ofrece vistas panorámicas de la ciudad, ideal para contemplar atardeceres.</p>
                    </div>
                </a>

                <a class="page__destination" href="destinations/boquemonte.php">
                    <div class="page__destination__content">
                        <img class="page__destination__content__img" src="img/boquemonte.png" alt="">
                        <h3 class="page__destination__content__title">Parque Arqueológico y Ecoturístico Boquemonte</h3>
                        <p class="page__destination__content__text">Un lugar que fusiona naturaleza y cultura, donde se exploran vestigios indígenas y se disfrutan de senderos y áreas recreativas.</p>
                    </div>
                </a>

                <a class="page__destination" href="destinations/poma.php">
                    <div class="page__destination__content">
                        <img class="page__destination__content__img" src="img/poma.png" alt="">
                        <h3 class="page__destination__content__title">Parque Ecológico La Poma</h3>
                        <p class="page__destination__content__text">Un espacio natural en Soacha que ofrece senderos rodeados de flora y fauna nativas, ideal para caminatas y avistamiento de aves. Perfecto para disfrutar de actividades al aire libre y picnics en familia.</p>
                    </div>
                </a>

                <a class="page__destination" href="destinations/chicaque.php">
                    <div class="page__destination__content">
                        <img class="page__destination__content__img" src="img/chicaque.png" alt="">
                        <h3 class="page__destination__content__title">Parque Natural Chicaque</h3>
                        <p class="page__destination__content__text">Un parque cercano a Soacha, famoso por su biodiversidad y paisajes montañosos. Ideal para caminatas, avistamiento de aves y actividades al aire libre.</p>
                    </div>
                </a>
            </div>
        </section>
    </main>

    <?php
    include 'header_footer/footer.php';
    ?>
</body>
</html>