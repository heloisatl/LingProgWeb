<?php

require_once(__DIR__."/../model/Aluno.php");


class AlunoService {


    public function validarAlunos(Aluno $aluno) { 
        
        $erros = array();

        if($aluno->getNome() == NULL){
            array_push($erros, "Informe o nome do aluno!");
        }

        if(!$aluno->getIdade() ){
            array_push($erros, "Informe a idade do aluno!");
        }

        if(!$aluno->getEstrangeiro() ){
            array_push($erros, "Informe a naturalidade do aluno!");
        }

        if(!$aluno->getCurso()->getId()){
            array_push($erros, "Informe o curso do aluno!");
        }

        //Outra foram de verificar se o aluno é nulo:
        // if(!$alunos->getNome() ){
            // array_push($erros, "Informe o nome do aluno!");
        // }


        return $erros;
    }
}