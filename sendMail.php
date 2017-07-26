<?php
include './PHPMailer/PHPMailerAutoload.php';
/*
 * include_once "./PHPMailer/PHPMailer.class.php";
 * include_once "./PHPMailer/SMTP.class.php";
 * include_once "./PHPMailer/POP3.class.php";
 */

require_once "smarty.php";

include "./model/model_config.php";
include "./dao/configDao.php";

include "./model/model_usuario.php";
include "./dao/usuarioDao.php";

include "./model/model_perfil.php";
include "./dao/perfilDao.php";

include "./dao/logDao.php";

$usuarioDao = new UsuarioDao ();
$logDao = new LogDao();

$configDao = new ConfigDao ();
$host = $configDao->GetConfig ( "HOSTSMPT", "SMTP" )[0]["value_system"];
$port = $configDao->GetConfig ( "PORTSMPT", "SMTP" )[0]["value_system"];
$pass = $configDao->GetConfig ( "PASSSMPT", "SMTP" )[0]["value_system"];
$user = $configDao->GetConfig ( "USERSMPT", "SMTP" )[0]["value_system"];
$protocol = $configDao->GetConfig ( "PROTOCOL", "SMTP" )[0]["value_system"];

$assinatura = $configDao->GetConfig ( "ASSINATURA_RESULTADO", "EMAIL" )[0]["value_system"];
$nomeEmail = $configDao->GetConfig ( "NOME_EMAIL", "EMAIL" )[0]["value_system"];

if (isset ( $_POST ["email"] )) {
	
	$assunto = $configDao->GetConfig("ASSUNTO_SENHA", "EMAIL")[0]["value_system"];
	
	$returnUsuario = $usuarioDao->GetUsuarioEmail2 ( $_POST ['email'] );
	if(isset($returnUsuario)){
		$nomeUser = $returnUsuario->getNome ();
		$id = $returnUsuario->getUsuario();
		$destino = array (
				$returnUsuario->getEmail () => $nomeUser
		);
		$body = "Prezado $nomeUser, <br/> Por favor clique no <a href=\"scp.16mb.com/mudarSenha.php?esqueceu=$id\">link</a> para redefinir sua senha <br/><br/> $assinatura";
	}else{
		echo "<script>alert('O email não pertence a nenhum usuário do sistema ');</script>"; 
		die();
	}
	
} else {
	
	session_start ();
	if (! isset ( $_SESSION ['user_id'] )) {
		header ( "Location: login.php" );
		return false;
	}
	
	$smarty->assign ( 'profile', $_SESSION ["profile"] );
	$smarty->assign ( 'nomeBemvindo', $_SESSION ["nome"] );
	$smarty->assign ( 'perfil', $_SESSION ["perfil"] );
	$smarty->assign ( 'percentPerfil', $_SESSION ["percentPerfil"] );
	
	$returnUsuario = $usuarioDao->GetUsuarioId ( $_SESSION ['user_id'] );
	$nomeUser = $returnUsuario->getNome ();
	$destino = array (
			$returnUsuario->getEmail () => $nomeUser
	);
	
	$assunto = $configDao->GetConfig ( "ASSUNTO_RESULTADO", "EMAIL" )[0]["value_system"];
	
	$bodyExplicacao = $configDao->GetConfig ( "BODY_EXPLICACAO", "EMAIL" )[0]["value_system"];
	
	$perfilDao = new PerfilDao ();
	$SQL = $perfilDao->GetPerfilByUsuario ( $_SESSION ['user_id'] );
	
	if (isset ( $SQL [0] ["pontos_fortes"] )) {
		$pontosFortes = $SQL [0] ["pontos_fortes"];
		$pontosMelhoria = $SQL [0] ["pontos_melhoria"];
		$valores = $SQL [0] ["valores"];
		$descricao = $SQL [0] ["descricao"];
		$nomePerfil = $SQL [0] ["nome"];
		$image = $SQL [0] ["uri_image_perfil"];
		
		$tubaraoPercent = $SQL [0] ["tubarao_percent"];
		$loboPercent = $SQL [0] ["lobo_percent"];
		$gatoPercent = $SQL [0] ["gato_percent"];
		$aguiaPercent = $SQL [0] ["aguia_percent"];
		
		$perfilTubarao = $SQL [0] ["perfil_tubarao"];
		$perfilLobo = $SQL [0] ["perfil_lobo"];
		$perfilGato = $SQL [0] ["perfil_gato"];
		$perfilAguia = $SQL [0] ["perfil_aguia"];
		
		$body = "Prezado(a) $nomeUser, <br/><br/> $bodyExplicacao Os seus resultados foram: <br/><br/>
		<b>Esquerdo / Racional</b> = Organização($loboPercent%) + Realização ($tubaraoPercent%) = $perfilLobo% <br/>
		<b>Anterior / Ideias</b> = Organização ($loboPercent%) + Idealização ($aguiaPercent%) = $perfilAguia%  <br/>
		<b>Posterior / Ação</b> = Realização ($tubaraoPercent%) + Comunicação ($gatoPercent%) = $perfilTubarao%  <br/>
		<b>Direito / Intuitivo</b> = Idealização ($aguiaPercent%) + Comunicação ($gatoPercent%) = $perfilGato% <br/><br/>
		<b>$nomePerfil</b><br/> $descricao <br/><b>Pontos Fortes</b>: $pontosFortes <br/><b>Pontos de Melhoria</b>: $pontosMelhoria <br/> <b>Valores</b>: $valores <br/><br/> $assinatura";
	} else {
		echo "<script>alert('ocorreu um erro');</script>";
		header ( 'Location: ' . "responder_teste.php" );
		return false;
	}
}




$mail = new PHPMailer ();
$mail->IsSMTP (); // Ativar SMTP
$mail->isHTML ( true );
$mail->charset = 'UTF-8';
$mail->SMTPDebug = 1; // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
$mail->SMTPAuth = true; // Autenticação ativada
$mail->SMTPSecure = $protocol;
$mail->Host = $host;
$mail->Port = $port;
$mail->Username = $user;
$mail->Password = $pass;
$mail->SetFrom ( $user, $nomeEmail );
// $mail->AddReplyTo("no-reply@pix.com.br","No Reply");

foreach ( $destino as $email => $name ) {
	$mail->addAddress ( $email, $name );
	$logDao->InsertLog($name,"Enviando email com sucesso");
}

$mail->Subject = $assunto;
$mail->msgHTML ( $body );


if ($mail->Send ()) {
	echo "<script>alert('Email enviado com sucesso, verifique sua caixa de entrada');</script>";
} else {
	echo "<script>alert('Ocorreu um erro tentando enviar o email, por favor tente mais tarde');</script>";
}
	




