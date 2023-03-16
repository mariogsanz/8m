<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        $opcion = $_POST['estudios'];

        if (!empty($opcion)) {
            switch ($opcion) {
                case '1':
                    header('Location: noform.php');
                    break;
                case '2':
                    header('Location: eso.php');
                    break;
                case '3':
                    header('Location: otros.php');
                    break;
                case '4':
                    header('Location: trabajo.php');
                    break;

                default:
                    header('Location: index.php');
                    break;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Margaret</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container-fluid h-100 d-flex flex-column align-items-center p-0">
        <div class="container-fluid red p-2 text-center">
            <h1 class="display-4">PROGRAMA MARGARET</h1>
        </div>

        <div class="description">
            <p>"Te damos la bienvenida al programa Margaret. Nuestro objetivo es orientar hacia la formación en el ámbito cientifico-técnico a aquellas mujeres que desean acceder a puestos de trabajo con alta empleabilidad y oferta en el sector."
            </p>
        </div>

        <div class="mt-4">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="d-flex flex-column align-items-center">
                <select name="estudios" id="estudios" class="form-select">
                    <option selected>Selecciona el nivel de estudios</option>
                    <option value="1">Sin titulación</option>
                    <option value="2">Estudios secundarios</option>
                    <option value="3">Situacion vulnerable</option>
                    <option value="4">Busqueda de trabajo</option>
                </select>
                <input name="submit" type="submit" value="Empieza ya!" class="btn purple mt-5">
            </form>
        </div>

        <!-- galeria img -->
        <div class="div_galeria">
            <div class="img_gallery">

                <p class="category_text">Solo 3 de cada 10 mujeres en el mundo estudian carreras relacionadas con la ciencia, la tecnología, la ingeniería y las matemáticas</p>
                <img src="assets/css/pic1.jpeg" alt="foto1"></a>


            </div>

            <div class="img_gallery">
                <p class="category_text">Según datos de la Comisión Europea, hasta el año 2030 será necesario cubrir más de 1,6 millones de puestos de trabajo en el ámbito de las TIC</p>
                <img src="assets/css/pic2.jpeg" alt="foto2"></a>

            </div>

            <div class="img_gallery">
                <p class="category_text">Incorporar a más mujeres en empleos digitales tendría un beneficio para la economía de hasta 16 billones de euros anuales para el PIB conjunto de la UE</p>
                <img src="assets/css/pic3.jpg" alt="foto2"></a>

            </div>

            <div class="img_gallery">
                <p class="category_text">El ámbito STEM se continúa percibiendo como eminentemente masculino.</p>
                <img src="assets/css/pic4.png" alt="foto3"></a>

            </div>

        </div>
        <div class="description">
            <p>Según tu nivel de estudios o tu situación personal, te guiaremos hacia tu formación enfocada en el ámbito STEM. Así mismo, te proporcionaremos información si estás en situación de vulnerabilidad.
            </p>
        </div>
        <div class="container-fluid flex-grow-1 peach d-flex flex-column align-items-center">
            <div id="carousel" class="carousel carousel-dark slide mt-4" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">

                        <p>En 2025 cerca del 50% de los empleos estarán relacionados con la tecnología. </p>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <p>Solo el 13% de las programadoras son mujeres.</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

        </div>
    </div>
    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Este proyecto se ha llevado a cabo gracias a la iniciativa de la ONU, Objetivo Desarrollo Sostenible Nr 5 que apoya la igualdad de género.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="#">C</a></li>
                        <li><a href="#">UI Design</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Contribute</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by
                        <a href="#">IES Ribera del Tajo</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>

</body>

</html>