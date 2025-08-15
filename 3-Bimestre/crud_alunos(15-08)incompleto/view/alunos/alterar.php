<?php 

require_once(__DIR__ . "/../../model/Aluno.php");
require_once(__DIR__ . "/../../controller/AlunoController.php");

$aluno = null;
$msgErro = "";

$id = 0;
if(isset($_GET["id"]))
    $id = $_GET["id"];

$id = $_GET["id"];
$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($id);

if(!$aluno){
    echo "ID do aluno é inválido";
    echo "<a href='listar.php'>Voltar<\a>";
    exit;
}

print_r($aluno);
exit;
include_once(__DIR__ . "/form.php");
