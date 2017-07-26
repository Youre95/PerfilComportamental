<?php

include_once "./database/connection.php";

class UsuarioDao{
	public function InsertUsuario(UsuarioProperty $usuario){
		$con = new Db();
				
		$nome =  str_replace ("'",  "''", $usuario->getNome());
		$email = $usuario->getEmail();
		$dataNasc = $usuario->getDataNasc();
		$cpd = $usuario->getCpd();
		$idade = $usuario->getIdade();
		$sexo = $usuario->getSexo();
		$curso = $usuario->getCurso();
		$semestre = $usuario->getSemestre();
		$imagem = $usuario->getPerfilImg();
		$renda = $usuario->getRenda();
		$bolsa = $usuario->getBolsa();
		$senha = $usuario->getPassword();
		$endereco = $usuario->getEndereco();
		$faculdade = $usuario->getFaculdade();
		$status = $usuario->getStatus();
		$sistema = $usuario->getPerfilSistema();
		$estado = $usuario->getEstado();
		
		$SQL = $con->query("insert into usuario(nome, email, data_nasc, cpd, idade, sexo, curso, semestre, perfil_img, renda, bolsa, password, endereco, perfil_sistema, faculdade, status, estado)values( '$nome' , '$email' , '$dataNasc' , '$cpd' , '$idade' , '$sexo' , '$curso' , '$semestre' , '$imagem' , '$renda' , '$bolsa' , '$senha' , '$endereco' , '$sistema', '$faculdade', '$status', '$estado')");
		return $SQL;
		
	}
	public function GetUsuarioAll(){
		$results = array();
		$con = new Db();
		$SQL = $con->select("select * from usuario order by usuario_id");
		
			
		foreach ($SQL as $row){
			$usuario = new UsuarioProperty();
		
			$usuario->setUsuario($row['usuario_id']);
			$usuario->setNome($row['nome']);
			$usuario->setEmail($row['email']);
			$usuario->setDataNasc($row['data_nasc']);
			$usuario->setCpd($row['cpd']);
			$usuario->setIdade($row['idade']);
			$usuario->setSexo($row['sexo']);
			$usuario->setCurso($row['curso']);
			$usuario->setSemestre($row['semestre']);
			$usuario->setPerfilImg($row['perfil_img']);
			$usuario->setRenda($row['renda']);
			$usuario->setBolsa($row['bolsa']);
			$usuario->setPassword($row['password']);
			$usuario->setEndereco($row['endereco']);
			$usuario->setFaculdade($row['faculdade']);
			$usuario->setPerfilSistema($row['perfil_sistema']);
			$usuario->setStatus($row["status"]);
			$usuario->setEstado($row["estado"]);
			$results[] = $usuario;
			
			
		}
	 
		return $results;

	}
	
	public function GetUsuarioByName($nome){
		$results = array();
		$con = new Db();
		$SQL = $con->select("select * from usuario where nome like '%$nome%' order by usuario_id");
		
			
		foreach ($SQL as $row){
			$usuario = new UsuarioProperty();
		
			$usuario->setUsuario($row['usuario_id']);
			$usuario->setNome($row['nome']);
			$usuario->setEmail($row['email']);
			$usuario->setDataNasc($row['data_nasc']);
			$usuario->setCpd($row['cpd']);
			$usuario->setIdade($row['idade']);
			$usuario->setSexo($row['sexo']);
			$usuario->setCurso($row['curso']);
			$usuario->setSemestre($row['semestre']);
			$usuario->setPerfilImg($row['perfil_img']);
			$usuario->setRenda($row['renda']);
			$usuario->setBolsa($row['bolsa']);
			$usuario->setPassword($row['password']);
			$usuario->setEndereco($row['endereco']);
			$usuario->setFaculdade($row['faculdade']);
			$usuario->setPerfilSistema($row['perfil_sistema']);
			$usuario->setStatus($row["status"]);
			$usuario->setEstado($row["estado"]);
			$results[] = $usuario;
			
			
		}
	 
		return $results;

	}
	
