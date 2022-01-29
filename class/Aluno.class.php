<?php

class Aluno {
    public $nome;
    public $matricula;

    function __construct($nome,$matricula){
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    function verDados(){
        return "<h3>Dados do Aluno</h3>
        Aluno: {$this->nome}<br>
        Matrícula: {$this->matricula}";
    }
}