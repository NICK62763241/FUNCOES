
<?php
function cumprimentos($name = "Senhor(a)", $sobrename = "Cliente") 
{
    return "Bem vindo, $name $sobrename!<br>";
}

echo cumprimentos();
echo cumprimentos(null);
echo cumprimentos(null, null);
echo cumprimentos("Amado", "Mestre");

echo "<br>";

function anotarPedido($food, $bebida = "Suco") 
{
    echo "Para comer: $food <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido("Hamburguer");
//anotarPedido("Pizza", "Refrigerante");

echo "<br>";

function anotarPedido2($bebida = "Água", $food) {
    echo "Para comer: $food <br>";
    echo "Para beber: $bebida <br>";
}


anotarPedido2("Refrigerante2", "Pizza2");