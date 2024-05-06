<?php
  session_start();
  session_destroy();
  header("Location: /UMB_biblioteca/modulo_login/login.php");
?>