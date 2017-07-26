<?php


/**
 * Classe Abstrata - Propriedades para getters e setters
 */
class PerfilProperty{
	private $perfil_comportamental_id;
	private $nome;
	private $pontos_fortes;
	private $uri_image_perfil;
	private $pontos_melhoria;
	private $valores;
	private $descricao;
	private $ordem;
	
	
	public function getPerfilComportamental(){
		return $this->perfil_comportamental_id;
	}
	public function setPerfilComportamental($id){
		$this->perfil_comportamental_id=$id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome=$nome;
	}
	public function getPontosFortes(){
		return $this->pontos_fortes;
	}
	public function setPontosFortes($pontos_fortes){
		$this->pontos_fortes=$pontos_fortes;
	}
	public function getImage(){
		return $this->uri_image_perfil;
	}
	public function setImage($image){
		$this->uri_image_perfil=$image;
	}
	public function getPontosMelhoria(){
		return $this->pontos_melhoria;
	}
	public function setPontosMelhoria($pontos_melhoria){
		$this->pontos_melhoria=$pontos_melhoria;
	}
	public function getValores(){
		return $this->valores;
	}
	public function setValores($valores){
		$this->valores=$valores;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function setDescricao($descricao){
		$this->descricao=$descricao;
	}
	public function getOrdem(){
		return $this->ordem;
	}
	public function setOrdem($ordem){
		$this->ordem=$ordem;
	}
}