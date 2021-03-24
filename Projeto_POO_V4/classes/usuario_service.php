<?php

//usada para instância de um objeto que vai intermediar
//a gravação de uma tarefa no banco de dados (CRUD)
class UsuarioService
{
	public $conexao;
	public $pessoa;

	// public function __construct($conexao, $pessoa)
	// {
	// 	$this->conexao = $conexao->conectar();
	// 	$this->pessoa = $pessoa;
	//}
	public static function inserir($pessoa) 
	{ //create
		$conn = Conexao::getConn();
        $query = "INSERT INTO hc_cadastro(cad_nome, cad_endereco, cad_datanascimento,cad_email,cad_senha,cad_fone,cad_tipo) VALUES (:nome,:endereco,:dat_nasc,:email,:senha,:telefone,:tipo)";
        $cad_pessoa = $conn->prepare($query);
		$cad_pessoa->bindValue(':nome', $pessoa->__get('nome'));
        $cad_pessoa->bindValue(':endereco', $pessoa->__get('endereco'));
        $cad_pessoa->bindValue(':datanascimento', $pessoa->__get('dat_nasc'));
		$cad_pessoa->bindValue(':email', $pessoa->__get('email'));
        $cad_pessoa->bindValue(':senha', $pessoa->__get('senha'));
        $cad_pessoa->bindValue(':telefone', $pessoa->__get('fone'));
		$cad_pessoa->bindValue(':tipo', $pessoa->__get('tipo'));
		print_r($query);
		$cad_pessoa->execute();
		// $query = 'INSERT INTO hc_cadastro(pessoa)VALUES(:pessoa)';
		// $stmt = $this->conexao->prepare($query);
		// $stmt->bindValue(':pessoa', $this->pessoa->__get('pessoa'));
		// $stmt->execute();
	}
}

// 	public function recuperar()
// 	{ //read
// 		$query = 'SELECT id, id_status,tarefa FROM tb_tarefas';
// 		$stmt = $this->conexao->prepare($query);
// 		$stmt->execute();
// 		return $stmt->fetchAll(PDO::FETCH_OBJ);
// 	}

// 	public function atualizar()
// 	{ //update
// 		$query = "UPDATE tb_tarefas set tarefa = :tarefa where id = :id";
// 		$stmt = $this->conexao->prepare($query);
// 		$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
// 		$stmt->bindValue(':id', $this->tarefa->__get('id'));
// 		return $stmt->execute();
// 	}
 