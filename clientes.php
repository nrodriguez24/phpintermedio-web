<?php
session_start();
?>
<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Clientes - Unidad VII</h2>
<div id="formulario">
<?php 
    if(isset($_SESSION['cliente'])){
        include('contenido_clientes.php');
?>
    <p><a href="salir.php">Salir</a></p> 
<?php } else {?>

    <form action= "validar_cliente.php" method="POST">
        <input type="email" name="correo" placeholder="Correo Electronico">
        <input type="password" name= "clave" placeholder="Contraseña">
        <input type="submit" value= "Ingresar">
    </form>
    <?php
}
    if(isset($_GET['error'])){
    echo "<p>Los datos ingresados son incorrectos</p>";
    }
    ?>
</div>   
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>