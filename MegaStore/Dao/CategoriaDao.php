<?php 
namespace MegaStore\Dao;
use \MegaStore\Factory\ConexaoFactory;
use \MegaStore\Models\Categoria;

class CategoriaDao {

	public function salvar(Categoria $categoria) {

		$query = "insert into categoria (nome) values (:nome)";

		$con = ConexaoFactory::getConexao();

		$ps = $con->prepare($query);

		$ps->bindParam(":nome",$categoria->getNome());

		$deuCerto = $ps->execute();

		return $deuCerto;

	}

	public function listar() {

		$query = "select * from categoria";

		$con = ConexaoFactory::getConexao();

		$ps = $con->prepare($query);

		$resultado = $ps->execute();

		$categorias = $ps->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE,"\MegaStore\Models\Categoria");

		return $categorias;
		
	}
}


