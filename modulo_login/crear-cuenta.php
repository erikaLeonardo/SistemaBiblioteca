<?php
include("../conexion/database.php");

if(isset($_POST['txtnombre']) && isset($_POST['txtApeP']) && isset($_POST['txtApeM']) 
    && isset($_POST['txtEmail']) && isset($_POST['txtPass']) && isset($_POST['txtPassCon']) 
    && isset($_POST['txtUsuario'])){

      $nombre = $_POST['txtnombre'];
      $apeP = $_POST['txtApeP'];
      $apeM = $_POST['txtApeM'];
      $usuario = $_POST['txtUsuario'];
      $correo = $_POST['txtEmail'];
      $password = $_POST['txtPass'];
      $confirmacion = $_POST['txtPassCon'];

      if(empty($nombre) || empty($apeP) || empty($apeM) || empty($usuario) || empty($correo) 
            || empty($password) || empty($confirmacion)){

            header("location:crear-cuenta.php?message=vacios");
            exit(); // Detener la ejecución del script

      } else {

        if($confirmacion == $password){

          $consultaI = "CALL SP_crearCuenta(
            '$nombre',
            '$apeP',
            '$apeM',
            '$usuario',
            '$correo', 
            '$password',
            '3',
            '1')";

            if(mysqli_query($conn, $consultaI)){

              header("location:login.php?message=cuenta");
              exit(); // Detener la ejecución del script

            } else {
              header("location:crear-cuenta.php?message=error3");
              exit(); // Detener la ejecución del script
            }

        } else {
          header("location:crear-cuenta.php?message=passwordDf");
          exit(); // Detener la ejecución del script
        }

      }

}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    <link rel="shortcut icon" href="img/logoUMB.png" type="image/x-icon">
</head>
<body>

<section class="vh-100 gradient-custom">
  <form action="" method="post">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-2">

                <h3 class="fw-bold mb-2 text-uppercase">CREAR CUENTA</h3>
                <p class="text-white-50 mb-5">Ingresa tus datos</p>

                <div class="form-outline form-white mb-4">
                    <input type="text" name="txtnombre" id="txtnombre" class="form-control form-control-sm" />
                    <label class="form-label" for="txtnombre">Nombre(s)</label>
                </div>
    
                <div class="form-outline form-white mb-4">
                    <input type="text" name="txtApeP" id="txtApeP" class="form-control form-control-sm" />
                    <label class="form-label" for="txtApeP">Apellido Paterno</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="text" name="txtApeM" id="txtApeM" class="form-control form-control-sm" />
                    <label class="form-label" for="txtApeM">Apellido Materno</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="text" name="txtUsuario" id="txtUsuario" class="form-control form-control-sm" />
                    <label class="form-label" for="txtApeM">Usuario</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="email" name="txtEmail" id="txtEmail" class="form-control form-control-sm" />
                  <label class="form-label" for="txtEmail">Correo Electronico</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="password" name="txtPass" id="txtPass" class="form-control form-control-sm" />
                  <label class="form-label" for="txtPass">Contraseña</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="password" name="txtPassCon" id="txtPassCon" class="form-control form-control-sm" />
                    <label class="form-label" for="txtPassCon">Confirmar Contraseña</label>
                </div>
                <?php
                if(isset($_GET['message'])){
                ?>
                <div id="alerta" class="alert alert-success" role="alert">
                <?php
                  switch($_GET['message']){
                    case 'passwordDf':
                      echo "Las contraseñas no coinciden";
                      break;
                    case 'vacios':
                      echo "Todos los campos son obligatorios";
                      break;
                    case 'error3':
                      echo "Problemas al registar, intentalo mas tarde";
                      break;
                    default:
                      echo "Problemas al registar, intentalo mas tarde";
                      break;
                  }
                  ?>
                  </div>
                  <?php
                  }
                  ?>
                <button class="btn btn-outline-light btn-sm px-5" type="submit">Crear Cuenta</button>
                <br>
                <br>
                <a href="login.php" class="text-white-50 fw-bold">Iniciar Sesión</a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>

<script>
    setTimeout(function() {
      document.getElementById('alerta').style.display = 'none';
    }, 5000);
</script>

</body>
</html>
