<?php 

$ano = is_numeric($_POST['ano']) ?  $_POST['ano'] : NULL;
$idCurso = is_numeric($_POST['idCurso']) ?  $_POST['idCurso'] : NULL;
$idDisc = is_numeric($_POST['idDisc']) ?  $_POST['idDisc'] : NULL;

echo "Ano: " .$ano . " |  Curso:" . $idCurso . " |  Disciplia:" . $idDisc; 