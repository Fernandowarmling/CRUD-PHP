<?php
session_start();
// unset($_SESSION["usuario"]);
unset($_SESSION["email"]);
// unset($_SESSION["usuario"]);
session_destroy();
header("Location: index.php");
exit;