<?php

abstract class Pessoa 
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
    return "Nome: $this->nome, possui e-mail: $this->email e nasceu dia: $this->dataNascimento então possui: $this->idade anos";
  }
}