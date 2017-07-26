<?php 

require_once "smarty.php";
include "./model/model_usuario.php";
include "./dao/usuarioDao.php";

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

$usuarioDao = new UsuarioDao();

if( isset ($_GET['nomePesquisa'] )) {
	
	$returnUsuario = $usuarioDao->GetUsuarioByName($_GET['nomePesquisa']);
}else{
	$returnUsuario = $usuarioDao->GetUsuarioAll();
}

if(isset($returnUsuario) && !empty($returnUsuario) ){
	$smarty->assign('usuarioCount', count($returnUsuario));
	$smarty->assign('usuario', $returnUsuario);
}else {
	$smarty->assign('usuarioCount', 0);
	$smarty->assign('usuario', null);
}

$smarty->display("listaUsuarios.tpl");
?>
