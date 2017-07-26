<?php

include_once "./database/connection.php";

class PerguntaDao{
	public function InsertPergunta(PerguntaProperty $pergunta){
		$con = new db();
				
		$teste = $pergunta->getTeste();
		$texto = $pergunta->getTextoPergunta();
		$escolha = $pergunta->getEscolha();
		$valor = $pergunta->getValorEscolha();
 		$SQL = $con->query("insert into pergunta(teste_id_fk, texto_pergunta, escolhas, valor_escolha) values ('$teste','$texto','$escolha','$valor') ");
		return $SQL;
	}
	
	public function GetPerguntaAll(){
		$con = new Db();
		$resultado = $con->select("select * from pergunta order by pergunta_id");
		return $resultado;	
	}
	
	public function GetPerguntaByName($texto){
		$con = new Db();
		$resultado = $con->select("select * from pergunta where texto_pergunta like '%$texto%' order by pergunta_id");
		return $resultado;	
	}
	
	public function GetPerguntaId($perguntaId){
		$con = new Db();
		$SQL = $con->select("select * from pergunta where pergunta_id='$perguntaId'");
		$pergunta = new PerguntaProperty();
		
		$pergunta->setPergunta($SQL[0]["pergunta_id"]);
		$pergunta->setTeste($SQL[0]["teste_id_fk"]);
		$pergunta->setTextoPergunta($SQL[0]["texto_pergunta"]);
		$pergunta->setEscolha($SQL[0]["escolhas"]);
		$pergunta->setValorEscolha($SQL[0]["valor_escolha"]);
		$pergunta->setOrdem($SQL[0]["ordem"]);
		
		return $pergunta;
	}
	 
	
	public function GetPerguntasByTeste($testeId) {
		$con = new Db();
		$resultado = $con->select("select * from pergunta where teste_id_fk='$testeId' order by pergunta_id asc");
		return $resultado;
		
	}
	
	
	
	public function DeletePergunta($perguntaId){
		$con = new Db();
		$SQL = $con->query("delete from pergunta where pergunta_id=$perguntaId");
		return $SQL;
	}
	public function UpdatePergunta(PerguntaProperty $pergunta){
		$con = new Db();
		
		$P1 = $pergunta->getTeste();
		$P2 = $pergunta->getTextoPergunta();
		$P3 = $pergunta->getEscolha();
		$P4 = $pergunta->getValorEscolha();
		$P5 = $pergunta->getPergunta();
		
		$SQL = $con->query("update pergunta set teste_id_fk='$P1', texto_pergunta='$P2', escolhas='$P3', valor_escolha='$P4' where pergunta_id = '$P5'");
		return $SQL;
		
	}
}
?>
