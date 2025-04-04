<?php

function desenhaLinha($numero, $nome, $corFundo){
    
    $cor = ($corFundo == 'amarelo') ? 'yellow' : 'green';


    echo "<tr> style='background-color: $cor;'>";
    echo "<td>$numero </td>";
    echo "<td>$nome </td>";
    echo "</tr>";

    $jogadores = [
        "1", "Tafarel" , "amarelo",
        "13", "Jorginho" , "verde",
        "15", "Aldair", "amarelo",
        "6", "marcio Santos", "verde",
        "5", "TMauro Silva" , "amarelo",
        "8", "Dunga" , "verde",
        "17", "Mazinho", "amarelo",
        "9", "Zinho", "verde",
        "11", "Romário", "amarelo",
        "7", "Bebeto", "verde"
        
    ];
echo "<tr>";
echo "<th>Número</th>";
echo "<th>Nome</th>";
echo "</tr>";

foreach ($jogadores as $jogador) {
    desenhaLinha($jogador[0], $jogador[1], $jogador[2], $jogador[3], $jogador[2]);
}

echo "</table>";

}





