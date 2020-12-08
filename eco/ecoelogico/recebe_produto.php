<?php
    include('conexao.php');
    $nome_produto=$_POST['nome_produto'];
    $descricao=$_POST['descricao'];
    $preco=$_POST['preco'];
    $localidade=$_POST['localidade'];
    $nome_imagem=$_FILES['arquivo'] ['name'];
    $id_categoria=$_POST['categoria'];

   /*  echo "Nome do produto: $nome_produto <br>";
    echo "Descrição: $descricao <br>";
    echo "Preço: $preco <br>";
    echo "Local do Produto: $localidade <br>";
    echo "Nome da Imagem do produto:  $nome_imagem <br>"; */

    // salvar no banco de dados:
    $result_produto = "INSERT INTO tbl_produto(nome_produto, descricao, preco, localidade, imagem_produto, id_categoria) VALUES ('$nome_produto', '$descricao', '$preco', '$localidade', '$nome_imagem', '$id_categoria')";

    $resultado_produto = mysqli_query($conn, $result_produto);
    $ultimo_id  = mysqli_insert_id($conn);
/*     echo "Último id inserido: $ultimo_id <br>"; */

    // pasta onde o arquivo vai ser salvo:
    $_UP['pasta'] = "imagem/produto/".$ultimo_id."/";

    // criar a pasta de foto de produto:
    mkdir($_UP['pasta'], 0777, true);


    // verificar se é possivel mover o arquivo para a pasta escolhida
    if(move_uploaded_file($_FILES['arquivo'] ['tmp_name'], $_UP['pasta'].$nome_imagem)){
        echo "Imagem salva com sucesso!<br>";
    }
    echo ("<script>
              alert('Produto cadastrado com sucesso!');
                 window.location.href='minhaloja.php';
          </script>");
/* ------------------------------------------------------------------------------------------------ */
