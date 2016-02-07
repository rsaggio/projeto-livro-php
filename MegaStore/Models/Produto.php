<?php 
namespace MegaStore\Models;

	class Produto {

		public $id;
		public $nome;
		public $preco;

		public function produtoEmTexto() {
			return "{$this->nome},{$this->preco}\n";
		}
	}