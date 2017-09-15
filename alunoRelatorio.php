<?php

  session_start();
  echo ($_SESSION['id']);

  $conexao = mysql_connect('10.107.144.10','root','bcd127');

	mysql_select_db('db_helimaxy');

  $sql = "select * from tbl_aluno where id_aluno =".$_SESSION['id'];
  $select = mysql_query($sql);
  while ($rs = mysql_fetch_array($select)) {



 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style/relatioaluno.css">
    <title></title>
  </head>
  <body>
    <?php    require 'cabecalho.php';?>

    <section>
      <div class="principalAluno">
        <div class="titulo">
          FICHA DE INSCRISÇÃO - Voo Por Instrumento - IFRH
        </div>
        <div class="conteudorelatorio">
          <div class="foto">
            <img class="foto1" src="Arquivos/<?php echo ($rs['foto']); ?>">
          </div>
          <div class="direito">
            <form class="" action="alunoRelatorio.php" method="post">
              <table>
                <tr>
                  <td class="tdcima">CODIGO ANAC:</td>
                  <td class="tdcima1"><?php echo ($rs['cod_anac']); ?></td>
                </tr>
                <tr>
                  <td class="tdcima">NOME:</td>
                  <td class="tdcima1"><?php echo ($rs['nome']); ?></td>
                </tr>
                <tr>
                  <td class="tdcima">NASCIMENTO:</td>
                  <td class="tdcima1"><?php echo ($rs['dt_nasci']); ?></td>
                </tr>
                <tr>
                  <td class="tdcima">SEXO:</td>
                  <td class="tdcima1"><?php echo ($rs['sexo']); ?></td>
                </tr>
                <tr>
                  <td class="tdcima">NACIONALIDADE:</td>
                  <td class="tdcima1"><?php echo ($rs['nacionalidade']); ?></td>
                </tr>
                <tr>
                  <td class="tdcima">NATURALIDADE:</td>
                  <td class="tdcima1"><?php echo ($rs['naturalidade']); ?></td>
                </tr>
                <tr>
                  <td class="tdcima">TIPO SANGUINEO:</td>
                  <td class="tdcima1"><?php echo ($rs['tipo_sanguineo']); ?></td>
                </tr>
                <tr>
                  <td class="tdcima">CMA:</td>
                  <td class="tdcima1"><?php echo ($rs['cma']); ?></td>
                </tr>
                <tr>
                  <td class="tdcima">ALERGIA:</td>
                  <td class="tdcima1"><?php echo ($rs['alergia']); ?></td>
                </tr>
                <tr>
                  <td class="tdcima">APROVAÇÃO TEÓRICA:</td>
                  <td class="tdcima1"><?php echo ($rs['aprovacao_teorica']); ?></td>
                </tr>
              </table>


          </div>
          <div class="baixo">
            <table>
              <tr>
                <td class="tdcima">ESTADO CIVIL:</td>
                <td class="tdcima1"><?php echo ($rs['estado_civil']); ?></td>
              </tr>
              <tr>
                <td class="tdcima">NOME DO PAI:</td>
                <td class="tdcima1"><?php echo ($rs['nome_pai']); ?></td>
              </tr>
              <tr>
                <td class="tdcima">NOMA DA MÃE:</td>
                <td class="tdcima1"><?php echo ($rs['nome_mae']); ?></td>
              </tr>
              <tr>
                <td class="tdcima">RG:</td>
                <td class="tdcima1"><?php echo ($rs['rg']); ?></td>
              </tr>
              <tr>
                <td class="tdcima">CPF:</td>
                <td class="tdcima1"><?php echo ($rs['cpf']); ?></td>
              </tr>
              <tr>
                <td class="tdcima">ORGÃO EXPEDIDOR:</td>
                <td class="tdcima1"><?php echo ($rs['orgao_expedidor']); ?></td>
              </tr>
              <tr>
                <td class="tdcima">TITULO DE ELEITOR:</td>
                <td class="tdcima1"><?php echo ($rs['titulo_de_eleitor']); ?></td>
              </tr>
              <tr>
                <td class="tdcima">ESCOLARIDADE:</td>
                <td class="tdcima1"><?php echo ($rs['escolaridade']); ?></td>
              </tr>
              <tr>
                <td class="tdcima">ENDEREÇO:</td>
                <td class="tdcima1">Rua <?php echo ($rs['endereco']); ?>, 53 <?php echo ($rs['aprovacao_teorica']); ?> - Jacarei - SP</td>
              </tr>
              <tr>
                <td class="tdcima">CEP:</td>
                <td class="tdcima1"><?php echo ($rs['cep']); ?></td>
              </tr>
              <tr>
                <td class="tdcima">CELULAR:</td>
                <td class="tdcima1"><?php echo ($rs['celular']); ?></td>
              </tr>
              <tr>
                <td class="tdcima">EMAIL:</td>
                <td class="tdcima1"><?php echo ($rs['email']); ?></td>
              </tr>
              <tr>
                <td class="tdcima">EMERGÊNCIA:</td>
                <td class="tdcima1"><?php echo ($rs['tel_emergencia']); ?></td>
              </tr>
            </table>
            <?php } ?>
          </div>
        </div>
        </form>
      </div>
    </section>
  </body>
</html>
