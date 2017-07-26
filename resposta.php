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
include "./dao/logDao.php";

session_start ();
if (! isset ( $_SESSION ['user_id'] )) {
	header ( "Location: login.php" );
	return false;
}

$smarty->assign ( 'profile', $_SESSION ["profile"] );
$smarty->assign ( 'nomeBemvindo', $_SESSION ["nome"] );
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);

$resultadoDao = new ResultadoDao ();
$perguntaDao = new PerguntaDao ();
$logDao = new LogDao();

if (isset ( $_POST )) {
	
	$resultado = new ResultadoProperty ();
	
	$qtdLobo = 0;
	$qtdAguia = 0;
	$qtdGato = 0;
	$qtdTubarao = 0;
	
	foreach ( $_POST as $key => $value ) {
		$perguntaPropertie = $perguntaDao->GetPerguntaId ( $key );
		
		if (isset ( $perguntaPropertie )) {
			if ($perguntaPropertie->getOrdem () == 1) {
				$resultado->setEuSou ( $value );
			}
			
			if ($perguntaPropertie->getOrdem () == 2)
				$resultado->setEuGosto ( $value );
			
			if ($perguntaPropertie->getOrdem () == 3)
				$resultado->setVcQuiserSeDarBem ( $value );
			
			if ($perguntaPropertie->getOrdem () == 4)
				$resultado->setObterBomResultado ( $value );
			
			if ($perguntaPropertie->getOrdem () == 5)
				$resultado->setMeDivirto ( $value );
			
			if ($perguntaPropertie->getOrdem () == 6)
				$resultado->setEuPenso ( $value );
			
			if ($perguntaPropertie->getOrdem () == 7)
				$resultado->setPreocupacao ( $value );
			
			if ($perguntaPropertie->getOrdem () == 8)
				$resultado->setEuPrefiro ( $value );
			
			if ($perguntaPropertie->getOrdem () == 9)
				$resultado->setEuGosto2 ( $value );
			
			if ($perguntaPropertie->getOrdem () == 10)
				$resultado->setGostoChegar ( $value );
			
			if ($perguntaPropertie->getOrdem () == 11)
				$resultado->setOtimoDia ( $value );
			
			if ($perguntaPropertie->getOrdem () == 12)
				$resultado->setVejoMorte ( $value );
			
			if ($perguntaPropertie->getOrdem () == 13)
				$resultado->setFilosofiaVida ( $value );
			
			if ($perguntaPropertie->getOrdem () == 14)
				$resultado->setSempreGoste ( $value );
			
			if ($perguntaPropertie->getOrdem () == 15)
				$resultado->setGostoMudanca ( $value );
			
			if ($perguntaPropertie->getOrdem () == 16)
				$resultado->setNaoExisteErrado ( $value );
			
			if ($perguntaPropertie->getOrdem () == 17)
				$resultado->setGostoConselho ( $value );
			
			if ($perguntaPropertie->getOrdem () == 18)
				$resultado->setLema ( $value );
			
			if ($perguntaPropertie->getOrdem () == 19)
				$resultado->setEuGosto3 ( $value );
			
			if ($perguntaPropertie->getOrdem () == 20)
				$resultado->setTempoPraMim ( $value );
			
			if ($perguntaPropertie->getOrdem () == 21)
				$resultado->setBilionario ( $value );
			
			if ($perguntaPropertie->getOrdem () == 22)
				$resultado->setAcreditoQue ( $value );
			
			if ($perguntaPropertie->getOrdem () == 23)
				$resultado->setAcreditoTambemQue ( $value );
			
			if ($perguntaPropertie->getOrdem () == 24)
				$resultado->setAcreditoAinda ( $value );
			
			if ($perguntaPropertie->getOrdem () == 25)
				$resultado->setEuPenso2 ( $value );
			
			if ($value == 'O')
				$qtdLobo ++;
			if ($value == 'I')
				$qtdAguia ++;
			if ($value == 'C')
				$qtdGato ++;
			if ($value == 'A')
				$qtdTubarao ++;
		}
	}
	
	$resultado->setQtdeLobo ( $qtdLobo );
	$resultado->setQtdeAguia ( $qtdAguia );
	$resultado->setQtdeGato ( $qtdGato );
	$resultado->setQtdeTubarao ( $qtdTubarao );
	
	$loboPercent = ($qtdLobo * 100) / 25;
	$aguiaPercent = ($qtdAguia * 100) / 25;
	$gatoPercent = ($qtdGato * 100) / 25;
	$tubaraoPercent = ($qtdTubarao * 100) / 25;
	
	$resultado->setLoboPercent ( $loboPercent );
	$resultado->setAguiaPercent ( $aguiaPercent );
	$resultado->setGatoPercent ( $gatoPercent );
	$resultado->setTubaraoPercent ( $tubaraoPercent );
	
	/*$tubaraoGato = $tubaraoPercent + $gatoPercent;
	$gatoAguia = $gatoPercent + $aguiaPercent;
	$aguiaLobo = $aguiaPercent + $loboPercent;
	$loboTubarao = $loboPercent + $tubaraoPercent;*/
	
	/*$perfilGato = $tubaraoGato + $gatoAguia;
	$perfilTubarao = $tubaraoGato + $loboTubarao;
	$perfilLobo = $loboTubarao + $aguiaLobo;
	$perfilAguia = $aguiaLobo + $gatoAguia;*/
	
	/*$perfilGato1 = $gatoPercent + $tubaraoPercent;
	$perfilTubarao1 = $tubaraoPercent + $loboPercent;
	$perfilLobo1 = $loboPercent + $aguiaPercent;
	$perfilAguia1 = $aguiaPercent + $gatoPercent;*/
	
	
	$perfilGato = $gatoPercent + $aguiaPercent;
	$perfilTubarao = $tubaraoPercent + $gatoPercent;
	$perfilLobo = $loboPercent + $tubaraoPercent;
	$perfilAguia = $aguiaPercent + $loboPercent;
	
	
	$resultado->setPerfilLobo ( $perfilLobo );
	$resultado->setPerfilAguia ( $perfilAguia );
	$resultado->setPerfilGato ( $perfilGato );
	$resultado->setPerfilTubarao ( $perfilTubarao );
	
	if ($perfilGato == $perfilTubarao && $perfilTubarao == $perfilLobo && $perfilLobo == $perfilAguia) {
		$perfil = "100% equilibrado";
	}
	
	
	$arrayComparativo = array ();
	$arrayComparativo [$aguiaPercent] = $perfilAguia;
	$arrayComparativo [$tubaraoPercent] = $perfilTubarao;
	$arrayComparativo [$loboPercent] = $perfilLobo;
	$arrayComparativo [$gatoPercent] = $perfilGato;
	
	
	$arraySoma = array ();
	$perfil = null;
	
	$perfilDao = new PerfilDao ();
	$returnPerfil = $perfilDao->GetPerfilAll ();
	foreach ( $returnPerfil as $saida ) {

		$a = $saida['ordem'];
		if ($a == 1)
			$arraySoma [$saida ["perfil_comportamental_id"]][$gatoPercent] = $perfilGato;
		
		if ($a == 2)
			$arraySoma [$saida ["perfil_comportamental_id"]][$loboPercent] = $perfilLobo;
		
		if ( $a == 3){
			$arraySoma [$saida ["perfil_comportamental_id"]][$aguiaPercent] = $perfilAguia;
		}
		
		if ($a == 4){
			$arraySoma [$saida ["perfil_comportamental_id"]][$tubaraoPercent] = $perfilTubarao;
		}
	}
	
	$max = max ( $arrayComparativo );
	$contadorMax =  0;
	$keyMax;
	foreach ($arraySoma as $key => $value){
		foreach ( $value as $key2 => $value2 ){
			if($value2 == $max){
				if($contadorMax > 0){
					if($key2 > $keyMax){
						$keyMax = $key2;
						$perfil = $key;
					}
				}else{
					$perfil = $key;
					$keyMax = $key2;
					$contadorMax++;
				}
			}
		}
	}
	
	$resultado->setPerfilComportamental ( $perfil );
	
	$resultado->setUsuario ( $_SESSION ['user_id'] );
	$resultado->setResultadoPublico ( 0 );
	$resultado->setDataHora ( date ( 'Y/m/d h:i:s', time () ) );
	
	if ($resultadoDao->InsertResutado ( $resultado )) {
		
		
		
		if( isset($perfil)){
			$perfilOficial = $perfilDao->GetPerfilId ( $perfil );
			
			if (isset ( $perfilOficial )) {
				$smarty->assign ( 'pontosFortes', $perfilOficial->getPontosFortes () );
				$smarty->assign ( 'pontosMelhoria', $perfilOficial->getPontosMelhoria () );
				$smarty->assign ( 'valores', $perfilOficial->getValores () );
				$smarty->assign ( 'descricao', $perfilOficial->getDescricao () );
				$smarty->assign ( 'nome', $perfilOficial->getNome () );
				$smarty->assign ( 'image', $perfilOficial->getImage () );
					
				$smarty->assign ( 'tubaraoPerfil', $perfilTubarao );
				$smarty->assign ( 'loboPerfil',   $perfilLobo );
				$smarty->assign ( 'gatoPerfil', $perfilGato );
				$smarty->assign ( 'aguiaPerfil', $perfilAguia ); 
				
				
				$smarty->assign ( 'tubaraoPercent', $tubaraoPercent );
				$smarty->assign ( 'loboPercent',   $loboPercent );
				$smarty->assign ( 'gatoPercent', $gatoPercent );
				$smarty->assign ( 'aguiaPercent', $aguiaPercent );
					
				
				$logDao->InsertLog($_SESSION["nome"],"Respondeu o teste com sucesso");
				echo "<script>alert('veja o resultado do seu teste');</script>";
				$smarty->display ( "resultado.tpl" );
			} else{
				echo "<script>alert('ocorreu um erro');</script>";
				return false;
			}
				
		}else{
			echo "<script>alert('ocorreu um erro');</script>";
			return false;
		}
		
	}
}

?>