<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Constraseña</title>
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
      
                    <h3 class="fw-bold mb-2 text-uppercase">RECUPERAR CONTRASEÑA</h3>
                    <p class="text-white-50 mb-5">Ingresa tu correo electronico</p>
      
                    <form action="verificar-email.php" method="post">
                    <div class="form-outline form-white mb-4">
                        <input type="email" name="txtEmail" id="txtEmail" class="form-control form-control-sm" />
                        <label class="form-label" for="txtEmail">Correo Electronico</label>
                    </div>
              
                    <button class="btn btn-outline-light btn-sm px-5" type="submit">Enviar</button>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
</body>
</html>