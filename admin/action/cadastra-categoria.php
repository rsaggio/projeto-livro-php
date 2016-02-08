<?php
 
	require "../../autoload.php";

	use \MegaStore\Models\Categoria;
	use \MegaStore\Dao\CategoriaDao;

	$nome = $_GET['nome'];

	$categoria = new Categoria($nome);

	$dao = new CategoriaDao();

	$deuCerto = $dao->salvar($categoria);
	
	if($deuCerto) {
		$msg = "Categoria cadastrada com sucesso";
	}else {
		$msg = "Erro ao cadastrar a categoria";
	}

	header("Location: ../form-cadastra-categoria.php?msg={$msg}");

 ?>