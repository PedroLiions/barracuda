<?php
/*
	ClassName: ProdutoDAO
	Author: Pedro Lima
	Description: Manipular produtos no banco de dados
*/

class ProdutoDAO{

	private $conn;

	public function __construct(){
		$this->conn = Conexao::getConexao();
	}

	public function adicionarProduto($produto){
		$sql = "INSERT INTO produtos(nome,descricao,preco) VALUES(???)";

		$stmt = $this->conn->prepare($sql);
		$stmt->bindValue( 1, $produto->getNome() );
		$stmt->bindValue( 2, $produto->getDescricao() );
		$stmt->bindValue( 3, $produto->getPreco() );

		// Execute
		if($stmt->execute())
			return true;
		else
			return false;
	}


}