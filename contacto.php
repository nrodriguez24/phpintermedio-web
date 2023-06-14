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
    <h2>Contáctenos - Unidad VIII</h2>
    <div id="formcontacto">
    <form method="POST" action="enviar_consulta.php">
        <input type="text" name="nombre" placeholder="Nombre" maxlength="30" required>
        <input type="text" name="apellido" placeholder="Apellido" maxlength="50" required>
        <input type="email" name="correo" placeholder="Correo Electrónico" maxlength="100" required>
        <textarea name="consulta" placeholder="Escribe tu consulta" required></textarea>
        <input type="submit" value= "Enviar">
    </form>
    </div>
    <?php
    if(isset($_GET['ok_bd'])) {
        echo "<p>¡Consulta Enviada Con Éxito!</p>";
    }

    ?>
   
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>