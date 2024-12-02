<?php

require_once "class/Libro.php";
require_once "class/Autor.php";
require_once "class/Biblioteca.php";


$autor1 = new Autor("Gotouge Koyoharu", "Autor de 'Kimetsu no Jaiba'");
$autor2 = new Autor("Susan K. Putney", "Autora de 'Amazing Spider-Man: Hooky'");
$autor3 = new Autor("Gege Akutami", "Autor de 'Jujutsu Kaisen'");
$autor4 = new Autor("Lionel López", "Autor de 'Aprende React'");

$libro1 = new Libro("Kimetsu no Jaiba", $autor1->getNombre(), "Manga Shonen", "kimetsu");
$libro2 = new Libro("Amazing Spider-Man: Hooky", $autor2->getNombre(), "Ficción", "spidey");
$libro3 = new Libro("Jujutsu Kaisen", $autor3->getNombre(), "Manga Shonen", "jujutsu");
$libro4 = new Libro("Aprende React", $autor4->getNombre(), "Desarrollo web", "react");



$biblioteca = new Biblioteca();
$biblioteca->agregarLibro($libro1);
$biblioteca->agregarLibro($libro2);
$biblioteca->agregarLibro($libro3);
$biblioteca->agregarLibro($libro4);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <section class="container">
        <?php
        echo "<h2>Lista de libros:</h2>";
        echo "<div class = 'dady'>";
        foreach ($biblioteca->listarLibros() as $libro) {
            $imagen = $libro->getImg();

            echo "<section class = 'child'>";
            echo "<p><strong>Título:</strong> " . $libro->getTitulo() . "</p>";
            echo "<img src = 'img/$imagen.jpg'/>";
            echo "<p><strong>Autor:</strong> " . $libro->getAutor() . "</p>";
            echo "<p><strong>Categoría:</strong> " . $libro->getCategoria() . "</p>";
            echo "<p><strong>Estado:</strong> " . $libro->getEstado() . "</p>";
            echo "</section>";
        }
        echo "</div><br>";






        echo "<h2>Préstamo de libros:</h2>";
        echo $biblioteca->prestarLibro("Kimetsu no Jaiba") . "<br>";


        echo $biblioteca->prestarLibro("Kimetsu no Jaiba") . "<br>";

        echo "<h2>Devolución de libros:</h2>";
        echo $biblioteca->devolverLibro("Kimetsu no Jaiba") . "<br>";





        ?>

    </section>
</body>

</html>