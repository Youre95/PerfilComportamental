<?php
require_once "smarty.php";
include "./model/model_perfil.php";
include "./dao/perfilDao.php";
include "./dao/logDao.php";



session_start();
if(!isset($_SESSION['user_id'])) {
	$smarty->assign("erro", "Você não está autorizado acessar esta página");$smarty->display ( "login.tpl" );
	return false;
}

$smarty->assign('profile',$_SESSION["profile"]); 
$smarty->assign('nomeBemvindo',$_SESSION["nome"]); 
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);

$perfil = new PerfilProperty();

$perfilDao = new PerfilDao();
$logDao = new LogDao();


if(isset($_GET["Id"])){
	
	$perfil = $perfilDao->GetPerfilId($_GET["Id"]);

if (isset($_GET['atualizar'])){
	 if (isset($_POST['txtNome'])){
	 		if (!isset($_FILES['txtImagem']['error']) || is_array($_FILES['txtImagem']['error'])  ) {
	 				$erro = "Aconteceu um erro fazendo upload da image";
	 		}else {
	 			if(!($_FILES["txtImagem"]["error"] == 4)) {
	 				switch ($_FILES['txtImagem']['error']) {
	 					case UPLOAD_ERR_OK:
	 						break;
	 					case UPLOAD_ERR_NO_FILE:
	 						$erro = "Aconteceu um erro fazendo upload da image";
	 					case UPLOAD_ERR_INI_SIZE:
	 					case UPLOAD_ERR_FORM_SIZE:
	 						$erro = "A imagem excedeu o tamanho limite de upload";
	 					default:
	 						$erro = "Aconteceu um erro fazendo upload da image";
	 				}
	 				
	 				/*if ($_FILES['txtImagem']['size'] > 1000000) {
	 					$erro = "A imagem excedeu o tamanho limite de upload " . '1000000 KB';
	 				}*/
	 				
	 				if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $_FILES['txtImagem']["type"])){
	 						$erro = "Não é uma imagem";
	 				}
	 				
	 				if(isset($erro)){
	 					echo "<script>alert('$erro');</script>";
	 				}else{
		 				$new_name = $_FILES['txtImagem']["name"];
		 				$dir = 'uploads/';
		 				move_uploaded_file($_FILES['txtImagem']['tmp_name'], $dir.time().$new_name); //Fazer upload do arquivo
		 				$perfil->setImage( $dir.time().$new_name );
	 				}
	 				
	 			}
	 		}
	 		
	 		$perfil->setNome($_POST['txtNome']);
			$perfil->setPontosFortes($_POST['txtForte']);
			$perfil->setPontosMelhoria($_POST['txtMelhor']);
			$perfil->setValores($_POST['txtValor']);
			$perfil->setDescricao($_POST['txtDescricao']);
				
				if($perfilDao->UpdatePerfil($perfil)){
					$logDao->InsertLog($_SESSION["nome"],"Perfil atualizado com sucesso");
					echo "<script>alert('Perfil atualizado com sucesso!');</script>";
					header('Location: '."listaPerfil.php");
				}
				
	}
}

$smarty->assign('perfilComp',$perfil);
$smarty->assign('perfilId', $_GET["Id"]);

$smarty->display("atualizar_perfil.tpl");
}else{
	header('Location: '."listaPerfil.php");
}
?>