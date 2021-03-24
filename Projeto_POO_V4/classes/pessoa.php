<?php

class Pessoa 
{ 
    public $nome;
    public $endereco;
    public $dataNascimento;
    public $email;
    public $senha;
    public $fone;   
    public $tipo;
    


    public function __construct($nome,$endereco, $dataNascimento,$email,$senha,$fone,$tipo)
  {
    $this->nome = $nome;
    $this->endereco = $endereco;
    $this->dataNascimento = $dataNascimento;
    $this->email = $email;
    $this->senha = $senha;
    $this->fone = $fone;
    $this->tipo = $tipo;
    
    

  }
  public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}

  function infoPessoa()
  {
    return "Nome: $this->nome, possui e-mail: $this->email e nasceu dia: $this->dataNascimento";
  }
}