<?php
require_once "smarty.php";
include "./model/model_config.php";
include "./dao/configDao.php";

session_start();
if(!isset($_SESSION['user_id'])) {
	$smarty->assign("erro", "Você não está autorizado acessar esta página");$smarty->display ( "login.tpl" );
	return false;
}

$smarty->assign('profile',$_SESSION["profile"]); 
$smarty->assign('nomeBemvindo',$_SESSION["nome"]); 
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);

$configDao = new ConfigDao();

if( isset ($_GET['nomePesquisa'] )  && !empty ($_GET['nomePesquisa'])) {
	$returnConfig = $configDao->GetConfigByContext($_GET['nomePesquisa']);
}else{
	$returnConfig = $configDao->ListConfig();

}

	$configArray = array();
	
	foreach ($returnConfig as $saida) {
		$configPropertie = new ConfigProperty();
		$configPropertie->setConfiguracao($saida["configuracoes_sistema_id"]);
		$configPropertie->setKeySystem($saida["key_system"]);
		$configPropertie->setValueSystem($saida["value_system"]);
		$configPropertie->setContext($saida["context"]);
		$configArray[] = $configPropertie;
	}

if(isset($returnConfig)){
	$smarty->assign('configCount', count($returnConfig));
	$smarty->assign('configArray',$configArray);
} else {
	$smarty->assign('configCount', 0);
	$smarty->assign('configArray', null);
}

$smarty->display("listConfig.tpl");
?>
