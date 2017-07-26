<?php
include_once "./database/connection.php";
class ResultadoDao{
	public function InsertResutado(ResultadoProperty $resultado){
		$con = new Db();
		
		$perfilComportamental = $resultado->getPerfilComportamental();
		$usuario = $resultado->getUsuario();
		$dataHora = $resultado->getDataHora();
		$euSou = $resultado->getEuSou();
		$euGosto = $resultado->getEuGosto();
		$seDarBem = $resultado->getVcQuiserSeDarBem();
		$bomResultado = $resultado->getObterBomResultado();
		$meDivirto = $resultado->getMeDivirto();
		$euPenso = $resultado->getEuPenso();
		$preocupacao = $resultado->getPreocupacao();
		$euPrefiro = $resultado->getEuPrefiro();
		$euGosto2 = $resultado->getEuGosto2();
		$gostoChegar = $resultado->getGostoChegar();
		$otimoDia = $resultado->getOtimoDia();
		$vejoMorte = $resultado->getVejoMorte();
		$filosofiaVida = $resultado->getFilosofiaVida();
		$sempreGoste = $resultado->getSempreGoste();
		$gostoMudanca = $resultado->getGostoMudanca();
		$existeErrado = $resultado->getNaoExisteErrado();
		$gostoConselho = $resultado->getGostoConselho();
		$lema = $resultado->getLema();
		$euGosto3 = $resultado->getEuGosto3();
		$praMim = $resultado->getTempoPraMim();
		$bilionario = $resultado->getBilionario();
		$acreditoQue = $resultado->getAcreditoQue();
		$acreditoTambemQue = $resultado->getAcreditoTambemQue();
		$acreditoAinda = $resultado->getAcreditoAinda();
		$euPenso2 = $resultado->getEuPenso2();
		$qtdeLobo = $resultado->getQtdeLobo();
		$qtdeAguia = $resultado->getQtdeAguia();
		$qtdeTubarao = $resultado->getQtdeTubarao();
		$qtdeGato = $resultado->getQtdeGato();
		$tubaraoPercent = $resultado->getTubaraoPercent();
		$aguiaPercent = $resultado->getAguiaPercent();
		$gatoPercent = $resultado->getGatoPercent();
		$loboPercent = $resultado->getLoboPercent();
		$perfilGato = $resultado->getPerfilGato();
		$perfilAguia = $resultado->getPerfilAguia();
		$perfilTubarao = $resultado->getPerfilTubarao();
		$perfilLobo = $resultado->getPerfilLobo();
		$ResultadoPubulico = $resultado->getResultadoPublico();
		$sql = "insert into resultado_perfil(perfil_comportamental_id_fk, usuario_id_fk, data_hora, eu_sou, eu_gosto, vc_quiser_se_dar_bem, obter_bom_resultado, me_divirto, eu_penso, preocupacao, eu_prefiro, eu_gosto2, gosto_chegar, otimo_dia, vejo_morte, filosofia_vida, sempre_goste, gosto_mudanca, nao_existe_errado, gosto_conselho, lema, eu_gosto3, tempo_pra_mim, bilionario, acredito_que, acredito_tambem_que, acredito_ainda, eu_penso2, qtde_lobo, qtde_aguia, qtde_tubarao, qtde_gato, tubarao_percent, aguia_percent, gato_percent, lobo_percent, perfil_gato, perfil_aguia, perfil_tubarao, perfil_lobo, resultado_publico)values('$perfilComportamental','$usuario','$dataHora','$euSou','$euGosto','$seDarBem','$bomResultado','$meDivirto','$euPenso','$preocupacao','$euPrefiro','$euGosto2','$gostoChegar','$otimoDia','$vejoMorte','$filosofiaVida','$sempreGoste','$gostoMudanca','$existeErrado','$gostoConselho','$lema','$euGosto3','$praMim','$bilionario','$acreditoQue','$acreditoTambemQue','$acreditoAinda','$euPenso2','$qtdeLobo','$qtdeAguia','$qtdeTubarao','$qtdeGato','$tubaraoPercent','$aguiaPercent','$gatoPercent','$loboPercent','$perfilGato','$perfilAguia','$perfilTubarao','$perfilLobo','$ResultadoPubulico')";
		//echo $sql;
		//die();
		$SQL = $con->query($sql);
		return $SQL;
	}
	public function GetResultadoAll(){
		$con = new Db();
		$SQL = $con->select("select * from resultado_perfil order by resultado_perfil_id");
		return $SQL;
	}
	
