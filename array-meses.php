<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 1</title>
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
         <div style="width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center">
             <h3>Meses</h3>
<?php

$meses = array (
    "mes"=> array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"),
);
for ($i = 0; $i< 12; $i++) {
        echo "<p>".$meses["mes"][$i]."</p>";
}
echo "<p><a href='index.php'> Voltar </p>";
?>
         </div>
    </body>
</html>


