
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

}
$objrecep1 = new Recepcionista("6594761","Manhã",'4');
echo "Informações da Recepcionista: " . $objrecep1->infoRecepcionista();
echo "<br/>";
echo "<hr/>";
