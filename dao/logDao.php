<?php
include_once "./database/connection.php";


class LogDao {
	
	public function GetLogByEntidade($entidade){
		$con = new Db();
		$resultado = $con->select("SELECT * FROM log_sistema WHERE entidade = '$entidade'");
		return $resultado;
	}
	
	public function InsertLog($entidade, $texto ){
		$con = new db();
		$data = date('Y-m-d H:i:s');
		$SQL = $con->query("INSERT INTO log_sistema(entidade, texto, date_creation) VALUES ('$entidade','$texto', '$data')");
		return $SQL;
	}
	
	
	public function DeleteLog($id){
		$con = new db();
		$SQL = $con->query("DELETE FROM log_sistema WHERE log_sistema_id = '$id'");
		return $SQL;
	}
	
	public function ListLog(){
		$con = new Db();
		$resultado = $con->select("SELECT log_sistema_id, entidade, texto, date_creation FROM log_sistema");
		return $resultado;
	}
	
	
	
}

