<?php
/*
	ClassName: UsuarioDAO
	Author: Pedro Lima
	Description: Manipular produtos no banco de dados
*/

	class UsuarioDAO{
		private $conn;

		public function __construct(){
			$this->conn = Conexao::getConexao();
		}
		/*
			Metodo Logar usuario
		*/
		/*select usuarios.*, fotos.* from usuarios, fotos where fotos.cod_foto = usuarios.cod_foto;*/
		public function authenticaUsuario($usuario){
			// Query
			$email = $usuario['email'];
			$senha = $usuario['senha'];
			$sql = "select usuarios.*, fotos.* from usuarios, fotos where 
			usuarios.nome_usuario = '{$usuario['email']}' and 
			usuarios.senha_usuario = '{$usuario['senha']}' 
			and usuarios.cod_foto = fotos.cod_foto";
			$result = $this->conn->query($sql);
			$fetch = $result->fetchAll();
			// verifica se o resultado é true
			if($result):
				foreach($fetch as $linha):
					$_SESSION['cod_usuario'] = $linha['cod_usuario'];
					$_SESSION['nome_usuario'] = $linha['nome_usuario'];
					$_SESSION['email_usuario'] = $linha['email_usuario'];
					$_SESSION['nasc_usuario'] = $linha['nasc_usuario'];
					$_SESSION['caminho_foto'] = $linha['caminho_foto'];
				endforeach;
				return true;
			// Caso o resultado seja false
			endif;
			
			return false;
		}

	}