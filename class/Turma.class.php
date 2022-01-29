<?php

class Turma extends Aluno {
    public $ano;
    public $sala;

    function __construct($nome,$matricula,$ano,$sala){
        parent::__construct($nome,$matricula);
        $this->ano = $ano;
        $this->sala = $sala;
    }

    function verDadosTurma(){
        return "<h3>Turma</h3>
        Aluno: {$this->nome}<br>
        Matrícula:  {$this->matricula}<br>
        Ano: {$this->ano}<br>
        Sala: {$this->sala}";
    }
}