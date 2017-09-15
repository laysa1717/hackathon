<?php
$conexao = mysql_connect('10.107.144.10','root','bcd127');

mysql_select_db('db_helimaxy');

  $modelo = null;
  $prefixo = null;

if (isset($_POST['btn_salvar'])) {
  @  $modelo = $_POST['txtmodelo'];
  @  $prefixo = $_POST['txtprefixo'];

    $sql="insert into tbl_aeronave(id_modelo_aeronave, prefixo)";
    $sql=$sql."values('".$modelo."','".$prefixo."')";

}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style/aeronaves.css">
    <meta charset="utf-8">
    <title> Aeronaves</title>
  </head>
  <body>
    <section>
      <div class="cabecalho">
        <div class="centro">
          <div class="alinhamento">
            <img class="img" src="Imagens/icone.png">
          </div>
          <div class="sair">
            <img src="Imagens/ic.png">

          </div>
          <div class="sair1">

            Bem-Vindo, Fulano!!!
          </div>
        </div>
      </div>
      <div class="menu">
        <div class="menuu">
          <div class="CENTRODENOVO">
            <table>
               <tr>
                    <td class="td"><a href="homepage.php">Home</a></td>
                    <td class="td"><a href="alunos.php">Alunos</a></td>
                    <td class="td"><a href="instrutor.php">Instrutor</a></td>
                    <td class="td"><a href="aeronaves.php">Aeronaves</a></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
        <div id="conteudo">
            <div id="caixas_conteudo">
                <div id="titulo">
                    Cadastro Aeronaves
                </div>
                <div class="borda">
                </div>
                <form class="" action="aeronaves.php" method="post">


                <table class="teste">
                    <tr>
                        <td class="tdform">Modelo da Aeronave:</td>
                        <td><input class="input"  placeholder="" name="txtmodelo" value=""></td>
                    </tr>
                    <tr>
                        <td class="tdform_date">Prefixo da Aeronave:</td>
                        <td><input class="input"  placeholder="" name="txtprefixo" value=""></td>
                    </tr>
                    <tr>
                        <td><input class="" type="submit"  placeholder="" name="btn_salvar" value="Salvar"></td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </section>
  </body>
</html>
