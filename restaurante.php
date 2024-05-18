<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Luna Verde</title>
    <link rel="icon" type="image/x-icon" href="assets/Logo.ico" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <?php
    //conexion con la base de datos y servidor 
    $mysqli = new mysqli("db-restaurante.cckhfhkqipfd.us-east-1.rds.amazonaws.com", "admin", "lunaverde", "lunaverde");

    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        exit();
    }

    $consulta = "SELECT * FROM Menu";
    $resultado = array();
    $resultado = $mysqli->query($consulta);

    /* recorrer los resultados  */
    while ($fila = $resultado->fetch_assoc()) {
        $descripcion[] = $fila["descripcion"];
        $nombre[] = $fila["nombre"];
    }

    $consulta = "SELECT * FROM Horario";
    $resultado = array();
    $resultado = $mysqli->query($consulta);

    /* recorrer los resultados  */
    while ($fila = $resultado->fetch_assoc()) {
        $dia[] = $fila["dia"];
        $hora[] = $fila["hora"];
    }

    ?>
</head>

<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Bienvenidos al restaurante/cafetería</span>
            <span class="site-heading-lower">Luna Verde</span>
        </h1>
    </header>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Luna Verde</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Inicio</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="sobre_nosotros.php">Nosotros</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="cafeteria.php">Cafetería</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="restaurante.php">Restaurante</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-5">
                            <span class="section-heading-upper">Nuestro</span>
                            <span class="section-heading-lower">Horario</span>
                        </h2>
                        <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                            <li class="list-unstyled-item list-hours-item d-flex">
                                <?php echo $dia[0]; ?>
                                <span class="ms-auto"><?php echo $hora[0]; ?></span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                <?php echo $dia[1]; ?>
                                <span class="ms-auto"><?php echo $hora[1]; ?></span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                <?php echo $dia[2]; ?>
                                <span class="ms-auto"><?php echo $hora[2]; ?></span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                <?php echo $dia[3]; ?>
                                <span class="ms-auto"><?php echo $hora[3]; ?></span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                <?php echo $dia[4]; ?>
                                <span class="ms-auto"><?php echo $hora[4]; ?></span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                <?php echo $dia[5]; ?>
                                <span class="ms-auto"><?php echo $hora[5]; ?></span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                <?php echo $dia[6]; ?>
                                <span class="ms-auto"><?php echo $hora[6]; ?></span>
                            </li>
                        </ul>
                        <p class="address mb-5">
                            <em>
                                <strong>Carrera 34 #11-12</strong>
                                <br />
                                San Ignacio, Pasto
                            </em>
                        </p>
                        <p class="mb-0">
                            <small><em>Llamanos</em></small>
                            <br />
                            722 8090
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="https://cdn.pixabay.com/photo/2019/02/25/16/46/breakfast-4020028_1280.jpg" alt="..." />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Nuestros</span>
                                <span class="section-heading-lower"><?php echo $nombre[2]; ?></span>
                            </h2>
                            <p><?php echo $descripcion[2]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="https://cdn.pixabay.com/photo/2022/06/14/18/58/biryani-with-kebab-7262655_960_720.jpg" alt="..." />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Nuestros</span>
                                <span class="section-heading-lower"><?php echo $nombre[3]; ?></span>
                            </h2>
                            <p><?php echo $descripcion[3]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="https://cdn.pixabay.com/photo/2015/05/31/13/39/leek-791816_1280.jpg" alt="..." />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Nuestros</span>
                                <span class="section-heading-lower"><?php echo $nombre[4]; ?></span>
                            </h2>
                            <p><?php echo $descripcion[4]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; LUNA VERDE 2024</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>