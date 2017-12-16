<?php

class Categorias{

	public function listar_categorias(){
		$query = "SELECT id, nome FROM categorias";
		$conn = new PDO('mysql:host=127.0.0.1;dbname=estoque', 'root', '');
		$result = $conn->query($query);

	}

}