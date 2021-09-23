<?php

namespace classes\models;
use classes\abstratas\funcionario;
use classes\interfaces\IAutenticavel;
use classes\sistemaInterno\AuthPass;

class Diretor extends Funcionario implements IAutenticavel{
    
    private $totalBonificacoes = 0.7;

    public function __construct($nome, $login, $senha, $cpf, $salario){
        // call Funcionario constructor
        parent::__construct($nome, $login,$senha, $cpf, $salario);
    }

    public function getBonificacao(){
        return $this->salario;
    }

    public function autenticar(){
        $auth = new AuthPass();
        if($this->senha == $auth->getPassword()){
            echo "O Diretor está logado.";
            exit();
        } if($this->senha == null || empty($this->senha)){
            throw new \Exception("Senha não informada.");
            exit();
        } if(!empty($this->senha) && $this->senha != $auth->getPassword()){
            throw new \Exception("Senha incorreta.");
            exit();
        }
        return null;
    }

    public function bonificar(Funcionario $funcionario){
        return $this->totalBonificacoes *= $funcionario->salario;
    }

    public function aumentarSalario(){
        return $this->salario += $this->totalBonificacoes;
    }
}