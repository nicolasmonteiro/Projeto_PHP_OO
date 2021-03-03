<?php
class Medico 
//extends Pessoa
{
  private $registro;
  private $especialidade;
  private $sala;
  
  public function __construct($registro, $especialidade, $sala)
  {
    $this->registro = $registro;
    $this->especialidade = $especialidade;
    $this->sala = $sala;
  }

  public function setRegistro($registro)
  {
    $this->registro = $registro;
  }
  public function setEspecialidade($especialidade)
  {
    $this->especialidade = $especialidade;
  }
  public function setSala($sala)
  {
    $this->sala = $sala;
  }

  function getRegistro()
  {
    return $this->registro;
  }
  function getEspecialidade()
  {
    return $this->especialidade;
  }
  function getSala()
  {
    return $this->sala;
  }
  function infoMedico()
  {
    return "Registro: $this->registro, Especialidade: $this->especialidade, Sala: $this->sala";
  }

}
$objmedico1 = new Medico("99.164/PE","Alergologista",5);
echo "Informações do Medico: " . $objmedico1->infoMedico();
echo "<br/>";
echo "<hr/>";
