<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
             class Pais{
            
                 private $código_ISO;
                 private $nome;
                 private $populacao;
                 private $dimensao;
                 public $fronteiras = array();
				 public $msg = null;
				 public $densidade;
                         
                 function __construct($código_ISO, $nome, $dimensao) {
                     $this->código_ISO = $código_ISO;
                     $this->nome = $nome;
                     $this->dimensao = $dimensao;
					 
                 }

                 public function getCódigo_ISO() {
                     return $this->código_ISO;
                 }

                 public function getNome() {
                     return $this->nome;
                 }

                 public function getPopulacao() {
                     return $this->populacao;
                 }

                 public function getDimensao() {
                     return $this->dimensao;
                 }

                 public function setCódigo_ISO($código_ISO) {
                     $this->código_ISO = $código_ISO;
                 }

                 public function setNome($nome) {
                     $this->nome = $nome;
                 }

                 public function setPopulacao($populacao) {
                     $this->populacao = $populacao;
                 }

                 public function setDimensao($dimensao) {
                     $this->dimensao = $dimensao;
                 }
				 
                 public function setFronteiras(Pais $fronteiras) {
                     $this->fronteiras = $fronteiras;
                 }



				 public function verificarExistencia($código_ISO)
                 {
					if ($this->código_ISO == $código_ISO)
                    {
					   $msg = "País já cadastrado.";
					   return $msg;
					}

                    else
                    {
                        $msg = "País cadastrado com sucesso.";
                    }
										
					return $msg;
				}

                public function verificarFronteiras($fronteiras)
                {
                    if ($fronteiras->fronteiras != NULL )
                    {
                        $msg = "País com fronteiras.";  
                    }

                    else
                    {
                        $msg = "País sem fronteiras.";
                    }
                    
                    return $msg;
                }

				public function verificarDensidade($populacao, $dimensao)
                {
					$densidade = $populacao / $dimensao;
					return $densidade;
				}
				
				
                public function listarVizinhos(Pais $p1, Pais $p2)
                {
					foreach ($p1 -> lista as $key => $value) 
					{
                       if($p1-> lista[$key] == $p2-> lista[$key])
					   {
                           echo "Lista de Paises Vizinhos: ";
						   echo $p1-> lista[$key];
						}	
                }

				
			}
 
        
        ?>
    </body>
</html>
