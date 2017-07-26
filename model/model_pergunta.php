<?php


/**
 * Classe Abstrata - Propriedades para getters e setters
 */
class PerguntaProperty{
	private $pergunta_id;
	private $teste_id;
	private $texto_pergunta;
	private $escolha;
	private $valor_escolha;
	private $arrayEscolha;
	private $arrayValor;
	
	private $ordem;
	
	
	public function __construct() {
		$this->arrayEscolha = array();
		$this->arrayValor = array();
	}
		
	public function getPergunta(){
		return $this->pergunta_id;
	}
	public function setPergunta($id){
		$this->pergunta_id=$id;
	}
	public function getTeste(){
		return $this->teste_id;
	}
	public function setTeste($teste_id){
		$this->teste_id=$teste_id;
	}
	public function getTextoPergunta(){
		return $this->texto_pergunta;
	}
	public function setTextoPergunta($texto_pergunta){
		$this->texto_pergunta=$texto_pergunta;
	}
	public function getEscolha(){
		return $this->escolha;
	}
	public function setEscolha($escolha){
		$this->escolha=$escolha;
	}
	public function getValorEscolha(){
		return $this->valor_escolha;
	}
	public function setValorEscolha($valor_escolha){
		$this->valor_escolha=$valor_escolha;
	}
	
	public function getArrayEscolha(){
		return $this->arrayEscolha;
	}
	
	public function addArrayEscolha($escolha){
		$this->arrayEscolha[] = $escolha;
	}
	
	public function setArrayEscolha($arrayEscolha){
		$this->arrayEscolha=$arrayEscolha;
	}
	
	
	public function setArrayValor( $arrayValor ){
		$this->arrayValor = $arrayValor;
	}
	
	public function getArrayValor(){
		return $this->arrayValor;
	}
	
	public function getOrdem(){
		return $this->ordem;
	}
	public function setOrdem($ordem){
		$this->ordem=$ordem;
	}
	
}

?>