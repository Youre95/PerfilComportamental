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

$smarty->assign ( 'profile', $_SESSION ["profile"] );
$smarty->assign ( 'nomeBemvindo', $_SESSION ["nome"] );
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);

$usuarioDao = new UsuarioDao();
$usuario = $usuarioDao->GetUsuarioId( $_SESSION['user_id']);

if(isset($usuario)){
	
	$faculdade = $usuario->getFaculdade();
	$curso = $usuario->getCurso();
	
	if(empty($faculdade) || empty($curso)){
		header('Location: '."atualizar_usuario.php?auto");
	}
	
	
	$resultadoDao = new ResultadoDao();
	$perfisPkFacul = $resultadoDao->GetResultadoFaculdade($faculdade);
	$perfisPkCurso = $resultadoDao->GetResultadoCurso($curso);
	
	$facul = array();
	$usu = $perfisPkFacul[0]['usuario_id_fk'];
	foreach ($perfisPkFacul as $pkFacul ){
		if ($usu == $pkFacul['usuario_id_fk']){
			$facul[$pkFacul['usuario_id_fk']] = $pkFacul['perfil_comportamental_id_fk'];
		}else{
			$facul[$pkFacul['usuario_id_fk']] = $pkFacul['perfil_comportamental_id_fk'];
			$usu = $pkFacul['usuario_id_fk'];
		}
	}
	
	$cursoArray = array();
	$usu = $perfisPkFacul[0]['usuario_id_fk'];
	foreach ($perfisPkFacul as $pkCurso ){
		if ($usu == $pkCurso['usuario_id_fk']){
			$cursoArray[$pkCurso['usuario_id_fk']] = $pkCurso['perfil_comportamental_id_fk'];
		}else{
			$cursoArray[$pkCurso['usuario_id_fk']] = $pkCurso['perfil_comportamental_id_fk'];
			$usu = $pkCurso['usuario_id_fk'];
		}
	}
	
	
	$totalPerfisPkFacul = count($facul);
	$gatoFacul = 0;
	$loboFacul = 0;
	$aguiaFacul = 0;
	$tubaraoFacul = 0;
	
	$totalPerfisPkCurso = count($cursoArray);
	$gatoCurso = 0;
	$loboCurso = 0;
	$aguiaCurso = 0;
	$tubaraoCurso = 0;
	
	$perfilDao = new PerfilDao ();
	
	foreach ($cursoArray as $pkCurso => $value ){
		$perfil = $perfilDao->GetPerfilId ( $value );
		$a =  $perfil->getOrdem();
	
		if ($a == 1)
			$gatoCurso++;
		if ($a == 2)
			$loboCurso++;
		if ($a == 3)
			$aguiaCurso++;
		if ($a == 4)
			$tubaraoCurso++;
	}
	
	
	foreach ($facul as $pkFacul => $value  ){
		$perfil = $perfilDao->GetPerfilId ( $value );
		$a =  $perfil->getOrdem();
		
		if ($a == 1)
			$gatoFacul++;
		if ($a == 2)
			$loboFacul++;
		if ($a == 3)
			$aguiaFacul++;
		if ($a == 4)
			$tubaraoFacul++;
	}
	
	
	$gatoFaculPercent = ($gatoFacul * 100 ) / $totalPerfisPkFacul;
	$loboFaculPercent = ($loboFacul * 100 ) / $totalPerfisPkFacul;
	$aguiaFaculPercent = ($aguiaFacul * 100 ) / $totalPerfisPkFacul;
	$tubaraoFaculPercent = ($tubaraoFacul * 100 ) / $totalPerfisPkFacul;	
	
	$gatoCursoPercent = ($gatoCurso * 100 ) / $totalPerfisPkCurso;
	$loboCursoPercent = ($loboCurso * 100 ) / $totalPerfisPkCurso;
	$aguiaCursoPercent = ($aguiaCurso * 100 ) / $totalPerfisPkCurso;
	$tubaraoCursoPercent = ($tubaraoCurso * 100 ) / $totalPerfisPkCurso;
	
	
	$smarty->assign ( 'totalPerfisPkCurso', round ($totalPerfisPkCurso ));
	$smarty->assign ( 'totalPerfisPkFacul',   round ($totalPerfisPkFacul ));
	
	$smarty->assign ( 'tubaraoPercentFacul', round ($tubaraoFaculPercent ));
	$smarty->assign ( 'loboPercentFacul',   round ($loboFaculPercent ));
	$smarty->assign ( 'gatoPercentFacul', round ($gatoFaculPercent ));
	$smarty->assign ( 'aguiaPercentFacul',round ( $aguiaFaculPercent ));
	
	$smarty->assign ( 'tubaraoPercentCurso', round ($tubaraoCursoPercent ));
	$smarty->assign ( 'loboPercentCurso',   round ($loboCursoPercent ));
	$smarty->assign ( 'gatoPercentCurso', round ($gatoCursoPercent ));
	$smarty->assign ( 'aguiaPercentCurso',round ( $aguiaCursoPercent ));
	
	$smarty->assign ( 'curso', $curso );
	$smarty->assign ( 'faculdade', $faculdade );
	
	$smarty->display("perfil_universos.tpl");
}




?>