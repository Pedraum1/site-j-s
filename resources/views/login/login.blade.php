@extends('layouts.authBase')

@section('title','Login')

@section('content')

  <div class="container col-10 d-flex justify-content-center align-items-center min-vh-100">

    <div class="row border rounded-5 p-3 bg-white shadow-lg box-area ">

      <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">

        <div class="featured-image">
          <img src="/assets/img/logo-JS.png" class="img-fluid" style="width: 500px;">
        </div>
      </div>

      <div class="col-md-6">
        <div class="row align-items-center">
          <div class="header-text mb-4">
            <h2>Bem-vindo</h2>
            <p class="mb-5">Faça login para acessar a plataforma</p>
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email">
            </div>
            <div class="input-group mb-5">
              <input type="password" name="senha" class="form-control form-control-lg bg-light fs-6" placeholder="Senha">
            </div>
            <div class="input-group mb-3">
              <a class="btn btn-lg btn-danger w-100 fs-5" href="/plataforma">Login</a>
            </div>            
          </div>
        </div>
      </div>

    </div>

  </div>

@endsection