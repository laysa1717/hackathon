<?php

$conexao = mysql_connect('10.107.144.10','root','bcd127');

mysql_select_db('db_helimaxy');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" type="text/css" href="style/home.css">
      <link rel="stylesheet" type="text/css" href="style/declaracaoInstrucao.css">
  </head>
  <body>
    <section>
      <div class="bosta">
        <div class="calaboca">
            Declaração de Instrução
        </div>

      </div>
      <div class="borda">

      </div>
      <div class="conteudo">
        <table>
          <tr>
            <td class="tdparte1">Data</td>
            <td class="tdparte1">Matrícula da Aeronave</td>
            <td class="tdparte1">Função a bordo</td>
            <td class="tdparte1">Partida</td>
            <td class="tdparte1">Decolagem</td>
            <td class="tdparte1">Pouso</td>
            <td class="tdparte1">Corte</td>
            <td class="tdparte1">N Pousos</td>
            <td class="tdparte1">Diurno</td>
            <td class="tdparte1">Noturno</td>
            <td class="tdparte1">IFR R</td>
            <td class="tdparte1">IFR C</td>
            <td class="tdparte1">Local Saída</td>
            <td class="tdparte1">Local Parada</td>
            <td class="tdparte1">Tempo de Navegação</td>
            <td class="tdparte1">Milhas</td>
            <td class="tdparte1">CANAC do instrutor</td>
            <td class="tdparte1">Rubrica</td>
          </tr>
          <tr>
            <td class="tdparte10"></td>
            <td class="tdparte10">  </td>
            <td class="tdparte10">  </td>
            <td class="tdparte10"></td>
            <td class="tdparte10"></td>
            <td class="tdparte10"></td>
            <td class="tdparte10"></td>
            <td class="tdparte10"> </td>
            <td class="tdparte10"></td>
            <td class="tdparte10"></td>
            <td class="tdparte10"> </td>
            <td class="tdparte10"> </td>
            <td class="tdparte10"> </td>
            <td class="tdparte10"> </td>
            <td class="tdparte10">  </td>
            <td class="tdparte10"></td>
            <td class="tdparte10">  </td>
            <td class="tdparte10"></td>
          </tr>

          <?php

          $sql = "select * from tbl_matricula";
          $select = mysql_query($sql);

          while ($rs =mysql_fetch_array($select)) {



           ?>
          <tr>
            <td class="tdparte1"><?php echo ($rs['dt_matricula']); ?></td>
            <td class="tdparte1"><?php echo ($rs['id_aeronave']); ?></td>
            <td class="tdparte1"><?php echo ($rs['funcaoAbordo']); ?></td>
            <td class="tdparte1"><?php echo ($rs['partida']); ?></td>
            <td class="tdparte1"><?php echo ($rs['decolagem']); ?></td>
            <td class="tdparte1"><?php echo ($rs['pouso']); ?></td>
            <td class="tdparte1"><?php echo ($rs['corte']); ?></td>
            <td class="tdparte1"><?php echo ($rs['numero_pousos']); ?></td>
            <td class="tdparte1"><?php echo ($rs['diurno']); ?></td>
            <td class="tdparte1"><?php echo ($rs['noturno']); ?></td>
            <td class="tdparte1"><?php echo ($rs['IFR_R']); ?></td>
            <td class="tdparte1"><?php echo ($rs['IFR_C']); ?></td>
            <td class="tdparte1"><?php echo ($rs['id_local']); ?></td>
            <td class="tdparte1"><?php echo ($rs['id_local']); ?></td>
            <td class="tdparte1"><?php echo ($rs['temp_nagevacao']); ?></td>
            <td class="tdparte1"><?php echo ($rs['milhas']); ?></td>
            <td class="tdparte1"><?php echo ($rs['id_instrutor']); ?></td>
            <td class="tdparte1"></td>
          </tr>
          <?php

        }
           ?>
        </table>
      </div>
    </section>
  </body>
</html>
