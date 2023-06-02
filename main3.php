<?php
//Punto3
    // Paso1: crear un array de planetas del sistema solar y decir por medio de un booleano cual es habitable y cual no 
    $solarSystem = array(
        "Sun"=>false,
        "Mercury"=>false,
        "Venus"=>true,
        "Earth"=>true,
        "Mars"=>true,
        "Jupiter"=>false,
        "Saturn"=>false,
        "Uranus"=>false,
        "Neptune"=>false,
        "Pluton"=>false,
    );
    // Paso2: ahora se filtra el array para que solo traiga los planetas que son habitables
    $habitablePlanets = array_filter($solarSystem, function($habitable){
        return $habitable  == true;
    },ARRAY_FILTER_USE_BOTH);
    print_r($habitablePlanets)
?>