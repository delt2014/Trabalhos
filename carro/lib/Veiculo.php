<?php
class Veiculo{

	public $velocidade;
	public $marcha;
	public $rpm;

	public function setVelocidade($velocidade){
		$this->velocidade = $velocidade;
	}

	public function getVelocidade(){
		return $this->velocidade;
	}

	/*public function atualizarVelocidade(){
		$this->velocidade = 140;
	}*/
}

?>