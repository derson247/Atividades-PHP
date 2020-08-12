<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 2</title>
        <style>
            a {
                text-decoration: none;
                color: #000000;
            }
            a:hover {
                color:	#66CDAA
            }
        </style>
    </head>
    <body>
         <div style="width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center"><br /><br />
        <form action="validaCpf.php" method="post">
            Informe o Cpf<br><input name="cpf" size="11" maxlength="11"><br><br>
            <input name="btvalidar" type="submit" id="btvalidar" value="  Validar  ">
        </form><br/><a style="text-align: center" href="index.php">Home</a><br><br>
  
<?php function validaCPF($cpf)
{	
    
    if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999')
	{
	return false;
}
	else
	{   
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
 
            $d = ((10 * $d) % 11) % 10;
 
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }
}
// Verifica se o botão de validação foi acionado
if(isset($_POST['btvalidar']))
	{// Adiciona o numero enviado na variavel $cpf_enviado, poderia ser outro nome, e executa a função acima
	$cpf_enviado = validaCPF($_POST['cpf']);
	// Verifica a resposta da função e exibe na tela
	if($cpf_enviado == true){
		echo '<div style="width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center">'
. "<br />CPF VERDADEIRO <br /><p><a href='index.php'> Voltar </p></div></body></html>";
        }
	elseif($cpf_enviado == false){
		echo '<div style="width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center">'
. "<br />CPF FALSO<br /><p><a href='index.php'> Voltar </p></div></body></html>";
	}
        } 
