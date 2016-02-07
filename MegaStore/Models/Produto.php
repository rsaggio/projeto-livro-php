<?php 
namespace MegaStore\Models;

	class Produto {

		public $id;
		public $nome;
		public $preco;

		public function __construct($nome,$preco) {
			$this->nome = $nome;
			$this->preco = $preco;
		}

		public function produtoEmTexto() {
			return "{$this->nome},{$this->preco}\n";
		}
	}