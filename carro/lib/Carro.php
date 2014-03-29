<?php
require_once('Veiculo.php');

class Carro extends Veiculo{

	public $acelerar;
	public $trocaMarca;
	public $AtualizarVelocidade;

	public function setAtualizarVelocidade($AtualizarVelocidade) {
		$this->AtualizarVelocidade = $AtualizarVelocidade;
	}

	public function __construct(){
		$this->velocidade = 120;
		$this->marcha = 4;
		$this->rpm = 3000;
	}
}


$carro = new Carro();
$carro->acelerar = true;
$carro->trocaMarca = true;
$carro->setAtualizarVelocidade(140);

print_r($carro);

?>