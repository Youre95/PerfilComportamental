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

$teste = new TesteProperty();

$testeDao = new TesteDao();
$logDao = new LogDao();

if(isset($_GET["Id"])){
	$teste = $testeDao->GetTesteId($_GET["Id"]);

	if (isset($_GET['atualizar'])){
		$teste->setNome($_POST['txtNome']);
		$teste->setDescricao($_POST['txtDescricao']);
		
		if($testeDao->UpdateTeste($teste)){
			$logDao->InsertLog($_SESSION["nome"],"Teste atualizado com sucesso");
			echo "<script>alert('teste atualizado com sucesso!');</script>";
			header('Location: '."listaTeste.php");
		}
	}


	$smarty->assign('teste',$teste);
	$smarty->assign('testeId', $_GET["Id"]);

	$smarty->display("atualizar_teste.tpl");	
}else {
	header('Location: '."listaTeste.php");
}




?>

