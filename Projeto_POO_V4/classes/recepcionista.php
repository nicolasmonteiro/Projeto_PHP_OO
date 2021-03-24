<?php
require "pessoa.php";
class Recepcionista extends Pessoa
{
  public $matricula;
  public $turno;
  public $mesa;

    
    public function __construct($nome, $idade, $dataNascimento,$email,$senha,$matricula, $turno, $mesa)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->dataNascimento = $dataNascimento;
    $this->email = $email;
    $this->senha = $senha;
    $this->matricula = $matricula;
    $this->turno = $turno;
    $this->mesa = $mesa;
  }

  public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}
  function infoRecepcionista()
  {
    return "Matricula: $this->matricula, Turno: $this->turno, Mesa: $this->mesa";
  }
  function infoPessoa()
  {
    return "Nome: $this->nome,  E-mail: $this->email , Data de Nascimento: $this->dataNascimento , $this->idade anos";
  }

}
$objrecep1 = new Recepcionista("Diana", "21", "29/06/1999","diana@gmail.com","654321","6594761","Manhã",'4');
echo "Informações Pessoais: ".$objrecep1->infoPessoa();
echo "<br/>";
echo "<hr/>";
echo "Informações da Recepcionista: " . $objrecep1->infoRecepcionista();


