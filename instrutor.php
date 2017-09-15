<!DOCTYPE html>
<?php
  session_start();


        $nome = null;
        $dt_nasci= null;
        $sexo = null;
        $bairro = null;
        $cidade = null;
        $uf = null;
        $cep = null;
        $telefone= null;
        $celular =  null;
        $email= null;
        $estadoCivil = null;
        $cpf= null;
        $escolaridade = null;
        $nacionalidade= null;
        $naturalidade= null;
        $recado = null;
        $codAnac = null;
        $nomePai= null;
        $nomeMae= null;
        $classe = null;
        $validade= null;
        $emissor= null;
        $contatar = null;
        $parentesco= null;
        $enderecoEmergencia= null;
        $bairroEmergencia = null;
        $cidadeEmergencia= null;
        $ufEmergencia= null;
        $cepEmergencia = null;
        $telefoneEmergencia= null;
        $celularEmergencia= null;
        $tipoSanguineo = null;
        $alergias= null;
        $recado = null;
        $nome_novo_foto=null;
        $endereco=null;


$conexao = mysql_connect('10.107.144.10','root','bcd127');

	mysql_select_db('db_helimaxy');

    if(isset($_POST['btn_salvar'])){

        $nome=$_POST['txtnome']; /* FEITO */
        $dt_nasci=$_POST['txtNasci'];
        $sexo = $_POST['txtSexo']; /* FEITO */
        $endereco=$_POST['txtendereco'];
        $bairro=$_POST['txtBairro'];
        $cidade = $_POST['txtCidade'];
        $uf =$_POST['txtUf'];
        $cep = $_POST['txtCep'];
        $telefone=$_POST['txtTelefone'];
        $celular = $_POST['txtCelular'];
        $email=$_POST['txtEmail'];
        $estadoCivil = $_POST['txtEstadoCivil'];
        $cpf=$_POST['txtCpf'];
        $rg=$_POST['txtRg'];
        $escolaridade = $_POST['txtEscolaridade'];
        $nacionalidade=$_POST['txtNacionalidade'];
        $naturalidade=$_POST['txtNaturalidade'];
        $recado=$_POST['txtRec'];
        $codAnac = $_POST['txtCodAnac'];
        $nomePai=$_POST['txtNomePai'];
        $nomeMae=$_POST['txtNomeMae'];
        $classe = $_POST['txtClasse'];
        $validade=$_POST['txtValidade'];
        $emissor=$_POST['txtEmissor'];
        $contatar = $_POST['txtContatar'];
        $parentesco=$_POST['txtParentesco'];
        $enderecoEmergencia=$_POST['txtEnderecoEmergencia'];
        $bairroEmergencia = $_POST['txtbairroEmergencia'];
        $cidadeEmergencia=$_POST['txtCidadeEmergencia'];
        $ufEmergencia=$_POST['txtUfEmergencia'];
        $cepEmergencia = $_POST['txtCepEmergencia'];
        $telefoneEmergencia=$_POST['txtTelefoneEmergencia'];
        $celularEmergencia=$_POST['txtCelularEmergencia'];
        $tipoSanguineo = $_POST['txtTipoSanguineo'];
        $alergias=$_POST['txtAlergias'];

        @    $extensao = strtolower(substr($_FILES['filefotos']['name'],-4));
        @    $nome_novo_foto = md5(time()).$extensao;
        @    $diretorio = "Arquivos/";

        @    move_uploaded_file($_FILES['filefotos']['tmp_name'], $diretorio.$nome_novo_foto);

    $sql = "insert into tbl_instrutor(nome_instrutor, sexo,endereco,bairro,cidade,uf, cep, telefone,celular,tel_recado,email,estado_civil,rg,cpf,escolaridade,nacionalidade, naturalidade,  dt_nasci,cod_anac,nome_pai,nome_mae,classe,validade,emissor,contatar,parentesco,endereco_emergencia,    bairro_emergencia,  uf_emergencia,cidade_emergencia,telefone_emergencia,celular_emergencia,tipo_sanguineo,alergia, foto) ";

    $sql=$sql."values('".$nome."','".$sexo."','".$endereco."','".$bairro."','".$cidade."','".$uf."','".$cep."','".$telefone."','".$celular."','".$recado."','".$email."','".$estadoCivil."','".$rg."','".$cpf."','".$escolaridade."','".$nacionalidade."','".$naturalidade."','".$dt_nasci."','".$codAnac."','".$nomePai."','".$nomeMae."','".$classe."','".$validade."','".$emissor."','".$contatar."','".$parentesco."','".$enderecoEmergencia."','".$bairroEmergencia."','".$ufEmergencia."','".$cidadeEmergencia."','".$telefoneEmergencia."','".$celularEmergencia."','".$tipoSanguineo."','".$alergias."','".$nome_novo_foto."')";

    //echo($sql);
    mysql_query($sql);
  }
    if (isset($_POST['btn_relatorio'])){
      $sql = "select id_instrutor from tbl_instrutor order by id_instrutor desc limit 1";
      $select = mysql_query($sql);

      if($rs = mysql_fetch_array($select)){

        $id = $rs['id_instrutor'];
        $_SESSION['id'] = $id;
      }

        header("Location:relatorioInstrutor.php");
    }

