<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebê - Eco é Lógico</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="icon" href="icons/eco.store.logo.png">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/categoria.css">
</head>
<body>
        <!---------------------------V-LIBRAS--------------------------->
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

    <!-----------------------------------------------HEADER------------------------------------------------->
    <header class="bg-verdec wrapper">
      <!-------------------------------------------HEADER-LOGO------------------------------------------------------>
      <a href="principal.php"><img src="icons/eco-logo.png" class="eco-logo" alt="Logo Eco é lógico"></a>

      <!---------------------------------------------HEADER-MENU------------------------------------------------------->
      <nav class="navbar navbar-expand-lg navbar-light bg-verdec" style="width: 100%;">
        <button class="navbar-toggler" id="btnmenu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" bg-verdec collapse navbar-collapse" id="navbarSupportedContent">
          <ul class=" navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle let-verde" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item let-verde" href="catbebe.php">Bebê</a>
                <a class="dropdown-item let-verde" href="catbrinquedos.php">Brinquedos</a>
                <a class="dropdown-item let-verde" href="catcasaecozinha.php">Casa & Cozinha</a>
                <a class="dropdown-item let-verde" href="cathigiene.php">Cuidado Pessoal</a>
                <a class="dropdown-item let-verde" href="catdecoracao.php">Decoração</a>
                <a class="dropdown-item let-verde" href="catjoias.php">Joias</a>
                <a class="dropdown-item let-verde" href="catmaterialesc.php">Material Escolar</a>
                <a class="dropdown-item let-verde" href="catpet.php">Pet</a>
                <a class="dropdown-item let-verde" href="catroupas.php">Roupas</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link let-verde" href="parcerias.html">Parcerias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link let-verde" href="quemsomos.html">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link let-verde" href="dica.html">Dicas</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link let-verde" href="minhaloja.php">Minha loja</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar Produtos" aria-label="Search">
            <button class="btn-lupa my-2 my-sm-0" type="submit"><svg width="1.05em" height="1.05em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 4px;"> 
              <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
              <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
            </svg></button>
          </form>
        </div>
      </nav>
      <!---------------------------------------------HEADER-BOTÃO DE LOGIN---------------------------------------------->
      <a href="pagelogin.html"><button type="button" class="btn-perfil"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 4px;">
        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      </svg></button></a>
    </header>    
       <!----------------------------------------------FIM DO HEADER--------------------------------------------->
    
       <?php 
        $sql="SELECT * FROM tbl_produto WHERE id_categoria=1 ORDER BY id_produto DESC";

        //conexão com bd
        include('conexao.php');

        //executar o comando que está em $sql
        $res=mysqli_query($conn,$sql);
        // $ultimo_id = mysqli_insert_id($conn);
        while($tbl_produto=mysqli_fetch_array($res))
        {
           $ultimo_id=$tbl_produto['id_produto']; 
       
       ?>
        <article id="artcard">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front" style="padding: 5px">
              <?php
                  $imagem ='imagem/produto/'.$ultimo_id.'/'.$tbl_produto['imagem_produto'];
              ?>
              <img src="<?php echo $imagem;?>" width="150" height="150"  alt="">
                <h3><?php echo($tbl_produto['nome_produto']);?></h3>
                <div class="row">
                  <h5 class="col" style="text-align: center;"><?php echo'R$ '.($tbl_produto['preco']);?></h5>
                </div>
              </div>
              <div class="flip-card-back">
                <div style="heigth:250px;">
                <br>
                  <h3><?php echo($tbl_produto['nome_produto']);?></h3>
                  <p><?php echo('R$ '.$tbl_produto['preco']);?></p>
                  <p><?php echo($tbl_produto['descricao']);?></p>
                </div>
                <div style="position: absolute; bottom:50px;">
                   <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart2 col let-verde" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                   </svg>
                </div>
              </div>
            </div>
        </div>          
        </article>
      
      <?php
        }
        mysqli_close($conn);
      ?>
    
    
       <!---------------------------------------------------FOOTER-------------------------------------------------->
      
<footer id="three" class="wrapper style1 fade-up bg-verdec">
    <div class="inner">
      <h2>Receba novidades imperdíveis:</h2>
      <div class="split style1">
        <section>
          <form method="post" action="#">
            <div class="fields">
              <div class="field half">
                <label class="label-footer" for="name">Nome</label>
                <input class="input-footer" type="text" name="name" id="name" placeholder="Digite seu nome" style="background-color: white;"  />
              </div>
              <div class="field half">
                <label class="label-footer" for="email">E-mail</label>
                <input class="input-footer" type="text" name="email" id="email" placeholder="Digite seu e-mail" style="background-color: white;"  />
              </div>
            </div>
            <ul class="actions">
              <li><a href="" class="button submit">Receber Ofertas</a></li>
            </ul>
          </form>
        </section>
        <section>
          <ul class="contact">
            <li>
              <h3>Fale Conosco</h3>
              <p class="let-verde"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
              </svg>&nbsp;&nbsp; ecoelogico@gmail.com</p>
            </li>
            <li>
             <p class="let-verde"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
             </svg>&nbsp;&nbsp;(11) 99999-0000</p>
            </li>
            <li>
              <h3>Redes Sociais</h3>
              <ul class="icons">
                 <li><a href="https://www.facebook.com/ecoelogico"><img class="img-footer" src="icons/facebook.png" alt="Facebook"></a></li>
                 <li><a href="https://www.instagram.com/eco_elogico/"><img class="img-footer" src="icons/instagram.png" alt="Instagram"></a></li>
                 <li><a href="https://twitter.com/eco_elogico"><img class="img-footer" src="icons/twitter.png" alt="Twitter"></a></li>
              </ul>
            </li>
          </ul>
        </section>
      </div>
    </div>
    <hr>
    <p class="slogan"><img class="e-logo" src="icons/eco.store.logo.png" alt="E da Logo ">
    &nbsp;&nbsp;&nbsp; Eco é Lógico&reg; | Produzindo um novo conceito de loja! </p>
  </footer>
  <!---------------------------------------------SCRIPT--------------------------------------->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 

</body>
</html>