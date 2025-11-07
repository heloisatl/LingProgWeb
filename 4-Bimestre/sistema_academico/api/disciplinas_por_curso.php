<?php
require_once(__DIR__ . "/../controller/DisciplinaController.php");

$idCurso = 0;
if(isset($_GET['idCurso']))
    $idCurso = $_GET['idCurso'];

$discCont = new DisciplinaController();
$disciplinas = $discCont->listarPorCurso($idCurso);

// print_r($disciplinas);

echo json_encode($disciplinas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

?>