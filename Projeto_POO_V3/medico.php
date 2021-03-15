<?php
require "pessoa.php";
class Medico extends Pessoa
{
  private $registro;
  private $especialidade;
  
  public function __construct($nome, $idade, $dataNascimento,$email,$senha,$registro, $especialidade)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->dataNascimento = $dataNascimento;
    $this->email = $email;
    $this->senha = $senha;
    $this->registro = $registro;
    $this->especialidade = $especialidade;
  }

  public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}
  function infoMedico()
  {
    return "Registro: $this->registro, Especialidade: $this->especialidade";
  }
  function infoPessoa()
  {
    return "Nome: $this->nome, E-mail: $this->email, Data de nascimento: $this->dataNascimento,  $this->idade anos";
  }
}

$objmedico1 = new Medico("Elvis", "50", "06/10/1971","elvisfernandes@bol.com.br","846513","99.164/PE","Oftalmologista");
echo "Informações pessoais:" . $objmedico1->infoPessoa();
echo "<br/>";
echo "<hr/>";
echo "Informações do Medico: " . $objmedico1->infoMedico();

