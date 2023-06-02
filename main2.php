<?php
//Punto2
    // Paso1: se ingresa la cantidad de planetas que tendra el sistema creado por medio de un input
    // Paso2: se genera la cantidad de planetas con el estado "disabled" por default 
    $makeSystem = array_fill(0,$_POST["numberOfPlanets"],"Disabled",);
    print_r($makeSystem);
?>