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
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Unidad IV - Introducción a PHP</h2>
    <div id="uni4_1">
        <?php
        echo "<h2>PHP es el lenguaje de lado servidor más extendido en la web.</h2>";
        echo "<h3>Es un lenguaje que ha tenido una gran aceptación en la comunidad de desarrolladores, debido a la potencia y simplicidad que lo caracterizan.</h3>";
        echo "<p>La facilidad de PHP se basa en que permite embeber pequeños fragmentos de código dentro de lo que sería una página común creada con HTML.</p>";
        ?>
    </div>
    <div id="uni4_2">
        <?php
        echo ("<h4>EVALUACIÓN <br/> INTEGRADORA <br/> PHP y MySQL</h4>");
        ?>
    </div>
    <div id="uni4_3">
        <?php
        $entero = 100;
        $cadena = "Naim Rodriguez 42";
        $booleano = true;

        echo $entero."<br/>".$cadena."<br/>".$booleano;
        ?>
    </div>
    <div id="uni4_4">
        <?php
        $var1 = 10;
        $var2 = 6;
        $var3 = 4;
        echo $var1 == $var2;

        echo "Las variables son: ".$var1.", ".$var2." y ".$var3."<br/>";
        echo "El resultado de: (".$var1." * ".$var2.") / (".$var2." - ".$var3.") Es igual a: ".(($var1*$var2)/($var2-$var3));
        ?>
    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>