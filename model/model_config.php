<?php


class ConfigProperty {
	
	private $configuracoesSistemaId;
	private $keySystem;
	private $ValueSystem;
	private $Context;
	
	public function getConfiguracao(){
		return $this->configuracoesSistemaId;
	}
	public function setConfiguracao($configuracoesSistemaId){
		$this->configuracoesSistemaId=$configuracoesSistemaId;
	}
	public function getKeySystem(){
		return $this->keySystem;
	}
	public function setKeySystem($keySystem){
			$this->keySystem=$keySystem;
	}
	public function getValueSystem(){
		return $this->ValueSystem;
	}
	public function setValueSystem($ValueSystem){
		$this->ValueSystem=$ValueSystem;
	}
	public function getContext(){
		return $this->Context;
	}
	public function setContext($Context){
		$this->Context=$Context;
	}
	
}
