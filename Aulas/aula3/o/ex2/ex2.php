<?php

if (isset($_GET['nome']) && isset($_GET['sobrenome']) && isset($_GET['idade']) && isset($_GET['tipo'])) {
    $nome = $_GET['nome'];
    echo "Nome: $nome<br>";

    $sobrenome = $_GET['sobrenome'];
    echo "Sobrenome: $sobrenome<br>";

    $idade = $_GET['idade'];
    echo "Idade: $idade<br>";

    $tipo = $_GET['tipo'];
    echo "Tipo: $tipo<br>";


    if (strtolower($tipo) == 'a') {
        $pessoa["nome"] = $nome;
        $pessoa["sobrenome"] = $sobrenome;
        $pessoa["idade"] = $idade;
        // print_r($pessoa);  
    } else if (strtolower($tipo) == 'c') {
        require_once("models/Pessoa.php");
        $p = new Pessoa($nome, $sobrenome, $idade);
        $p->escreve();
    } else {
        echo "Parâmetro 'tipo' não é nem 'A' nem 'C'<br>";
    }
} else {
    echo "Não foram passados parâmetros para 'nome', 'sobrenome', 'idade' e 'tipo'.<br>";
}
?>
