@extends('layout.layout')

@section('content')
    {{-- <div class="continer">
        <h1 class="display-1">Pagina de inicio</h1>
    </div>
    <li class="nav-item ">
        <a class="nav-link " aria-current="page" href="/categorias">categorias</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " aria-current="page" href="/checkout">checkout</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " aria-current="page" href="/404page">404</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " aria-current="page" href="/become-vendor">vendor</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " aria-current="page" href="/faqs">faqs</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " aria-current="page" href="/login">login</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " aria-current="page" href="/cart">carrito</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " aria-current="page" href="/vstore">vstore</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " aria-current="page" href="/contact">contact</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " aria-current="page" href="/aboutus"></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " aria-current="page" href="/storel">store</a>
    </li> --}}
    <!--=====================================
                Home Content
                ======================================-->

    <div id="homepage-6">

        <!--=====================================
                Home Banner
                ======================================-->

        <div class="ps-home-banner">
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000"
                data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1"
                data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000"
                data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut"
                style="max-height: 50vh;">

                <div class="ps-banner--market-4" style="">

                    {{-- <img src="img/slider/horizontal/1.jpg" alt=""> --}}
                    <div class="ps-banner__content my-5 d-flex align-items-center"
                        style="min-height: 44vh; background-image: url(img/slider/horizontal/1_1.jpg); background-position-y: 50%; background-size: 100%; background-repeat: no-repeat;">
                        <div class="row ms-5 py-5" style="background-color: #00000036; width: 30%;">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-white">OFERTA DE VERANO</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="text-white">15% Dct <br />
                                        En compras de bananos, naranjas, uvas<br />
                                        <p class="text-white">Descuento valido hasta: <strong> 30-Junio-2022</strong></p>
                                    </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a class="ps-btn" href="#">Comprar ahora!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ps-banner--market-4">
                    {{-- <img src="img/slider/horizontal/2.jpg" alt=""> --}}
                    <div class="ps-banner__content my-5 d-flex align-items-center"
                        style="min-height: 44vh ; background-image: url(img/slider/horizontal/1_2.jpg); background-position-y: 50%; background-size: 100%; background-repeat: no-repeat;">
                        <div class="row ms-5 py-5" style="background-color: #00000036; width: 30%;">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-white">OFERTA DE VERANO</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="text-white">Los cocos estan locos!!! <br />
                                        Descuento de 80% Dct en compras de cocos <br />
                                        <p class="text-white">Descuento valido hasta: <strong> 15-Junio-2022</strong></p>
                                    </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a class="ps-btn" href="#">Comprar ahora!</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>

        </div><!-- End Home Banner-->

        <!--=====================================
                Home Features
                ======================================-->

        <div class="ps-site-features mb-5">

            <div class="container">

                <div class="ps-block--site-features ps-block--site-features-2">

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-rocket"></i></div>
                        <div class="ps-block__right">
                            <h4>Entrega gratis</h4>
                            <p>Por compras de más de $80.000</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-sync"></i></div>
                        <div class="ps-block__right">
                            <h4>30 Días de regreso</h4>
                            <p>Si tienes problemas con tu mercancia</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                        <div class="ps-block__right">
                            <h4>Pago seguro</h4>
                            <p>Pago 100% seguro</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                        <div class="ps-block__right">
                            <h4>Soporte 24/7</h4>
                            <p>Soporte dedicado</p>
                        </div>
                    </div>

                </div>

            </div>

        </div><!-- End Home Features-->

        <!--=====================================
                Home Promotions
                ======================================-->

        <div class="ps-promotions">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-md-6 col-12 ">
                        <a class="ps-collection" href="shop-default.html">
                            <img src="img/banner/default/1_1.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-md-6 col-12 ">
                        <a class="ps-collection" href="shop-default.html">
                            <img src="img/banner/default/1_1.jpg" alt="">
                        </a>
                    </div>

                </div>

            </div>

        </div><!-- End Home Promotions-->

        <!--=====================================
                Home Deal Hot Today
                ======================================-->

        <div class="ps-deal-hot">

            <div class="container">

                <div class="row">

                    <!--=====================================
                 Column Deal Hot
                ======================================-->

                    <div class="col-xl-9 col-12 ">

                        <div class="ps-block--deal-hot" data-mh="dealhot">

                            <div class="ps-block__header">

                                <h3>Ofertas calientes del día
                                </h3>

                                <div class="ps-block__navigation">
                                    <a class="ps-carousel__prev" href=".ps-carousel--deal-hot">
                                        <i class="icon-chevron-left"></i>
                                    </a>
                                    <a class="ps-carousel__next" href=".ps-carousel--deal-hot">
                                        <i class="icon-chevron-right"></i>
                                    </a>
                                </div>

                            </div>

                            <div class="ps-product__content">

                                <div class="ps-carousel--deal-hot ps-carousel--deal-hot owl-slider" data-owl-auto="true"
                                    data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false"
                                    data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1"
                                    data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000"
                                    data-owl-mousedrag="on">

                                    <!--=====================================
                Product Deal Home
                ======================================-->

                                    <div class="ps-product--detail ps-product--hot-deal">

                                        <div class="ps-product__header">

                                            <div class="ps-product__thumbnail" data-vertical="true">

                                                <figure>

                                                    <div class="ps-wrapper">

                                                        <div class="ps-product__gallery" data-arrow="true">

                                                            <div class="item">
                                                                <a href="img/products/deal-hot/a-1.jpg">
                                                                    <img src="img/products/deal-hot/a_1_1.jpg" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="item">
                                                                <a href="img/products/deal-hot/a-2.jpg">
                                                                    <img src="img/products/deal-hot/a_1_2.jpg" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="item">
                                                                <a href="img/products/deal-hot/a-3.jpg">
                                                                    <img src="img/products/deal-hot/a_1_3.jpg" alt="">
                                                                </a>
                                                            </div>

                                                        </div>

                                                        <div class="ps-product__badge">
                                                            <span>Ahorra <br> $60.000</span>
                                                        </div>

                                                    </div>

                                                </figure>

                                                <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3"
                                                    data-arrow="false">

                                                    <div class="item">
                                                        <img src="img/products/deal-hot/a_1_1.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                        <img src="img/products/deal-hot/a_1_2.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                        <img src="img/products/deal-hot/a_1_3.jpg" alt="">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ps-product__info">

                                                <h5>Cocolerios S.A</h5>

                                                <h3 class="ps-product__name">Cocos x12 UD</h3>

                                                <div class="ps-product__meta">

                                                    <h4 class="ps-product__price sale">$20.000 <del> $80.000</del></h4>

                                                    <div class="ps-product__rating">

                                                        <select class="ps-rating" data-read-only="true">

                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>

                                                        </select>

                                                        <span>(1 reseña)</span>

                                                    </div>

                                                    <div class="ps-product__specification">

                                                        <p>Estado:<strong class="in-stock">Stock disponible</strong></p>

                                                    </div>

                                                </div>

                                                <div class="ps-product__expires">

                                                    <p>Expira en</p>

                                                    <ul class="ps-countdown" data-time="July 30, 2022 23:00:00">

                                                        <li><span class="days"></span>
                                                            <p>Days</p>
                                                        </li>

                                                        <li><span class="hours"></span>
                                                            <p>Hours</p>
                                                        </li>

                                                        <li><span class="minutes"></span>
                                                            <p>Minutes</p>
                                                        </li>

                                                        <li><span class="seconds"></span>
                                                            <p>Seconds</p>
                                                        </li>

                                                    </ul>

                                                </div>

                                                <div class="ps-product__processs-bar">

                                                    <div class="ps-progress" data-value="90">
                                                        <span class="ps-progress__value"></span>
                                                    </div>

                                                    <p><strong>60/79</strong> ventas</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- End Product Deal Hot -->

                                    <!--=====================================
                Product Deal Home
                ======================================-->

                                    <div class="ps-product--detail ps-product--hot-deal">

                                        <div class="ps-product__header">

                                            <div class="ps-product__thumbnail" data-vertical="true">

                                                <figure>

                                                    <div class="ps-wrapper">

                                                        <div class="ps-product__gallery" data-arrow="true">

                                                            <div class="item">
                                                                <a href="img/products/deal-hot/b_1_1.jpg">
                                                                    <img src="img/products/deal-hot/b_1_1.jpg" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="item">
                                                                <a href="img/products/deal-hot/b_1_2.jpg">
                                                                    <img src="img/products/deal-hot/b_1_2.jpg" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="item">
                                                                <a href="img/products/deal-hot/b_1_3.jpg">
                                                                    <img src="img/products/deal-hot/b_1_3.jpg" alt="">
                                                                </a>
                                                            </div>


                                                        </div>

                                                        <div class="ps-product__badge">
                                                            <span>Ahorra <br> $10.000</span>
                                                        </div>

                                                    </div>

                                                </figure>

                                                <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3"
                                                    data-arrow="false">

                                                    <div class="item">
                                                        <img src="img/products/deal-hot/b_1_1.jpg" alt="">
                                                    </div>

                                                    <div class="item">
                                                        <img src="img/products/deal-hot/b_1_2.jpg" alt="">
                                                    </div>

                                                    <div class="item">
                                                        <img src="img/products/deal-hot/b_1_3.jpg" alt="">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ps-product__info">

                                                <h5>La Plataneria</h5>

                                                <h3 class="ps-product__name">Caja de platananos x8 UD
                                                </h3>

                                                <div class="ps-product__meta">

                                                    <h4 class="ps-product__price sale">$20.000 <del> $30.000</del></h4>

                                                    <div class="ps-product__rating">

                                                        <select class="ps-rating" data-read-only="true">

                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>

                                                        </select>
                                                        <span>(2 reseñas)</span>

                                                    </div>

                                                    <div class="ps-product__specification">

                                                        <p>Estado:<strong class="in-stock">Stock disponible</strong></p>

                                                    </div>

                                                </div>

                                                <div class="ps-product__expires">

                                                    <p>Expira en</p>

                                                    <ul class="ps-countdown" data-time="Juny 30, 2022 23:00:00">

                                                        <li><span class="days"></span>
                                                            <p>Days</p>
                                                        </li>

                                                        <li><span class="hours"></span>
                                                            <p>Hours</p>
                                                        </li>

                                                        <li><span class="minutes"></span>
                                                            <p>Minutes</p>
                                                        </li>

                                                        <li><span class="seconds"></span>
                                                            <p>Seconds</p>
                                                        </li>

                                                    </ul>

                                                </div>

                                                <div class="ps-product__processs-bar">

                                                    <div class="ps-progress" data-value="60">
                                                        <span class="ps-progress__value"></span>
                                                    </div>

                                                    <p><strong>30/50</strong> ventas</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- End Product Deal Hot -->

                                </div><!-- End carousel Deal Hot -->

                            </div><!-- End product content Deal Hot -->

                        </div><!-- End deal hot -->

                    </div><!-- End Columns -->

                    <!--=====================================
                 Column Top 20 Best Seller
                ======================================-->

                    <div class="col-xl-3 col-12 ">

                        <aside class="widget widget_best-sale" data-mh="dealhot">

                            <h3 class="widget-title">Top 4 de lo más vendidos</h3>

                            <div class="widget__content">

                                {{-- <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000"
                                    data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="1"
                                    data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1"
                                    data-owl-duration="1000" data-owl-mousedrag="on"> --}}

                                    <div class="ps-product-group">

                                        <!--=====================================
                      Product
                ======================================-->

                                        <div class="ps-product--horizontal">

                                            <div class="ps-product__thumbnail">
                                                <a href="product-default.html">
                                                    <img src="img/products/technology/a_1_1.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="ps-product__content">

                                                <a class="ps-product__title" href="product-default.html">Cocos x12 UD</a>

                                                <div class="ps-product__rating">

                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>

                                                    <span>01</span>

                                                </div>

                                                <p class="ps-product__price sale">$20.000 <del>$80.000</del></p>

                                            </div>

                                        </div><!-- End Product -->

                                        <!--=====================================
                      Product
                ======================================-->

                                        <div class="ps-product--horizontal">

                                            <div class="ps-product__thumbnail">

                                                <a href="product-default.html">
                                                    <img src="img/products/technology/b_1_3.jpg" alt="">
                                                </a>

                                            </div>

                                            <div class="ps-product__content">

                                                <a class="ps-product__title" href="product-default.html">Caja de platananos x8 UD</a>

                                                <div class="ps-product__rating">

                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>
                                                    <span>01</span>

                                                </div>

                                                <p class="ps-product__price sale">$20.000 <del>$30.000 </del></p>

                                            </div>

                                        </div><!-- End Product -->

                                        <!--=====================================
                      Product
                ======================================-->

                                        <div class="ps-product--horizontal">

                                            <div class="ps-product__thumbnail">
                                                <a href="product-default.html">
                                                    <img src="img/products/technology/a_1_1.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="ps-product__content">

                                                <a class="ps-product__title" href="product-default.html">Cocos x12 UD</a>

                                                <div class="ps-product__rating">

                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>

                                                    <span>01</span>

                                                </div>

                                                <p class="ps-product__price sale">$20.000 <del>$80.000</del></p>

                                            </div>

                                        </div><!-- End Product -->

                                        <!--=====================================
                      Product
                ======================================-->

                                        <div class="ps-product--horizontal">

                                            <div class="ps-product__thumbnail">

                                                <a href="product-default.html">
                                                    <img src="img/products/technology/b_1_3.jpg" alt="">
                                                </a>

                                            </div>

                                            <div class="ps-product__content">

                                                <a class="ps-product__title" href="product-default.html">Caja de platananos x8 UD</a>

                                                <div class="ps-product__rating">

                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>
                                                    <span>01</span>

                                                </div>

                                                <p class="ps-product__price sale">$20.000 <del>$30.000 </del></p>

                                            </div>

                                        </div><!-- End Product -->

                                    </div><!-- End Product Group -->

                                {{-- </div> --}}

                            </div>

                        </aside><!-- End Aside -->

                    </div><!-- End Columns -->

                </div>

            </div>

        </div><!-- End Home Deal Hot -->

        <!--=====================================
              Top Categoríes
              ======================================-->

        <div class="ps-top-categories">

            <div class="container">

                <h3>Principales categorías del mes</h3>

                <div class="row">

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                            <a class="ps-block__overlay" href="shop-default.html"></a>
                            <img src="img/categories/a_1_1.jpg" alt="">
                            <p>Frutas neutras</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                            <a class="ps-block__overlay" href="shop-default.html"></a>
                            <img src="img/categories/b_1_3.jpg" alt="">
                            <p>Frutas dulces</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                            <a class="ps-block__overlay" href="shop-default.html"></a>
                            <img src="img/categories/c_1_1.jpg" alt="">
                            <p>Raiz</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                            <a class="ps-block__overlay" href="shop-default.html"></a>
                            <img src="img/categories/d_1_1.jpg" alt="">
                            <p>Hoja</p>
                        </div>
                    </div>


                </div>
            </div>

        </div><!-- End Top Categories -->

    </div><!-- End Homepage 6-->

    <!--=====================================
             Section Gray
             ======================================-->

    <div class="ps-section--gray">

        <div class="container">

            <!--=====================================
               Products of category
               ======================================-->

            <div class="ps-block--products-of-category">

                <!--=====================================
                Menu subcategory
                ======================================-->

                <div class="ps-block__categories">

                    <h3>Frutas neutras</h3>

                    <ul>
                        <li><a href="#">Cocos</a></li>
                        <li><a href="#">Nuez</a></li>
                        <li><a href="#">Almendras</a></li>
                    </ul>

                    <a class="ps-block__more-link" href="#">Ver todo</a>

                </div>

                <!--=====================================
                Vertical Slider Category
                ======================================-->

                {{-- <div class="ps-block__slider">

                    <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true"
                        data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1"
                        data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1"
                        data-owl-duration="500" data-owl-mousedrag="off">

                        <a href="#">

                            <img src="img/slider/vertical/clothing-1.jpg" alt="">

                        </a>

                        <a href="#">

                            <img src="img/slider/vertical/clothing-2.jpg" alt="">

                        </a>

                        <a href="#">

                            <img src="img/slider/vertical/clothing-3.jpg" alt="">

                        </a>

                    </div>

                </div> --}}

                <!--=====================================
                Block Product Box
                ======================================-->

                <div class="ps-block__product-box">

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/clothing/1_3.jpg" alt="">

                            </a>

                            <div class="ps-product__badge">-16%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                                <a class="ps-product__title" href="product-default.html">cocos x60 UD</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">

                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>

                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price sale">$156.799 <del>$167.000 </del></p>

                            </div>

                        </div>

                    </div> <!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/clothing/1_1.jpg" alt=""></a>

                            <div class="ps-product__badge out-stock">No hay stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                                <a class="ps-product__title" href="product-default.html">Nuez x50 UD</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$19.200</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/clothing/1_2.jpg" alt=""></a>

                            <div class="ps-product__badge">-25%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                                <a class="ps-product__title" href="product-default.html">Almendras x60 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>02</span>
                                </div>

                                <p class="ps-product__price sale">$42.000 <del>$60.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/clothing/1_3.jpg" alt="">

                            </a>

                            <div class="ps-product__badge">-16%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                                <a class="ps-product__title" href="product-default.html">cocos x60 UD</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">

                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>

                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price sale">$156.799 <del>$167.000 </del></p>

                            </div>

                        </div>

                    </div> <!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/clothing/1_1.jpg" alt=""></a>

                            <div class="ps-product__badge out-stock">No hay stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                                <a class="ps-product__title" href="product-default.html">Nuez x50 UD</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$19.200</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/clothing/1_2.jpg" alt=""></a>

                            <div class="ps-product__badge">-25%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                                <a class="ps-product__title" href="product-default.html">Almendras x60 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>02</span>
                                </div>

                                <p class="ps-product__price sale">$42.000 <del>$60.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->



                </div><!-- End Block Product Box -->

            </div><!-- End Products of category -->

            <!--=====================================
               Products of category
               ======================================-->

            <div class="ps-block--products-of-category">

                <!--=====================================
                Menu subcategory
                ======================================-->

                <div class="ps-block__categories">

                    <h3>Frutas dulces</h3>

                    <ul>
                        <li><a href="#">Bananos</a></li>
                        <li><a href="#">Cereza</a></li>
                        <li><a href="#">Melon</a></li>

                    </ul>

                    <a class="ps-block__more-link" href="#">View All</a>

                </div>

                <!--=====================================
                Vertical Slider Category
                ======================================-->

                {{-- <div class="ps-block__slider">

                    <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true"
                        data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1"
                        data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1"
                        data-owl-duration="500" data-owl-mousedrag="off">

                        <a href="#">
                            <img src="img/slider/vertical/technology-1.jpg" alt="">
                        </a>

                        <a href="#">
                            <img src="img/slider/vertical/technology-2.jpg" alt="">
                        </a>

                        <a href="#">
                            <img src="img/slider/vertical/technology-3.jpg" alt="">
                        </a>

                    </div>

                </div> --}}

                <!--=====================================
                Block Product Box
                ======================================-->

                <div class="ps-block__product-box">

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/technology/1_1.jpg" alt="">

                            </a>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                                <a class="ps-product__title" href="product-default.html">Caja de Bananos x8 UD</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">

                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>

                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">40.000</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/technology/1_2.jpg" alt=""></a>

                            <div class="ps-product__badge out-stock">7%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                                <a class="ps-product__title" href="product-default.html">Cereza x30 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$12.500 <del>$13.500 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/technology/1_3.jpg" alt="">

                            </a>

                            <div class="ps-product__badge">-25%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                                <a class="ps-product__title" href="product-default.html">Melon x100 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>

                                <p class="ps-product__price sale">$99.000 <del>$125.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/technology/1_1.jpg" alt="">

                            </a>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                                <a class="ps-product__title" href="product-default.html">Caja de Bananos x8 UD</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">

                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>

                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">40.000</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/technology/1_2.jpg" alt=""></a>

                            <div class="ps-product__badge out-stock">7%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                                <a class="ps-product__title" href="product-default.html">Cereza x30 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$12.500 <del>$13.500 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/technology/1_3.jpg" alt="">

                            </a>

                            <div class="ps-product__badge">-25%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                                <a class="ps-product__title" href="product-default.html">Melon x100 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>

                                <p class="ps-product__price sale">$99.000 <del>$125.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->



                </div><!-- End Block Product Box -->

            </div><!-- End Products of category -->

            <!--=====================================
               Products of category
               ======================================-->

            <div class="ps-block--products-of-category">

                <!--=====================================
                Menu subcategory
                ======================================-->

                <div class="ps-block__categories">

                    <h3>Raiz</h3>

                    <ul>
                        <li><a href="shop-default.html">Zanahorias</a></li>
                        <li><a href="shop-default.html">Rábanos</a></li>
                        <li><a href="shop-default.html">Nabos</a></li>
                    </ul>

                    <a class="ps-block__more-link" href="#">Ver todo</a>

                </div>

                <!--=====================================
                Vertical Slider Category
                ======================================-->

                {{-- <div class="ps-block__slider">

                    <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true"
                        data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1"
                        data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1"
                        data-owl-duration="500" data-owl-mousedrag="off">

                        <a href="#">
                            <img src="img/slider/vertical/electronic-1.jpg" alt="">
                        </a>

                        <a href="#">
                            <img src="img/slider/vertical/electronic-2.jpg" alt="">
                        </a>

                        <a href="#">
                            <img src="img/slider/vertical/electronic-3.jpg" alt="">
                        </a>

                    </div>

                </div> --}}

                <!--=====================================
                Block Product Box
                ======================================-->

                <div class="ps-block__product-box">

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/electronic/1_1.jpg" alt="">
                            </a>

                            <div class="ps-product__badge">-16%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                                <a class="ps-product__title" href="product-default.html">Zanahoria x30 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>
                                </div>

                                <p class="ps-product__price sale">$56.799 <del>$67.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/electronic/1_2.jpg" alt="">

                            </a>

                            <div class="ps-product__badge out-stock">No hay stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                                <a class="ps-product__title" href="product-default.html">Rábanos x12 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>

                                <p class="ps-product__price">$10.199</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/electronic/1_3.jpg" alt="">
                            </a>

                            <div class="ps-product__badge">-25%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                                <a class="ps-product__title" href="product-default.html">Nabos x45 UD</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>02</span>

                                </div>

                                <p class="ps-product__price sale">$42.000 <del>$60.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/electronic/1_1.jpg" alt="">
                            </a>

                            <div class="ps-product__badge">-16%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                                <a class="ps-product__title" href="product-default.html">Zanahoria x30 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>
                                </div>

                                <p class="ps-product__price sale">$56.799 <del>$67.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">

                                <img src="img/products/electronic/1_2.jpg" alt="">

                            </a>

                            <div class="ps-product__badge out-stock">No hay stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                                <a class="ps-product__title" href="product-default.html">Rábanos x12 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>

                                <p class="ps-product__price">$10.199</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/electronic/1_3.jpg" alt="">
                            </a>

                            <div class="ps-product__badge">-25%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                                <a class="ps-product__title" href="product-default.html">Nabos x45 UD</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>02</span>

                                </div>

                                <p class="ps-product__price sale">$42.000 <del>$60.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->



                </div><!-- End Block Product Box -->

            </div><!-- End Products of category -->

            <!--=====================================
               Products of category
               ======================================-->

            <div class="ps-block--products-of-category">

                <!--=====================================
                Menu subcategory
                ======================================-->

                <div class="ps-block__categories">

                    <h3>Hoja</h3>

                    <ul>
                        <li><a href="shop-default.html">Coliflores</a></li>
                        <li><a href="shop-default.html">Brócolis</a></li>
                        <li><a href="shop-default.html">Alcachofas</a></li>
                    </ul>

                    <a class="ps-block__more-link" href="#">Ver todo</a>

                </div>

                <!--=====================================
                Vertical Slider Category
                ======================================-->
{{--
                <div class="ps-block__slider">

                    <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true"
                        data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1"
                        data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1"
                        data-owl-duration="500" data-owl-mousedrag="off">

                        <a href="#">
                            <img src="img/slider/vertical/kitchen-1.jpg" alt="">
                        </a>

                        <a href="#">
                            <img src="img/slider/vertical/kitchen-2.jpg" alt="">
                        </a>

                        <a href="#">
                            <img src="img/slider/vertical/kitchen-3.jpg" alt="">
                        </a>

                    </div>

                </div> --}}

                <!--=====================================
                Block Product Box
                ======================================-->

                <div class="ps-block__product-box">

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/home/1_1.jpg" alt="">
                            </a>

                            <div class="ps-product__badge">-16%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                                <a class="ps-product__title" href="product-default.html">Espinacas x6 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price sale">$15.000 <del>$21.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/home/1_2.jpg" alt="">
                            </a>

                            <div class="ps-product__badge out-stock">No hay stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                                <a class="ps-product__title" href="product-default.html">Caja de rúculas 5Kg</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>
                                </div>

                                <p class="ps-product__price">$15.000</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/home/1_3.jpg" alt="">
                            </a>

                            <div class="ps-product__badge">-25%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                                <a class="ps-product__title" href="product-default.html">Lechuga X30 UD</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>02</span>
                                </div>

                                <p class="ps-product__price sale">$45.000 <del>$60.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->
                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/home/1_1.jpg" alt="">
                            </a>

                            <div class="ps-product__badge">-16%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                                <a class="ps-product__title" href="product-default.html">Espinacas x6 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price sale">$15.000 <del>$21.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/home/1_2.jpg" alt="">
                            </a>

                            <div class="ps-product__badge out-stock">No hay stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                                <a class="ps-product__title" href="product-default.html">Caja de rúculas 5Kg</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>
                                </div>

                                <p class="ps-product__price">$15.000</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/home/1_3.jpg" alt="">
                            </a>

                            <div class="ps-product__badge">-25%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                                <a class="ps-product__title" href="product-default.html">Lechuga X30 UD</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>02</span>
                                </div>

                                <p class="ps-product__price sale">$45.000 <del>$60.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->



                </div><!-- End Block Product Box -->

            </div><!-- End Products of category -->

            <!--=====================================
               Products of category
               ======================================-->

            <div class="ps-block--products-of-category">

                <!--=====================================
                Menu subcategory
                ======================================-->

                <div class="ps-block__categories">

                    <h3>Tallo</h3>

                    <ul>
                        <li><a href="shop-default.html">Esparragos</a></li>
                        <li><a href="shop-default.html">Puerros</a></li>
                        <li><a href="shop-default.html">Apios</a></li>
                    </ul>

                    <a class="ps-block__more-link" href="#">Ver todo</a>

                </div>

                <!--=====================================
                Vertical Slider Category
                ======================================-->

                {{-- <div class="ps-block__slider">

                    <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true"
                        data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1"
                        data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1"
                        data-owl-duration="500" data-owl-mousedrag="off">

                        <a href="#">
                            <img src="img/slider/vertical/healthy-1.jpg" alt="">
                        </a>

                        <a href="#">
                            <img src="img/slider/vertical/healthy-2.jpg" alt="">
                        </a>

                        <a href="#">
                            <img src="img/slider/vertical/healthy-3.jpg" alt="">
                        </a>

                    </div>

                </div> --}}

                <!--=====================================
                Block Product Box
                ======================================-->

                <div class="ps-block__product-box">

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/healthy/1_1.jpg" alt="">
                            </a>

                            <div class="ps-product__badge">-16%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                                <a class="ps-product__title" href="product-default.html">Esparragos x6 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>
                                </div>

                                <p class="ps-product__price sale">$14.000 <del>$26.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html"><img src="img/products/healthy/1_2.jpg" alt=""></a>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                                <a class="ps-product__title" href="product-default.html">Puerros x50 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>

                                <p class="ps-product__price">$40.000</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html"><img src="img/products/healthy/1_3.jpg" alt=""></a>

                            <div class="ps-product__badge">-25%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                                <a class="ps-product__title" href="product-default.html">Apio 36 Lbs</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>02</span>

                                </div>

                                <p class="ps-product__price sale">$30.000 <del>$60.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->
                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/healthy/1_1.jpg" alt="">
                            </a>

                            <div class="ps-product__badge">-16%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                                <a class="ps-product__title" href="product-default.html">Esparragos x6 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>
                                </div>

                                <p class="ps-product__price sale">$14.000 <del>$26.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html"><img src="img/products/healthy/1_2.jpg" alt=""></a>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                                <a class="ps-product__title" href="product-default.html">Puerros x50 UD</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>

                                <p class="ps-product__price">$40.000</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
                 Product Simple
                 ======================================-->

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html"><img src="img/products/healthy/1_3.jpg" alt=""></a>

                            <div class="ps-product__badge">-25%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                                <a class="ps-product__title" href="product-default.html">Apio 36 Lbs</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>02</span>

                                </div>

                                <p class="ps-product__price sale">$30.000 <del>$60.000 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->


                </div><!-- End Block Product Box -->

            </div><!-- End Products of category -->

        </div><!-- End Container-->

    </div><!-- End Section Gray-->



    <!--=====================================
                PopUp
                ======================================-->

    {{-- <div class="ps-site-overlay"></div>

    <div class="ps-popup" id="subscribe" data-time="500">
        <div class="ps-popup__content bg--cover" data-background="img/bg/subscribe.jpg" style="background: url(img/bg/subscribe.jpg);"><a class="ps-popup__close" href="#"><i class="icon-cross"></i></a>
            <form class="ps-form--subscribe-popup" action="index.html" method="get">
                <div class="ps-form__content">
                    <h4>Get <strong>25%</strong> Discount</h4>
                    <p>Subscribe to the Martfury mailing list <br> to receive updates on new arrivals, special offers <br> and our promotions.</p>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Email Address" required="">
                            <button class="ps-btn">Subscribe</button>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="not-show" name="not-show">
                            <label for="not-show">Don't show this popup again</label>
                        </div>
                </div>
            </form>
        </div>
    </div> --}}

    <!--=====================================
             JS PERSONALIZADO
             ======================================-->

    <script src="js/main.js"></script>
@endsection
