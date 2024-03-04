@extends('layouts.base')

@section('title','Página Inicial')

@section('content')


<section class="bg-white">
  <!--OUTDOOR-->
  <img class="img-lg img-fluid" src="/assets/img/banner-outdoor-lg.png">
  <img class="img-md img-fluid" src="/assets/img/banner-outdoor-md.png">
  <img class="img-sm img-fluid" src="/assets/img/banner-outdoor-sm.png">

  <!--PESQUISA DE IMÓVEL-->
  <div class="container">
    <br>
    <h5 class="text-center">Encontre seu imóvel ideal</h5>
    <br>
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <h6>Tipo do Imóvel</h6>
        <select class="form-select shadow-sm" aria-label="Default select example">
          <option selected>Selecione</option>
          <option value="1">Casa</option>
          <option value="2">Apartamento</option>
          <option value="3">Terreno</option>
        </select>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <h6>Valor mínimo</h6>
        <div class="">
          <input type="email" class="form-control shadow-sm" id="exampleFormControlInput1" placeholder="R$ 0,00">
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <h6>Valor Máximo</h6>
        <div class="">
          <input type="email" class="form-control shadow-sm" id="exampleFormControlInput1" placeholder="R$ 0,00">
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <h6>Bairro</h6>
        <select class="form-select shadow-sm" aria-label="Default select example">
          <option selected>Selecione</option>
          <option value="1">Vila Pery</option>
          <option value="2">Parangaba</option>
          <option value="3">Moudubim</option>
          <option value="4">Parque São José</option>
          <option value="5">Maraponga</option>
          <option value="6">Bonsucesso</option>
          <option value="7">Montese</option>
        </select>
      </div>
      <div class="col-lg-5 col-md-8 col-sm-10 col-xs-12 text-center">
        <br>
        <button type="button" class="btn btn-dark col-lg-4 col-md-3 col-sm-4 col-xs-6"><h5 class="poppins-light">Pesquisar</h5></button>
      </div>
    </div>
    <br>
  </div>
</section>

<section class="container">
  <br><br>

  <h1 class="text-center poppins-light display-5">Imóveis em Destaque</h1>

  <br><br>

  <div class="row justify-content-center">
    
      @for($i=1;$i <= 1; $i++)
      <card class="col-lg-3 col-md-4 col-sm-6 col-xs-12 p-4 m-auto card-grid">
        <a class="navbar-link" href="/imovel/{{$i}}">
          <div class="card p-3 border-0 shadow-lg rounded-1" style="width: 18em;">
            <img src="/assets/img/logo-JS.png" class="card-img-top">
            <div class="card-body">
              <span class="card-title"><b>NOME DO IMÓVEL {{$i}} </b></span>
              <p class="fs-6 poppins-light">BAIRRO - CIDADE/CE</p>
              <p><i class="fa-solid fa-bed" style="color: #B90504"></i> X Quartos <br>
                 <i class="fa-solid fa-car" style="color: #B90504"></i> X Garagem <br>
                 <i class="fa-solid fa-expand" style="color: #B90504"></i> XX m²</p>
              <p class="poppins-light text-end"><i class="fa-solid fa-star" style="color: #B90504;"></i> 5/5</p>
            </div>
          </div>
        </a>
      </card>

      @endfor


  </div>

  <br><br>
</section>


@endsection