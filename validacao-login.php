<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Validação de Login</title>
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
            <form action="validacao-login.php" method="post">
                <p>Informe o seu login<br><input type="text" name="login"></p>
                <p>Informe a sua senha<br><input type="password" name="senha"></p>
                <button type="submit" name="enviar">Fazer Login</button>
                <br><br>
            </form>
            <a style="text-align: center" href="index.php">Home</a><br><br>
        </div>
         <?php
         if (isset($_POST["enviar"])){
            $login = $_POST["login"];
            $senha = $_POST["senha"];
            
            
            function logar ($login, $senha){
                if ($login == "gil" && $senha == "gil"){
                    echo "<script>alert('Login efetuado com sucesso!');";
                     echo "javascript:window.location='index.php';</script>";
                    
                }
                else {
                    echo "<script>alert('Não foi possível fazer login, por favor verifique o login e a sua senha já configurados e tente novamente');";
                    echo "javascript:window.location='validacao-login.php';</script>";
                }
            }
            logar($login, $senha);
         }
        ?>
    </body>
</html>
