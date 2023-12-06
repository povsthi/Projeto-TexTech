<?php
require_once('C:\xampp\htdocs\Projetoversaophp\View\protected.php');
require_once ('C:\xampp\htdocs\Projetoversaophp\Templates\Header\index.php');
require_once ('C:\xampp\htdocs\Projetoversaophp\Templates\Carrossel\carrossel.php');
include('protect.php');
?>

<?php
    include_once ('C:\xampp\htdocs\Projetoversaophp\Templates\Produtospvoce\pvoce.php');
?>

<?php
    include_once ('C:\xampp\htdocs\Projetoversaophp\Templates\footer\footer.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<body>
        <header>
      <nav class="navbar navbar-expand-lg" style="background-color: #008f49;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/imagens/logonova.png" width = 200> 
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-5 mb-lg-0" style="color:white">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="index2.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="produtos.html">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="novidades.html">Novidades</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="quemsomos.html">Quem Somos</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
        </header>
    <section>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/imagens/slide1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/imagens/slide2.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/imagens/slide3.webp" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <h2 class="text-center my-3 my-xl-5">Produtos para você</h2>
    <div class="container row mx-auto g-4">
        <div class="col-6 col-md-4 col-xxl-2">
            <div class="card rounded-3 border-3">
                <img src="/imagens/EletrodoParaLiquidos.png" alt="Foto do eletrodo">
                <img src="" alt="">
                <img src="" alt="">
                <div class="card-header">
                    <p class="text-center"> Eletrodo para Liquidos </p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xxl-2">
            <div class="card rounded-3 border-3">
                <img src="/imagens/E-201.png" alt="Foto do e-201">
                <img src="" alt="">
                <img src="" alt="">
                <div class="card-header">
                    <p class="text-center"> E-201 </p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-xxl-2">
            <div class="card rounded-3 border-3">
                <img src="/imagens/phtex86.png" alt=" foto pH Tex 86">
                <img src="" alt="">
                <img src="" alt="">
                <div class="card-header">
                    <p class="text-center"> pH Te 86 </p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-xxl-2">
            <div class="card rounded-3 border-3">
                <img src="/imagens/MedidorPhBolso.png" alt="foto do medidor de Bolso">
                <img src="" alt="">
                <img src="" alt="">
                <div class="card-header">
                    <p class="text-center"> Medidor de pH de bolso </p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-xxl-2">
            <div class="card rounded-3 border-3">
                <img src="/imagens/RegistradorGrafico.png" alt="Foto do registrador">
                <img src="" alt="">
                <div class="card-header">
                    <p class="text-center"> Registrador gráfico </p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-xxl-2">
            <div class="card rounded-3 border-3">
                <img src="/imagens/medidordebolso.png" alt="Óculos">
                <img src="" alt="">
                <img src="" alt="">
                <div class="card-header">
                    <p class="text-center"> Medidor de bolso </p>
                </div>
            </div>
        </div>

    </div>
    </section>
</body>
</html>