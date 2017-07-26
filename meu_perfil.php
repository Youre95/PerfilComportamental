<?php
require_once "smarty.php";
include "./model/model_teste.php";
include "./dao/testeDao.php";
include "./model/model_pergunta.php";
include "./dao/perguntaDao.php";
include "./model/model_resultado.php";
include "./dao/resultadoDao.php";
include "./model/model_perfil.php";
include "./dao/perfilDao.php";

session_start ();
if (! isset ( $_SESSION ['user_id'] )) {
	header ( "Location: login.php" );
	return false;
}

$smarty->assign ( 'profile', $_SESSION ["profile"] );
$smarty->assign ( 'nomeBemvindo', $_SESSION ["nome"] );
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);

$perfilDao = new PerfilDao ();
$SQL = $perfilDao->GetPerfilByUsuario ( $_SESSION ['user_id'] );

if (isset ( $SQL[0]["pontos_fortes"] )) {
	$smarty->assign ( 'pontosFortes', $SQL [0] ["pontos_fortes"] );
	$smarty->assign ( 'pontosMelhoria', $SQL [0] ["pontos_melhoria"] );
	$smarty->assign ( 'valores', $SQL [0] ["valores"] );
	$smarty->assign ( 'descricao', $SQL [0] ["descricao"] );
	$smarty->assign ( 'nome', $SQL [0] ["nome"] );
	$smarty->assign ( 'image', $SQL [0] ["uri_image_perfil"] );
	
	$smarty->assign ( 'tubaraoPerfil', $SQL [0] ["perfil_tubarao"] );
	$smarty->assign ( 'loboPerfil', $SQL [0] ["perfil_lobo"] );
	$smarty->assign ( 'gatoPerfil', $SQL [0] ["perfil_gato"] );
	$smarty->assign ( 'aguiaPerfil', $SQL [0] ["perfil_aguia"] );
	
	$smarty->assign ( 'tubaraoPercent', $SQL [0] ["tubarao_percent"] );
	$smarty->assign ( 'loboPercent', $SQL [0] ["lobo_percent"] );
	$smarty->assign ( 'gatoPercent', $SQL [0] ["gato_percent"] );
	$smarty->assign ( 'aguiaPercent', $SQL [0] ["aguia_percent"] );
	
	$smarty->display ( "resultado.tpl" );
} else {
	echo "<script>alert('ocorreu um erro');</script>";
	header('Location: '."responder_teste.php");
	return false;
}



?>