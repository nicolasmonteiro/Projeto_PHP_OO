<?php
class Login{

    private $email;
    private $senha;

    public function __construct($email, $senha)
  {
    $this->email = $email;
    $this->senha = $senha;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function setSenha($senha)
  {
    $this->senha = $senha;
  }
  function getEmail()
  {
    return $this->email;
  }
  function getSenha()
  {
    return $this->senha;
  }


    public function Logar(){
        if ($this->email == "mathias@gmail.com" and $this->senha == "123456"):
            echo 'Logado com Sucesso!';
        else:
            echo 'Dados inválidos';
        endif;
    }
}

$logar1 = new Login("mathias@gmail.com","123456");
echo $logar1->Logar();
echo "<br/>";
echo $logar1->getEmail();
echo "<br/>";
echo "<hr/>";
$logar2 = new Login("nicolas@gmail.com","654321");
echo $logar2->Logar();
echo "<br/>";
echo $logar2->getEmail();