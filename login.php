<?php 

require_once "smarty.php";
include "./model/model_usuario.php";
include "./dao/usuarioDao.php";

 
 if( isset($_POST["email"]) &&  isset($_POST["password"]) ) {
	 
	$email = utf8_decode($_POST["email"]);
	$pass = md5(utf8_decode($_POST["password"]));


	 $usuarioDao = new UsuarioDao();
	 
	 $returnUsuario = $usuarioDao->GetUsuarioLogin($email, $pass);

	if(isset($returnUsuario)) {
		if($returnUsuario->getStatus() != 'Pendente'){
			session_start();
			$_SESSION["user_id"] = $returnUsuario->getUsuario();
			$_SESSION["profile"] = $returnUsuario->getPerfilImg();
			$_SESSION["nome"] =   $returnUsuario->getNome();
			$_SESSION["perfil"] =   $returnUsuario->getPerfilSistema();
			
			$qtdCampos = 2;
			$facul = $returnUsuario->getFaculdade();
			if(isset($facul) && $facul != '' )
				$qtdCampos++;	
				
			$curso = $returnUsuario->getCurso();
			if(isset($curso) && $curso != '' )
				$qtdCampos++;
				
			$estado = $returnUsuario->getEstado();
			if(isset($estado)&& $estado != '' )
				$qtdCampos++;
				
			$percent = ($qtdCampos * 100) / 5;
			$_SESSION["percentPerfil"] =  $percent;
			
			header( "Location: index.php" );
			return true;
		}else{
			$smarty->assign('erro', "Por favor espere pela aprovação do administrador do sistema");
			$smarty->display("login.tpl");
			return false;
		}
		
	}else {
		$smarty->assign('erro', "Senha ou usário incorretos");
		$smarty->display("login.tpl");
		return false;
	}

}
 

$smarty->display("login.tpl");


?>