	public function GetResultadoFaculdade ($faculdade){
		$con = new Db();
		$SQL = $con->select("select r.perfil_comportamental_id_fk, r.usuario_id_fk from resultado_perfil r inner join usuario u on r.usuario_id_fk = u.usuario_id where u.faculdade = '$faculdade' order by r.data_hora ");
		return $SQL;
	}
	
	public function GetResultadoByUsuario($userId){
		$con = new Db();
		$SQL = $con->select("select perfil_gato, perfil_aguia, perfil_tubarao, perfil_lobo, data_hora  from resultado_perfil where usuario_id_fk = '$userId' order by data_hora ");
		return $SQL;
	}
	
	
	public function  GetResultadoCurso ($curso){
		$con = new Db();
		$SQL = $con->select("select r.perfil_comportamental_id_fk, r.usuario_id_fk from resultado_perfil r inner join usuario u on r.usuario_id_fk = u.usuario_id where u.curso = '$curso' order by r.data_hora ");
		return $SQL;
	}
	
	public function GetResultadoId($resultadoId){
		$con = new Db();
		$SQL = $con->select("select * from resultado_perfil where resultado_perfil_id='$resultadoId'");
			$resultado=new ResultadoProperty();
			$resultado->setResultadoPerfil($SQL[0]["resultado_perfil_id"]);
			$resultado->setPerfilComportamental($SQL[0]["perfil_comportamental_id_fk"]);
			$resultado->setUsuario($SQL[0]["usuario_id_fk"]);
			$resultado->setDataHora($SQL[0]["data_hora"]);
			$resultado->setEuSou($SQL[0]["eu_sou"]);
			$resultado->setEuGosto($SQL[0]["eu_gosto"]);
			$resultado->setVcQuiserSeDarBem($SQL[0]["vc_quiser_se_dar_bem"]);
			$resultado->setObterBomResultado($SQL[0]["obter_bom_resultado"]);
			$resultado->setMeDivirto($SQL[0]["me_divirto"]);
			$resultado->setEuPenso($SQL[0]["eu_penso"]);
			$resultado->setPreocupacao($SQL[0]["preocupacao"]);
			$resultado->setEuPrefiro($SQL[0]["eu_prefiro"]);
			$resultado->setEuGosto2($SQL[0]["eu_gosto2"]);
			$resultado->setGostoChegar($SQL[0]["gosto_chegar"]);
			$resultado->setOtimoDia($SQL[0]["otimo_dia"]);
			$resultado->setVejoMorte($SQL[0]["vejo_morte"]);
			$resultado->setFilosofiaVida($SQL[0]["filosofia_vida"]);
			$resultado->setSempreGoste($SQL[0]["sempre_goste"]);
			$resultado->setGostoMudanca($SQL[0]["gosto_mudanca"]);
			$resultado->setNaoExisteErrado($SQL[0]["nao_existe_errado"]);
			$resultado->setGostoConselho($SQL[0]["gosto_conselho"]);
			$resultado->setLema($SQL[0]["lema"]);
			$resultado->setEuGosto3($SQL[0]["eu_gosto3"]);
			$resultado->setTempoPraMim($SQL[0]["tempo_para_mim"]);
			$resultado->setBilionario($SQL[0]["bilionario"]);
			$resultado->setAcreditoQue($SQL[0]["acredito_que"]);
			$resultado->setAcreditoTambemQue($SQL[0]["acredito_tambem_que"]);
			$resultado->setAcreditoAinda($SQL[0]["acredito_ainda"]);
			$resultado->setEuPenso2($SQL[0]["eu_penso2"]);
			$resultado->setQtdeLobo($SQL[0]["qtde_lobo"]);
			$resultado->setQtdeAguia($SQL[0]["qtde_aguia"]);
			$resultado->setQtdeTubarao($SQL[0]["qtde_tubarao"]);
			$resultado->setQtdeGato($SQL[0]["qtde_gato"]);
			$resultado->setTubaraoPercent($SQL[0]["tubarao_percent"]);
			$resultado->setAguiaPercent($SQL[0]["aguia_percent"]);
			$resultado->setGatoPercent($SQL[0]["gato_percent"]);
			$resultado->setLoboPercent($SQL[0]["lobo_percent"]);
			$resultado->setPerfilGato($SQL[0]["perfil_gato"]);
			$resultado->setPerfilAguia($SQL[0]["perfil_aguia"]);
			$resultado->setPerfilTubarao($SQL[0]["perfil_tubarao"]);
			$resultado->setPerfilLobo($SQL[0]["perfil_lobo"]);
			$resultado->setResultadoPublico($SQL[0]["resultado_publico"]);
			return $resultado;
	}
	
	
	
