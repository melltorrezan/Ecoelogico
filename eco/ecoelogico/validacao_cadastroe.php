<?php
//receber as informações da variavel superglobal e armazená-las nas variáveis locais

    $nome_tipo=2;
    $loja=$_POST['loja'];
    $usuarioe=$_POST['usuarioe'];
    $cpfe=$_POST['cpfe'];
    $datae=$_POST['datae'];
    $emaile=$_POST['emaile'];
    $telefonee=$_POST['telefonee'];
    $senhae=$_POST['senhae'];


    //conectando-se ao banco de dados
    include('conexao.php');

    //string $sql = string de inserção de registro

    $sql="INSERT INTO tbl_cli_vend (nome_tipo, nome_completo_usuario, nome_usuario, cpf_cnpj, data_nasc_usuario, email_usuario, telefone_usuario, senha_usuario)
    VALUES ($nome_tipo,'$loja', '$usuarioe', '$cpfe', '$datae', '$emaile', '$telefonee', '$senhae')";
    //executar o comando sql
    $resultado=mysqli_query($conn, $sql) or die ('Falha na atualização do registro!');
    
    // fechar a conexão
    mysqli_close($conn);
    
    //vou levar o usuário para a tela de login
    echo ("<script>
              alert('Registro atualizado com sucesso!');
                 window.location.href='pagelogin.html';
          </script>");
  
?>