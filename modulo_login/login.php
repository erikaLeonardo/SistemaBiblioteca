<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logoUMB.png" type="image/x-icon">
</head>
<body class="">

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-3">
      
                    <h3 class="fw-bold mb-2 text-uppercase">INICIAR SESIÓN</h3>
                    <p class="text-white-50 mb-5">Ingresa tu usuario y contraseña</p>
      
                    <form action="" method="post">
                    <div class="form-outline form-white mb-4">
                      <input type="email" name="txtUsuario" id="txtUsuario" class="form-control form-control-sm" required/>
                      <label class="form-label" for="txtUsuario">Usuario o Correo Electronico</label>
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <input type="password" name="txtPassw" id="txtPassw" class="form-control form-control-sm" required/>
                      <label class="form-label" for="txtPassw">Contraseña</label>
                    </div>
      
                    <p class="small mb-3 pb-lg-2"><a class="text-white-50" href="recuperar-contrasenia.php">¿Olvidaste tu contraseña?</a></p>
                    <?php
                    if(isset($_GET['message'])){
                    ?>
                    <div class="alert alert-success" role="alert">
                      <?php
                      switch($_GET['message']){
                        case 'ok':
                          echo "Por favor revisa tu correo";
                          break;
                        case 'error1':
                          echo "El correo no se encontro o este usuario no tiene este permiso";
                          break;
                        case 'cuenta':
                          echo "La cuenta se creo correctamente";
                          break;
                        case 'correcto':
                          echo "Inicia sesion con la nueva contraseña";
                          break;
                        case 'incorrecto':
                          echo "Problemas al restablecer contraseña, intentalo mas tarde";
                          break;
                        case 'cuenta':
                          echo "El usuario se registro correctamente";
                          break;
                        case 'userIncorrecto':
                          echo "El usuario o contraseña son incorrrectos";
                          break;
                        default:
                          echo "Algo salio mal intenta de nuevo";
                          break;
                      }
                      ?>
                    </div>
                    <?php
                    }
                    ?>
                    
                    <button class="btn btn-outline-light btn-sm px-5" type="submit">Iniciar Sesión</button>
                  </form>
                  </div>
      
                  <div>
                    <p class="mb-0">¿No tienes una cuenta? <a href="crear-cuenta.php" class="text-white-50 fw-bold">Crear Cuenta</a>
                    </p>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script>
        document.addEventListener("DOMContentLoaded", function() {
            var alerts = document.querySelectorAll('.alert');
            
            alerts.forEach(function(alert) {
                setTimeout(function() {
                    alert.style.display = 'none';
                }, 5000);
            });
        });
    </script>
    
</body>
</html>

<?php
include("../conexion/database.php");

if(isset($_POST['txtUsuario']) && isset($_POST['txtPassw'])){

  $usuario = $_POST['txtUsuario'];
  $passwordU = $_POST['txtPassw'];

  $consulta1 = "CALL SP_iniciarSesion('$usuario')";

  $inicio = mysqli_query($conn, $consulta1);
  $sesion = mysqli_fetch_array($inicio);

  if($passwordU == $sesion[6]){
    session_start();
    $_SESSION['usuario'] = $sesion[1];
    $_SESSION['rol'] = $sesion[7];
    header("Location: /UMB_biblioteca/index.php");
  }else{
    header("Location: login.php?message=userIncorrecto");
  }

  mysqli_close($conn);

}

?>