<?php

/**
 * Classe Abstrata - Propriedades para getters e setters
 */
class TesteProperty {
	
	private $teste_id;
	private $nome;
	private $descricao;
	
	public function getTeste(){
		return $this->teste_id;
	}
	public function setTeste($id){
		$this->teste_id=$id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome=$nome;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function setDescricao($descricao){
		$this->descricao=$descricao;
	}
}

?>