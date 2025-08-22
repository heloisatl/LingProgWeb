<?php

require_once(__DIR__ . "/../../controller/AlunoController.php");
require_once(__DIR__ . "/../../model/Aluno.php");

//1- Receber o ID do aluno (GET)
$id = 0;
if(isset($_GET['id']))
    $id = $_GET['id'];

$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($id);
if($aluno){
   $erros = $alunoCont->excluirPorId($aluno->getId());

   if($erros){
      $msgErros = implode("<br", $erros);
   } else {
      header("location: listar.php");
      exit;
   }

} else {
   echo "Aluno não encontrado!<br>";
   echo "<a href= 'listar.php'> VOLTAR </a>";
   
}
