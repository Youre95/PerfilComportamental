<?php

require_once "smarty.php";

include  "./model/model_usuario.php";
include "./dao/usuarioDao.php";
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

$usuarioDao = new UsuarioDao();
$logDao = new LogDao();


if(isset($_GET["Id"]) || isset($_GET["auto"]) || isset($_GET["ativar"]) ){
	
	if(isset($_GET["auto"])){
		$usuario = $usuarioDao->GetUsuarioId($_SESSION["user_id"]);
		$smarty->assign('usuarioId', $_SESSION["user_id"]);
		$smarty->assign('auto', "true");
	}else if(isset($_GET["ativar"])){
		$usuario = $usuarioDao->GetUsuarioId($_GET["Id"]);
		$usuario->setStatus('Ativo');
		if($usuarioDao->UpdateUsuario($usuario)){
			$logDao->InsertLog($_SESSION["nome"],"Usuario ativado com sucesso");
			echo "<script>alert('Usuario ativado com sucesso!');</script>";
			$returnUsuario = $usuarioDao->GetUsuarioAll();
			if(isset($returnUsuario) && !empty($returnUsuario) ){
				$smarty->assign('usuarioCount', count($returnUsuario));
				$smarty->assign('usuario', $returnUsuario);
			}else {
				$smarty->assign('usuarioCount', 0);
				$smarty->assign('usuario', null);
			}
			$smarty->display("listaUsuarios.tpl");
// 			header('Location: '."listaUsuarios.php");
// 			die();
		}else{
			echo "<script>alert('Ocorreu um erro tentando ativar o usuário!');</script>";
			$returnUsuario = $usuarioDao->GetUsuarioAll();
			if(isset($returnUsuario) && !empty($returnUsuario) ){
				$smarty->assign('usuarioCount', count($returnUsuario));
				$smarty->assign('usuario', $returnUsuario);
			}else {
				$smarty->assign('usuarioCount', 0);
				$smarty->assign('usuario', null);
			}
// 			header('Location: '."listaUsuarios.php");
			$smarty->display("listaUsuarios.tpl");
// 			die();
		}
	}else{
		$usuario = $usuarioDao->GetUsuarioId($_GET["Id"]);
		$smarty->assign('usuarioId', $_GET["Id"]);
	}
	
	if (isset($_GET['atualizar'])){
		 if (isset($_POST['nome'])){
				$userEmail  = $usuarioDao->GetUsuarioEmail($_POST['email'], $_GET["Id"]);
				
				if(!isset($userEmail)){
					$usuario->setNome($_POST['nome']);
					$usuario->setEmail($_POST['email']);
					$usuario->setDataNasc($_POST['dataNasc']);
					$usuario->setCpd($_POST['cpd']);
					$usuario->setIdade( getAge($_POST['dataNasc']) );
					$usuario->setSexo($_POST['sexo']);
					$usuario->setCurso($_POST['curso']);
					$usuario->setSemestre($_POST['semestre']);
					$usuario->setRenda($_POST['salario']);
					$usuario->setBolsa($_POST['bolsista']);
					$usuario->setEndereco($_POST['endereco']);
					$usuario->setFaculdade($_POST['faculdade']);
					$usuario->setEstado($_POST['estado']);
					
					
					if (!isset($_FILES['txtImagem']['error']) || is_array($_FILES['txtImagem']['error'])  ) {
						$usuario->setPerfilImg ("./images/profile/default.png");
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
								header('Location: '."atualizar_usuario.php?auto");
							}else{
								$new_name = $_FILES['txtImagem']["name"];
								$dir = './images/profile/';
								move_uploaded_file($_FILES['txtImagem']['tmp_name'], $dir.time().$new_name); //Fazer upload do arquivo
								$usuario->setPerfilImg ($dir.time().$new_name);
							}
					
						}
					}
					
					
					if(isset($_GET["auto"])){
						$_SESSION["nome"] =   $usuario->getNome();
						$smarty->assign('nomeBemvindo',$_SESSION["nome"]); 
						$_SESSION["profile"] = $usuario->getPerfilImg();
						$smarty->assign('profile',$_SESSION["profile"]);
						
						$qtdCampos = 2;
						$facul = $usuario->getFaculdade();
						if(isset($facul))
							$qtdCampos++;	
							
						$curso = $usuario->getCurso();
						if(isset($curso))
							$qtdCampos++;
							
						$estado = $usuario->getEstado();
						if(isset($estado))
							$qtdCampos++;
							
						$percent = ($qtdCampos * 100) / 5;
						$_SESSION["percentPerfil"] =  $percent;
						$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);
						
					}else{
						$usuario->setPerfilSistema($_POST['perfil']);
						$usuario->setStatus($_POST['status']);
					}
			 
					if($usuarioDao->UpdateUsuario($usuario)){
						$logDao->InsertLog($_SESSION["nome"],"Usuario alterado com sucesso");
						echo "<script>alert('Usuario alterado com sucesso!');</script>";
						//header('Location: '."listaUsuarios.php");
					}else{
						$smarty->assign('erro', "Aconteceu um erro tentando alterar o usário");
					}
				}else{
					$smarty->assign('erroEmail', "O email já está sendo usado");
				}
		 }
	}
	
	$status = array(
	"Pendente" => "Pendente",
	"Ativo" => "Ativo",
	"Desligado" => "Desligado");
	
	$semestres  = array(
	"1°" => "1°",
	"2°" => "2°",
	"3°" => "3°",
	"4°" => "4°",
	"5°" => "5°",
	"6°" => "6°",
	"7°" => "7°",
	"8°" => "8°",
	"9°" => "9°",
	"10°"=>  "10°");
	
	$sexos = array(
	"Feminino"  =>  "Feminino",
	"Masculino" => "Masculino");
	
	$salario = array(
	"De 1 a 3 salários mínimos"  	=> "De 1 a 3 salários mínimos",
	"De 4 a 6 salários mínimos" 	=> "De 4 a 6 salários mínimos",
	"De 7 a 9 salários mínimos" 	=> "De 7 a 9 salários mínimos",
	"Acima de 10 salários mínimos" => "Acima de 10 salários mínimos");
	
	$bolsista = array('1' => 'Sim', '0' => 'Não');
	
	$perfisSistemas = array ('1' => "Administrador" , '2' => "Estudante");
	
	$smarty->assign('usuario', $usuario);
	
	//arrays
	$smarty->assign('semestres', $semestres);
	$smarty->assign('sexos', $sexos);
	$smarty->assign('salario', $salario);
	$smarty->assign('bolsista', $bolsista);
	$smarty->assign('status', $status);
	$smarty->assign('perfisSistemas', $perfisSistemas);
	
	$estados = array (
			"AC" => "Acre",
			"AL" => "Alagoas",
			"AM" => "Amazonas",
			"AP" => "Amapá",
			"BA" => "Bahia",
			"CE" => "Ceará",
			"DF" => "Distrito Federal",
			"ES" => "Espírito Santo",
			"GO" => "Goiás",
			"MA" => "Maranhão",
			"MT" => "Mato Grosso",
			"MS" => "Mato Grosso do Sul",
			"MG" => "Minas Gerais",
			"PA" => "Pará",
			"PB" => "Paraíba",
			"PR" => "Paraná",
			"PE" => "Pernambuco",
			"PI" => "Piauí",
			"RJ" => "Rio de Janeiro",
			"RN" => "Rio Grande do Norte",
			"RO" => "Rondônia",
			"RS" => "Rio Grande do Sul",
			"RR" => "Roraima",
			"SC" => "Santa Catarina",
			"SE" => "Sergipe",
			"SP" => "São Paulo",
			"TO" => "Tocantins"
	);
	
	$smarty->assign ( 'estados', $estados );
	
		

	$smarty->display("atualizar_usuario.tpl");
	
}else {
	header('Location: '."listaUsuarios.php");
}

function getAge($date) {
    return intval(date('Y', time() - strtotime($date))) - 1970;
}

?>