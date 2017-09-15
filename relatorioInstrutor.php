<?php

  session_start();

    $_SESSION['id'];
    $conexao = mysql_connect('10.107.144.10','root','bcd127');

    	mysql_select_db('db_helimaxy');
    $sql="select * from tbl_instrutor where id_instrutor=".  $_SESSION['id'];
    $select = mysql_query($sql);
    while ($rs = mysql_fetch_array($select)) {



 ?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style/relatorioInstrutor1.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php require 'cabecalho.php'; ?>
      <section>
          <div id="fon">
            <div class="titulo">
              Ficha de Inscrição do Instrutor
            </div>
            <div class="mostra_ficha">
              <div id="icone">
                <img src="Arquivos/<?php echo($rs['foto']); ?>">
              </div>
                <table id="centralizacao">
                  <tr id="conteudo1">
                    <td class="informacoes">Nome:</td>
                    <td class="caixas"><?php echo ($rs['nome_instrutor']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Sexo:</td>
                    <td class="caixas"><?php echo ($rs['sexo']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Endereco:</td>
                    <td class="caixas"><?php echo ($rs['endereco']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Bairro:</td>
                    <td class="caixas"><?php echo ($rs['bairro']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Cidade:</td>
                    <td class="caixas"><?php echo ($rs['cidade']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">UF:</td>
                    <td class="caixas"><?php echo ($rs['uf']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">CEP:</td>
                    <td class="caixas"><?php echo ($rs['cep']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">TEL:</td>
                    <td class="caixas"><?php echo ($rs['telefone']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">CEL:</td>
                    <td class="caixas"><?php echo ($rs['celular']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">REC:</td>
                    <td class="caixas"><?php echo ($rs['tel_recado']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">E-mail:</td>
                    <td class="caixas"><?php echo ($rs['email']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Estado Civil:</td>
                    <td class="caixas"><?php echo ($rs['estado_civil']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">RG:</td>
                    <td class="caixas"><?php echo ($rs['rg']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">CPF:</td>
                    <td class="caixas"><?php echo ($rs['cpf']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Escolaridade:</td>
                    <td class="caixas"><?php echo ($rs['escolaridade']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Nacionalidade:</td>
                    <td class="caixas"><?php echo ($rs['nacionalidade']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Naturalidade:</td>
                    <td class="caixas"><?php echo ($rs['naturalidade']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Data de Nascimento:</td>
                    <td class="caixas"><?php echo ($rs['dt_nasci']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Cód:</td>
                    <td class="caixas"><?php echo ($rs['cod_anac']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Filiação(PAI):</td>
                    <td class="caixas"><?php echo ($rs['nome_pai']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Filiação (MAE):</td>
                    <td class="caixas"><?php echo ($rs['nome_mae']); ?></td>
                  </tr>
                </table id="centralizacao">
                <div class="titulo">
                  Certificado de Capacidade Física
                </div>
                <table id="centralizacao">
                  <tr id="conteudo1">
                    <td class="informacoes">Classe:</td>
                    <td class="caixas"><?php echo ($rs['classe']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Validade:</td>
                    <td class="caixas"><?php echo ($rs['validade']); ?></td>
                  </tr>
                  <tr id="conteudo1">
                    <td class="informacoes">Emissor:</td>
                    <td class="caixas"><?php echo ($rs['emissor']); ?></td>
                  </tr>
              </table>
              <div class="titulo">
                Em Caso de Emergência
              </div>
              <table id="centralizacao">
                <tr id="conteudo1">
                  <td class="informacoes">Contatar:</td>
                  <td class="caixas"><?php echo ($rs['contatar']); ?></td>
                </tr>
                <tr id="conteudo1">
                  <td class="informacoes">Parentesco:</td>
                  <td class="caixas"><?php echo ($rs['parentesco']); ?></td>
                </tr>
                <tr id="conteudo1">
                  <td class="informacoes">Endereço:</td>
                  <td class="caixas"><?php echo ($rs['endereco_emergencia']); ?></td>
                </tr>
                <tr id="conteudo1">
                  <td class="informacoes">Bairro:</td>
                  <td class="caixas"><?php echo ($rs['bairro_emergencia']); ?></td>
                </tr>
                <tr id="conteudo1">
                  <td class="informacoes">UF:</td>
                  <td class="caixas"><?php echo ($rs['uf_emergencia']); ?></td>
                </tr>
                <tr id="conteudo1">
                  <td class="informacoes">Cidade:</td>
                  <td class="caixas"><?php echo ($rs['cidade_emergencia']); ?></td>
                </tr>
                <tr id="conteudo1">
                  <td class="informacoes">Tel:</td>
                  <td class="caixas"><?php echo ($rs['telefone_emergencia']); ?></td>
                </tr>
                <tr id="conteudo1">
                  <td class="informacoes">Cel:</td>
                  <td class="caixas"><?php echo ($rs['celular_emergencia']); ?></td>
                </tr>
                <tr id="conteudo1">
                  <td class="informacoes">Tipo Sanguineo:</td>
                  <td class="caixas"><?php echo ($rs['tipo_sanguineo']); ?></td>
                </tr>
                <tr id="conteudo1">
                  <td class="informacoes">Alergias:</td>
                  <td class="caixas"><?php echo ($rs['alergia']); ?></td>
                </tr>
            </table>
          </div>
        </div>
        <?php

      }

         ?>
      </section>
  </body>
</html>
