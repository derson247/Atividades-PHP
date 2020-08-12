<?php
$nome = $_POST["nome"];
$salario = $_POST ["salario"];
$valorVendas = $_POST ["valorVendas"];
    
class Funcionarios{
    private $nome;
    private $salario;
    
    function setNome($nome){
        $this->nome=$nome;
    }
    function getNome($nome){
        return $this->nome = $nome;
    }
    
    function setSalario($salario){
        $this->salario = $salario;
    }
    function getSalario($salario){
        return $this->salario = $salario;
    }
}
$aux = new Vendedor($nome, $salario);     
$aux->calcula($nome, $salario, $valorVendas);
    class Vendedor extends Funcionarios {
        function _contruct ($nome, $salario){
            $this->nome = $nome;
            $this->salario = $salario;
    }
        private $valorVendas;
        private $comissao;
        
        function setValorVendas ($valorVendas){
            $this->valorVendas = $valorVendas;
        }
        function getValorVendas ($valorVendas){
            return $this->valorVendas = $valorVendas;
        }
        function setComissao ($comissao){
            $this->comissao = $comissao;
        }
        function getComissão() {
            return $this->comissao;
        }
        
    function calcula($nome,$salario,$valorVendas){
        $this->comissao = 10/100;
        $this->salarioFinal =  $salario + ($this->comissao * $valorVendas);
            echo '<html><head><meta charset="UTF-8"><title>Salário a ser pago</title>'
            .'<style type="text/css"> div { width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center; }'
                    ."a {text-decoration: none; color: #000000;}"."a:hover{color: #28b1ff};}</style></head><body>";
            echo "<div>";
            echo "<p>".$nome." irá receber ". $this->salarioFinal."</p><p><a href='index.php'>Retornar</a></p></div></body></html>";
        }
        
        
    }

