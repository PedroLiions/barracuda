<?php

class Conexao{
	// metodo construtor
	public static function getConexao(){
		$host = "localhost";
		$dbname = "siscomment";
		$usuario = "root";
		$senha = "";

		try {
		  	$conn = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $usuario, $senha);
		  	return $conn;
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
		    echo 'ERROR: ' . $e->getMessage();
		}
	}
}
