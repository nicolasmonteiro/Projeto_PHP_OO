<?php
class Paciente 
//extends Pessoa
{
  private $cartaoclinica;
  private $tipo_atendimento;
  private $endereco;
  private $telefone;
  private $tipo_consulta;
  private $pagamento;
  
  public function __construct($cartaoclinica, $tipo_atendimento, $endereco,$telefone,$tipo_consulta,$pagamento=null)
  {
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

//   function tipoConsulta()
//   { 
//     if ($this->tipo_consulta == "plano"):
//         echo 'Plano de Saúde';
//     else:
//         echo 'Particular';
//     endif;
// } 

  
  function infoPaciente()
  {
    return "Cartão da clinica: $this->cartaoclinica, tipo de atendimento: $this->tipo_atendimento, no seguinte endereço: $this->endereco Fone: $this->telefone Tipo de consulta: $this->tipo_consulta" ;
  }
}


$objpaciente1 = new Paciente("123456789","emergência","Rua do Arame, 470, Salgadinho , Olinda","985467801","Plano");
echo "Informações do Paciente: " . $objpaciente1->infoPaciente();
echo "<br/>";
echo "<hr/>";
echo "Forma de pagamento: " ;