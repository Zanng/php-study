<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;

abstract class Funcionario extends Pessoa
{
  private float $salario;

 public function __construct(string $nome, Cpf $cpf, float $salario)
 {
    parent::__construct($nome, $cpf);
    $this->salario = $salario;
 }
<<<<<<< HEAD
  
=======

>>>>>>> e07ee9350ac6b2566c67c113ca3f0228895e222a
 protected function alteraNome(string $nome): void
 {
   $this->validarNome($nome);
   $this->nome = $nome;
 }

 public function getSalario(): float
 {
   return $this->salario;
 }

 public function recebeAumento(float $valorAumento): void
 {
    if($valorAumento < 0){
      echo "Aumento Deve Ser Positivo";
      return;
    }

    $this->salario += $valorAumento;
 }

 abstract public function calculaBonificacao(): float;

}