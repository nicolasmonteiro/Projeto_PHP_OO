<?php

class Exames{

    private $tipo;
    private $quantidade;
    private $paciente;
    
    public function __construct($tipo,$quantidade, $paciente)
  {
    $this->tipo = $tipo;
    $this->quantidade = $quantidade;
    $this->paciente = $paciente;
  }
  public function setTipo($tipo)
  {
    $this->tipo = $tipo;
  }
  public function setQuantidade($quantidade)
  {
    $this->quantidade = $quantidade;
  }
  public function setPaciente($paciente)
  {
    $this->paciente = $paciente;
  }
  function getTipo()
  {
    return $this->tipo;
  }
  function getQuantidade()
  {
    return $this->quantidade;
  }
  function getPaciente()
  {
    return $this->paciente;
  }
  function infoExames()
  {
    return "Tipo: $this->tipo, Quantidade: $this->quantidade, Paciente: $this->paciente ";
  }
}
$objExames1= new Exames("Hemograma Completo","2", "Cremildina");
echo "Informações sobre Exame: " . $objExames1->infoExames();
echo "<br/>";
echo "<hr/>";
$objExames2= new Exames("Coprocultura","1", "Cremildina");
echo "Informações sobre Exame: " . $objExames2->infoExames();
echo "<br/>";
echo "<hr/>";
$objExames3= new Exames("Sumario de Urina","1", "Cremildina");
echo "Informações sobre Exame: " . $objExames3->infoExames();
echo "<br/>";
echo "<hr/>";