?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style/home.css">
    <link rel="stylesheet" type="text/css" href="style/instrutor.css">
    <meta charset="utf-8">

    <title></title>
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
        <div id="conteudo">
            <div id="caixas_conteudo">
                <div id="titulo">
                    Instrutor <br><br>
                </div>
                <div class="borda">
                </div>
                <form action="instrutor.php" method="post">
                    <table class="teste">
                        <tr>
                            <td class="tdform">Nome do Aluno</td>
                            <td class="tdform_date">Data de Nascimento</td>
                            <td class="tdform_date">Sexo</td>
                        </tr>
                        <tr>
                            <td><input class="input"  placeholder="" name="txtnome" value=""></td>
                            <td><input class="input_data" placeholder=" XX/XX/XXXX" name="txtNasci" value=""></td>
                            <td><input class="input_data" placeholder="" name="txtSexo" value=""></td>
                        </tr>
                    </table>
                    <table class="teste">
                        <tr>
                            <td class="tdform_date1">Bairro</td>
                            <td class="tdform_date1">Cidade</td>
                            <td class="tdform_date1">UF</td>
                            <td class="tdform_date">CEP</td>
                            <td class="tdform_date">REC</td>
                        </tr>
                        <tr>
                            <td><input class="input1" name="txtBairro" value=""></td>
                            <td><input class="input_data" name="txtCidade" value=""></td>
                            <td><input class="input_uf" name="txtUf" value=""></td>
                            <td><input class="input_cep" name="txtCep" value=""></td>
                            <td><input class="input_cep" name="txtRec" value=""></td>
                        </tr>
                    </table>
                    <table class="teste">
                        <tr>
                            <td class="tdform_date">TEL</td>
                            <td class="tdform_date">CEL</td>
                            <td class="tdform_date">Endereço</td>
                            <td class="tdform_date">E-mail</td>
                        </tr>
                        <tr>
                            <td><input class="input_data" name="txtTelefone" value=""></td>
                            <td><input class="input_data" name="txtCelular" value=""></td>
                            <td><input class="input_data" name="txtendereco" value=""></td>
                            <td><input class="input-email" name="txtEmail" value=""></td>
                        </tr>
                    </table>
                    <table class="teste">
                        <tr>
                            <td class="tdform_date">Estado Civil</td>
                            <td class="tdform">RG</td>
                            <td class="tdform_date">CPF</td>
                        </tr>
                        <tr>
                            <td><input class="input_data" name="txtEstadoCivil" value=""></td>
                            <td><input class="input_data" name="txtRg" value=""></td>
                            <td><input class="input-email" name="txtCpf" value=""></td>
                        </tr>
                    </table>
                    <table class="teste">
                        <tr>
                            <td class="tdform_date">Escolaridade</td>
                            <td class="tdform_date">Nacionalidade</td>
                            <td class="tdform_date">Naturalidade</td>
                        </tr>
                        <tr>
                            <td><input class="input_data" name="txtEscolaridade" value=""></td>
                            <td><input class="input_data" name="txtNacionalidade" value=""></td>
                            <td><input class="input_data" name="txtNaturalidade" value=""></td>
                        </tr>
                    </table>
                    <table class="teste">
                        <tr>
                            <td class="tdform_date">Cód Anac</td>
                            <td class="tdform_date">Filiação (PAI)</td>
                            <td class="tdform_date">Filiação (MÃE)</td>
                        </tr>
                        <tr>
                            <td><input class="input_data" name="txtCodAnac" value=""></td>
                            <td><input class="input_data" name="txtNomePai" value=""></td>
                            <td><input class="input_data" name="txtNomeMae" value=""></td>
                        </tr>
                    </table>
                    <div class="borda">
                    </div>
                    <div id="titulo">
                        Certificado de Capacidade Física
                    </div>
                    <div class="borda">
                    </div>
                    <table class="teste">
                        <tr>
                            <td class="tdform_date">Classe</td>
                            <td class="tdform">Validade</td>
                            <td class="tdform_date">Emissor</td>
                        </tr>
                        <tr>
                            <td><input class="input-email" name="txtClasse" value=""></td>
                            <td><input class="input_data" placeholder=" XX/XX/XXXX" name="txtValidade" value=""></td>
                            <td><input class="input_data" placeholder="" name="txtEmissor" value=""></td>
                        </tr>
                    </table>
                    <div class="borda">
                    </div>
                    <div id="titulo">
                        Em Caso de Emergência
                    </div>
                    <div class="borda">
                    </div>
                    <table class="teste">
                        <tr>
                            <td class="tdform_date">Contatar</td>
                            <td class="tdform_date">Parentesco</td>
                            <td class="tdform_date">Endereço</td>
                        </tr>
                        <tr>
                            <td><input class="input_data" name="txtContatar" value=""></td>
                            <td><input class="input_data" name="txtParentesco" value=""></td>
                            <td><input class="input_data" name="txtEnderecoEmergencia" value=""></td>
                        </tr>
                    </table>
                    <table class="teste">
                        <tr>
                            <td class="tdform_date">Bairro</td>
                            <td class="tdform_date">Cidade</td>
                            <td class="tdform_date">UF</td>
                        </tr>
                        <tr>
                            <td><input class="input_data" name="txtbairroEmergencia" value=""></td>
                            <td><input class="input_data" name="txtCidadeEmergencia" value=""></td>
                            <td><input class="input_data" name="txtUfEmergencia" value=""></td>
                        </tr>
                    </table>
                    <table class="teste">
                        <tr>
                            <td class="tdform_date">CEP</td>
                            <td class="tdform_date">TEL</td>
                            <td class="tdform_date">CEL</td>
                        </tr>
                        <tr>
                            <td><input class="input_data" name="txtCepEmergencia" value=""></td>
                            <td><input class="input_data" name="txtTelefoneEmergencia" value=""></td>
                            <td><input class="input_data" name="txtCelularEmergencia" value=""></td>
                        </tr>
                    </table>
                    <table class="teste">
                        <tr>
                            <td class="tdform_date">Tipo Sanguíneo</td>
                            <td class="tdform_date">Alergias</td>
                            <td class="tdform_date">Foto</td>
                        </tr>
                        <tr>
                            <td><input class="input_data" name="txtTipoSanguineo" value=""></td>
                            <td><input class="input_uf" name="txtAlergias" value=""></td>
                             <td><input class="" name="filefotos" type="file" value=""></td>
                        </tr>
                    </table>

                <div class="borda">
                </div>
                <input class="btn" type="submit" value="Salvar" name="btn_salvar">
                  <input class="btn" type="submit" value="Relatorio" name="btn_relatorio">


            </div>
        </div>
            </form>
    </section>
  </body>
</html>
