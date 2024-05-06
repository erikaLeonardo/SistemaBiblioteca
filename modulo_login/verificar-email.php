<?php

include("../conexion/database.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

$emailUser = $_POST['txtEmail'];

$consultaUser = "SELECT * FROM usuario WHERE usuario.correo = '$emailUser' AND usuario.rol = 2";
$user = mysqli_query($conn, $consultaUser);
$elegir = mysqli_fetch_array($user);

if($emailUser == $elegir[5]){


$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                      
    $mail->Host       = 'smtp-mail.outlook.com'; 
    $mail->SMTPAuth   = true;      
    $mail->Username   = 'bibliotecaumb.jilotepec@outlook.es';
    $mail->Password   = 'umbjilotepec2023';
    $mail->Port       = 587;

    $mail->setFrom('bibliotecaumb.jilotepec@outlook.es', 'UMB Jilotepec');
    $mail->addAddress($emailUser, '');

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8'; // Establece la codificación de caracteres
    $mail->Subject = 'Recuperación de contraseña';
    $mail->Body    = '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body class="container-fluid">
    <header class="row">
        <div class="col-12">
        </div>
    </header>
    <main>
        <h3 class="text-center">Biblioteca UMB Jilotepec: Recuperación de contraseña</h3>
        <article class="fs-4">
            <h4>Hola '.$elegir[1].'</h4>
            </br>Solicitaste la recuperación de tu contraseña, 
            </br>entra al siguiente link <a href="http://localhost/UMB_biblioteca/modulo_login/restablecer-contrasenia.php?id='.$elegir[0].'">Recuperación de contraseña</a> para recuperarla.
            </br></br>Si no solicitaste esto, ignora este correo electrónico.</br>
        </article>
    </main>
    
</body>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("location:login.php?message=ok");
} catch (Exception $e) {
    header("location:login.php?message=error");
}
}else{
    header("location:login.php?message=error1");
}

?>
