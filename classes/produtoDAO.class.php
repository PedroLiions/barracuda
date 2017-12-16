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
		$sql = "INSERT INTO produtos(nome_produto,desc_produto,preco) VALUES(?,?,?)";
		$stmt = $this->conn->prepare($sql);
                
		$stmt->bindParam( 1, $produto->getNome() );
		$stmt->bindParam( 2, $produto->getDescricao() );
		$stmt->bindParam( 3, $produto->getPreco() );

		return $stmt->execute();
	}
}