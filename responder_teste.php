<?php 

require_once "smarty.php";
include "./model/model_teste.php";
include "./dao/testeDao.php";
include "./model/model_pergunta.php";
include "./dao/perguntaDao.php";
include "./model/model_resultado.php";
include "./dao/resultadoDao.php";
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

$testeDao = new TesteDao();

 

/**
 * TODO Criar uma configuração no banco de dados que diga qual o ID do teste que estamos utilizando 
 * Vamos fazer uma query nessa tabela e logo faremos a query pelo ID do teste
 * A query a seguir é supondo que o teste utilizado é o teste de ID número 1
 * 
 */
$configDao = new ConfigDao();
$id = $configDao->GetConfig("ID_TESTE_ATUAL", "RESPONDER_PERGUNTA")[0]["value_system"];
$teste = $testeDao->GetTesteId($id);

if(isset($teste)){
	$smarty->assign('teste', $teste);
}else {
	$smarty->assign('teste', null);
}

$perguntaDao = new PerguntaDao();


$returnPerguntas = $perguntaDao->GetPerguntasByTeste($teste->getTeste());
$perguntaArray = array();


$contador = 0;

$array0 = array();
$array1 = array();
$array2 = array();
$array3 = array();
$array4 = array();

foreach ($returnPerguntas as $saida){
	$perguntaPropertie = new PerguntaProperty();
	$perguntaPropertie->setPergunta($saida["pergunta_id"]);
	$perguntaPropertie->setTeste($saida["teste_id_fk"]);
	$perguntaPropertie->setTextoPergunta( $saida["texto_pergunta"]  );
	$perguntaPropertie->setEscolha( $saida["escolhas"] );
	$perguntaPropertie->setValorEscolha($saida["valor_escolha"]);
	
	
	$arrayValor = explode (",", $perguntaPropertie->getValorEscolha());
	$arrayEscolha = explode (";", $perguntaPropertie->getEscolha());
	
	$arrayGlobal = array();

	for ($i=0; $i < count ( $arrayEscolha ); $i++ ){
		$arrayGlobal[trim ( $arrayValor[$i] )] = $arrayEscolha[$i];
	}
	
	$perguntaPropertie->setArrayEscolha ( $arrayGlobal  );
	
	if($contador >= 0 && $contador <= 4 ){
		$array0[] = $perguntaPropertie;
	}else if($contador >= 5 && $contador <= 9 ){
		$array1[] = $perguntaPropertie;
	}else if($contador >= 10 && $contador <= 14 ){
		$array2[] = $perguntaPropertie;
	}else if($contador >= 15 && $contador <= 19 ){
		$array3[] = $perguntaPropertie;
	}else if($contador >= 20 && $contador <= 24 ){
		$array4[] = $perguntaPropertie;
	}
	
	$contador++;
}

if(isset($returnPerguntas)){
	$smarty->assign('array0', $array0);
	$smarty->assign('array1', $array1);
	$smarty->assign('array2', $array2);
	$smarty->assign('array3', $array3);
	$smarty->assign('array4', $array4);
}else {
	$smarty->assign('array0', null);
	$smarty->assign('array1', null);
	$smarty->assign('array2', null);
	$smarty->assign('array3', null);
	$smarty->assign('array4', null);
}

$smarty->display("responder_teste.tpl");

?>