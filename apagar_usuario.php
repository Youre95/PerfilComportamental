<?php
require_once "smarty.php";
include "./model/model_usuario.php";
include "./dao/usuarioDao.php";
include "./dao/logDao.php";



session_start();
if(!isset($_SESSION['user_id'])) {
	$smarty->assign("erro", "Você não está autorizado acessar esta página");$smarty->display ( "login.tpl" );
	return false;
}

$smarty->assign('profile',$_SESSION["profile"]); 
$smarty->assign('nomeBemvindo',$_SESSION["nome"]); 
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);

if (isset($_GET['Id'])){
	
	$usuarioId = $_GET['Id'];
	
	$usuarioDao = new UsuarioDao();
	$logDao = new LogDao();
	
	
	if($usuarioDao->DeleteUsuario($usuarioId)){
		$logDao->InsertLog($_SESSION["nome"],"Usuario Deletado com sucesso!");
		echo "<script>alert('Usuario Deletado com sucesso!');</script>";
	}
	
	header('Location: '."listaUsuarios.php");
}
?>
