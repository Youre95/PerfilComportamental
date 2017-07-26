<?php
require_once "smarty.php";
include "./model/model_perfil.php";
include "./dao/perfilDao.php";
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
	
	$perfilId = $_GET['Id'];
	
	$perfilDao = new PerfilDao();
	$logDao = new LogDao();
	
	
	if($perfilDao->DeletePerfil($perfilId)){
		$logDao->InsertLog($_SESSION["nome"],"Perfil deletado com sucesso");
		echo "<script>alert('perfil Deletado com sucesso!');</script>";

	}
	header('Location: '."listaPerfil.php");
}
?>
