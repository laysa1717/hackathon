<!DOCTYPE html>
<?php

  session_start();

  $anac = null;
  $nome = null;
  $dt_nasci = null;
  $sexo = null;
  $nacionalidade = null;
  $naturalidade = null;
  $tipoSanguineo = null;
  $cma= null;
  $alergia = null;
  $aprovacao = null;
  $estado = null;
  $nomepai = null;
  $nomemae = null;
  $rg = null;
  $cpf = null;
  $reservista = null;
  $orgao =null;
  $titulo = null;
  $escolaridade = null;
  $endereco = null;
  $cep = null;
  $telefone = null;
  $celular = null;
  $email = null;
  $tel_emergencia = null;
  $zona = null;

$nome_novo_foto=null;

  $conexao = mysql_connect('10.107.144.10','root','bcd127');

	mysql_select_db('db_helimaxy');

  if(isset($_POST['btn_salvarrrrr'])){

    $anac = $_POST['txtanac'];
    $nome = $_POST['txtnome'];
    $dt_nasci = $_POST['txtdtnasc'];
    $sexo = $_POST['txtsexo'];
    $nacionalidade = $_POST['txtnacionalidade'];
    $naturalidade = $_POST['txtnaturalidade'];
    $tipoSanguineo = $_POST['txttiposanguineo'];
    $cma= $_POST['txtcma'];
    $alergia = $_POST['txtalergia'];
    $aprovacao = $_POST['txtaprovacao'];
    $estado = $_POST['txtestadocivil'];
    $nomepai = $_POST['txtnomedopai'];
    $nomemae = $_POST['txtnomedamae'];
    $rg = $_POST['txtrg'];
    $cpf = $_POST['txtcpf'];
    $reservista = $_POST['txtreservista'];
    $orgao = $_POST['txtorgao'];
    $titulo = $_POST['txttitulo'];
    $escolaridade = $_POST['txtescolaridade'];
    $endereco = $_POST['txtendereco'];
    $cep = $_POST['txtcep'];
    $telefone = $_POST['txttelefone'];
    $celular = $_POST['txtcelular'];
    $tel_emergencia = $_POST['txtemergencia'];
    $email = $_POST['txtemail'];
    $zona = $_POST['txtzona'];
    $extensao = strtolower(substr($_FILES['filefotos']['name'],-4));
   $nome_novo_foto = md5(time()).$extensao;
   $diretorio = "Arquivos/";

   move_uploaded_file($_FILES['filefotos']['tmp_name'], $diretorio.$nome_novo_foto);

    $sql = "insert into tbl_aluno(cod_anac, nome, dt_nasci, sexo, nacionalidade, naturalidade, tipo_sanguineo, cma, alergia, aprovacao_teorica, estado_civil, nome_pai, nome_mae,
    rg, cpf, reservista, orgao_expedidor, titulo_de_eleitor, escolaridade, endereco, cep, telefone, celular, email, tel_emergencia, foto, zona ) ";

    $sql = $sql."values('".$anac."','".$nome."','".$dt_nasci."','".$sexo."','".$nacionalidade."','".$naturalidade."','".$tipoSanguineo."','".$cma."','".$alergia."',
    '".$aprovacao."','".$estado."','".$nomepai."','".$nomemae."','".$rg."','".$cpf."',
    '".$reservista."','".$orgao."','".$titulo."','".$escolaridade."','".$endereco."','".$cep."','".$telefone."','".$celular."','".$email."','".$tel_emergencia."','".$nome_novo_foto."','".$zona."')";

   mysql_query($sql);
 //echo ($sql);
}
if(isset($_POST['btn_relatorio'])){
  $sql = "select id_aluno from tbl_aluno order by id_aluno desc limit 1";
  $select = mysql_query($sql);

  if($rs=mysql_fetch_array($select)){
    $id = $rs['id_aluno'];
    $_SESSION['id'] = $id;

  }
  header("Location:alunoRelatorio.php");
}
 ?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style/home.css">
    <link rel="stylesheet" type="text/css" href="style/alunos.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require_once('cabecalho.php'); ?>
    <section class="teste">
      <div class="titulo">
          Cadastro de Alunos
      </div>


  </section>
  <div class="oi">
    <form action="alunos.php" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td class="tdform">Nome do Aluno</td>
        <td class="tdform_date">Data de Nascimento</td>
        <td class="tdform_date">Sexo</td>
      </tr>
      <tr>
        <td><input class="input"  placeholder="Eduardo Rocha Patinho" name="txtnome" value=""></td>
        <td><input class="input_data" placeholder="23/03/1999" name="txtdtnasc" value=""></td>
        <td><input class="input_data" placeholder="Masculino" name="txtsexo" value=""></td>
      </tr>
    </table>
    <table>
      <tr>

        <td  class="tdpadrão">Nacionalidade</td>
        <td  class="tdpadrão">Naturalidade</td>
        <td  class="tdpadrão">Tipo Sanguíneo</td>
      </tr>
      <tr>
        <td><input class="inputpadrao"  placeholder="Brasileira" name="txtnacionalidade" value=""></td>
        <td><input class="inputpadrao" placeholder="Campinas" name="txtnaturalidade" value=""></td>
        <td><input class="inputpadrao" placeholder="O+" name="txttiposanguineo" value=""></td>
      </tr>
    </table>
    <table>
      <tr>

        <td  class="tdpadrão">CMA</td>
        <td  class="tdpadrão">Alergia</td>
        <td  class="tdpadrão">Aprovação Teórica</td>
      </tr>
      <tr>
        <td><input class="inputpadrao"  placeholder="Segunda Classe Validade - 10/09/2021 CLC 0" name="txtcma" value=""></td>
        <td><input class="inputpadrao" placeholder="Não" name="txtalergia" value=""></td>
        <td><input class="inputpadrao" placeholder="PPH+" name="txtaprovacao" value=""></td>
      </tr>
    </table>
    <div class="borda">
    </div>
    <table>
      <tr class="oiiii">

        <td  class="tdpadrão">Estado Civil</td>
        <td><input class="inputpadrao1"  placeholder="Solteiro" name="txtestadocivil" value=""></td>
        <tr>
          <td  class="tdpadrão">Nome do Pai</td>
          <td><input class="inputpadrao1" placeholder="João da Silva" name="txtnomedopai" value=""></td>
        </tr>
      </tr>
      <tr>
        <td  class="tdpadrão">Nome da Mae</td>
        <td><input class="inputpadrao1" placeholder="Maria da Silva" name="txtnomedamae" value=""></td>
      </tr>
    </table>
    <table>
      <tr>

        <td  class="tdpadrão">RG</td>
        <td  class="tdpadrão">CPF</td>
        <td  class="tdpadrão">Reservista </td>
      </tr>
      <tr>
        <td><input class="inputpadrao"  placeholder="999.999.999-99" name="txtrg" value=""></td>
        <td><input class="inputpadrao" placeholder="999.999.999-99" name="txtcpf" value=""></td>
        <td><input class="inputpadrao" placeholder="Não Possui" name="txtreservista" value=""></td>
      </tr>
    </table>
    <table>
      <tr>

        <td  class="tdpadrão">Orgão Expedidor</td>
        <td  class="tdpadrão">Titulo de Eleitor</td>
        <td  class="tdpadrão">Escolaridade</td>
      </tr>
      <tr>
        <td><input class="inputpadrao"  placeholder="SSP-SP" name="txtorgao" value=""></td>
        <td><input class="inputpadrao" placeholder="Campo obrigatório" name="txttitulo" value=""></td>
        <td><input class="inputpadrao" placeholder="Campo obrigatório" name="txtescolaridade" value=""></td>
      </tr>
    </table>
    <div class="borda">
    </div>
    <table>
      <tr>

        <td  class="tdpadrão">Endereço</td>
        <td  class="tdpadrão">CEP</td>
        <td  class="tdpadrão">Telefone</td>
      </tr>
      <tr>
        <td><input class="inputpadrao"  placeholder="Rua Maria da Penha" name="txtendereco" value=""></td>
        <td><input class="inputpadrao" placeholder="00000-000" name="txtcep" value=""></td>
        <td><input class="inputpadrao" placeholder="(11)9999-9999" name="txttelefone" value=""></td>
      </tr>
    </table>
    <table>
      <tr>

        <td  class="tdpadrão">Celular</td>
        <td  class="tdpadrão">Caso de Emergência</td>
        <td  class="tdpadrão">Email</td>
      </tr>
      <tr>
        <td><input class="inputpadrao"  placeholder="(11)9999-9999" name="txtcelular" value=""></td>
        <td><input class="inputpadrao" placeholder="(11)9999-9999" name="txtemergencia" value=""></td>
        <td><input class="inputpadrao" placeholder="exemplo@exemplo.com" name="txtemail" value=""></td>
      </tr>
    </table>
    <table>
      <tr>


        <td  class="tdpadrão">Zona</td>
        <td  class="tdpadrão">Codigo ANAC</td>
          <td  class="tdpadrão">Foto</td>
      </tr>
      <tr>
        <td><input class="inputpadrao" placeholder="957" name="txtzona" value=""></td>
        <td><input class="inputpadrao"  placeholder="309315" name="txtanac" value=""></td>

        <td><input  type="file" placeholder="Campinas" name="filefotos" value=""></td>

      </tr>
    </table>
    <input class="btn" type="submit" value="Salvar" name="btn_salvarrrrr">
    <input class="btn" type="submit" value="Relatorio" name="btn_relatorio">
  </div>


  </form>
  </body>
</html>
