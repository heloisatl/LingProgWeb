<?php

class Conexao{
    private static $conn = null;

    // quando ao colocamos o static, o metodo vira do objeto. Entao, para utilizarmos ele (sem o static), temos de criar um new obejto primeiro.
    // Já o static é metodo da classe, nao do obj
    public static function getConexao(){

        if(self::$conn==null){
            $opcoes = array(
                //Define o charset da conexão
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                //Define o tipo do erro como exceção
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //Define o tipo do retorno das consultas
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
            self::$conn = //o 1ro é a string de conexao (enderedo de erde onde ta rodando o banco e qual o nome da base de dados) e a porta é opcioal caso queira rodar a aplicacao no terminal
                new PDO("mysql:host=localhost:3306;dbname=db_biblioteca","root","bancodedados", $opcoes);
        }
        
        //se fosse metodo do objeto seria $this->, mas como estamos acessando de forma estática, usamos o self.
        return self::$conn;
    }


}