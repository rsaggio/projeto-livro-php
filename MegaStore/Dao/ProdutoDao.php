<?php 
namespace MegaStore\Dao;

use \MegaStore\Models\Produto;
use \MegaStore\Factory\ConexaoFactory;

class ProdutoDao {

	public function salvar(Produto $produto) {

		$query = "insert into produto (nome,preco) values (:nome,:preco)";

		$con = ConexaoFactory::getConexao();

		$ps = $con->prepare($query);

		$ps->bindParam(":nome",$produto->nome);
		$ps->bindParam(":preco", $produto->preco);

		$deuCerto = $ps->execute();

		return $deuCerto;

	}

	public function listar() {

		$query = "select * from produto";

		$con = ConexaoFactory::getConexao();

		$ps = $con->prepare($query);

		$resultado = $ps->execute();

		$produtos = $ps->fetchAll(\PDO::FETCH_CLASS,"\MegaStore\Models\Produto");

		return $produtos;
		
	}
}
?>
