<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error | UMB Jilotepec</title>
    <link href="./../../../../assets/css/styles.css" rel="stylesheet">
    <link href="./../../../../assets/css/all.min.css" rel="stylesheet">
    <link href="./../../../../assets/css/header.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid mb-2">
        <div class="d-flex justify-content-between align-items-center">
            <div class="mb-1 mt-1">
                <img src="./../../../../assets/img/logo_edomex.png" alt="Gobierno del Estado de México" width="170px"
                    height="50px">

            </div>
            <div class="mb-1 mt-1 text-right text-light">
                <img src="./../../../../assets/img/logo_umb.png" alt="Universidad Mexiquense Del Bicentenario"
                    width="100px" height="50px">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark border-1">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <ul class="nav col-12 col-lg-12 my-4 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="./../../../../index.php" class="nav-link fs-6">Inicio</a>
                    </li>
                    <li>
                        <a href="./../../../../modulo_prestamos/sistema-prestamos.html"
                            class="nav-link fs-6 ">Prestámos</a>
                    </li>
                    <li>
                        <a href="./../index.php" class="nav-link fs-6 active">Libros</a>
                    </li>
                    <li>
                        <a href="./../../../../modulo_alumnos/index.php" class="nav-link fs-6">Alumnos</a>
                    </li>
                    <li>
                        <a href="./../../../../modulo_qr/index.html" class="nav-link fs-6">Códigos QR</a>
                    </li>
                    <?php
                    if($_SESSION['rol'] == 2){
                    ?>
                    <li>
                        <a href="./../../../../modulo_usuarios/index_usuarios.php" class="nav-link fs-6">Usuarios</a>
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
                        <a href="./../../../../modulo_login/cerrar-sesion.php" class="dropdown-item fs-6">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="../../../img/danado.png" alt="Imagen" class="img-fluid mb-4 mt-4" style="max-width: 300px;">
                <h1>¡UPS!</h1>
                <h3 class="ms-5">La subida de archivos no se concretó correctamente.</h3>
                <p>Por favor, verifica que los registros sigan las plantillas definidas o <a href="#">consulta el
                        manual</a>.</p>
                <a href="./../index.php">Volver al panel de control</a>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</html>