<?php 
namespace MegaStore\Factory;

class ConexaoFactory {

	public static function getConexao() {
		return new \PDO("mysql:host=localhost;dbname=livrophp","root","");
	}
	
}


