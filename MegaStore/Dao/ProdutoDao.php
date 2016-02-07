<?php 
namespace MegaStore\Dao;

use \MegaStore\Models\Produto;

class ProdutoDao {

	public function salvar(Produto $produto) {

		$query = "insert into produto (nome,preco) values (:nome,:preco)";

		$con = new \PDO("mysql:host=localhost;dbname=livrophp","root","");

		$ps = $con->prepare($query);

		$ps->bindParam(":nome",$produto->nome);
		$ps->bindParam(":preco", $produto->preco);

		$deuCerto = $ps->execute();

		return $deuCerto;

	}

	public function listar() {

		$query = "select * from produto";

		$con = new \PDO("mysql:host=localhost;dbname=livrophp","root","");

		$ps = $con->prepare($query);

		$resultado = $ps->execute();

		$produtos = $ps->fetchAll(\PDO::FETCH_CLASS,"\MegaStore\Models\Produto");

		return $produtos;
		
	}
}
?>
