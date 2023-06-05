<?php


function fechaActual($formato){
    $fecha = new DateTime();
    return $fecha -> format($formato);
    }
?>
