<?php 
namespace MegaStore\Dao;

use \MegaStore\Models\Produto;
use \MegaStore\Factory\ConexaoFactory;

class ProdutoDao {

	public function salvar(Produto $produto) {

		$query = "insert into produto (nome,preco) values (:nome,:preco)";

		$con = ConexaoFactory::getConexao();

		$ps = $con->prepare($query);

		$ps->bindParam(":nome",$produto->getNome());
		$ps->bindParam(":preco", $produto->getPreco());

		$deuCerto = $ps->execute();

		return $deuCerto;

	}

	public function listar() {

		$query = "select * from produto";

		$con = ConexaoFactory::getConexao();

		$ps = $con->prepare($query);

		$resultado = $ps->execute();

		$produtos = $ps->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE,"\MegaStore\Models\Produto");

		return $produtos;
		
	}
}
?>
