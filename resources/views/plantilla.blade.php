<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'AsomeFrut')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/plantilla.css')}}">

    <style>


    </style>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="contenedor d-flex justify-content-end text-align-center">
            <a class="navbar-brand" href="/"><img style="width: 50%;" src="/img/logo/logo1.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0" style="text-align: center">
                    <li class="nav-item ">
                        <a class="nav-link " aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">
                            Contactanos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sesion">Iniciar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('contenido')

    <div class="footer">
        <div><footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">

                <li class="nav-item">
                    <a href="/inicio" class="nav-link px-2 text-muted">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="/nosotros" class="nav-link px-2 text-muted">Quienes somos</a>
                </li>
                <li class="nav-item">
                    <a href="/contacto" class="nav-link px-2 text-muted">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a href="/sesion" class="nav-link px-2 text-muted">Inicio de sesion</a>
                </li>
             </ul>


            <div class="logosfooter">


                    <div
                    class= "row" style="width: 50px; " style="  ringt" >
                    <img src="/img/footer/facebook.png" alt="">



                   </div>



                <div
                    class= "row "  style="width: 50px; " style=" left">
                    <img src="/img/footer/instagram.png" alt="">


                </div>
                <div
                    class= "row" style="width: 50px; " style=" center">
                    <img src="/img/footer/whatsapp.png" alt="">


                </div>

            </div>

            <div>
                <p class="text-center text-muted">© Asömefrut 2021</p>
            </div>


        </footer>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</html>
