<?php

$pais1 = array(
    "ordem" => 1,
    "nome" => "USA",
    "ouro" => 46,
    "prata" => 37,
    "bronze" => 38,
    "medalhas" => 121
);

$pais2 = array(
    "ordem" => 2,
    "nome" => "GBR",
    "ouro" => 27,
    "prata" => 23,
    "bronze" => 17,
    "medalhas" => 67
);

$pais3 = array(
    "ordem" => 3,
    "nome" => "CHN",
    "ouro" => 26,
    "prata" => 18,
    "bronze" => 26,
    "medalhas" => 70
);

$pais4 = array(
    "ordem" => 4,
    "nome" => "RUS",
    "ouro" => 19,
    "prata" => 17,
    "bronze" => 20,
    "medalhas" => 56
);

$pais5 = array(
    "ordem" => 5,
    "nome" => "GER",
    "ouro" => 17,
    "prata" => 10,
    "bronze" => 15,
    "medalhas" => 42
);

$paises = array($pais1, $pais2, $pais3, $pais4, $pais5);


foreach ($paises as $p) {
    echo "Ordem: " . $p['ordem'] . "<br>";
    echo "Nome: " . $p['nome'] . "<br>";
    echo "Ouro: " . $p['ouro'] . "<br>";
    echo "Prata: " . $p['prata'] . "<br>";
    echo "Bronze: " . $p['bronze'] . "<br>";
    echo "Total de Medalhas: " . $p['medalhas'] . "<br><br>";
}
