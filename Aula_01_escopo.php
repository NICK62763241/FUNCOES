
<?php
function mostrarMensagers() 
{
    echo "Vamos programar? <br>";
    echo "Vamos aprender funções em PHP!<br>";
}

mostrarMensagers();
mostrarMensagers();
mostrarMensagers();

echo "<br>";

$variables = 3;

function trocaValor() 
{
    $variables = 5;
    echo "Durante a função: $variables <br>";
}

echo "Antes: $variables <br>";
trocaValor();
echo "Depois: $variables <br>";

echo "<br>";

function trocaValor() 
{
    global $variables;
    $variables = 7;
    echo "Durante a função: $variables <br>";
}

echo "Antes: $variables <br>";
trocaValor();
echo "Depois: $variables <br>";