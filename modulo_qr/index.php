<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Códigos QR | UMB Jilotepec</title>

    <link href="./../assets/css/styles.css" rel="stylesheet">
    <link href="./../assets/css/all.min.css" rel="stylesheet">
    <script src="./../assets/js/bootstrap.bundle.min.js"></script>
    <script src="./../assets/js/jquery-3.7.1.min.js"></script>

    <link href="./../assets/css/header.css" rel="stylesheet">
    <!-- <link href="./../assets/css/footer.css" rel="stylesheet"> -->
    <link href="./assets/css/newfooter.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid mb-2">
        <div class="d-flex justify-content-between align-items-center">
            <div class="mb-1 mt-1">
                <img src="./../assets/img/logo_edomex.png" alt="Gobierno del Estado de México" width="170px"
                    height="50px">
            </div>
            <div class="mb-1 mt-1 text-right text-light">
                <!-- Imágenes a la derecha -->
                <img src="./../assets/img/logo_umb.png" alt="Universidad Mexiquense Del Bicentenario" width="100px"
                    height="50px">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark border-1">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <ul class="nav col-12 col-lg-12 my-4 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="./../index.php" class="nav-link fs-6">Inicio</a>
                    </li>
                    <li>
                        <a href="./../modulo_prestamos/index_prestamos.php" class="nav-link fs-6 ">Prestámos</a>

                    </li>
                    <li>
                        <a href="./../modulo_libros/app/libros/index.php" class="nav-link fs-6">Libros</a>

                    </li>
                    <li>
                        <a href="./../modulo_alumnos/index.php" class="nav-link fs-6">Alumnos</a>
                    </li>
                    <li>
                        <a href="./index.php" class="nav-link fs-6 active">Códigos QR</a>
                    </li>

                    <?php
                    if($_SESSION['rol'] == 2){
                    ?>

                    <li>
                        <a href="./../modulo_usuarios/index_usuarios.php" class="nav-link fs-6">Usuarios</a>
                    </li>

                    <?php
                    }
                    ?>

                </ul>
            </div>
            <div class="dropdown">
                <a class="nav-link fs-6 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['usuario']; ?></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="./../modulo_login/cerrar-sesion.php" class="dropdown-item fs-6">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <h1 class="ms-4">Generador de Códigos QR </h1>
        <h5 class="fw-normal ms-4">Llene los siguientes campos con los valores y rangos a imprimir:</h5>

        <div class="container">
            <div class="row">
                <div class="12">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            <div class="fs-5"><i class="fas fa-qrcode"></i> Formulario</div>
                        </div>
                        <div class="card-body">
                            <form action="./generar_codigos.php" method="POST" class="needs-validation mt-3" novalidate>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <h5 class="card-title">Tipo de registro:</h5>
                                        <select class="form-select card-text" id="cmbCategoria"
                                            onchange="mostrarValor()" required>
                                            <option class="card-text" value="" selected>SELECCIONE UNA OPCIÓN</option>
                                            <option value="rectoriaEnf">RECTORÍA LIC. ENFERMERIA</option>
                                            <option value="rectoriaMec">RECTORÍA LIC. MECÁNICA</option>
                                            <option value="rectoriaPsi">RECTORÍA LIC. PSICOLOGIA</option>
                                            <option value="rectoriaArq">RECTORÍA LIC. ARQUITECTURA</option>
                                            <option value="donacion">DONACIÓN</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor, seleccione un tipo de registro.
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="mb-3 col-4">
                                        <h5 class="text-header">Tipo</h5>
                                        <input name="inputValor" type="text" class="form-control form-control" readonly
                                            id="inputValor" placeholder="Tipo de registro seleccionado" required>
                                    </div>

                                    <div class="mb-3 col-4">
                                        <h5 class="text-header">Fecha de Donación</h5>
                                        <input name="inputFecha" type="date" class="form-control form-control"
                                            id="inputFecha" placeholder="Ingrese el resto del código" required>
                                        <div class="invalid-feedback">
                                            Por favor, ingrese una fecha de donación válida.
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <h5 class="text-header" for="inicio">De:</h5>
                                        <input name="inicio" type="number" id="inicio" class="form-control form-control"
                                            maxlength="4" required placeholder="Inicio de códigos">
                                        <div class="invalid-feedback">
                                            Por favor, ingrese un número válido.
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <h5 class="text-header" for="final">Hasta:</h5>
                                        <input name="final" type="number" id="final" class="form-control form-control"
                                            maxlength="4" required placeholder="Final de códigos">
                                        <div class="invalid-feedback">
                                            Por favor, ingrese un número válido.
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-dark">
                                            <i class="fas fa-qrcode"></i> Generar Códigos QR</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Activa las validaciones de Bootstrap
        (function () {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
    <script>
        function mostrarValor() {
            var cmb = document.getElementById("cmbCategoria");
            var inputValor = document.getElementById("inputValor");
            var valorSeleccionado = cmb.value;

            if (valorSeleccionado === "rectoriaEnf") {
                inputValor.value = "UESJILO-LE-REC-";
            } else if (valorSeleccionado === "donacion") {
                inputValor.value = "UESJILO-DON-";
            } else if (valorSeleccionado === "etc") {
                inputValor.value = "Valor para ETC";
            } else if (valorSeleccionado === "rectoriaMec") {
                inputValor.value = "Valor para MECÁNICA";
            } else if (valorSeleccionado === "rectoriaPsi") {
                inputValor.value = "Valor para PSICOLOGIA";
            } else if (valorSeleccionado === "rectoriaArq") {
                inputValor.value = "Valor para ARQUITECTURA";
            } else {
                inputValor.value = "";
            }
        }
    </script>

</body>
</html>