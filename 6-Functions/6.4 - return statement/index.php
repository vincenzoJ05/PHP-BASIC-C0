<?php
function geefTienProcent(){
    $koopPrijs = 75;
    $korting = 90;
    return ($koopPrijs / 100) * $korting;
    
}
function zetAllesGroot(){
    echo '<h4>' .geefTienProcent() . `</h4>`;
}
zetAllesGroot();