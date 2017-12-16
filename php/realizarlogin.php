<?php
	session_start();
	// verifica se foi digitado email e senha
	if(!isset($_POST['email']) && !isset($_POST['senha'])):
		// devolve para a pagina anterior passando o parametro que campo=vazio
		header("location:../index.php?campo=vazio");
		// parando execução do script
		die();
	endif;

	// função autoload
	function __autoload($className){
		require_once "..\classes\\".$className.".class.php";
	}


	$uDAO = new usuarioDAO();

	$usuario = array("email" => $_POST['email'], "senha" => $_POST['senha']);

	if($uDAO->authenticaUsuario($usuario)):
		header('location:../painel/index.php');
	else:
		header('location:../index.php?login=false');		
	endif;

?>