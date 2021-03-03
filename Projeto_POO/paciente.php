<?php
class Paciente 
//extends Pessoa
{
  private $cartaoclinica;
  private $tipo_atendimento;
  private $endereco;
  private $telefone;
  
  public function __construct($cartaoclinica, $tipo_atendimento, $endereco,$telefone)
  {
    $this->cartaoclinica = $cartaoclinica;
    $this->tipo_atendimento = $tipo_atendimento;
    $this->endereco = $endereco;
    $this->telefone = $telefone;
  }

  public function setCartaoClinica($cartaoclinica)
  {
    $this->cartaoclinica = $cartaoclinica;
  }
  public function setTipoAtendimento($tipo_atendimento)
  {
    $this->tipo_atendimento = $tipo_atendimento;
  }
  public function setEndereco($endereco)
  {
    $this->endereco = $endereco;
  }
  public function setTelefone($telefone)
  {
    $this->telefone = $telefone;
  }

  function getCartaoClinica()
  {
    return $this->cartaoclinica;
  }
  function getTipoAtendimento()
  {
    return $this->tipo_atendimento;
  }
  function getEndereco()
  {
    return $this->endereco;
  }
  function getTelefone()
  {
    return $this->telefone;
  }
  function infoPaciente()
  {
    return "Cartão da clinica: $this->cartaoclinica, tipo de atendimento: $this->tipo_atendimento, no seguinte endereço: $this->endereco Fone: $this->telefone";
  }

}
$objpaciente1 = new Paciente("123456789","emergência","Rua do Arame, 470, Salgadinho , Olinda","985467801");
echo "Informações do Paciente: " . $objpaciente1->infoPaciente();
echo "<br/>";
echo "<hr/>";