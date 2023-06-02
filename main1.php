<?php
// Punto1
    // Paso1: crear un array de los planetas de nuestro sistema solar
    $solarSystem = array(
        "Sun"=>0,
        "Mercury"=>1,
        "Venus"=>2,
        "Earth"=>3,
        "Mars"=>4,
        "Jupiter"=>5,
        "Saturn"=>6,
        "Uranus"=>7,
        "Neptune"=>8,
        "Pluton"=>9,
    );
    // Paso2: buscar el noombre de un planeta por su numero de orden
    $found = array_search($_POST ["position"], $solarSystem);
    print_r("$found");
?>