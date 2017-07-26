<?php

/**
 * Classe Abstrata - Propriedades para getters e setters
 */
class UsuarioProperty {
	private $usuario_id;
	private $nome;
	private $email;
	private $data_nasc;
	private $cpd;
	private $idade;
	private $sexo;
	private $curso;
	private $semestre;
	private $perfil_img;
	private $renda;
	private $bolsa;
	private $password;
	private $endereco;
	private $perfil_sistema;
	private $faculdade;
	private $status;
	private $estado;
	
	/* function __condtruct($usuario_id, $nome, $email, $data_nasc, $cpd, $idade, $sexo, $curso, $semestre, a $perfil_img, $renda, $bolsa, $password, $endereco, $perfil_sistema, $faculdade, $status) {
		$this->usuario_id = $usuario_id;
		$this->nome =  str_replace ("'",  "''", $nome);
		$this->email = $email;
		$this->data_nasc = $data_nasc;
		$this->cpd = $cpd;
		$this->idade = $idade;
		$this->sexo = $sexo;
		$this->curso = $curso;
		$this->semestre = $semestre;
		$this->perfil_img = $perfil_img;
		$this->renda = $renda;
		$this->bolsa = $bolsa;
		$this->password = $password;
		$this->endereco = $endereco;
		$this->perfil_sistema = $perfil_sistema;
		$this->faculdade = $faculdade;
		$this->status = $status;
		
	} */
	
	public function getUsuario() {
		return $this->usuario_id;
	}
	public function setUsuario($id) {
		$this->usuario_id = $id;
	}
	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->status = $status;
	}
	public function getFaculdade() {
		return $this->faculdade;
	}
	public function setFaculdade($falculdade) {
		$this->faculdade = $falculdade;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function getDataNasc() {
		return $this->data_nasc;
	}
	public function setDataNasc($data_nasc) {
		$this->data_nasc = $data_nasc;
	}
	public function getCpd() {
		return $this->cpd;
	}
	public function setCpd($cpd) {
		$this->cpd = $cpd;
	}
	public function getIdade() {
		return $this->idade;
	}
	public function setIdade($idade) {
		$this->idade = $idade;
	}
	public function getSexo() {
		return $this->sexo;
	}
	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}
	public function getCurso() {
		return $this->curso;
	}
	public function setCurso($curso) {
		$this->curso = $curso;
	}
	public function getSemestre() {
		return $this->semestre;
	}
	public function setSemestre($semestre) {
		$this->semestre = $semestre;
	}
	public function getPerfilImg() {
		return $this->perfil_img;
	}
	public function setPerfilImg($perfil_img) {
		$this->perfil_img = $perfil_img;
	}
	public function getRenda() {
		return $this->renda;
	}
	public function setRenda($renda) {
		$this->renda = $renda;
	}
	public function getBolsa() {
		return $this->bolsa;
	}
	public function setBolsa($bolsa) {
		$this->bolsa = $bolsa;
	}
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password) {
		$this->password = $password;
	}
	public function getEndereco() {
		return $this->endereco;
	}
	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}
	public function getPerfilSistema() {
		return $this->perfil_sistema;
	}
	public function setPerfilSistema($perfil_sistema) {
		$this->perfil_sistema = $perfil_sistema;
	}
	
	public function getEstado() {
		return $this->estado;
	}
	public function setEstado($estado) {
		$this->estado = $estado;
	}
}