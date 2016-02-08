<?php 
namespace MegaStore\Dao;

use \MegaStore\Models\Produto;
use \MegaStore\Models\Categoria;
use \MegaStore\Factory\ConexaoFactory;

class ProdutoDao {

	public function salvar(Produto $produto) {

		$query = "insert into produto (nome,preco,id_categoria) values (:nome,:preco,:categoria)";

		$con = ConexaoFactory::getConexao();

		$ps = $con->prepare($query);

		$ps->bindParam(":nome",$produto->getNome());
		$ps->bindParam(":preco", $produto->getPreco());
		$ps->bindParam(":categoria", $produto->getCategoria()->getId());

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

	public function getProdutoComCategoria(Categoria $categoria) {

		$query = "select * from produto where id_categoria = :id";

		$con = ConexaoFactory::getConexao();

		$ps = $con->prepare($query);

		$ps->bindParam(":id",$categoria->getId());

		$resultado = $ps->execute();

		$produtos = $ps->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE,"\MegaStore\Models\Produto");

		return $produtos;
	}
}
?>
