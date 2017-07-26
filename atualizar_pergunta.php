<?php
require_once "smarty.php";

include "./model/model_pergunta.php";
include "./dao/perguntaDao.php";
include_once "./dao/testeDao.php";include "./dao/logDao.php";



session_start();
if(!isset($_SESSION['user_id'])) {
	$smarty->assign("erro", "Você não está autorizado acessar esta página");$smarty->display ( "login.tpl" );
	return false;
}

$smarty->assign('profile',$_SESSION["profile"]); 
$smarty->assign('nomeBemvindo',$_SESSION["nome"]); 
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);

$pergunta = new PerguntaProperty();

$perguntaDao = new PerguntaDao();

$testeDao = new TesteDao();
$logDao = new LogDao();

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

if(isset($_GET["Id"])){
		$pergunta = $perguntaDao->GetPerguntaId($_GET["Id"]);

	if (isset($_GET['atualizar'])){
		$pergunta->setTeste($_POST['selectTeste']);
		$pergunta->setTextoPergunta($_POST['txtTexto']);
		$pergunta->setEscolha($_POST['txtEscolha']);
		$pergunta->setValorEscolha($_POST['txtValor']);

		if($perguntaDao->UpdatePergunta($pergunta)){
			$logDao->InsertLog($_SESSION["nome"],"Pergunta atualizada com sucesso");
			echo "<script>alert('pergunta atualizada com sucesso!');</script>";
			header('Location: '."listaPergunta.php");
		}else {
			echo "<script>alert('Não foi possível atualizar a pergunta	');</script>";
		}
	}

	$smarty->assign('teste_id', $pergunta->getTeste());
	$smarty->assign('pergunta', $pergunta);
	$smarty->assign('perguntaId', $_GET["Id"]);

	$smarty->display("atualizar_pergunta.tpl");
}else {
	header('Location: '."listaPergunta.php");
}
?>