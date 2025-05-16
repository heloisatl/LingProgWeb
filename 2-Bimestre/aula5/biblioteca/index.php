<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("util/Conexao.php");

$con = Conexao::getConexao();
// print_r($con);


// Buscar os livros já salvos na base de dados
$sql = "SELECT * FROM livros";
$statment = $con->prepare($sql);
$statment->execute();
$livros = $statment->fetchAll();
// echo "<pre>" . print_r($livros, true) . "</pre>";

// Verificar se o usuário já clicou no enviar
if(isset($_POST["titulo"])){
    //echo "Já clicou no enviar";
    
    // Obter os valores ja digitados pelo usuario
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $qtdPag = $_POST["paginas"];

    //echo $titulo . " - " . $genero . " - " . $qtdPag;

    // inserir as informacoes na base de dados
    $sql = "INSERT INTO livros (titulo, genero, qtd_paginas)
            VALUES (?, ?, ?)";
            
    $statment = $con->prepare($sql);
    $statment->execute([$titulo, $genero, $qtdPag]);
}



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">
    <div class="">

        <h1 class="bold">Listagem</h1>
        <table border="3">
            <tr> 
                <th>ID</th>
                <th>Titulo</th>
                <th>Gênero</th>
                <th>Páginas</th>
            </tr>
        </table>

        <?php foreach($livros as $l) { ?>
            <tr>
                <td><?php echo $l['id']?></td>
                <td><?php echo $l['titulo']?></td>
                <td><?php echo $l['genero']?></td>
                <td><?php echo $l['paginas']?></td>
            </tr>
        
            <?php } ?>

        <h1>Formulário</h1>

        <form action="" method="POST">

            <div style="margin-bottom:10px;">
                <label for="titulo">Titulo: </label>
                <input name="titulo" type="text" id="titulo">

            </div>

            <div style="margin-bottom:10px;">
                <label for="genero">Gênero: </label>
                <select name="genero" id="genero">
                    <option value="">--</option>
                    <option value="D">Drama</option>
                    <option value="F">Ficção</option>
                    <option value="E">Romance</option>
                    <option value="G">Outro</option>
                </select>


            </div>
            <div style="margin-bottom:10px;">
                <label for="paginas">Páginas: </label>
                <input name="paginas" type="number" id="paginas">

            </div>

            <div style="margin-bottom:10px;">
                <button type="submit">Enviar</button>
            </div>

    </div>
    </form>
</body>

</html>