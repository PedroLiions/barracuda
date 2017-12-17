<?php
// função autoload
function __autoload($className){
    require_once "../classes/".$className.".class.php";
}

$produto = new Produto($_POST['nome'], $_POST['descricao'], $_POST['preco']);

echo "<pre>";
print_r($produto);
echo "</pre>";

$pDAO = new ProdutoDAO();

if($pDAO->adicionarProduto($produto)):
    header('location:../painel/formulario-produto.php?success=adicionar');
else:
    header("location:../painel/formulario-produto.php?error=adicionar");
endif;