<?php
$v->layout('main', ['title' => 'Libros - Ficha']);
echo "<b>Título: </b>" . $libro['titulo'] . "<br />";
echo "<b>Autor: </b>" . $libro['autor'] . "<br />";
echo "<b>Editorial: </b>" . $libro['editorial'] . "<br />";
echo "<b>Precio: </b>" . $libro['precio'] . "€<br />";
