<?php
require_once "smarty.php";
include "./model/model_teste.php";
include "./dao/testeDao.php";
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
	
	$testeId = $_GET["Id"];
	
	$testeDao = new TesteDao();
	$logDao = new LogDao();
		
	if($testeDao->DeleteTeste($testeId)){
		$logDao->InsertLog($_SESSION["nome"],"Teste deletado com sucesso!");
		echo "<script>alert('teste Deletado com sucesso!');</script>";
	}
	
	
	header('Location: '."listaTeste.php");
	
}


?>
