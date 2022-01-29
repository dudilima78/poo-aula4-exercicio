<?php

class Pagamento extends Aluno {
    public $valor;
    public $situacao;
    
    function __construct($nome,$matricula,$valor,$situacao){
        parent::__construct($nome,$matricula);
        $this->valor = $valor;
        $this->situacao = $situacao;
    }

    function verDadosPagamento(){
        return "<h3>Pagamentos</h3>
        Aluno: {$this->nome}<br>
        Matrícula: {$this->matricula}<br>
        Valor: {$this->valor}<br>
        Situação: {$this->situacao}";
    }
}