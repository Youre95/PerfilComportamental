<?php

/**
 * Classe Abstrata - Propriedades para getters e setters
 */
 class ResultadoProperty {
 	
	private $resultado_perfil_id;
	private $perfil_comportamental_id;
	private $usuario_id;
	private $data_hora;
	private $eu_sou;
	private $eu_gosto;
	private $vc_quiser_se_dar_bem;
	private $obter_bom_resultado;
	private $me_divirto;
	private $eu_penso;
	private $preocupacao;
	private $eu_prefiro;
	private $eu_gosto2;
	private $gosto_chegar;
	private $otimo_dia;
	private $vejo_morte;
	private $filosofia_vida;
	private $sempre_goste;
	private $gosto_mudanca;
	private $nao_existe_errado;
	private $gosto_conselho;
	private $lema;
	private $eu_gosto3;
	private $tempo_pra_mim;
	private $bilionario;
	private $acredito_que;
	private $acredito_tambem_que;
	private $acredito_ainda;
	private $eu_penso2;
	private $qtde_lobo;
	private $qtde_aguia;
	private $qtde_tubarao;
	private $qtde_gato;
	private $tubarao_percent;
	private $aguia_percent;
	private $gato_percent;
	private $lobo_percent;
	private $perfil_gato;
	private $perfil_aguia;
	private $perfil_tubarao;
	private $perfil_lobo;
	private $resultado_publico;
		
	public function getResultadoPerfil(){
		return $this->resultado_perfil_id;
	}
	public function setResultadoPerfil($id){
		$this->resultado_perfil_id=$id;
	}
	public function getPerfilComportamental(){
		return $this->perfil_comportamental_id;
	}
	public function setPerfilComportamental($perfil_comportamental_id){
		$this->perfil_comportamental_id=$perfil_comportamental_id;
	}
	public function getUsuario(){
		return $this->usuario_id;
	}
	public function setUsuario($usuario_id){
		$this->usuario_id=$usuario_id;
	}
	public function getDataHora(){
		return $this->data_hora;
	}
	public function setDataHora($data_hora){
		$this->data_hora=$data_hora;
	}
	public function getEuSou(){
		return $this->eu_sou;
	}
	public function setEuSou($eu_sou){
		$this->eu_sou=$eu_sou;
	}
	public function getEuGosto(){
		return $this->eu_gosto;
	}
	public function setEuGosto($eu_gosto){
		$this->eu_gosto=$eu_gosto;
	}
	public function getVcQuiserSeDarBem(){
		return $this->vc_quiser_se_dar_bem;
	}
	public function setVcQuiserSeDarBem($vc_quiser_se_dar_bem){
		$this->vc_quiser_se_dar_bem=$vc_quiser_se_dar_bem;
	}
	public function getObterBomResultado(){
		return $this->obter_bom_resultado;
	}
	public function setObterBomResultado($obter_bom_resultado){
		$this->obter_bom_resultado=$obter_bom_resultado;
	}
	public function getMeDivirto(){
		return $this->me_divirto;
	}
	public function setMeDivirto($me_divirto){
		$this->me_divirto=$me_divirto;
	}
	public function getEuPenso(){
		return $this->eu_penso;
	}
	public function setEuPenso($eu_penso){
		$this->eu_penso=$eu_penso;
	}
	public function getPreocupacao(){
		return $this->preocupacao;
	}
	public function setPreocupacao($preocupacao){
		$this->preocupacao=$preocupacao;
	}
	public function getEuPrefiro(){
		return $this->eu_prefiro;
	}
	public function setEuPrefiro($eu_prefiro){
		$this->eu_prefiro=$eu_prefiro;
	}
	public function getEuGosto2(){
		return $this->eu_gosto2;
	}
	public function setEuGosto2($eu_gosto2){
		$this->eu_gosto2=$eu_gosto2;
	}
	public function getGostoChegar(){
		return $this->gosto_chegar;
	}
	public function setGostoChegar($gosto_chegar){
		$this->gosto_chegar=$gosto_chegar;
	}
	public function getOtimoDia(){
		return $this->otimo_dia;
	}
	public function setOtimoDia($otimo_dia){
		$this->otimo_dia=$otimo_dia;
	}
	public function getVejoMorte(){
		return $this->vejo_morte;
	}
	public function setVejoMorte($vejo_morte){
		$this->vejo_morte=$vejo_morte;
	}
	public function getFilosofiaVida(){
		return $this->filosofia_vida;
	}
	public function setFilosofiaVida($filosofia_vida){
		$this->filosofia_vida=$filosofia_vida;
	}
	public function getSempreGoste(){
		return $this->sempre_goste;
	}
	public function setSempreGoste($sempre_goste){
		$this->sempre_goste=$sempre_goste;
	}
	public function getGostoMudanca(){
		return $this->gosto_mudanca;
	}
	public function setGostoMudanca($gosto_mudanca){
		$this->gosto_mudanca=$gosto_mudanca;
	}
	public function getNaoExisteErrado(){
		return $this->nao_existe_errado;
	}
	public function setNaoExisteErrado($nao_existe_errado){
		$this->nao_existe_errado=$nao_existe_errado;
	}
	public function getGostoConselho(){
		return $this->gosto_conselho;
	}
	public function setGostoConselho($gosto_conselho){
		$this->gosto_conselho=$gosto_conselho;
	}
	public function getLema(){
		return $this->lema;
	}
	public function setLema($lema){
		$this->lema=$lema;
	}
	public function getEuGosto3(){
		return $this->eu_gosto3;
	}
	public function setEuGosto3($eu_gosto3){
		$this->eu_gosto3=$eu_gosto3;
	}
	public function getTempoPraMim(){
		return $this->tempo_pra_mim;
	}
	public function setTempoPraMim($tempo_pra_mim){
		$this->tempo_pra_mim=$tempo_pra_mim;
	}
	public function getBilionario(){
		return $this->bilionario;
	}
	public function setBilionario($bilionario){
		$this->bilionario=$bilionario;
	}
	public function getAcreditoQue(){
		return $this->acredito_que;
	}
	public function setAcreditoQue($acredito_que){
		$this->acredito_que=$acredito_que;
	}
	public function getAcreditoTambemQue(){
		return $this->acredito_tambem_que;
	}
	public function setAcreditoTambemQue($acredito_tambem_que){
		$this->acredito_tambem_que=$acredito_tambem_que;
	}
	public function getAcreditoAinda(){
		return $this->acredito_ainda;
	}
	public function setAcreditoAinda($acredito_ainda){
		$this->acredito_ainda=$acredito_ainda;
	}
	public function getEuPenso2(){
		return $this->eu_penso2;
	}
	public function setEuPenso2($eu_penso2){
		$this->eu_penso2=$eu_penso2;
	}
	public function getQtdeLobo(){
		return $this->qtde_lobo;
	}
	public function setQtdeLobo($qtde_lobo){
		$this->qtde_lobo=$qtde_lobo;
	}
	public function getQtdeAguia(){
		return $this->qtde_aguia;
	}
	public function setQtdeAguia($qtde_aguia){
		$this->qtde_aguia=$qtde_aguia;
	}
	public function getQtdeTubarao(){
		return $this->qtde_tubarao;
	}
	public function setQtdeTubarao($qtde_tubarao){
		$this->qtde_tubarao=$qtde_tubarao;
	}
	public function getQtdeGato(){
		return $this->qtde_gato;
	}
	public function setQtdeGato($qtde_gato){
		$this->qtde_gato=$qtde_gato;
	}
	public function getTubaraoPercent(){
		return $this->tubarao_percent;
	}
	public function setTubaraoPercent($tubarao_percent){
		$this->tubarao_percent=$tubarao_percent;
	}
	public function getAguiaPercent(){
		return $this->aguia_percent;
	}
	public function setAguiaPercent($aguia_percent){
		$this->aguia_percent=$aguia_percent;
	}
	public function getGatoPercent(){
		return $this->gato_percent;
	}
	public function setGatoPercent($gato_percent){
		$this->gato_percent=$gato_percent;
	}
	public function getLoboPercent(){
		return $this->lobo_percent;
	}
	public function setLoboPercent($lobo_percent){
		$this->lobo_percent=$lobo_percent;
	}
	public function getPerfilGato(){
		return $this->perfil_gato;
	}
	public function setPerfilGato($perfil_gato){
		$this->perfil_gato=$perfil_gato;
	}
	public function getPerfilAguia(){
		return $this->perfil_aguia;
	}
	public function setPerfilAguia($perfil_aguia){
		$this->perfil_aguia=$perfil_aguia;
	}
	public function getPerfilTubarao(){
		return $this->perfil_tubarao;
	}
	public function setPerfilTubarao($perfil_tubarao){
		$this->perfil_tubarao=$perfil_tubarao;
	}
	public function getPerfilLobo(){
		return $this->perfil_lobo;
	}
	public function setPerfilLobo($perfil_lobo){
		$this->perfil_lobo=$perfil_lobo;
	}
	public function getResultadoPublico(){
		return $this->resultado_publico;
	}
	public function setResultadoPublico($resultado_publico){
		$this->resultado_publico=$resultado_publico;
	}
}