	public function CountUsuarioByEstado($estado){
		$results = array();
		$con = new Db();
		$SQL = $con->select("select count(*) from usuario where estado = '$estado' order by usuario_id");
		return $SQL[0]["count(*)"];
	}
	
	public function GetUsuarioId($usuarioId){
		$con = new Db();
		$SQL = $con->select("select * from usuario where usuario_id='$usuarioId'");
		
		$usuario = new UsuarioProperty();
		
		$usuario->setUsuario($SQL[0]["usuario_id"]);
		$usuario->setNome($SQL[0]["nome"]);
		$usuario->setEmail($SQL[0]["email"]);
		$usuario->setDataNasc($SQL[0]["data_nasc"]);
		$usuario->setCpd($SQL[0]["cpd"]);
		$usuario->setIdade($SQL[0]["idade"]);
		$usuario->setSexo($SQL[0]["sexo"]);
		$usuario->setCurso($SQL[0]["curso"]);
		$usuario->setSemestre($SQL[0]["semestre"]);
		$usuario->setPerfilImg($SQL[0]["perfil_img"]);
		$usuario->setRenda($SQL[0]["renda"]);
		$usuario->setBolsa($SQL[0]["bolsa"]);
		$usuario->setPassword($SQL[0]["password"]);
		$usuario->setEndereco($SQL[0]["endereco"]);
		$usuario->setFaculdade($SQL[0]['faculdade']);
		$usuario->setPerfilSistema($SQL[0]["perfil_sistema"]);
		$usuario->setStatus($SQL[0]["status"]);
		$usuario->setEstado($SQL[0]["estado"]);
		return $usuario;
	}
	
		public function GetUsuarioEmail2($email){
		$con = new Db();
		$SQL = $con->select("select * from usuario where email='$email' ");
		
		if(isset ($SQL) && !(empty($SQL))){
			$usuario = new UsuarioProperty();
			$usuario->setUsuario($SQL[0]["usuario_id"]);
			$usuario->setNome($SQL[0]["nome"]);
			$usuario->setEmail($SQL[0]["email"]);
			$usuario->setDataNasc($SQL[0]["data_nasc"]);
			$usuario->setCpd($SQL[0]["cpd"]);
			$usuario->setIdade($SQL[0]["idade"]);
			$usuario->setSexo($SQL[0]["sexo"]);
			$usuario->setCurso($SQL[0]["curso"]);
			$usuario->setSemestre($SQL[0]["semestre"]);
			$usuario->setPerfilImg($SQL[0]["perfil_img"]);
			$usuario->setRenda($SQL[0]["renda"]);
			$usuario->setBolsa($SQL[0]["bolsa"]);
			$usuario->setPassword($SQL[0]["password"]);
			$usuario->setEndereco($SQL[0]["endereco"]);
			$usuario->setFaculdade($SQL[0]['faculdade']);
			$usuario->setPerfilSistema($SQL[0]["perfil_sistema"]);
			$usuario->setStatus($SQL[0]["status"]);
			$usuario->setEstado($SQL[0]["estado"]);
			return $usuario;
		}
		return null;
	}
	
