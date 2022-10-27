
<?php
function adicao($c, $d) 
{
    return $c + $d;
}

echo adicao(16, 20) . "<br>";
echo adicao(3, 5, 8) . "<br>";

echo "<br>";

/*function adicaoCompleta(...$numeros) 
{
    $adicao = 0;
    foreach($numeros as $num) 
    {
        $adicao += $num;
    }
    return $adicao;
}

echo adicaoCompleta(1, 2, 3, 4, 5);*/

echo "<br>";

/*function membros($titular, ...$dependentes) 
{
    echo "Titular: $titular <br>";
    if($dependentes) 
    {
        foreach($dependentes as $dep) 
        {
            echo "Dependente: $dep <br>";
        }
    }
}

echo "<br>";
membros("Fulano", "Beltrano", "Sicrano", "Joãozinho");

echo '<br>';
membros("Nicolly", "Cristina");*/