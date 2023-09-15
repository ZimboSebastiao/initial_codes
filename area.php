<?php 

echo "Digite todos os valores de uma só vez separando com espaço: ";
list($a, $b, $c) = sscanf(trim(fgets(STDIN)), "%f %f %f");

$triangulo = ($a * $c) / 2;
$circulo = 3.14159 * pow($c, 2);
$trapezio = (($a + $b) * $c) / 2;
$quadrado = $b * $b;
$retangulo = $a * $b;

printf("TRIANGULO: %.3f\n", $triangulo);
printf("CIRCULO: %.3f\n", $circulo);
printf("TRAPEZIO: %.3f\n", $trapezio);
printf("QUADRADO: %.3f\n", $quadrado);
printf("RETANGULO: %.3f\n", $retangulo);



?>