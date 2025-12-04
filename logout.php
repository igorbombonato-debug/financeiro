<?php
require_once'config.php';
// fazer logout
session_unset();
session_destroy();
// redireciona para o login
header('Location:login.php');
exit;

?>