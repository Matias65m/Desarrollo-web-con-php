<?php

session_start();

// Vaciar variables de sesión
$_SESSION = array();

// Destruir sesión
session_destroy();

// Redireccionar al inicio
header("Location: ../../");
exit();