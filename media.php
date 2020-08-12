<?php
class nota {

    function __construct($nome, $valor1, $valor2, $valor3, $valor4) {
       $this->nome = $nome;
       $this->nota1 = $valor1;
       $this->nota2 = $valor2;
       $this->nota3 = $valor3;
       $this->nota4 = $valor4;
    }
       function calcula() {
           $this->media = ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4;
           
           if ($this->media >= 6){
               echo "<b>$this->nome</b> sua média foi <b>$this->media</b> você está aprovado.";
           }
           else {
               echo "<b>$this->nome</b> sua média foi <b>$this->media</b> você está reprovado";
           }
       }
   }
