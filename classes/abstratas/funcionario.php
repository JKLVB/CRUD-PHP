<?php

namespace classes\abstratas;

abstract class Funcionario{
    public $nome;
    protected $login;
    protected $senha;
    public $cpf;
    public $salario;

    public function __construct($nome, $login, $senha, $cpf, $salario){
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

    abstract public function getBonificacao();

    abstract public function aumentarSalario();
}