<?php

class Consulta 
{ 
    private $data;
    private $horario;
    private $especialidade;
    private $medico;
    private $paciente;
    private $codigo;

    public function __construct($data,$horario, $especialidade,$medico,$paciente,$codigo)
  {
    $this->data = $data;
    $this->horario = $horario;
    $this->especialidade = $especialidade;
    $this->paciente = $paciente;
    $this->medico = $medico;
    $this->codigo = $codigo;
  }
  public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}
  function infoConsulta()
  {
    return "Data: $this->data, Horário: $this->horario, Especialidade: $this->especialidade medico: $this->medico paciente: $this->paciente, código: $this->codigo";
  }
}
$objconsulta1 = new Consulta("12/03/2021","8:30", "Clinico Geral", "Jerrar Xavier","Nicole Flavia","45153");
echo "Informações da Consulta: " . $objconsulta1->infoConsulta();
echo "<br/>";
echo "<hr/>";


