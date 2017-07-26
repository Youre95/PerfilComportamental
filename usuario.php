<?php
require_once "smarty.php";

include "./model/model_usuario.php";
include "./dao/usuarioDao.php";
include "./dao/logDao.php";

session_start ();

$usuarioDao = new UsuarioDao ();
$logDao = new LogDao();

if (!isset($_SESSION ['user_id'] )) {
	if (isset ( $_GET ['externo'] )) {
		if (isset ( $_POST ['nome'] )) {
			$userEmail  = $usuarioDao->GetUsuarioEmail2($_POST['email']);
			if(!isset($userEmail)){
				$usuario = new UsuarioProperty ();
				$usuario->setNome ( $_POST ['nome'] );
				$usuario->setEmail ( $_POST ['email'] );
				$usuario->setPassword ( md5 ( $_POST ['senha'] ) );
				$usuario->setStatus ( "Pendente" );
				$usuario->setPerfilSistema ( "2" );
				
				$uri_image = './images/profile/default.png';
				$usuario->setPerfilImg ( $uri_image );
				
				if ($usuarioDao->InsertUsuario ( $usuario )) {
					$logDao->InsertLog($usuario->getNome(),"Usuario cadastrado com sucesso");
					echo "<script>alert('Usuario cadastrado com sucesso!');</script>";
					$smarty->assign ( 'sucesso', "Usuário cadastrado com sucesso" );
				} else {
					$logDao->InsertLog("Sistema","Ocorreu um erro tentando cadastrar o usuário");
					$smarty->assign ( 'erro', "Ocorreu um erro tentando cadastrar o usuário" );
				}
			}else{
				$email = $_POST ['email'];
				$smarty->assign ( 'erro', "O email $email está sendo utilizado" );
			}
		}
		$smarty->display ( "login.tpl" );
		return;
	} else {
		header ( "Location: login.php" );
		return false;
	}
}

$smarty->assign ( 'profile', $_SESSION ["profile"] );
$smarty->assign ( 'nomeBemvindo', $_SESSION ["nome"] );
$smarty->assign('perfil', $_SESSION["perfil"]); 
$smarty->assign('percentPerfil', $_SESSION["percentPerfil"]);

if (isset ( $_POST ['nome'] )) {
	$userEmail  = $usuarioDao->GetUsuarioEmail2($_POST['email']);
	if(!isset($userEmail)){
		
		$usuario = new UsuarioProperty ();
		
		$usuario->setNome ( $_POST ['nome'] );
		$usuario->setEmail ( $_POST ['email'] );
		$usuario->setDataNasc ( $_POST ['dataNasc'] );
		$usuario->setCpd ( $_POST ['cpd'] );
		$usuario->setIdade ( getAge ( $_POST ['dataNasc'] ) );
		$usuario->setSexo ( $_POST ['sexo'] );
		$usuario->setCurso ( $_POST ['curso'] );
		$usuario->setSemestre ( $_POST ['semestre'] );
		$usuario->setRenda ( $_POST ['salario'] );
		$usuario->setBolsa ( $_POST ['bolsista'] );
		$usuario->setEndereco ( $_POST ['endereco'] );
		$usuario->setPerfilSistema ( $_POST ['perfil'] );
		$usuario->setFaculdade ( $_POST ['faculdade'] );
		$usuario->setEstado ( $_POST ['estado'] );
		$usuario->setPassword ( md5 ( $_POST ['senha'] ) );
		$usuario->setStatus ( "Ativo" );
		
		$uri_image = './images/profile/default.png';
		$usuario->setPerfilImg ( $uri_image );
		
		if ($usuarioDao->InsertUsuario ( $usuario )) {
			$logDao->InsertLog($usuario->getNome(),"Usuario cadastrado com sucesso");
			echo "<script>alert('Usuario cadastrado com sucesso!');</script>";
			// header('Location: '."listaUsuarios.php");
		}
	}else{
		$email = $_POST ['email'];
		echo "<script>alert('O email $email está sendo utilizado');</script>";
	}
}

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

$smarty->display ( "usuario.tpl" );
function getAge($date) {
	return intval ( date ( 'Y', time () - strtotime ( $date ) ) ) - 1970;
}

?>