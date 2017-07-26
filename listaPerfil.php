<?php
require_once "smarty.php";
include "./model/model_perfil.php";
include "./dao/perfilDao.php";

session_start();
if(!isset($_SESSION['user_id'])) {
	$smarty->assign("erro", "Você não está autorizado acessar esta página");$smarty->display ( "login.tpl" );
	return false;
}

$smarty->assign('profile',$_SESSION["profile"]); 
$smarty->assign('nomeBemvindo',$_SESSION["nome"]); 
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);

$perfilDao = new PerfilDao();

if( isset ($_GET['nomePesquisa'] )) {
	$returnPerfil = $perfilDao->GetPerfilByName($_GET['nomePesquisa']);
}else{
	$returnPerfil = $perfilDao->GetPerfilAll();

}

	$perfilArray = array();
	
	foreach ($returnPerfil as $saida) {
		$perfilPropertie = new PerfilProperty();
		$perfilPropertie->setPerfilComportamental($saida["perfil_comportamental_id"]);
		$perfilPropertie->setNome($saida["nome"]);
		$perfilPropertie->setPontosFortes($saida["pontos_fortes"]);
		$perfilPropertie->setPontosMelhoria($saida["pontos_melhoria"]);
		$perfilPropertie->setValores($saida["valores"]);
		$perfilPropertie->setDescricao($saida["descricao"]);
		$perfilArray[] = $perfilPropertie;
	}

if(isset($returnPerfil)){
	$smarty->assign('perfilCount', count($returnPerfil));
	$smarty->assign('perfilArray',$perfilArray);
} else {
	$smarty->assign('perfilCount', 0);
	$smarty->assign('perfilArray', null);
}

$smarty->display("listaPerfil.tpl");
?>
