<?php

function desenhaLinha($numero, $nome, $cor)
{
    echo "<tr>";
    echo "<td style='background-color: $cor'>$numero</td>";
    echo "<td style='background-color: $cor'>$nome</td>";
    echo "</tr>";
}

echo "<h1 style='font-size:20px'> Escalação da seleção brasileira de futebol campeã mundial em 1994:  </h1>";

echo "<table border='1' style='background-color: white'>";

echo "<tr>";
echo "<th>Número</th>";
echo "<th>Nome</th>";
echo "</tr>";


desenhaLinha(1, "Tafarel", "yellow");
desenhaLinha(2, "Jorginho", "green");
desenhaLinha(13, "Aldair", "yellow");
desenhaLinha(15, "Márcio Santos", "green");
desenhaLinha(6, "Branco", "yellow");
desenhaLinha(5, "Mauro Silva", "green");
desenhaLinha(8, "Dunga", "yellow");
desenhaLinha(17, "Malzinho", "green");
desenhaLinha(9, "Zinho", "yellow");
desenhaLinha(11, "Romário", "green");
desenhaLinha(7, "Bebeto", "yellow");
echo "</table>";







