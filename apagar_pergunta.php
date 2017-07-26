<?php
require_once "smarty.php";
include "./model/model_pergunta.php";
include "./dao/perguntaDao.php";
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
	
	$perguntaDao = new PerguntaDao();
	$logDao = new LogDao();		

	if($perguntaDao->DeletePergunta($_GET["Id"])){
		$logDao->InsertLog($_SESSION["nome"],"Pergunta Deletada com sucesso");
		echo "<script>alert('Pergunta Deletada com sucesso!');</script>";

	}
	header('Location: '."listaPergunta.php");
}
?>