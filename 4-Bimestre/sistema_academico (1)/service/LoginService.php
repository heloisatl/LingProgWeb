<?php

require_once(__DIR__ . "/../model/Usuario.php");
require_once(__DIR__ . "/../util/config.php");

class LoginService
{

    public function validarLogin(?string $login, ?string $senha)
    {

        $erros = array();

        //Adicionar erros se $login e $senha não estão preenchidos
        if (! $login)
            array_push($erros, "Informe o login!");

        if (! $senha)
            array_push($erros, "Informe a senha!");

        return $erros;
    }

    public function salvarUsuarioSessao(Usuario $usuario)
    {
        $this->iniciarSessao();

        $_SESSION[SESSAO_USUARIO_ID] = $usuario->getId();
        $_SESSION[SESSAO_USUARIO_NOME] = $usuario->getNome();
    }

    public function apagarDadosSessao()
    {

        //Inicia a sessão para habilitar os recursos de sessão
        $this->iniciarSessao();


        //Retira os dados de login
        session_unset();

        //Apaga todos os dados
        session_destroy();
    }
    public function getNomeUsuarioLog()
    {
        $this->iniciarSessao();

        if (isset($_SESSION[SESSAO_USUARIO_ID]))
            return $_SESSION[SESSAO_USUARIO_ID];

        return "(Não autenticado)";
    }
    public function usuarioEstaLogado()
    {
        $this->iniciarSessao();

        if(isset($_SESSION[SESSAO_USUARIO_ID]))
            return true;

        return "(Não autenticado)";
    }


    private function iniciarSessao()
    {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }
}
