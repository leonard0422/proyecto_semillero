@extends('plantilla')

@section('titulo', 'Inicio')

@section('contenido')
    <h1>inicio</h1>


    <div class="container-fluid d-flex justify-content-center">
        <div class="row col-lg-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="width: 60%;" src="/img/carrusel/campeche.jpg" class="d-block w-100" alt="campesino">
                    </div>
                    <div class="carousel-item">
                        <img style="width: 60%;" src="/img/carrusel/mujercampe.jpg" class="d-block w-100" alt="mujer-campesino">
                    </div>
                    <div class="carousel-item">
                        <img style="width: 60%;" src="/img/carrusel/verduras.jpg" class="d-block w-100" alt="verduras">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid d-flex justify-content-center">
        <div class="row col-lg-7.5">
            <div class="card" style="width: 18rem;" >
                <img src="/img/carrusel/tomate.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tomate</h5>
                    <p class="card-text">Deliciosos tomates justo para una dieta saludable.</p>
                    <a href="#" class="btn btn-primary">Añadir al carrito</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/carrusel/papa.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Papa</h5>
                    <p class="card-text">Delciosas papas.</p>
                    <a href="#" class="btn btn-primary">Añadir al carrito</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/carrusel/carrot.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Zanahoria</h5>
                    <p class="card-text">Deliciosas zanahorias.</p>
                    <a href="#" class="btn btn-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
    </div>
@endsection
