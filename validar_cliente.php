<?php
session_start();
$correo_formulario = $_POST['correo'];
$clave_formulario = $_POST['clave'];

if($correo_formulario == 'cliente@gmail.com' && $clave_formulario == 'phpintermedio'){
    $_SESSION['cliente'] = $correo_formulario;
    header("Location: clientes.php?ok");
} else {
    header ("Location: clientes.php?error");
}


?>