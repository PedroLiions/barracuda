<?php

class Conexao{
	// metodo construtor
	public static function getConexao(){
		$host = "192.185.222.71";
		$dbname = "logos215_barracuda";
		$usuario = "logos215_barracu";
		$senha = 'oP*FGl[Tx$ix';

		try {
                    $conn = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $usuario, $senha);
                    return $conn;
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
		    echo 'ERROR: ' . $e->getMessage();
		}
	}
}