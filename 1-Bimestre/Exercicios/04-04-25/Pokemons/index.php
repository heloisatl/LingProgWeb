<?php 

require_once("model/Pokemon.php");

function desenhaLinha(Pokemon $pok){
echo "<tr>";
    echo "<td><img src=' " . $pok->getImagem()  . "'> </td>";
    echo "<td>" . $pok->getNome() . "</td>";
    echo "<td>" . $pok->getTipo() . "</td>";
    echo "<td><a href='" . $pok->getLink() . "'target='_blank'></a>Mais Informações</td>";
    echo "</tr>";
}

function linhaPokemon(Pokemon $poke) {
    echo "<tr>";
    echo "<td><img src='" . $poke->getImagem() . "' height='100' /></td>";
    echo "<td>" . $poke->getNome() . "</td>";
    echo "<td>" . $poke->getTipo() . "</td>";
    echo "<td><a href='" . $poke->getLink() . "' target='_blank'>Pokepedia</a></td>";
    echo "</tr>";
}

//Declarar os objetos
$p1 = new Pokemon("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/1.png", "Bulbasaur", "Grama/Venenoso", "https://pokepedia-graphql.netlify.app/pokemon/bulbasaur");
$p2 = new Pokemon("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/4.png", "Charmander", "Fogo", "https://pokepedia-graphql.netlify.app/pokemon/charmander");
$p3 = new Pokemon("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/6.png", "Charizard", "Fogo/Voador", "https://pokepedia-graphql.netlify.app/pokemon/charizard");
$p4 = new Pokemon("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/95.png", "Onix", "Pedra/Terra", "https://pokepedia-graphql.netlify.app/pokemon/onix");
$p5 = new Pokemon("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/78.png", "Rapidash", "Fogo", "https://pokepedia-graphql.netlify.app/pokemon/rapidash");

$pokemons = array($p1, $p2, $p3, $p4, $p5);

//Criar uma tabela com os dados dos pokemons

echo"<table border=1>";

//Linha com o cabeçalho da tabela
echo "<tr>";
echo "<th> Imagem</th>";

echo "<th> Nome</th>";

echo "<th> Tipo</th>";

echo "<th> Link</th>";
echo "</tr>";


//Linha com os dados dos pokemons
foreach($pokemons as $p){
    // echo "<tr>";
    // echo "<td><img src=' " . $p->getImagem()  . "'> </td>";
    // echo "<td>" . $p->getNome() . "</td>";
    // echo "<td>" . $p->getTipo() . "</td>";
    // echo "<td><a href='" . $p->getLink() . "'target='_blank'></a>Mais Informações</td>";
    // echo "</tr>";

    desenhaLinha($p);
}

echo"</table>";

//Cabeçalho
echo "<table border=1 style='background-color: lightblue'>";
echo "<tr>";
echo "<th>Imagem</th>";
echo "<th>Nome</th>";
echo "<th>Tipo</th>";
echo "<th></th>";
echo "</tr>";

//Gerar as linhas com os dados
foreach($pokemons as $p) {
    linhaPokemon($p);
}

echo "</table>";
