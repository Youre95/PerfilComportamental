<?php
require_once "smarty.php";
include "./model/model_usuario.php";
include "./dao/usuarioDao.php";
include "./dao/logDao.php";


if (isset ( $_GET ["esqueceu"] )) {
	$idUser = $_GET ["esqueceu"];
}else{
	session_start();
	if(!isset($_SESSION['user_id'])) {
		$smarty->assign("erro", "Você não está autorizado acessar esta página");
		$smarty->display ( "login.tpl" );
		return false;
	}
	
	$idUser = $_SESSION['user_id'];
}
	
if (isset($idUser)  && !empty($idUser)) {
	
	$usuarioDao = new UsuarioDao ();
	$logDao = new LogDao();
	
	$usuario = $usuarioDao->GetUsuarioId($idUser);
	
	if(isset($_POST["txtPassword"])){

		$passMd5 = md5 ($_POST["txtPassword"]);
		
		if($passMd5 == $usuario->getPassword()){
			$novaSenha = md5($_POST["txtNewPassword"]);
			
			$usuario->setPassword($novaSenha);
			
			if($usuarioDao->UpdateUsuario($usuario)){
				$logDao->InsertLog($_SESSION["nome"],"Senha atualizada com sucesso");
				$smarty->assign("sucesso", "Senha atualizada com sucesso");
			}else{
				$logDao->InsertLog($_SESSION["nome"],"Ocorreu um erro tentando atualizar a senha");
				$smarty->assign("erro", "Ocorreu um erro tentando atualizar a senha");
			}
		}else{
			$smarty->assign("erro", "Esta não é sua senha atual, por favor verifique ela");
		}
	
	}
	
	$smarty->assign("nomeUser", $usuario->getNome());
	$smarty->assign("idUser", $idUser);
	$smarty->display ( "mudarSenha.tpl" );
	
}else{
	$smarty->assign("erro", "Você não está autorizado acessar esta página");
	$smarty->display ( "login.tpl" );
}
	
 


?>


