
<?php

$adcao = function ($c, $d) 
{
    return $c + $d;
};

echo $adcao(3, 4) . "<br>";


echo "<br>";


function execute($c, $d, $op, $funcion) 
{
    $resultado = $funcion($c, $d);
    echo "$c $op $d = $result <br>";
}

execute(2, 3, '+', $adcao);


echo "<br>";


$multiplicacao = function($c, $b) 
{
    return $c * $b;
};

execute(2, 3, '*', $multiplicacao);

