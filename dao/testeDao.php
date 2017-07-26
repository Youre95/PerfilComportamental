<?php


include_once "./database/connection.php";



class TesteDao{
	
	public function InsertTeste(TesteProperty $teste){
		$con = new Db();
		$nome = $teste->getNome();
		$descricao  = $teste->getDescricao();
		
		$SQL = $con->query("insert into teste_sis(nome, descricao)values('$nome','$descricao')");
		return $SQL;
	}
	
	
	public function GetTesteAll(){
		$con = new Db();
		$resultado = $con->select("select * from teste_sis order by teste_id");
		return $resultado;
	}
	
	public function GetTesteByName($name){
		$con = new Db();
		$resultado = $con->select("select * from teste_sis where nome like '%$name%' ");
		return $resultado;
	}
 
	
	public function GetTesteId($testeId){
		$con = new Db();
		$SQL = $con->select("select * from teste_sis where teste_id='$testeId'");
		
		$teste = new TesteProperty();
		
		$teste->setTeste($SQL[0]["teste_id"]);
		$teste->setNome( $SQL[0]["nome"] );
		$teste->setDescricao(  $SQL[0]["descricao"] );
		
		return $teste;
	
	}
	public function DeleteTeste($testeId){
		$con = new Db();
		$SQL = $con->query("delete from teste_sis where teste_id='$testeId' ");
		
		return $SQL;
	}
	public function UpdateTeste(TesteProperty $teste){
		$con = new Db();
		
		$P1 = $teste->getNome();
		$P2 = $teste->getDescricao();
		$P3 = $teste->getTeste();
		
		$SQL = $con->query("update teste_sis set nome = '$P1', descricao = '$P2' where teste_id = '$P3' ");
		return $SQL;
	}
}
?>
