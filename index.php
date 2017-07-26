
<?php 

include "./model/model_usuario.php";
include "./dao/usuarioDao.php";

include "./model/model_resultado.php";
include "./dao/resultadoDao.php";

include "./model/model_perfil.php";
include "./dao/perfilDao.php";
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

$perfilDao = new PerfilDao();
$usuarioDao = new UsuarioDao();
$returnUser = $usuarioDao->GetUsuarioAll();

if(isset($_GET["code"])){
	$estado = $_GET["code"];
	$qtdUsers = $usuarioDao->CountUsuarioByEstado($estado);
	echo $qtdUsers;
	die();
}

$arrayFacul = array();
$arrayCurso = array();

foreach ($returnUser as $user){
	$arrayFacul[] = trim(strtoupper($user->getFaculdade()));
	$arrayCurso[] = trim(strtoupper($user->getCurso()));
}

$totalFacul = count(array_unique($arrayFacul));
$totalCurso = count(array_unique($arrayCurso));

$totalUsers = count($returnUser);
$smarty->assign('totalUsers', $totalUsers);
$smarty->assign('totalFacul', $totalFacul);
$smarty->assign('totalCurso', $totalCurso);



$resultadoDao = new ResultadoDao ();
$resultados = $resultadoDao->GetResultadoAll();
$totalRespostas = count($resultados);
$smarty->assign('totalRespostas', $totalRespostas);


$arrayRespostaTempo = array();
$arrayData = array();

$gato = 0;
$lobo = 0;
$aguia = 0;
$tubarao = 0;

foreach ($resultados as  $value ){
	
	if( $value["perfil_comportamental_id_fk"] != 0){
		$perfil = $perfilDao->GetPerfilId ( $value["perfil_comportamental_id_fk"] );
		$arrayData[] =  explode(" ", $value["data_hora"])[0];
		
		$a = $perfil->getOrdem();
		if ($a == 1)
			$gato++;
		if ($a == 2)
			$lobo++;
		if ($a == 3)
			$aguia++;
		if ($a == 4)
			$tubarao++;		
	}
}

$counts = array_count_values($arrayData);
foreach ($arrayData as $value){
	$date = new DateTime($value);
	$arrayRespostaTempo[$date->getTimestamp(). "000"] = $counts[$value];
}


$gatoPercent = ($gato * 100 ) / $totalRespostas;
$loboPercent = ($lobo * 100 ) / $totalRespostas;
$aguiaPercent = ($aguia * 100 ) / $totalRespostas;
$tubaraoPercent = ($tubarao * 100 ) / $totalRespostas;

$smarty->assign ( 'tubaraoPercent', round ($tubaraoPercent ));
$smarty->assign ( 'loboPercent',   round ($loboPercent ));
$smarty->assign ( 'gatoPercent', round ($gatoPercent ));
$smarty->assign ( 'aguiaPercent',round ( $aguiaPercent ));

$arrayStringConc = array();
foreach ($arrayRespostaTempo as $key => $value){
	$string = $key . ', '. $value;
	$arrayStringConc[] = $string;
}


$resultadoGeral = implode (";", $arrayStringConc);

$smarty->assign ( 'resultadoGeral', $resultadoGeral);

$smarty->display("index.tpl");

?>

