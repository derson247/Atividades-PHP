<html>
    <head>
        <meta charset="UTF-8">
        <title>Verificar se é número primo</title>
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
            <form action="verifica-primo.php" method="post">
            <p>Informe um valor<br><input type="text" name="valor"></p>
            <button type="submit" name="enviar">Enviar</button>
            <br><br>
        </form>
            <a style="text-align: center" href="index.php">Home</a><br><br>
        </div>
         <?php
         if (isset($_POST['enviar'])){
            $valor = $_POST["valor"];
            function fatorial($valor){
                $i = 1;
                $multi = $valor;
                echo "<div style='width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center'>",
                    "<h3>RESULTADO</h3>","<p> $valor! = ($valor";
                while ($i < $valor){
                    $antes = $valor - $i;
                    $n = $antes;
                    $multi *= $n;
                  
                    echo " * ".$antes ;
                    $i ++;
                }
                echo " ) = $multi.</p>";
            }
            function primo($valor){
                
                $i = 1;
                $resultado = 0;
                 while ($i<=$valor){
                    if($valor % $i == 0){
                       $resultado++;
                    }
                   
                    $i++;
                }
                
                if ($resultado == 2){
                    echo "<p>$valor é um número primo.</p></div>";
                }
                else{
                    echo "<p>$valor não é um número primo.</p></div>";
                }
                    
            }
            fatorial($valor);
            primo($valor);
            
         }
        ?>
    </body>
</html>
