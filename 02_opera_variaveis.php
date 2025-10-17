<?php

// montagem da URL

//http://localhost/php-basicosr/2_opera_variaveis.php?numero1=10&numero2=5 


// Variaveis que recebem valores pela URL (métdo GET)
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];


if (isset($numero1) && ($numero2)) {
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;

}

// calculos
$soma = $numero1 + $numero2;
$multiplando = $numero1 * $numero2;

//exibe
echo "Soma: 4soama <br>";
echo "multiplacação: $multiplando <br>";
    

?>