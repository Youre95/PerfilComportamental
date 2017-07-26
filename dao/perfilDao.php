<?php
include_once "./database/connection.php";

class PerfilDao{
	public function InsertPerfil(PerfilProperty $perfil){
		$con = new db();
				
		$nomePerfil = $perfil->getNome();
		$pontos_fortes = $perfil->getPontosFortes();
		$image = $perfil->getImage();
		$pontos_melhoria = $perfil->getPontosMelhoria();
		$valores = $perfil->getValores();
		$descricao = $perfil->getDescricao();
	
		$SQL = $con->query("insert into perfil_comportamental(nome, pontos_fortes, uri_image_perfil, pontos_melhoria, valores, descricao)values('$nomePerfil','$pontos_fortes','$image','$pontos_melhoria','$valores','$descricao')");
		return $SQL;
	}
	public function GetPerfilAll(){
		$con = new Db();
		$resultado = $con->select("select * from perfil_comportamental order by perfil_comportamental_id");
		return $resultado;	
	}
	public function GetPerfilId($perfilId){
		$con = new Db();
		$SQL = $con->select("select * from perfil_comportamental where perfil_comportamental_id='$perfilId'");
		$perfil = new PerfilProperty();
			
		$perfil->setPerfilComportamental($SQL[0]["perfil_comportamental_id"]);
		$perfil->setNome($SQL[0]["nome"]);
		$perfil->setPontosFortes($SQL[0]["pontos_fortes"]);
		$perfil->setPontosMelhoria($SQL[0]["pontos_melhoria"]);
		$perfil->setImage($SQL[0]["uri_image_perfil"]);
		$perfil->setValores($SQL[0]["valores"]);
		$perfil->setDescricao($SQL[0]["descricao"]);
		$perfil->setOrdem($SQL[0]["ordem"]);
			
		return $perfil;
	}
	
	public function GetPerfilByUsuario($userId){
		$con = new Db();
		$SQL = $con->select("select p.*, r.perfil_tubarao, r.perfil_gato, r.perfil_aguia, r.perfil_lobo, r.gato_percent, r.lobo_percent, r.aguia_percent, r.tubarao_percent  from perfil_comportamental p inner join resultado_perfil r on p.perfil_comportamental_id = r.perfil_comportamental_id_fk where r.usuario_id_fk = '$userId' order by r.data_hora desc");
		return $SQL;
	}
	
	public function GetPerfilByName($nome){
		$con = new Db();
		$resultado = $con->select("select * from perfil_comportamental where nome like '%$nome%' order by perfil_comportamental_id");
		return $resultado;
	}
	public function DeletePerfil($perfilId){
		
		$con = new Db();
		$SQL = $con->query("delete from perfil_comportamental where perfil_comportamental_id='$perfilId'");
		return $SQL;
		
	}
	public function UpdatePerfil(PerfilProperty $perfil){
		
		$con = new Db();
		
		
		$P1 = $perfil->getNome();
		$P2 = $perfil->getPontosFortes();
		$P3 = $perfil->getImage();
		$P4 = $perfil->getPontosMelhoria();
		$P5 = $perfil->getValores();
		$P6 = $perfil->getDescricao();
		$P7 = $perfil->getPerfilComportamental();
		
		$SQL = $con->query("update perfil_comportamental set nome='$P1', pontos_fortes='$P2', uri_image_perfil='$P3', pontos_melhoria='$P4', valores='$P5', descricao='$P6' where perfil_comportamental_id = '$P7'");
		return $SQL;
	}
}
?>