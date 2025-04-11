<?php

// echo "Página aberta!";



$n1 = $_GET['numero1'];
echo "Número 1: " . $n1;
echo "<br>";

$n2 = $_GET['numero2'];
echo "Número 2: " . $n2;
echo "<br>";

$n3 = $_GET['numero3'];
echo "Número 3: " . $n3;
echo "<br>";

$soma = ($n1 + $n2 + $n3)/3;
echo "A soma dos dois números é: " . $soma;

