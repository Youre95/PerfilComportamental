<?php 
require_once "smarty.php";

include "./model/model_pergunta.php";
include "./dao/perguntaDao.php";

session_start();
if(!isset($_SESSION['user_id'])) {
	$smarty->assign("erro", "Você não está autorizado acessar esta página");$smarty->display ( "login.tpl" );
	return false;
}

$smarty->assign('profile',$_SESSION["profile"]); 
$smarty->assign('nomeBemvindo',$_SESSION["nome"]); 
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);

$perguntaDao = new PerguntaDao();


if( isset ($_GET['nomePesquisa'] )) {
	$returnPergunta = $perguntaDao->GetPerguntaByName($_GET['nomePesquisa']);	
}else{
	$returnPergunta = $perguntaDao->GetPerguntaAll();

}

 
$perguntaArray = array();

foreach ($returnPergunta as $saida) {
	$perguntaPropertie = new PerguntaProperty();
	$perguntaPropertie->setPergunta($saida["pergunta_id"]); 
	$perguntaPropertie->setTeste($saida["teste_id_fk"]);
	$perguntaPropertie->setTextoPergunta($saida["texto_pergunta"]);
	$perguntaPropertie->setEscolha($saida["escolhas"]);
	$perguntaPropertie->setValorEscolha($saida["valor_escolha"]);
	$perguntaArray[]= $perguntaPropertie;
}
if(isset($returnPergunta)){
	$smarty->assign('perguntaCount', count($returnPergunta));
	$smarty->assign('pergunta', $perguntaArray);
}
else {
	$smarty->assign('perguntaCount', 0);
	$smarty->assign('pergunta', null);
}

$smarty->display("listaPergunta.tpl");

?>


