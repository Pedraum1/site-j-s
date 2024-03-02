<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

  </head>
  <body class="poppins-medium">

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg bg-light shadow">
      <div class="container">

        <!--LOGO-->
        <a class="navbar-brand" href="/">
          <img src="/assets/img/logo-horizontal.png" alt="" class="logo-navbar d-inline-block">
        </a>

        <!--TOGGLE BUTTON-->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!--SIDEBAR-->
        <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <img src="/assets/img/logo-horizontal.png" id="offcanvasNavbarLabel" alt="" class="offcanvas-title logo-navbar d-inline-block">
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <!--NAVBAR BODY-->
          <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
            <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
              <li class="nav-item mx-3">
                <a class="nav-link poppins-regular" aria-current="page" href="/about">O Que é a J&S?</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link poppins-regular" href="#">Nossos Serviços</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link poppins-regular" href="#">Formas de Contato</a>
              </li>              
            </ul>
            <!--LOGIN E SIGN UP-->
            <div class="d-flex justify-content-center align-items-center flex-column flex-lg-row">
              <a class="text-decoration-none px-3 py-1 navbar-link" href="/login">LOGIN</a>
              <a class="text-decoration-none px-3 py-1 navbar-link" href="/register">SIGN UP</a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!--CONTENT-->
    @yield('content')

    <!--FOOTER-->

    <footer class="bg-dark-red">
    <br><br>
    <div class="container text-light poppins-extralight">
      <div class="row justify-content-around">
        <!--SEÇÃO ESQUERDA-->
        <aside class="col-lg-4 col-sm-12">
          <h1 class="fs-3 poppins-light">J&S Corretores de Imóveis</h1>
          <p>CNPJ - XX.XXX.XXX/XXXX-XX <br>CRECI/CE 10250-F</p>
          <p>Rua Arruda Câmara, 147 - 60730-160<br> Vila Pery - Fortaleza/CE</p>
        </aside>

        <br><br>

        <!--SEÇÃO DIREITA-->
        <aside class="col-lg-6 col-sm-12">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <h1 class="fs-5 poppins-regular">Contato</h1>
              <p class="poppins-light">
                email@email.com <br>
                (85) 98746-3848 <br>
                (85) 98777-5743
              </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <h1 class="fs-5 poppins-regular">Menu</h1>
              <p class="poppins-light">
                <a class="footer-link" href="">Início</a><br>
                <a class="footer-link" href="">Sobre</a><br>
                <a class="footer-link" href="">Contato</a><br>
                <a class="footer-link" href="">Serviços</a><br>
                <a class="footer-link" href="">Pesquise imóveis</a>
              </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <h1 class="fs-5 poppins-regular">Social</h1>
              <p class="poppins-light">
                <a class="footer-link" href="">Instagram</a><br>
                <a class="footer-link" href="">Facebook</a>
              </p>
            </div>
          </div>
        </aside>
      </div>
    </div>
    <br><br>

    <!--DIVISÓRIA-->
    
    <div class="container text-light">
      <hr>
    </div>
    <br>
    <p class="text-center poppins-light text-light">© Copyright 2024 - J&S Corretores - Todos os direitos reservados - Desenvolvido por Pedrão</p>
    <br><br>
    </footer>

    <script src="/assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/29d69f2549.js" crossorigin="anonymous"></script>
  </body>
</html>