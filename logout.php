<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['senha']);
session_destroy();
header('Location:index.php',0)
?>
