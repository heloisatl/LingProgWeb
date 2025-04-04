<link rel="stylesheet" type="text/css" href="botao_imagem.css">

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("model/Link.php");

function desenhaBotao($array, $nome) {
    echo "<div class='dropdown'>";
    echo '<button class="dropbtn">' . $nome . '</button>';
    echo '<div class="dropText">';
    foreach($array as $link) {
        echo "<span><img src='" . $link->getLinkImg() . "'width='20' height='20'>" . $link->getInfo() . "</span>";
    }
    echo "</div>";
    echo "</div>";
}

$o = new Link("https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/1936.png", "Inter");
$o1 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Gremio_logo.svg/1718px-Gremio_logo.svg.png", "Grêmio");
$o2 = new Link("https://upload.wikimedia.org/wikipedia/pt/e/e4/Novo_escudo_da_Associa%C3%A7%C3%A3o_Chapecoense_de_Futebol.png", "Chapecoense");

$time = array($o, $o1, $o2);
desenhaBotao($time, "Times");

$o3 = new Link("https://cdn-images.dzcdn.net/images/artist/9508c1217e880b52703a525d1bd5250c/1900x1900-000000-80-0-0.jpg", "Radiohead");
$o4 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Gorillaz_logo.svg/1200px-Gorillaz_logo.svg.png", "Gorillaz");
$o5 = new Link("https://i.scdn.co/image/ab6761610000e5eb50defaf9fc059a1efc541f4c", "Guns n Roses");

$banda = array($o3, $o4, $o5);
desenhaBotao($banda, "Bandas");

$o6 = new Link("https://upload.wikimedia.org/wikipedia/commons/f/fc/Valorant_logo_-_pink_color_version.svg", "Valorant");
$o7 = new Link("https://upload.wikimedia.org/wikipedia/pt/9/9c/Minecraft_capa.png", "Minecraft");
$o8 = new Link("https://play-lh.googleusercontent.com/WNWZaxi9RdJKe2GQM3vqXIAkk69mnIl4Cc8EyZcir2SKlVOxeUv9tZGfNTmNaLC717Ht", "Roblox");

$jogo = array($o6, $o7, $o8);


desenhaBotao($jogo, "Jogos");

$o9 = new Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp6Rk4HqAevnbxihekl4AwViEEF-HDoJW1Dg&s", "Joji");
$o10 = new Link("https://upload.wikimedia.org/wikipedia/pt/9/9c/Minecraft_capa.png", "Billie");
$o11 = new Link("https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRBkH2cNXDcRMm2TdWUAT7NuDPc8b9Tov8KdH6d2KK4JWCj4628TDV3hV-RDScJB_6Birtbr-JuTRFz7iX8StSLeg", "Kendrick");

$artista = array($o9, $o10, $o11);
desenhaBotao($artista, "Artistas");

