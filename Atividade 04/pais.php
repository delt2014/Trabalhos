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
             class pais{
            
                 private $código_ISO;
                 private $nome;
                 private $populacao;
                 private $dimensao;
                 private $paisFronteira;
                         
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

                          
             
            
            
           }
        ?>
    </body>
</html>
