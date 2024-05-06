<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMB Jilotepec</title>
    <link href="./assets/css/styles.css" rel="stylesheet">
    <link href="./assets/css/all.min.css" rel="stylesheet">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <link href="./assets/css/header.css" rel="stylesheet">
    <link href="./assets/css/footer.css" rel="stylesheet">
    <!-- <link href="./assets/css/newfooter.css" rel="stylesheet"> -->

</head>

<body>
    <div class="container-fluid mb-2">
        <div class="d-flex justify-content-between align-items-center">
            <div class="mb-1 mt-1">
                <img src="./assets/img/logo_edomex.png" alt="Gobierno del Estado de México" width="170px" height="50px">

            </div>
            <div class="mb-1 mt-1 text-right text-light">
                <img src="./assets/img/logo_umb.png" alt="Universidad Mexiquense Del Bicentenario" width="100px"
                    height="50px">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark border-1">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <ul class="nav col-12 col-lg-12 my-4 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="./index.php" class="nav-link fs-6 active">Inicio</a>
                    </li>
                    <li>
                        <a href="./modulo_prestamos/index_prestamos.php" class="nav-link fs-6 ">Prestámos</a>

                    </li>
                    <li>
                        <a href="./modulo_libros/app/libros/index.php" class="nav-link fs-6">Libros</a>

                    </li>
                    <li>
                        <a href="./modulo_alumnos/index.php" class="nav-link fs-6">Alumnos</a>
                    </li>
                    <li>
                        <a href="./modulo_qr/index.php" class="nav-link fs-6">Códigos QR</a>
                    </li>
                    <?php
                    if($_SESSION['rol'] == 2){
                    ?>
                    <li>
                        <a href="./modulo_usuarios/index_usuarios.php" class="nav-link fs-6">Usuarios</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- Nuevo menú de préstamos -->
            <div class="dropdown">
                <a class="nav-link fs-6 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['usuario']; ?></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="./modulo_login/cerrar-sesion.php" class="dropdown-item fs-6">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <h1>Biblioteca UMB Jilotepec</h1>
        <p>Biblioteca interna de la Unidad de Estudios Superiores de Jilotepec.</p>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card mb-4 bg-dark text-light">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-book-reader"></i> Sistema de Préstamos</h5>
                        <p class="card-text">Administra los préstamos y devoluciones de libros.</p>
                        <a href="./modulo_prestamos/index_prestamos.php" class="btn btn-light text-dark">Ir</a>
                        <!-- C:\xampp\htdocs\UMB_biblioteca\modulo_prestamos\app\prestamos\index_prestamos.php -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 bg-dark text-light">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-users"></i> Panel de Control Alumnos</h5>
                        <p class="card-text">Administra la información de los alumnos inscritos en la biblioteca.</p>
                        <a href="./modulo_alumnos/index.php" class="btn btn-light text-dark">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 bg-dark text-light">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-swatchbook"></i> Panel de Control Libros</h5>
                        <p class="card-text">Consultar, Agregar, Modificar y Eliminar Libros.</p>
                        <a href="./modulo_libros/app/libros/index.php" class="btn btn-light text-dark">Ir</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 bg-dark text-light">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-qrcode"></i> Generador de Códigos QR</h5>
                        <p class="card-text">Genera códigos QR para libros y recursos.</p>
                        <a href="./modulo_qr/index.php" class="btn btn-light text-dark">Ir</a>
                    </div>
                </div>
            </div>

            <?php
            if($_SESSION['rol'] == 2){
            ?>

            <div class="col-md-4">
                <div class="card mb-4 bg-dark text-light">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-users-cog"></i> Administrador de Usuarios</h5>
                        <p class="card-text">Consultar, Agregar, Modificar y Eliminar Usuarios, sólo esta habilitado
                            para ADMINISTRADOR PRINCIPAL.</p>
                        <a href="./modulo_usuarios/index_usuarios.php" class="btn btn-light text-dark">Ir</a>
                    </div>
                </div>
            </div>

            <?php
            }
            ?>

        </div>
    </div>

    <!-- Pie de página -->
    <footer class="bg-light py-3 bg-dark text-light">
        <div class="text-center">
            <p class="h6">Desarrollado por: </p>
            <p class="ms-4"> <img src="./assets/img/tesji_logo.png" alt="TESJI" width="50px" height="50px">
                Tecnológico de Estudios Superiores de Jilotepec, <a href="./acemv.html"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-light">Ingeniería
                    en Sistemas Computacionales 2020-2024</a></p>
        </div>
    </footer>
</body>

</html>