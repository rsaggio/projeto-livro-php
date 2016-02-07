<?php 
namespace MegaStore\Models;

	class Produto {

		public $id;
		private $nome;
		private $preco;
		private $usado;

		public function __construct($nome,$preco) {
			$this->nome = $nome;
			$this->preco = $preco;
		}


		public function setUsado($usado) {
			$this->usado = $usado;
		}

		public function getUsado() {
			return $this->usado;
		}
		public function getNome() {
			return $this->nome;
		}

		public function getPreco() {
			return $this->preco;
		}

		public function produtoEmTexto() {
			return "{$this->nome},{$this->preco}\n";
		}
	}