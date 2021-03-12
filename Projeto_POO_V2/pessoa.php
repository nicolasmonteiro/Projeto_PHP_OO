<?php

class Pessoa 
{ 
    private $nome;
    private $idade;
    private $dataNascimento;
    private $email;
    private $senha;


    public function __construct($nome, $idade, $dataNascimento,$email,$senha)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->dataNascimento = $dataNascimento;
    $this->email = $email;
    $this->senha = $senha;
  }
  public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}
  function infoPessoa()
  {
    return "nome: $this->nome, possui e-mail: $this->email e nasceu dia: $this->dataNascimento então possui: $this->idade anos";
  }
}
$objpessoa1 = new Pessoa("Nicolas", "22", "12/11/1998","nicolas@gmail.com","123456");
echo "Informações da Pessoa: " . $objpessoa1->infoPessoa();
echo "<br/>";
echo "<hr/>";
$objpessoa2 = new Pessoa("Diana", "21", "29/06/1999","diana@gmail.com","654321");
echo "Informações da Pessoa: " . $objpessoa2->infoPessoa();