<?php
    //verificando se o nome do usuário ou a senha vieram sem conteúdo
    if(!empty($_POST['nome_usuario']) && !empty($_POST['senha_usuario'])){
       
        //usuário preencheu todas as informações
       // $nome_tipoc=1;
        $usuarioc=$_POST['nome_usuario'];
        $senhac=$_POST['senha_usuario'];

    } else{
        echo("<script>alert('Usuário ou senha incorretos! Tente novamente!');
        window.location.href='index.html';</script>");
    }

    // montar a string com o comando select para verificar se o usuário e senha 
    // estão presentes no banco de dados.
    $sql="SELECT * FROM tbl_cli_vend WHERE nome_usuario='$usuarioc' AND senha_usuario='$senhac'";

    //antes de executar, conectar como bd
    include('conexao.php');

    // vamos executar o comando sql no bd
    $resultado=mysqli_query($conn,$sql);

    $linha=mysqli_fetch_array($resultado);
     mysqli_close($conn);

    if(!$linha){
        //não encontrou o usuário
        // dar mensagem e voltar para o index.html
        echo ("<script>
        alert('Usuário não cadastrado! Tente novamente ou Cadastre-se!');
        window.location.href='pagelogin.html';
        </script>");
    } else {
        //encontrou o usuário cadastrado 
        
        echo("<script>
                alert('Bem vindo a Eco é Lógico!')
        window.location.href='principal.php';
        </script>");
    }
?>

<