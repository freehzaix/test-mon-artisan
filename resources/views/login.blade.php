@extends('layout-auth.base')

@section('contenu')

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Connexion</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Se connecter
        @if ($errors)
            @foreach($errors->all() as $error)
              <div class="text text-danger"> {{ $error }} </div>
            @endforeach
        @endif
        @if(session('status'))
          <div class="text text-success"> {{ session('status') }} </div>
        @endif

        @if(session('erreur'))
          <div class="text text-danger"> {{ session('erreur') }} </div>
        @endif
      </p>

      <form action="{{ route('login') }}" method="post">
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
            <button type="submit" class="btn btn-primary btn-block">Me connecter</button>
          </div>
          <!-- /.col -->

        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        
      </div>
      <!-- /.social-auth-links 

      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>-->
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Créer un compte administrateur.</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<!-- /.login-box -->


@endsection