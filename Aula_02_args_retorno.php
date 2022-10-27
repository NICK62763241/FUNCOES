
<?php
function imprimirMensagens() 
{
    return "Seja bem vindo(a)!";
}

imprimirMensagens();
$m = imprimirMensagens();
echo $m;
echo "<br>", imprimirMensagens();
echo "<br>";

echo "<br>";

function imprimirMensagensComNome($nome) 
{
    return "Bem vindo, {$nome}!";
}

echo "<br>", imprimirMensagensNome("Nicolly");
echo "<br>", imprimirMensagensComNome("Cristina");

echo "<br>";

function subtracao($a, $b) 
{
    return $a - $b;
    
}

$x = 5;
$y = 7;
echo "<br>", soma(35, 73);
echo "<br>", soma($x, $y);

