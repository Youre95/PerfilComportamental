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

$config = new ConfigProperty();

$configDao = new ConfigDao();
$logDao = new LogDao();

if(isset($_GET["Id"])){
	$config = $configDao->GetConfigId($_GET["Id"]);

	if (isset($_GET['atualizar'])){
		$config->setKeySystem($_POST['keySystem']);
		$config->setValueSystem($_POST['valueSystem']);
		$config->setContext($_POST['contextSystem']);
		
		if($configDao->UpdateConfig($config)){
			$logDao->InsertLog($_SESSION["nome"],"Configuração atualizada com sucesso");
			echo "<script>alert('Configuração atualizada com sucesso!');</script>";
			header('Location: '."listConfig.php");
		}else{
			echo "<script>alert('Não foi possível aleterar a configuração!');</script>";
		}
	}

	$smarty->assign('config',$config);
	$smarty->assign('configId', $_GET["Id"]);

	$smarty->display("atualizar_config.tpl");	
}else {
	header('Location: '."listConfig.php");
}




?>

