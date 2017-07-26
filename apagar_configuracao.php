<?php
require_once "smarty.php";
include "./model/model_config.php";
include "./dao/configDao.php";
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
	
	$configId = $_GET['Id'];
	
	$configDao = new ConfigDao();
	$logDao = new LogDao();
	
	if($configDao->DeleteConfig($configId)){
		$logDao->InsertLog($_SESSION["nome"],"Configuração deletada com sucesso");
		echo "<script>alert('Configuração deletada com sucesso!');</script>";

	}
	
	header('Location: '."listConfig.php");
}
?>