	public function DeleteResultado($resultadoId){
		$con = new Db();
		$SQL = $con->query("delete from resultado_perfil where resultado_perfil_id='$resultadoId'");
		return $SQL;
	}
	public function UpdateResultado(ResultadoProperty $resultado){
		global $con;
		
		$P1 = $resultado->getPerfilComportamental();
		$P2 = $resultado->getUsuario();
		$P3 = $resultado->getDataHora();
		$P4 = $resultado->getEuSou();
		$P5 = $resultado->getEuGosto();
		$P6 = $resultado->getVcQuiserSeDarBem();
		$P7 = $resultado->getObterBomResultado();
		$P8 = $resultado->getMeDivirto();
		$P9 = $resultado->getEuPenso();
		$P10 = $resultado->getPreocupacao();
		$P11 = $resultado->getEuPrefiro();
		$P12 = $resultado->getEuGosto2();
		$P13 = $resultado->getGostoChegar();
		$P14 = $resultado->getOtimoDia();
		$P15 = $resultado->getVejoMorte();
		$P16 = $resultado->getFilosofiaVida();
		$P17 = $resultado->getSempreGoste();
		$P18 = $resultado->getGostoMudanca();
		$P19 = $resultado->getNaoExisteErrado();
		$P20 = $resultado->getGostoConselho();
		$P21 = $resultado->getLema();
		$P22 = $resultado->getEuGosto3();
		$P23 = $resultado->getTempoPraMim();
		$P24 = $resultado->getBilionario();
		$P25 = $resultado->getAcreditoQue();
		$P26 = $resultado->getAcreditoTambemQue();
		$P27 = $resultado->getAcreditoAinda();
		$P28 = $resultado->getEuPenso2();
		$P29 = $resultado->getQtdeLobo();
		$P30 = $resultado->getQtdeAguia();
		$P31 = $resultado->getQtdeTubarao();
		$P32 = $resultado->getQtdeGato();
		$P33 = $resultado->getTubaraoPercent();
		$P34 = $resultado->getAguiaPercent();
		$P35 = $resultado->getGatoPercent();
		$P36 = $resultado->getLoboPercent();
		$P37 = $resultado->getPerfilGato();
		$P38 = $resultado->getPerfilAguia();
		$P39 = $resultado->getPerfilTubarao();
		$P40 = $resultado->getPerfilLobo();
		$P41 = $resultado->getResultadoPublico();
		$P42 = $resultado->getResultadoPerfil(); 
		
		$SQL = $con->query("update resultado_perfil set perfil_comportamental_id_fk='$P1', usuario_id_fk='$P2', data_hora='$P3', eu_sou='$P4', eu_gosto='$P5', vc_quiser_se_dar_bem='$P6', obter_bom_resultado='$P7', me_divirto='$P8', eu_penso='$P9', preocupacao='$P10', eu_prefiro='$P11', eu_gosto2='$P12', gosto_chegar='$P13', otimo_dia='$P14', vejo_morte='$P15', filosofia_vida='$P16', sempre_goste='$P17', gosto_mudanca='$P18', nao_existe_errado='$P19', gosto_conselho='$P20', lema='$P21', eu_gosto3='$P22', tempo_pra_mim='$P23', bilionario='$P24', acredito_que='$P25', acredito_tambem_que='$P26', acredito_ainda='$P27', eu_penso2='$P28', qtde_lobo='$P29', qtde_aguia='$P30', qtde_tubarao='$P31', qtde_gato='$P32', tubarao_percent='$P33', aguia_percent='$P34', gato_percent='$P35', lobo_percent='$P36', perfil_gato='$P37', perfil_aguia='$P38', perfil_tubarao='$P39', perfil_lobo='$P40', resultado_publico='$P41' where resultado_perfil_id ='$P42'");
		return $SQL;
	}
}
?>
