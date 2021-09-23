<?php

namespace classes\models;

use classes\abstratas\funcionario;

class Analista extends Funcionario{

    private $totalBonificacoes = 0.5;

    public function __construct($nome, $login, $senha, $cpf, $salario){
        parent::__construct($nome, $login, $senha, $cpf, $salario);
    }

    public function getBonificacao(){
        return $this->salario * $this->totalBonificacoes;
    }

    public function bonificar(Funcionario $funcionario){
        return $this->totalBonificacoes *= $funcionario->salario;
    }

    public function aumentarSalario(){
        return $this->salario += $this->totalBonificacoes;
    }
}