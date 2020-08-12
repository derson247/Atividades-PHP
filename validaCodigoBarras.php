<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 3</title>
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
        <form action="validaCodigoBarras.php" method="post">
            Informe o Codigo de Barras:<br><input name="codigo" maxlength="13"><br><br>
            <input name="enviar" type="submit"  value="Validar">
        </form><br /><br />
         </div>
    </body>
</html>
<?php 
function validaCodigo($codigo){
 
$var1 = substr($codigo, 0,12);
$var2 = substr($codigo, 12, 1);

$arr1 = str_split($var1);
$arr2 = str_split($var2);
$array1 = array();
$array2 = array();
foreach ($arr1 as $item) {
    $array1[] =  $item;
}
foreach ($arr2 as $item2){
    $array2[] = $item2;
}
//echo $array1;

$impar = 0;
$par = 0;
for ($i=0; $i < sizeof($array1); $i++){
    if ($array1[$i] % 2){
        $impar = $impar + $array1[$i]; 
        //echo $array1[$i].'<br>';
    }
    else{
        $par = $par + $array1[$i];
        //echo $array1[$i].'<br><br>';
    }
    
}

$soma = $impar + ($par*3);

$digito = substr($soma, 1, 1);

if ($digito == 0){
    $digitoVerificador = 0;
}
else {
    $digitoVerificador = 10 - $digito;
}

if ($digitoVerificador == $arr2[0]){
    
    return true;
}
else {
    return false;
}
}
if(isset($_POST['enviar'])){
$codigo = validaCodigo($_POST["codigo"]);
if ($codigo == true){
    echo '<div style="width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center">'
."<p>Codigo de Barras <b>Válido</b></p><p><a href='index.php'> Voltar </p></div></body></html>";
}
elseif ($codigo == false){
    echo '<div style="width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center">'
."<p>Codigo de Barras <b>Inválido</b></p><p><a href='index.php'> Voltar </p></div></body></html>";
}
}