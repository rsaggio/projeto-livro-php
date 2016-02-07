<?php 
class Produto {
	public $nome;
	public $preco;

	public function produtoEmTexto() {
		return "$nome,$preco\n";
	}
}
