<?php

  $login = null;
  $senha = null;


  if(isset($_POST['btnEntrar'])){
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];

    $sql = "select * from tbl_funcionario where login ='".$login."'and senha ='".$senha."'";
    mysql_query($sql);
    if(mysql_fetch_assoc){
    }else {

    }
  }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Página de Login</title>
  </head>
  <body>
    <section>
        <div id="login">
          <form action="index.php" name="" method="POST">
            <section>
                <div id="teste">
                    <img src="imagens/icone.png">
                </div>
                <div id="caixa_login">
                    Login
                </div>
            </section>
            <section>
                <div id="usuario">
                    Usuario:
                    <input type="text" name="txtLogin" value="" maxlength="45" size="40">
                    <img src="imagens/ic.png" width="20" height="20">
                </div>
            </section>
            <section>
                <div id="senha">
                    Senha:
                    <input type="password" name="txtSenha" value="" maxlength="45" size="40">
                </div>
            </section>
            <section>
                <div id="button">
                    <input type="submit" name="btnEntrar" value="Entrar">
                </div>
            </section>
          </form>
        </div>
    </section>
  </body>
</html>
