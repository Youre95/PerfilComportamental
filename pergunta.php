<?php
require_once "smarty.php";

include "./model/model_pergunta.php";
include "./model/model_teste.php";

include_once "./dao/perguntaDao.php";
include_once "./dao/testeDao.php";

session_start();
if(!isset($_SESSION['user_id'])) {
	$smarty->assign("erro", "Você não está autorizado acessar esta página");$smarty->display ( "login.tpl" );
	return false;
}

$smarty->assign('profile',$_SESSION["profile"]); 
$smarty->assign('nomeBemvindo',$_SESSION["nome"]); 
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);


if (isset($_POST['txtTexto'])){
	
	$pergunta = new PerguntaProperty();
	$pergunta->setTeste($_POST['selectTeste']);
	$pergunta->setTextoPergunta($_POST['txtTexto']);
	$pergunta->setEscolha($_POST['txtEscolha']);
	$pergunta->setValorEscolha($_POST['txtValor']);

	
	$perguntaDao = new PerguntaDao();
	
	if($perguntaDao->InsertPergunta($pergunta)){
		echo "<script>alert('pergunta cadastrada com sucesso!');</script>";
		header('Location: '."listaPergunta.php");
	}else{
		echo "<script>alert('Não foi possível cadastrar a pergunta');</script>";
	}
}


$testeDao = new TesteDao();
$returnTeste = $testeDao->GetTesteAll();	

$testeArray = array();

foreach ($returnTeste as $key => $saida) {
	$testeArray[] = array($saida["teste_id"] => utf8_encode($saida["nome"]));
}

if(isset($returnTeste)){
	$smarty->assign('testes', $testeArray);
}else {
	$smarty->assign('testes', null);
}

$smarty->display("pergunta.tpl");
?>