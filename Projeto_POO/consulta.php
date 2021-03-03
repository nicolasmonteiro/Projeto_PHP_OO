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
  public function setData($data)
  {
    $this->data = $data;
  }
  public function setHorario($horario)
  {
    $this->horario = $horario;
  }
  public function setEspecialidade($especialidade)
  {
    $this->especialidade = $especialidade;
  }
  public function setMedico($medico)
  {
    $this->medico = $medico;
  }
  public function setPaciente($paciente)
  {
    $this->paciente = $paciente;
  }
  public function setCodigo($codigo)
  {
    $this->codigo = $codigo;
  }

  function getData()
  {
    return $this->data;
  }
  function getHorario()
  {
    return $this->horario;
  }
  function getEspecialidade()
  {
    return $this->especialidade;
  }
  function getMedico()
  {
    return $this->medico;
  }
  function getPaciente()
  {
    return $this->paciente;
  }
  function getCodigo()
  {
    return $this->codigo;
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


