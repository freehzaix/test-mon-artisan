@extends('layout-auth.base')

@section('contenu')

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Inscription</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Création d'un compte
        @if ($errors)
            @foreach($errors->all() as $error)
              <div class="text text-danger"> {{ $error }} </div>
            @endforeach
        @endif
        @if(session('status'))
          <div class="alert alert-success"> {{ session('status') }} </div>
        @endif
      </p>

      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ old('nom') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" name="prenom" class="form-control" placeholder="Prenom" value="{{ old('prenom') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Mot de passe">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
         
          <!-- /.col -->
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Inscription</button>
          </div>
          <!-- /.col -->

        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-0">
        <a href="{{ route('login') }}" class="text-center">Se connecter maintenant!</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<!-- /.login-box -->


@endsection