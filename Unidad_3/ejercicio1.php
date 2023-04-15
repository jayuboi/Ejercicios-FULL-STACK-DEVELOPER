<?php

include "ejercicio1.html";

$asistencia = null;
$calificacion = null;

define("clases",30);
var_dump($_POST);
$validacion = isset($asistencia)


if(isset($_POST["calificacion"]) &&  isset ($_POST["asitencia"])){


    $asistencia = $_POST["asistencia"];
    $calificacion = $_POST ["calificacion"];

if($calificacion>=5 or $asistencia< (clases*0.8)){

    echo "No aprobado";

}
else echo "Aprobado";

