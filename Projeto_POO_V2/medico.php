<?php
class Medico 
//extends Pessoa
{
  private $registro;
  private $especialidade;
  
  public function __construct($registro, $especialidade)
  {
    $this->registro = $registro;
    $this->especialidade = $especialidade;
  }

  public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}
  function infoMedico()
  {
    return "Registro: $this->registro, Especialidade: $this->especialidade";
  }

}
$objmedico1 = new Medico("99.164/PE","Alergologista",5);
echo "Informações do Medico: " . $objmedico1->infoMedico();
echo "<br/>";
echo "<hr/>";
