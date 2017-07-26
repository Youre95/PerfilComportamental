<?php 
require_once "smarty.php";
include "./model/model_teste.php";
include "./dao/testeDao.php";

session_start();
if(!isset($_SESSION['user_id'])) {
	$smarty->assign("erro", "Você não está autorizado acessar esta página");$smarty->display ( "login.tpl" );
	return false;
}

$smarty->assign('profile',$_SESSION["profile"]); 
$smarty->assign('nomeBemvindo',$_SESSION["nome"]); 
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);

$testeDao = new TesteDao();

if( isset ($_GET['nomePesquisa'] )) {
	$returnTeste = $testeDao->GetTesteByName($_GET['nomePesquisa']);	
}else{
	$returnTeste = $testeDao->GetTesteAll();	
}

$testeArray = array();

foreach ($returnTeste as $saida) {
	$testePropertie = new TesteProperty();
	$testePropertie->setTeste($saida["teste_id"]);
	$testePropertie->setNome($saida["nome"]);
	$testePropertie->setDescricao($saida["descricao"]);
	$testeArray[] = $testePropertie;
}

if(isset($returnTeste)){
	$smarty->assign('testeCount', count($returnTeste));
	$smarty->assign('teste', $testeArray);
}else {
	$smarty->assign('testeCount', 0);
	$smarty->assign('teste', null);
}

$smarty->display("listaTeste.tpl");
?>
