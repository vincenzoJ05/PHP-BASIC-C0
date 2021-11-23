<?php

function mijnNaamIsGroot(){
    $voorNaam = "Vincenzo";
    $achterNaam = "Jovanovic";
    $geheleNaam = $voorNaam . " " . $achterNaam;
    $geheleNaam = strtoupper("Mijn naam is $geheleNaam");
    echo $geheleNaam;
    
}
mijnNaamIsGroot();