<?php

require_once(__DIR__ . "/../../model/Aluno.php");
require_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = "";
$aluno = null;



// 1- Receber o ID do aluno (GET)
// 2- Chamar o Controller para excluir
// 3- Verifica se deu erro
    // 3.1- Sim: exibe o erro na própria página
    // 3.2- Não (sucesso) : Redireciona para o listar

if(isset($_POST['nome'])) {
    
    $id = isset($_POST["id"]) ? $_POST["id"] : null; 
    $nome        = trim($_POST['nome']) ? trim($_POST['nome']) : NULL;
    $idade       = is_numeric($_POST['idade']) ? $_POST['idade'] : NULL;
    $estrangeiro = trim($_POST['estrang']) ? trim($_POST['estrang']) : NULL;
    $idCurso     = is_numeric($_POST['curso']) ? $_POST['curso'] : NULL;

    //Criar um objeto Aluno para persistí-lo
    $aluno = new Aluno();
    $aluno->setId($id);
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrangeiro);

    if($idCurso) {
        $curso = new Curso();
        $curso->setId($idCurso);
        $aluno->setCurso($curso);
    } else
        $aluno->setCurso(NULL);

    //2- Chamar o controller para alterar
    $alunoCont = new AlunoController();
    $erros = $alunoCont->excluir($aluno);

    if(! $erros) {
        //Redirecionar para o listar
        header("location: excluir.php");
    } else {
        //Converter o array de erros para string
        $msgErro = implode("<br>", $erros);
    }


} else {
    //Usuário abriu a página para ver o formulário
    $id = 0;
    if(isset($_GET["id"]))
        $id = $_GET["id"];

    $alunoCont = new AlunoController();
    $aluno = $alunoCont->buscarPorId($id);

    if(! $aluno) {
        echo "ID do aluno é inválido!<br>";
        echo "<a href='excluir.php'>Voltar</a>";
        exit;
    }
}

include_once(__DIR__ . "/form.php");
