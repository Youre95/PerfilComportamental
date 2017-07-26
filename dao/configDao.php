<?php
include_once "./database/connection.php";


class ConfigDao {
	
	public function GetConfig($key, $context){
		$con = new Db();
		$resultado = $con->select("select * from configuracoes_sistema  where key_system = '$key' and context = '$context' ");
		return $resultado;
	}

	public function GetConfigId($id){
		$con = new Db();
		$resultado = $con->select("select * from configuracoes_sistema  where configuracoes_sistema_id = $id ");
		
		$config = new ConfigProperty();
		$config->setConfiguracao($resultado[0]['configuracoes_sistema_id']);
		$config->setKeySystem($resultado[0]['key_system']);
		$config->setValueSystem($resultado[0]['value_system']);
		$config->setContext($resultado[0]['context']);
		
		return $config;
	}
	
	public function GetConfigByContext($context){
		$con = new Db();
		$resultado = $con->select("select * from configuracoes_sistema  where context = '$context' ");
		return $resultado;
	}
	
	public function InsertConfig(ConfigProperty $config){

		$key = $config->getKeySystem();
		$context = $config->getContext();
		$value = $config->getValueSystem();
		
		$resultado = $this->GetConfig($key, $context);
		if(empty($resultado)){
			$con = new db();
			$SQL = $con->query("INSERT INTO configuracoes_sistema(key_system, value_system, context) VALUES ('$key','$value','$context')");
			return $SQL;
		}
		
		return false;
	}
	
	
	public function UpdateConfig(ConfigProperty $config){
		$con = new db();
	
		$configId = $config->getConfiguracao();
		$key = $config->getKeySystem();
		$context = $config->getContext();
		$value = $config->getValueSystem();
			
		$resultado = $this->GetConfig($key, $context);
		if(empty($resultado) || $resultado[0]["configuracoes_sistema_id"] == $configId){
			$SQL = $con->query("UPDATE configuracoes_sistema SET key_system='$key',value_system='$value',context='$context' WHERE configuracoes_sistema_id = '$configId'");
			return $SQL;
		}
		
		return false;
		
	}
	
	
	public function DeleteConfig($configId){
		$con = new db();
		$SQL = $con->query("DELETE FROM configuracoes_sistema WHERE configuracoes_sistema_id = '$configId'");
		return $SQL;
	}
	
	public function ListConfig(){
		$con = new Db();
		$resultado = $con->select("select * from configuracoes_sistema");
		return $resultado;
	}
	
	
	
}

