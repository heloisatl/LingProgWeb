<?php
    

$n1 = $_GET['numero1'];

$n2 = $_GET['numero2'];

if(isset($_GET['numero1' ]) && isset($_GET['numero1' ])){
    $n1 = $_GET['numero1'];
    echo "Número 1: " . $n1;
    echo "<br>";
    
    $n2 = $_GET['numero2'];
    echo "Número 2: " . $n2;
    echo "<br>";
    
    $soma = $n1 + $n2;
    echo "A soma dos dois números é: " . $soma;
    echo "<br>";


    $sub = $n1 - $n2;
    echo "A subtração dos dois números é: " . $sub;
    echo "<br>";

    $div = $n1 / $n2;
    echo "A divisão dos dois números é: " . $div;
    echo "<br>";


    $mul = $n1 * $n2;
    echo "A multiplicação dos dois números é: " . $mul;
    echo "<br>";

    $resto = $n1 % $n2;
    echo "O resto dos dois números é: " . $resto;
    echo "<br>";


    
    

}else{
    echo "Preencha os dois campos!";
}
