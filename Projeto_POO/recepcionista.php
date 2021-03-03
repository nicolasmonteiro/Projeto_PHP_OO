
<?php
class Recepcionista 
//extends Pessoa
{
  private $matricula;
  private $turno;
  private $mesa;

  public function __construct($matricula, $turno, $mesa)
  {
    $this->matricula = $matricula;
    $this->turno = $turno;
    $this->mesa = $mesa;
  }

  public function setMatricula($matricula)
  {
    $this->matricula = $matricula;
  }
  public function setTurno($turno)
  {
    $this->turno = $turno;
  }
  public function setMesa($mesa)
  {
    $this->mesa = $mesa;
  }

  function getMatricula()
  {
    return $this->matricula;
  }
  function getTurno()
  {
    return $this->turno;
  }
  function getMesa()
  {
    return $this->mesa;
  }
  function infoRecepcionista()
  {
    return "Matricula: $this->matricula, Turno: $this->turno, Mesa: $this->mesa";
  }

}
$objrecep1 = new Recepcionista("6594761","Manhã",'4');
echo "Informações da Recepcionista: " . $objrecep1->infoRecepcionista();
echo "<br/>";
echo "<hr/>";
