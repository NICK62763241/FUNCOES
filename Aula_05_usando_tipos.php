
<?php
function adicao1($c, $d) 
{

    return $c + $d;
}

echo adicao1(1, 2) . "<br>";
echo adicao1(1.7, 2.5) . "<br>";

echo "<br>";

function adicao2(int $c, int $d)
{
    return $c + $d;
}

echo adicao2(3, 4) . "<br>";
echo adicao2(1.5, 2.7) . "<br>";

echo "<br>";

