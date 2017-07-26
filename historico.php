<?php 

include "./model/model_usuario.php";
include "./dao/usuarioDao.php";

include "./model/model_perfil.php";
include "./dao/resultadoDao.php";


require_once "smarty.php";

session_start();
if(!isset($_SESSION['user_id'])) {
	$smarty->assign("erro", "Você não está autorizado acessar esta página");$smarty->display ( "login.tpl" );
	return false;
}

$smarty->assign('profile',$_SESSION["profile"]); 
$smarty->assign('nomeBemvindo',$_SESSION["nome"]);
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);


$resultadoDao = new ResultadoDao ();
$SQL = $resultadoDao->GetResultadoByUsuario ( $_SESSION ['user_id'] );


if(isset($SQL)){
	$gato = array();
	$aguia = array();
	$tubarao = array();
	$lobo = array();
	$dataHora = array();
	
	foreach ( $SQL as $value){
		$gato[] = $value["perfil_gato"];
		$aguia[] = $value["perfil_aguia"];
		$tubarao[] = $value["perfil_tubarao"];
		$lobo[] = $value["perfil_lobo"];
		$dataHora[] = $value["data_hora"];
	}
	
	
	$smarty->assign ( 'tubarao', implode(",", $tubarao ));
	$smarty->assign ( 'lobo',   implode(",", $lobo  ) );
	$smarty->assign ( 'gato', implode(",", $gato  ) );
	$smarty->assign ( 'aguia', implode(",", $aguia  )  );
	$smarty->assign ( 'dataHora', implode(",", $dataHora  ) );

	$smarty->display("historico.tpl");
}

	
	
	

	







?>
