<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['submit'])){
            $opcion = $_POST['estudios'];

            if (!empty($opcion)){
                switch ($opcion) {
                    case '1':
                        header('Location: opcion1.php');
                        break;
                    case '2':
                        header('Location: opcion2.php');
                        break;
                    case '3':
                        header('Location: opcion3.php');
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
</head>

<body>
    <div class="container-fluid h-100 d-flex flex-column align-items-center p-0">
        <div class="container-fluid red p-2 text-center">
            <h1 class="display-4">Margaret</h1>
        </div>
        <div class="container-fluid flex-grow-1 peach d-flex flex-column align-items-center">
            <div id="carousel" class="carousel carousel-dark slide mt-4" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <h3>Solo el 13% de las programadoras son mujeres.</h3>
                        <p>En 2025 cerca del 50% de los empleos estarán relacionados con la tecnología. Inés Vázquez y Rosario Ortiz afrontaron el problema creando Adalab, una empresa social diseñada para combatir la brecha de género tecnológica mediante la formación y la integración al mercado laboral. Han conseguido emplear al 94% de sus alumnas.</p>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <p>“En apenas cinco años, cerca del 50% de los empleos estarán relacionados con la tecnología. Si no nos metemos, vamos a estar fuera de la empleabilidad en el sector"</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
            <div class="mt-4">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="d-flex flex-column align-items-center">
                    <select name="estudios" id="estudios" class="form-select">
                        <option selected>Selecciona el nivel de estudios</option>
                        <option value="1">Opcion 1</option>
                        <option value="2">Opcion 2</option>
                        <option value="3">Opcion 3</option>
                    </select>
                    <input name="submit" type="submit" value="Empieza ya!" class="btn purple mt-5">
                </form>
            </div>
        </div>
    </div>
</body>

</html>