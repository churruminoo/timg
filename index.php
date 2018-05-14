<?php
  session_start();
  $_SESSION['id'] = "1";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TIMG - This is my game</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles1.css" />


  </head>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

      <a class="navbar-brand" href="#">TIMG <small>- This is my game</small></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-sm-auto">
          <li class="nav-item navtop">
            <a class="nav-link" href="#section1">HOME</a>
          </li>
          <li class="nav-item navtop">
            <a class="nav-link" href="#section2">Publicar Vídeo</a>
          </li>
          <li class="nav-item navtop">
            <a class="nav-link" href="#section3">Buscar Talentos</a>
          </li>
          <li class="nav-item navtop">
            <a class="nav-link" href="#section4">Sobre</a>
          </li>
          <li class="nav-item navtop">
            <a class="nav-link" href="#section5">Login</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container fixed-bottom">
      <div class="row">
        <div class="offset-md-5 offset-3">
          <ul class="navbottom">
            <li class="navbottom futebol"><a href="#section1"><img src="icones/futebol.png"></a></li>
            <li class="navbottom basquete"><a href="#section1"><img src="icones/basquete.png"></a></li>
            <li class="navbottom baseball"><a href="#section1"><img src="icones/baseball.png"></a></li>
            <li class="navbottom fut_americano"><a href="#section1"><img src="icones/fut_amer.png"></a></li>
            <li class="navbottom volei"><a href="#section1"><img src="icones/volei.png"></a></li>
          </ul>
        </div>
      </div>
    </div>

    <section id="section1" class="secao1">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
            <h1 class="mancheteCapa">Novos Talentos</h1>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <video controls class="videoHome embed-responsive">
              <source src="video/video1.mp4" type="video/mp4" id="video_atual">
            </video>
          </div>
        </div>
      </div>
      <div class="prox_video">
            <img src="fotos/esq-icon.png" class="video-icon-esq">
            <img src="fotos/dir-icon.png" class="video-icon-dir">
      </div>
    </section>
    <section id="section2" class="secao2">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
            <h1>Mostre seu talento</h1>
            <h4>Esta é a oportunidade de mostrar toda sua habilidade para o mundo</h4>
            <ol class="listaSec2">É muito fácil publicar seu vídeo:
              <li>Faça uma gravação de até 10 Mb, no formato mp4, mostrando todas as suas habilidades. Edite, formate, seja criativo para conseguir atrair a atenção de milhares de interessados.</li>
              <li>Agora basta enviar no link abaixo, e seu vídeo será visualizado por mihares de pessoas por todo o planeta e você terá mais chances de atingir seus sonhos.</li>
            </ol>

            <form action="uploadVideo.php" method="post" enctype="multipart/form-data">
              <div>É preciso <a class="linkComum" id="openUpon">fazer login</a> para conseguir enviar seu vídeo</div>
              <input type="file" name="file" id="file" disabled></br>
              <input type="submit" value="Enviar" id="submit" name="submit" disabled>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section id="section3" class="secao3">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
            <h1>Buscar talentos</h1>
            <h4>O que está esperando para encontrar a nova promessa do seu esporte? Junte-se a nós, e seja mais um a ajudar no desenvolvimento dos atletas</h4>
            <p>Não importa se você está buscando um novo atleta para seu clube, ou se você é um empresário buscando um talento para estampar a marca da sua empresa, ou então se você é um intermediário buscando novas revelações para agenciar. No TIMG você possui a estrutura completa para encontrar o futuro do esporte.</p>
            <hr>
            <!--
            <h4>Buscas especializadas</h4>
            <div class="media">
                <div class="media-body media-middle">
                    <p>Filtre por idade, altura, peso, cidade e muitas outras características. Encontre tudo o que precisa em minutos.</p>
                </div>
                <div class="media-right">
                    <img src="fotos/busca1.jpeg" class="img-responsive fotoIcone ">
                </div>
            </div>
            <hr>
            <h4>Dados completos</h4>
            <div class="media">
                <div class="media-left">
                    <img src="fotos/matrix1.jpeg" class="img-responsive fotoIcone">
                </div>
                <div class="media-body media-middle">
                    <p>Faça suas buscas, descubra um novo talento e entre diretamente em contato com ele.</p>
                </div>
            </div>
            <hr>
            <h4>Novos talentos diariamente</h4>
            <div class="media">
                <div class="media-body media-middle">
                    <p>Todos os dias novos atletas do mundo todo estarão mostrando suas habilidades.</p>
                </div>
                <div class="media-right">
                    <img src="fotos/globo1.jpg" class="img-responsive fotoIcone">
                </div>
            </div> -->

            <div class="d-flex flex-row">
              <div class="p-4">
                <i class="fa fa-check"></i>
              </div>
              <div class="p-4">
                <p>Filtre por idade, altura, peso, cidade e muitas outras características. Encontre tudo o que precisa em minutos.</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div class="p-4">
                <i class="fa fa-check"></i>
              </div>
              <div class="p-4">
                <p>Faça suas buscas, descubra um novo talento e entre diretamente em contato com ele.</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div class="p-4">
                <i class="fa fa-check"></i>
              </div>
              <div class="p-4">
                <p>Todos os dias novos atletas do mundo todo estarão mostrando suas habilidades.</p>
              </div>
            </div>

        </div>
        </div>
      </div>
    </section>

    <section id="section4" class="secao4">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
            <h1>Sobre nós</h1>
            <p>O TIMG é uma plataforma criada para que clubes e empresários encontrem atletas que buscam uma oportunidade no esporte. Aqui é possível divulgar e buscar talentos, de qualquer idade, de qualquer parte do mundo e de qualquer esporte.</p>
            <h3>Tem dúvidas ou sugestões?</h3>
            <h5>Suporte Técnico</h5>
            <p>suporte@timg.xyz</p>
            <h5>Contato Comercial</h5>
            <p>comercial@timg.xyz</p>
        </div>
      </div>
    </div>
    </section>
    <section id="section5" class="secao5">
      <div id="regContainer" class="container">
            <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="panel panel-login">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-6">
                      <a href="#" class="active" id="login-form-link">Login</a>
                    </div>
                    <div class="col-6">
                      <a href="#" id="register-form-link">Register</a>
                    </div>
                  </div>
                  <hr>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <form id="login-form" action="#" method="post" role="form" style="display: block;">
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group text-center">
                          <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                          <label for="remember"> Remember Me</label>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-6 offset-sm-3">
                              <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                            </div>
                          </div>
                        </div>
                      </form>
                      <form id="register-form" action="#" method="post" role="form" style="display: none;">
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="confirm-password">Confirm password</label>
                          <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-6 offset-sm-3">
                              <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts1.js"></script>

  </body>
</html>
