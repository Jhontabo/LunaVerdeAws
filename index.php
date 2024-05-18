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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php
    //conexion con la base de datos y servidor 
    $mysqli = new mysqli("db-restaurante.cckhfhkqipfd.us-east-1.rds.amazonaws.com", "admin", "lunaverde", "lunaverde");

    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        exit();
    }

    $consulta = "SELECT * FROM Informacion";
    $resultado = array();
    $resultado = $mysqli->query($consulta);

    /* recorrer los resultados  */
    while ($fila = $resultado->fetch_assoc()) {
        $descripcion[] = $fila["descripcion"];
        $nombre[] = $fila["nombre"];
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
    <section class="page-section clearfix">
        <div class="container">
            <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="https://cdn.pixabay.com/photo/2019/02/04/22/05/chef-3975834_1280.jpg" alt="..." />
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Ven a</span>
                        <span class="section-heading-lower">Conocernos</span>
                    </h2>
                    <p class="mb-3"><?php echo $descripcion[0]; ?></p>
                    <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="sobre_nosotros.php">Más información</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Nuestra</span>
                            <span class="section-heading-lower"><?php echo $nombre[1]; ?></span>
                        </h2>
                        <p class="mb-0"><?php echo $descripcion[1]; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sección de redes sociales -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-primary">Síguenos en redes sociales</h2>
                    <p class="lead mb-5">Mantente actualizado con nuestras últimas noticias y promociones a través de nuestras redes sociales.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="bg-white rounded shadow py-5 px-4 text-center">
                        <i class="fab fa-whatsapp fa-3x mb-3 text-success"></i>
                        <h5 class="mb-3">WhatsApp</h5>
                        <p class="small text-muted mb-0">Si quieres realizar un pedido mediante la interacion de un chatbot de click en el icono de WhatsApp.</p>
                        <a href="https://wa.link/celyum" target="_blank" class="btn btn-success btn-sm mt-3">Chatear</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="bg-white rounded shadow py-5 px-4 text-center">
                        <i class="fab fa-facebook fa-3x mb-3 text-primary"></i>
                        <h5 class="mb-3">Facebook</h5>
                        <p class="small text-muted mb-0">Síguenos en Facebook para estar al tanto de nuestras últimas noticias y actualizaciones.</p>
                        <a href="https://www.facebook.com/profile.php?id=61558107166473" target="_blank" class="btn btn-primary btn-sm mt-3">Seguir</a>
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