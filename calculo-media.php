<html>
    <head>
        <meta charset="UTF-8">
        <title>Cálculo de Média</title>
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
            <form action="calculo-media.php" method="post">
            <p>Informe a sua primeira nota<br><input type="text" name="nota1"></p>
            <p>Informe a sua segunda nota<br><input type="text" name="nota2"></p>
            <p>Informe a sua terceia nota<br><input type="text" name="nota3"></p>
            <p>Informe a sua quarta nota<br><input type="text" name="nota4"></p>
            <button type="submit" name="enviar">Calcular Média</button>
            
            <br><br>
        </form>
            <a style="text-align: center" href="index.php">Home</a><br><br>
        </div>
         <?php
         if (isset($_POST['enviar'])){
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];
            $nota4 = $_POST["nota4"];
            
            function media($nota1, $nota2, $nota3, $nota4){
                $resultado = ((float)$nota1 + (float)$nota2 + (float)$nota3 + (float)$nota4) / 4;
                $format = number_format($resultado, 2, ",", "");
                if ($format >= 7.0){
                echo "<div style='width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center'>",
                    "<h3>RESULTADO</h3>",
                 "<p>Sua média foi $format. Você está aprovado.</p></div>";
            }
            else {
                echo "<div style='width: 500px; border-width: 1px; border-style: solid; border-color: black;text-align: center'>",
                    "<h3>RESULTADO</h3>",
                "<p>Sua média foi $format. Você está reprovado.</p></div>";
            }
                
            }
            media($nota1, $nota2, $nota3, $nota4);
            
         }
        ?>
    </body>
</html>
