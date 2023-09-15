<?php 
// Entrada de dados
echo "Digite o valor do Raio: ";
$raio = floatval(fgets(STDIN));

$pi = 3.14159;

$volume = (4/3.0) * $pi * pow($raio, 3);

echo "Volume = ".number_format($volume, 3, '.', '').PHP_EOL

?>