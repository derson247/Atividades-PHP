<html>
    <head>
        <meta charset="UTF-8">
        <title>Operadores Matemáticos 1</title>
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
            <form action="operadores-matematicos.php.php." method="post">
            <p>Informe o primeiro número<br><input type="text" name="numb1"></p>
            <p>Informe o segundo número<br><input type="text" name="numb2"></p>
            <button type="submit" name="operacao" value="somar">+</button>
            <button type="submit" name="operacao" value="subtrair">-</button>
            <button type="submit" name="operacao" value="multiplicar">*</button>
            <button type="submit" name="operacao" value="dividir">/</button>
            <br>
            
        </form>
            <a style="text-align: center" href="index.php">Home</a><br><br>
        </div>
         <?php
         if (isset($_POST['operacao'])){
            $numb1 = $_POST["numb1"];
            $numb2 = $_POST["numb2"];
            $operacao = $_POST["operacao"];
            
            function somar($numb1, $numb2){
                $resultado = (int)$numb1 + (int)$numb2;
                return $resultado;
            }
            function subtrair($numb1,$numb2){
                $resultado = $numb1 - $numb2;
                return $resultado;
            }
            function multiplicar($numb1,$numb2){
                $resultado = $numb1 * $numb2;
                return $resultado;
            }
            function dividir($numb1,$numb2){
                $resultado = $numb1 / $numb2;
                return $resultado;
            }
         switch ($operacao){
            case "somar": echo "<div style='width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center'>",
                    "<h3>RESULTADO</h3>",
                    "<p>".somar($numb1,$numb2)."</p>"."<br>"; break;
            case "subtrair": echo "<div style='width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center'>",
                    "<h3>RESULTADO</h3>",
                    "<p>".subtrair($numb1,$numb2)."</p>"."<br>"; break;
            case "multiplicar": echo "<div style='width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center'>",
                    "<h3>RESULTADO</h3>",
                    "<p>".multiplicar($numb1,$numb2)."</p>"."<br>"; break;
            case "dividir": echo "<div style='width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center'>",
                    "<h3>RESULTADO</h3>",
                    "<p>".dividir($numb1,$numb2)."</p>"."<br>"; break;
         }
         }
        ?>
    </body>
</html>
