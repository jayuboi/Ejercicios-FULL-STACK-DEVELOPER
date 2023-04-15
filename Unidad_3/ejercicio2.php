<?php

include "ejercicio2.html";

$correctas = null;
$incorrectas = null;
$en_blanco = null;


if(isset($_POST["correctas"])  &&  isset ($_POST["Incorrectas"] ) && isset($_POST["enblanco"])){

    $correctas = $_POST["correctas"];
    $incorrectas = $_POST["Incorrectas"];
    $en_blanco =$_POST["enblanco"];

    $resultado = (4*$correctas) - $incorrectas + 0*$en_blanco;

echo "<br>su calificacion es $resultado";
}

