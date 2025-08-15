<?php

require_once(__DIR__ . "/../dao/AlunoDAO.php");
require_once(__DIR__ . "/../model/Aluno.php");
require_once(__DIR__ . "/../service/AlunoService.php");

class AlunoController {

    private AlunoDAO $alunoDAO;
    private AlunoService $alunoService; 

    public function __construct() {
        $this->alunoDAO = new AlunoDAO();        
        $this->alunoService = new AlunoService(); //fez uma instancia do objeto AlunoService
    }

    public function listar() {
        $lista = $this->alunoDAO->listar();
        return $lista;
    }

    public function buscarPorId(int $id){
        $aluno = $this->alunoDAO->buscarPorId($id);
        return $aluno;
    }




    public function inserir(Aluno $aluno) {
        $erros = array();

        //Se não tiver erros, chama o DAO
        $erros = $this->alunoService->validarAlunos($aluno);
        if(count($erros) > 0 ){
            return $erros; //retorna os erros do SERVICE
        }


        $erro = $this->alunoDAO->inserir($aluno);
        if($erro) {
            array_push($erros, "Erro ao salvar o aluno!");
            if(AMB_DEV)
                array_push($erros, $erro->getMessage());
        }

        return $erros; //retorna os erros do DAO
    }

     

}