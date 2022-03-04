@extends('plantilla')
@section('titulo', 'Inicio sesion')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesion</title>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('css/sesion.css')}}">

</head>

<body>

@section('contenido');


<div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" class="sign-in-form">
          <h2 class="title">Inicia sesion</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Usuario" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Contraseña" />
          </div>
          <input type="submit" value="Login" class="btn solid" />
          <p class="social-text">inicia sesion con estas redes sociales</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="#" class="sign-up-form">
          <h2 class="title">Registrate</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Usuario" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Correo" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Contraseña" />
          </div>
          <input type="submit" class="btn" value="Registrate" />
          <p class="social-text">inicia sesion con estas redes sociales</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Eres nuevo?</h3>
          <p>
         HOLA! BIENVENIDO
          </p>
          <button class="btn transparent" id ="sign-up-btn">
            Registrate
          </button>
        </div>
        <img src="img/login/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>uno de nosotros?</h3>
          <p>
           inicia !
          </p>
          <button class="btn transparent" id="sign-in-btn">
           Inicia Sesion
          </button>
        </div>
        <img src="img/login/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="css/app.js"></script>
@endsection

</body>
</html>

