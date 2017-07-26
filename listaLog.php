<?php
require_once "smarty.php";
include "./model/model_log.php";
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

$lopDao = new LogDao();

if( isset ($_GET['nomePesquisa'] )  && !empty ($_GET['nomePesquisa'])) {
	$returnLog = $lopDao->GetLogByEntidade($_GET['nomePesquisa']);
}else{
	$returnLog = $lopDao->ListLog();

}

	$logArray = array();
	
	foreach ($returnLog as $saida) {
		$logPropertie = new LogProperty();
		$logPropertie->setLogSistemaId($saida["log_sistema_id"]);
		$logPropertie->setEntidade($saida["entidade"]);
		$logPropertie->setDateCreation($saida["date_creation"]);
		$logPropertie->setTexto($saida["texto"]);
		$logArray[] = $logPropertie;
	}

if(isset($returnLog)){
	$smarty->assign('logCount', count($returnLog));
	$smarty->assign('logArray',$logArray);
} else {
	$smarty->assign('logCount', 0);
	$smarty->assign('logArray', null);
}

$smarty->display("listLog.tpl");
?>
