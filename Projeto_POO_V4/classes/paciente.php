<?php
require "pessoa.php";
require "particular.php";
require "plano.php";
class Paciente extends Pessoa implements  Iparticular , Iplano  
{
  public $cartaoclinica;
  public $tipo_atendimento;
  public $tipo_consulta;
  
  
  public function __construct($nome, $dataNascimento,$email,$senha,$cartaoclinica, $tipo_atendimento, $endereco,$telefone,$tipo_consulta)
  {
    $this->nome = $nome;
    $this->dataNascimento = $dataNascimento;
    $this->email = $email;
    $this->senha = $senha;
    $this->cartaoclinica = $cartaoclinica;
    $this->tipo_atendimento = $tipo_atendimento;
    $this->endereco = $endereco;
    $this->telefone = $telefone;
    $this->tipo_consulta = $tipo_consulta;
  }

  public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}

  function Plano($nome_plano)
  {
    $nomeP = "O plano escolhido foi: " . $nome_plano;
    return $nomeP;
  }
  function Pagamento($pagamento)
  { 
    $forma = "A forma de pagamento foi: ". $pagamento;
    return $forma;
  }
  function infoPessoa()
  {
    return "Nome: $this->nome, E-mail: $this->email, Data de nascimento: $this->dataNascimento";
  }
  function infoPaciente()
  {
    return "Cartão da clinica: $this->cartaoclinica, tipo de atendimento: $this->tipo_atendimento, no seguinte endereço: $this->endereco Fone: $this->telefone Tipo de consulta: $this->tipo_consulta" ;
  }
}


$objpaciente1 = new Paciente("Nicolas", "12/11/1998","nicolas@gmail.com","123456",123456789, "emergência","Rua do Arame, 470, Salgadinho , Olinda","985467801","Plano");
echo "Informações Pessoais: ".$objpaciente1->infoPessoa();
echo "<br>";
echo "<hr>";
echo "Informações do Paciente: " . $objpaciente1->infoPaciente();
echo "<br>";
echo $objpaciente1->Plano("Hapvida");
echo "<br>";
echo "<hr>";
$objpaciente2 = new Paciente("Myllena", "05/09/1995","myllena@outlook.com","135079",987654321,"urgencia","Rua do teste, 840, Piedade , Recife","997463781","Particular");
echo "Informações Pessoais: ".$objpaciente2->infoPessoa();
echo "<br>";
echo "<hr>";
echo "Informações do Paciente: " . $objpaciente2->infoPaciente();
echo "<br>";
echo $objpaciente2->Pagamento("Crédito");
