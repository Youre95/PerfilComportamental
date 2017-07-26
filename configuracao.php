<?php
require_once "smarty.php";

include "./model/model_config.php";
include_once "./dao/configDao.php";
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


if (isset($_POST['keySystem'])){
	
	$config = new ConfigProperty();
	$config->setKeySystem($_POST['keySystem']);
	$config->setValueSystem($_POST['valueSystem']);
	$config->setContext($_POST['contextSystem']);
	
	$configDao = new ConfigDao();	$logDao = new LogDao();
	
	
	if($configDao->InsertConfig($config)){
		$logDao->InsertLog($_SESSION["nome"],"Configuração cadastrada com sucesso");
		echo "<script>alert('Configuração cadastrada com sucesso!');</script>";
		header('Location: '."listConfig.php");
	}else{
		echo "<script>alert('Não foi possível cadastrar a configuração!');</script>";
	}
}



$smarty->display("config.tpl");
?>