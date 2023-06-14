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
    <h2>Noticias - Unidad VI</h2>
    <?php 
    $noticias = array (
        array ('titulo'=> 'Marcos Rojo la sacó barata', 
        'parrafo'=> 'recibió solo una fecha de suspensión y podrá jugar el lunes ante Huracán',
        'imagen'=>'not1.jpg'),
        array ('titulo'=> 'Edinson Cavani debutó con la camiseta del Valencia y explicó por qué no fue a Boca', 'parrafo'=> 'Me atraía el proyecto de Boca, sin duda, pero por el tema del Mundial ahora mismo priorizaba un futuro en Europa, y concretamente en España. Le agradecimos mucho a Román Riquelme, y nunca se sabe qué pasará en el futuro', 'imagen'=>'not2.jpg'),
        array ('titulo'=> 'Construyó una pista de aterrizaje para ovnis en Salta ante la llegada de extraterrestres', 'parrafo'=> 'Al parecer, la posible llegada de seres de otros planetas a la Tierra mantiene en vilo a algunas personas. Tal es el caso de un hombre que vive en la provincia de Salta y, ante esto, ha decidido construir un “ovnipuerto”', 'imagen'=>'not3.jpg'),
        array ('titulo'=> 'Meowtalk, la app que traduce maullidos y le promete a los usuarios entender lo que dicen sus gatos', 'parrafo'=> 'Los fundadores de MeowTalk dicen que han encontrado una fórmula capaz de identificar los distintos “miau” del felino y traducirlos al lenguaje cotidiano de hombres y mujeres', 'imagen'=>'not4.jpg')
    );
    for ($inicial=0; $inicial<count($noticias); $inicial++){
    ?>
    <div id= "caja_noticias"> 
        <h3><?php echo $noticias[$inicial]['titulo'];?></h3>
        <p><?php echo $noticias[$inicial]['parrafo'];?></p>
        <div id= 'imagen_noticia'> 
            <img src="imagenes/<?php echo $noticias[$inicial]['imagen'];?>">
        </div>
    </div>
<?php } ?>

   
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>