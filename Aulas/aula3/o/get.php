<?php

echo "Página aberta!";


$nome = $_GET['nome'];
echo "<br>";
// $nome = "ooo";
//echo "Bem vindo " . $nome;


$sobrenome = $_GET['sobrenome'];
echo  "<br>";

echo "Bem vindo " . $nome . " " . $sobrenome;
// http://localhost/helo