	public function GetUsuarioEmail($email, $userId ){
		$con = new Db();
		$SQL = $con->select("select * from usuario where email='$email' && usuario_id <> '$userId'  ");
		
		if(isset ($SQL) && !(empty($SQL))){
			$usuario = new UsuarioProperty();
		
			$usuario->setUsuario($SQL[0]["usuario_id"]);
			$usuario->setNome($SQL[0]["nome"]);
			$usuario->setEmail($SQL[0]["email"]);
			$usuario->setDataNasc($SQL[0]["data_nasc"]);
			$usuario->setCpd($SQL[0]["cpd"]);
			$usuario->setIdade($SQL[0]["idade"]);
			$usuario->setSexo($SQL[0]["sexo"]);
			$usuario->setCurso($SQL[0]["curso"]);
			$usuario->setSemestre($SQL[0]["semestre"]);
			$usuario->setPerfilImg($SQL[0]["perfil_img"]);
			$usuario->setRenda($SQL[0]["renda"]);
			$usuario->setBolsa($SQL[0]["bolsa"]);
			$usuario->setPassword($SQL[0]["password"]);
			$usuario->setEndereco($SQL[0]["endereco"]);
			$usuario->setFaculdade($SQL[0]['faculdade']);
			$usuario->setPerfilSistema($SQL[0]["perfil_sistema"]);
			$usuario->setStatus($SQL[0]["status"]);
			$usuario->setEstado($SQL[0]["estado"]);
			return $usuario;
		}
		
		return null;
	}
	
	public function GetUsuarioLogin($email, $senha){
		$con = new Db();
		$SQL = $con->select("select * from usuario where email='$email' and password='$senha'");
		
		if(isset ($SQL) && !(empty($SQL))){
			$usuario = new UsuarioProperty();
		
			$usuario->setUsuario($SQL[0]["usuario_id"]);
			$usuario->setNome($SQL[0]["nome"]);
			$usuario->setEmail($SQL[0]["email"]);
			$usuario->setDataNasc($SQL[0]["data_nasc"]);
			$usuario->setCpd($SQL[0]["cpd"]);
			$usuario->setIdade($SQL[0]["idade"]);
			$usuario->setSexo($SQL[0]["sexo"]);
			$usuario->setCurso($SQL[0]["curso"]);
			$usuario->setSemestre($SQL[0]["semestre"]);
			$usuario->setPerfilImg($SQL[0]["perfil_img"]);
			$usuario->setRenda($SQL[0]["renda"]);
			$usuario->setBolsa($SQL[0]["bolsa"]);
			$usuario->setPassword($SQL[0]["password"]);
			$usuario->setEndereco($SQL[0]["endereco"]);
			$usuario->setFaculdade($SQL[0]['faculdade']);
			$usuario->setPerfilSistema($SQL[0]["perfil_sistema"]);
			$usuario->setStatus($SQL[0]["status"]);
			$usuario->setEstado($SQL[0]["estado"]);
			return $usuario;
		}
		
		return null;
		
		
	}
	
	public function DeleteUsuario($usuarioId){
		$con = new Db();
		$SQL = $con->query("delete from usuario where usuario_id='$usuarioId'");
		return $SQL;
	}
	public function UpdateUsuario(UsuarioProperty $usuario){
		$con = new Db();
		
		$P1 = $usuario->getNome();
		$P2 = $usuario->getEmail();
		$P3 = $usuario->getDataNasc();
		$P4 = $usuario->getCpd();
		$P5 = $usuario->getIdade();
		$P6 = $usuario->getSexo();
		$P7 = $usuario->getCurso();
		$P8 = $usuario->getSemestre();
		$P9 = $usuario->getPerfilImg();
		$P10 = $usuario->getRenda();
		$P11 = $usuario->getBolsa();
		$P12 = $usuario->getPassword();
		$P13 = $usuario->getEndereco();
		$P14 = $usuario->getPerfilSistema();
		$P15 = $usuario->getUsuario();
		$status = $usuario->getStatus();
		$faculdade = $usuario->getFaculdade();
		$estado = $usuario->getEstado();
		
		$SQL = $con->query("update usuario set nome='$P1', email='$P2', data_nasc='$P3', cpd='$P4', idade='$P5', sexo='$P6', curso='$P7', semestre='$P8', perfil_img='$P9', renda='$P10', bolsa='$P11', password='$P12', endereco='$P13', perfil_sistema='$P14', faculdade='$faculdade', status='$status', estado='$estado' where usuario_id = '$P15'");
		
	 
		return $SQL;
		
	}
}
?>