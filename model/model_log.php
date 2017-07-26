<?php


class LogProperty {
	
	private $logSistemaId;
	private $entidade;
	private $texto;
	private $dateCreation;
	
	public function getLogSistemaId(){
		return $this->configuracoesSistemaId;
	}
	public function setLogSistemaId($logSistemaId){
		$this->logSistemaId=$logSistemaId;
	}
	public function getEntidade(){
		return $this->entidade;
	}
	public function setEntidade($entidade){
			$this->entidade=$entidade;
	}
	public function getTexto(){
		return $this->texto;
	}
	public function setTexto($texto){
		$this->texto=$texto;
	}
	public function getDateCreation(){
		return $this->dateCreation;
	}
	public function setDateCreation($dateCreation){
		$this->dateCreation=$dateCreation;
	}
	
}
