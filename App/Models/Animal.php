<?php
class Animal{
	
	private $codigoDono;
	private $codigo;
	private $nome;
	private $especie;
	private $nascimento;
	private $descricao;
	private $sexo;
	
	function Animal()
	{
		
	}
	
	public function getCodigoDono(){
		return $this->codigoDono;
	}
	
	public function setCodigoDono($pCodigoDono){
		$this->codigoDono = $pCodigoDono;
	}
	
	public function getCodigo(){
		return $this->codigo;
	}
	
	public function setCodigo($pCodigo){
		$this->codigo = $pCodigo;
	}
	

	public function getNick(){
		return $this->nick;
	}
	
	public function setNick($pNick){
		$this->codigo = $pNick;
	}

	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($pNome){
		$this->nome = $pNome;
	}

	public function getDescricao(){
		return $this->descricao;
	}
	
	public function setNome($pDescricao){
		$this->nome = $pDescricao;
	}
	
	public function getEspecie(){
		return $this->especie;
	}
	
	public function setEspecie($pEspecie){
		$this->especie = $pEspecie;
	}

	public function getSexo(){
		return $this->sexo;
	}
	
	public function setSexo($pSexo){
		$this->sexo = $pSexo;
	}
	
	public function getNascimento(){
		return $this->nascimento;
	}
	
	public function setNascimento($pNascimento){
		$objAuxData = new DateTime($pNascimento);
		$this->nascimento = $objAuxData->format('y/m/d');
	}
}
?>