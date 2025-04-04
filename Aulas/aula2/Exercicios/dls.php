<?php

class Presidente{
    private int $num;
    private string $name;
    private int $inicio;
    private int $fim;
    
    public function __construct($numero,$nome,$inicio,$fim) {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->inicio = $inicio;
        $this->fim = $fim;
    }
    public function retornaLinha(){
        $linha = "<tr> <td>{$this->numero}</td>\n
        <td>{$this->nome}</td>\n
        <td>{$this->inicio}</td>\n
        <td>{$this->fim}</td>\n
        </tr>";
        return $linha;
    }

}
