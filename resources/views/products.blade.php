@extends('layout.layout')

@section('content')

 <!--=====================================
    Breadcrumb
    ======================================-->

	<div class="ps-breadcrumb">

        <div class="container">

            <ul class="breadcrumb">

                <li><a href="index.html">Home</a></li>

                <li><a href="shop-default.html">Frutas</a></li>

                <li><a href="shop-default.html">Frutas neutras</a></li>

                <li>Cosos</li>

            </ul>

        </div>

    </div>

    <!--=====================================
    Product Content
    ======================================-->

	<div class="ps-page--product">

        <div class="ps-container">

        	<!--=====================================
    		Product Container
    		======================================-->

            <div class="ps-page__container">

        		<!--=====================================
    			Left Column
    			======================================-->

                <div class="ps-page__left">

                    <div class="ps-product--detail ps-product--fullwidth">

                    	<!--=====================================
    					Product Header
    					======================================-->

                        <div class="ps-product__header">

                        	<!--=====================================
    						Gallery
    						======================================-->

                            <div class="ps-product__thumbnail" data-vertical="true">

                                <figure>

                                    <div class="ps-wrapper">

                                        <div class="ps-product__gallery" data-arrow="true">

                                            <div class="item">
                                            	<a href="img/products/detail/countdown/1.jpg">
                                            		<img src="img/products/detail/countdown/1.jpg" alt="">
                                            	</a>
                                            </div>

                                            <div class="item">
                                            	<a href="img/products/detail/countdown/2.jpg">
                                            		<img src="img/products/detail/countdown/2.jpg" alt="">
                                            	</a>
                                            </div>

                                            <div class="item">
                                            	<a href="img/products/detail/countdown/3.jpg">
                                            		<img src="img/products/detail/countdown/3.jpg" alt="">
                                            	</a>
                                            </div>


                                        </div>

                                    </div>

                                </figure>

                                <div class="ps-product__variants" data-item="4" data-md="4" data-sm="4" data-arrow="false">

                                    <div class="item">
                                    	<img src="img/products/detail/countdown/1.jpg" alt="">
                                    </div>

                                    <div class="item">
                                    	<img src="img/products/detail/countdown/2.jpg" alt="">
                                    </div>

                                    <div class="item">
                                    	<img src="img/products/detail/countdown/3.jpg" alt="">
                                    </div>

                                    <div class="item">
                                    	<img src="img/products/detail/countdown/4.jpg" alt="">
                                    </div>

                                </div>

                            </div><!-- End Gallery -->

                            <!--=====================================
    						Product Info
    						======================================-->

                            <div class="ps-product__info">

                                <h1>Coco x12 UD</h1>

                                <div class="ps-product__meta">

                                    {{-- <p>Brand:<a href="shop-default.html">Gallaxy</a></p> --}}

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

                                </div>

                                <h4 class="ps-product__price sale">$20.000
                                    <del> $60.000</del><small> (-80%)</small>
                                </h4>

                                {{-- <h4 class="ps-product__price">$679.80</h4> --}}

                                <div class="ps-product__desc">

                                    <p>

                                    	Vendido por:<a class="mr-20" href="shop-default.html"><strong> COCOLERIOS S.A</strong></a>

                                    	Estado:<a href="shop-default.html"><strong class="ps-tag--in-stock">Stock disponible</strong></a>

                                    </p>

                                    <ul class="ps-list--dot">

                                        <li> 100% natural</li>
                                        <li> Palmas certificadas y bien cuidadas</li>
                                        <li> Bien cuidados</li>
                                        <li> Con gran cantidad de agua</li>
                                        {{-- <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li> --}}

                                    </ul>

                                </div>

                                {{-- <div class="ps-product__variations">

                                    <figure>

                                        <figcaption>Color: <strong> Choose an option</strong></figcaption>

                                        <div class="ps-variant ps-variant--image">

                                        	<span class="ps-variant__tooltip">Blue</span>

                                        	<img src="img/products/detail/variants/small-1.jpg" alt="">

                                        </div>

                                        <div class="ps-variant ps-variant--image">

                                        	<span class="ps-variant__tooltip"> Dark</span>

                                        	<img src="img/products/detail/variants/small-2.jpg" alt="">

                                        </div>

                                        <div class="ps-variant ps-variant--image">

                                        	<span class="ps-variant__tooltip"> pink</span>

                                        	<img src="img/products/detail/variants/small-3.jpg" alt="">

                                        </div>

                                    </figure>

                                    <figure>

                                        <figcaption>Size <strong> Choose an option</strong></figcaption>

                                        <div class="ps-variant ps-variant--size"><span class="ps-variant__tooltip">S</span><span class="ps-variant__size">S</span></div>
                                        <div class="ps-variant ps-variant--size"><span class="ps-variant__tooltip"> M</span><span class="ps-variant__size">M</span></div>
                                        <div class="ps-variant ps-variant--size"><span class="ps-variant__tooltip"> L</span><span class="ps-variant__size">L</span></div>
                                    </figure>
                                </div> --}}

                                <div class="ps-product__countdown">

                                    <figure>

                                        <figcaption> No pierdas esta gran promoción, expira en</figcaption>

                                        <ul class="ps-countdown" data-time="July 21, 2022 15:37:25">

                                            <li><span class="days"></span>
                                                <p>Dias</p>
                                            </li>

                                            <li><span class="hours"></span>
                                                <p>Horas</p>
                                            </li>

                                            <li><span class="minutes"></span>
                                                <p>Minutos</p>
                                            </li>

                                            <li><span class="seconds"></span>
                                                <p>Segundos</p>
                                            </li>

                                        </ul>

                                    </figure>

                                    <figure>

                                        <figcaption>Vendido</figcaption>

                                        <div class="ps-product__progress-bar ps-progress" data-value="28">

                                            <div class="ps-progress__value"><span></span></div>

                                            <p><b>20/85</b> ventas</p>

                                        </div>

                                    </figure>

                                </div>

                                <div class="ps-product__shopping">

                                    <figure>

                                        <figcaption>Cantidad</figcaption>

                                        <div class="form-group--number">

                                            <button class="up">
                                            	<i class="fa fa-plus"></i>
                                            </button>

                                            <button class="down">
                                            	<i class="fa fa-minus"></i>
                                            </button>

                                            <input class="form-control" type="text" placeholder="1">

                                        </div>

                                    </figure>

                                    <a class="ps-btn ps-btn--black" href="#">Agregar al carrito</a>

                                    <a class="ps-btn" href="#">Comprar ahora</a>

                                    <div class="ps-product__actions">

                                    	<a href="#">
                                    		<i class="icon-heart"></i>
                                    	</a>

                                    </div>

                                </div>

                                <div class="ps-product__specification">

                                	<a class="report" href="#">Report Abuse</a>

                                    <p><strong>SKU:</strong> SF1133569600-1</p>

                                    <p class="categories">

                                    	<strong> Categoria:</strong>

                                    	<a href="#">Frutas</a>

                                    </p>

                                    <p class="tags"><strong> Tags</strong>

                                    	<a href="#">cocos</a>

                                    </p>

                                </div>

                                <div class="ps-product__sharing">

                                	<a class="facebook" href="#">
                                		<i class="fab fa-facebook"></i>
                                	</a>

                                	<a class="twitter" href="#">
                                		<i class="fab fa-twitter"></i>
                                	</a>


                                	<a class="linkedin" href="#">
                                		<i class="fab fa-linkedin"></i>
                                	</a>

                                	<a class="instagram" href="#">
                                		<i class="fab fa-instagram"></i>
                                	</a>

                                </div>

                            </div> <!-- End Product Info -->

                        </div> <!-- End Product header -->

                    	<!--=====================================
    					Product Content
    					======================================-->

                        <div class="ps-product__content ps-tab-root">

                            {{-- <div class="ps-block--bought-toggether">

                                <h4>Frequently Bought Together</h4>

                                <div class="ps-block__content">

                                    <div class="ps-block__items">

                                        <div class="ps-block__item">

                                            <div class="ps-product ps-product--simple">

                                                <div class="ps-product__thumbnail">

                                                	<a href="product-default.html">
                                                		<img src="img/products/furniture/12.jpg" alt="">
                                                	</a>

                                                </div>

                                                <div class="ps-product__container">

                                                    <div class="ps-product__content">
                                                    	<a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>

                                                        <p class="ps-product__price">$679.80</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="ps-block__item">

                                            <div class="ps-product ps-product--simple">

                                                <div class="ps-product__thumbnail">

                                                	<a href="product-default.html">
                                                		<img src="img/products/furniture/13.jpg" alt="">
                                                	</a>

                                                </div>

                                                <div class="ps-product__container">

                                                    <div class="ps-product__content">

                                                    	<a class="ps-product__title" href="product-default.html">Fabric Chair In Brown Color</a>

                                                        <p class="ps-product__price">$120.80</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="ps-block__item ps-block__total">

                                            <p>Total Price:<strong> $1000.30</strong></p>

                                            <a class="ps-btn" href="#">Add All to cart</a>
                                            <a class="ps-btn ps-btn--gray ps-btn--outline" href="#">Add All to whishlist</a>

                                        </div>

                                    </div>

                                    <div class="ps-block__footer">

                                        <div class="ps-checkbox">

                                            <input class="form-control" type="checkbox" id="product-bought-1" name="product-bought" checked>

                                            <label for="product-bought-1"><strong>This item: </strong> Korea Long Sofa Fabric In Blue Navy Color <span>$679.80</span></label>

                                        </div>

                                        <div class="ps-checkbox">

                                            <input class="form-control" type="checkbox" id="product-bought-2" name="product-bought" checked>

                                            <label for="product-bought-2">Fabric Chair In Brown Color <span>$120.80</span></label>

                                        </div>

                                    </div>

                                </div>

                            </div> --}}

                            <ul class="ps-tab-list">

                                {{-- <li class="active"><a href="#tab-1">Description</a></li>
                                <li><a href="#tab-2">Specification</a></li> --}}
                                <li class="active"><a href="#tab-3">Vendedor</a></li>
                                <li><a href="#tab-4">Reseña (1)</a></li>
                                <li><a href="#tab-5">Preguntas y Respuestas</a></li>
                                {{-- <li><a href="#tab-6">More Offers</a></li> --}}

                            </ul>

                            <div class="ps-tabs">

                                {{-- <div class="ps-tab active" id="tab-1">

                                    <div class="ps-document">

                                        <h5>Embodying the Raw, Wayward Spirit of Rock 'N' Roll</h5>

                                        <p>Embodying the raw, wayward spirit of rock ‘n’ roll, the Kilburn portable active stereo speaker takes the unmistakable look and sound of Marshall, unplugs the chords, and takes the show on the road.</p>

                                        <p>Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.</p>

                                        <img class="mb-30" src="img/products/detail/content/description.jpg" alt="">

                                        <h5>What do you get</h5>

                                        <p>Sound of Marshall, unplugs the chords, and takes the show on the road.</p>

                                        <p>Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.</p>

                                        <p>The FM radio is perhaps gone for good, the assumption apparently being that the jury has ruled in favor of streaming over the internet. The IR blaster is another feature due for retirement – the S6 had it, then the Note5 didn’t, and now with the S7 the trend is clear.</p>

                                        <h5>Perfectly Done</h5>

                                        <p>Meanwhile, the IP68 water resistance has improved from the S5, allowing submersion of up to five feet for 30 minutes, plus there’s no annoying flap covering the charging port</p>

                                        <ul class="pl-0">
                                            <li>No FM radio (except for T-Mobile units in the US, so far)</li>
                                            <li>No IR blaster</li>
                                            <li>No stereo speakers</li>
                                        </ul>

                                        <p>If you’ve taken the phone for a plunge in the bath, you’ll need to dry the charging port before plugging in. Samsung hasn’t reinvented the wheel with the design of the Galaxy S7, but it didn’t need to. The Gala S6 was an excellently styled device, and the S7 has managed to improve on that.</p>

                                    </div>

                                </div> --}}

                                {{-- <div class="ps-tab" id="tab-2">

                                    <div class="table-responsive">

                                        <table class="table table-bordered ps-table ps-table--specification">

                                            <tbody>

                                                <tr>
                                                    <td>Color</td>
                                                    <td>Black, Gray</td>
                                                </tr>
                                                <tr>
                                                    <td>Style</td>
                                                    <td>Ear Hook</td>
                                                </tr>
                                                <tr>
                                                    <td>Wireless</td>
                                                    <td>Yes</td>
                                                </tr>
                                                <tr>
                                                    <td>Dimensions</td>
                                                    <td>5.5 x 5.5 x 9.5 inches</td>
                                                </tr>
                                                <tr>
                                                    <td>Weight</td>
                                                    <td>6.61 pounds</td>
                                                </tr>
                                                <tr>
                                                    <td>Battery Life</td>
                                                    <td>20 hours</td>
                                                </tr>
                                                <tr>
                                                    <td>Bluetooth</td>
                                                    <td>Yes</td>
                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div> --}}

                                <div class="ps-tab active" id="tab-3">

                                    <h4> COCOLERIOS S.A</h4>

                                    <p>Somos una familia con cosecha de cocos que estan 100% dedicados a la calidad y cuidado de nuestras palmas, para que den los mejores cocos del municipio</p>

                                    <a href="#">Más informacion de COCOLERIOS S.A</a>

                                </div>

                                <div class="ps-tab" id="tab-4">

                                    <div class="row">

                                        <div class="col-lg-5 col-12 ">

                                            <div class="ps-block--average-rating">

                                                <div class="ps-block__header">

                                                    <h3>5.00</h3>

                                                    <select class="ps-rating" data-read-only="true">

                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="1">5</option>

                                                    </select>

                                                    <span>1 Reseña</span>

                                                </div>

                                                <div class="ps-block__star">

                                                	<span>5 Estrellas</span>

                                                    <div class="ps-progress" data-value="100">

                                                    	<span></span>

                                                    </div>

                                                    <span>100%</span>

                                                </div>

                                                <div class="ps-block__star">

                                                	<span>4 Star</span>

                                                    <div class="ps-progress" data-value="0">

                                                    	<span></span>

                                                    </div>

                                                    <span>0</span>

                                                </div>

                                                <div class="ps-block__star">

                                                	<span>3 Star</span>

                                                    <div class="ps-progress" data-value="0">

                                                    	<span></span>

                                                    </div>

                                                    <span>0</span>

                                                </div>

                                                <div class="ps-block__star">

                                                	<span>2 Star</span>

                                                    <div class="ps-progress" data-value="0">
                                                    	<span></span>
                                                    </div>

                                                    <span>0</span>

                                                </div>

                                                <div class="ps-block__star">

                                                	<span>1 Star</span>

                                                    <div class="ps-progress" data-value="0">
                                                    	<span></span>
                                                    </div>

                                                    <span>0</span>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 ">

                                            <form class="ps-form--review" action="index.html" method="get">

                                                <h4>ENVÍE SU OPINIÓN</h4>

                                                <p>Su dirección de correo electrónico no será publicada. Los campos obligatorios están marcados<sup>*</sup></p>

                                                <div class="form-group form-group__rating">

                                                    <label>Su calificación de este producto</label>

                                                    <select class="ps-rating" data-read-only="false">

                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>

                                                    </select>

                                                </div>

                                                <div class="form-group">

                                                    <textarea class="form-control" rows="6" placeholder="Write your review here">

                                                    </textarea>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6 col-sm-12">

                                                        <div class="form-group">
                                                            <input class="form-control" type="text" placeholder="Your Name">
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6 col-sm-12">

                                                        <div class="form-group">
                                                            <input class="form-control" type="email" placeholder="Your Email">
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="form-group submit">

                                                    <button class="ps-btn">Enviar</button>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                                <div class="ps-tab" id="tab-5">

                                    <div class="ps-block--questions-answers">

                                        <h3>Preguntas y Respuestas</h3>

                                        <div class="form-group">

                                            <input class="form-control" type="text" placeholder="Tienes una pregunta? o buscas una respuesta?">

                                        </div>

                                    </div>

                                </div>

                                {{-- <div class="ps-tab active" id="tab-6">

                                    <p>Sorry no more offers available</p>

                                </div> --}}

                            </div>

                        </div>
                        <!--  End product content -->

                    </div>

                </div><!-- End Left Column -->

                <!--=====================================
    			Right Column
    			======================================-->

                <div class="ps-page__right d-block d-sm-none d-xl-block">

                    <aside class="widget widget_product widget_features">

                        <p><i class="icon-network"></i>Envíos a todo el mundo</p>

                        <p><i class="icon-3d-rotate"></i> Devolución gratuita de 7 días si es elegible, tan fácil</p>

                        <p><i class="icon-receipt"></i> El proveedor da facturas por este producto.</p>

                        <p><i class="icon-credit-card"></i> Pagar en línea o al recibir bienes</p>

                    </aside>

                    <aside class="widget widget_sell-on-site">

                        <p><i class="icon-store"></i> ¿Auieres Vender en MarketPla?<a href="#"> Registrate ahora !</a></p>

                    </aside>

                    {{-- <aside class="widget widget_same-brand">

                        <h3>Same Brand</h3>

                        <div class="widget__content">

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                	<a href="product-default.html">
                                		<img src="img/products/shop/5.jpg" alt="">
                                	</a>

                                    <div class="ps-product__badge">-37%</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Read More">
	                                        	<i class="icon-bag2"></i>
	                                        </a>
	                                    </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
                                        		<i class="icon-eye"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist">
                                        		<i class="icon-heart"></i>
                                        	</a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="ps-product__container">

                                	<a class="ps-product__vendor" href="#">Robert's Store</a>

                                    <div class="ps-product__content">

                                    	<a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>

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

                                        <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>

                                    </div>

                                    <div class="ps-product__content hover">

                                    	<a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>

                                        <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>

                                    </div>

                                </div>

                            </div>

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                	<a href="product-default.html"><img src="img/products/shop/6.jpg" alt=""></a>

                                    <div class="ps-product__badge">-5%</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Read More">
                                        		<i class="icon-bag2"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
                                        		<i class="icon-eye"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist">
                                        		<i class="icon-heart"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                        		<i class="icon-chart-bars"></i>
                                        	</a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="ps-product__container">

                                	<a class="ps-product__vendor" href="#">Youngshop</a>

                                    <div class="ps-product__content">

                                    	<a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>

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

                                        <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>

                                    </div>

                                    <div class="ps-product__content hover">

                                    	<a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>

                                        <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </aside> --}}

                </div><!-- End Right Column -->

            </div><!--  End Product Container -->

			<!--=====================================
			Customers who bought
			======================================-->

            {{-- <div class="ps-section--default ps-customer-bought">

                <div class="ps-section__header">

                    <h3>Customers who bought this item also bought</h3>

                </div>

                <div class="ps-section__content">

                    <div class="row">

                        <div class="col-lg-2 col-md-4 col-6 ">

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                	<a href="product-default.html">
                                		<img src="img/products/shop/4.jpg" alt="">
                                	</a>

                                    <div class="ps-product__badge hot">hot</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Read More">
                                        		<i class="icon-bag2"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
                                        		<i class="icon-eye"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist">
                                        		<i class="icon-heart"></i>
                                        	</a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="ps-product__container">

                                	<a class="ps-product__vendor" href="#">Global Office</a>

                                    <div class="ps-product__content">

                                    	<a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>

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

                                        <p class="ps-product__price">$55.99</p>

                                    </div>

                                    <div class="ps-product__content hover">

                                    	<a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>

                                        <p class="ps-product__price">$55.99</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-2 col-md-4 col-6 ">

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                	<a href="product-default.html">
                                		<img src="img/products/shop/5.jpg" alt="">
                                	</a>

                                    <div class="ps-product__badge">-37%</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Read More">
                                        		<i class="icon-bag2"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
                                        		<i class="icon-eye"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist">
                                        		<i class="icon-heart"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                        		<i class="icon-chart-bars"></i>
                                        	</a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="ps-product__container">

                                	<a class="ps-product__vendor" href="#">Robert's Store</a>

                                    <div class="ps-product__content">

                                    	<a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>

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

                                        <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>

                                    </div>

                                    <div class="ps-product__content hover">

                                    	<a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>

                                        <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-2 col-md-4 col-6 ">

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                	<a href="product-default.html"><img src="img/products/shop/6.jpg" alt=""></a>

                                    <div class="ps-product__badge">-5%</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
                                        		<i class="icon-eye"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist">
                                        		<i class="icon-heart"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                        		<i class="icon-chart-bars"></i>
                                        	</a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="ps-product__container">

                                	<a class="ps-product__vendor" href="#">Youngshop</a>

                                    <div class="ps-product__content">

                                    	<a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>

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

                                        <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>

                                    </div>

                                    <div class="ps-product__content hover">

                                    	<a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>

                                        <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-2 col-md-4 col-6 ">

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                	<a href="product-default.html">
                                		<img src="img/products/shop/7.jpg" alt="">
                                	</a>

                                    <div class="ps-product__badge">-16%</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Read More">
                                        		<i class="icon-bag2"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
                                        		<i class="icon-eye"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist">
                                        		<i class="icon-heart"></i>
                                        	</a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="ps-product__container">

                                	<a class="ps-product__vendor" href="#">Youngshop</a>

                                    <div class="ps-product__content">

                                    	<a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>

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

                                        <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>

                                    </div>

                                    <div class="ps-product__content hover">

                                    	<a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>

                                        <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-2 col-md-4 col-6 ">

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                	<a href="product-default.html">
                                		<img src="img/products/shop/8.jpg" alt="">
                                	</a>

                                    <div class="ps-product__badge">-16%</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Read More">
                                        		<i class="icon-bag2"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
                                        		<i class="icon-eye"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist">
                                        		<i class="icon-heart"></i>
                                        	</a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="ps-product__container">

                                	<a class="ps-product__vendor" href="#">Young shop</a>

                                    <div class="ps-product__content">

                                    	<a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>

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

                                        <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>

                                    </div>

                                    <div class="ps-product__content hover">

                                    	<a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>

                                        <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-2 col-md-4 col-6">

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                	<a href="product-default.html">
                                		<img src="img/products/shop/9.jpg" alt="">
                                	</a>

                                    <ul class="ps-product__actions">

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Read More">
                                        		<i class="icon-bag2"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
                                        		<i class="icon-eye"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist">
                                        		<i class="icon-heart"></i>
                                        	</a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="ps-product__container">

                                	<a class="ps-product__vendor" href="#">Young shop</a>

                                    <div class="ps-product__content">

                                    	<a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>

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

                                        <p class="ps-product__price">$35.89</p>

                                    </div>

                                    <div class="ps-product__content hover">

                                    	<a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>

                                        <p class="ps-product__price">$35.89</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div><!--  End Customers who bought --> --}}

            <!--=====================================
			Related products
			======================================-->

            <div class="ps-section--default">

                <div class="ps-section__header">

                    <h3>Productos Relacionados</h3>

                </div>

                <div class="ps-section__content">

                    <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product">

                            <div class="ps-product__thumbnail">

                            	<a href="product-default.html">
                            		<img src="img/products/shop/11.jpg" alt="">
                            	</a>

                                <ul class="ps-product__actions">

                                    <li>
                                    	<a href="#" data-toggle="tooltip" data-placement="top" title="Read More">
                                    		<i class="icon-bag2"></i>
                                    	</a>
                                    </li>

                                    <li>
                                    	<a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
                                    		<i class="icon-eye"></i>
                                    	</a>
                                    </li>

                                    <li>
                                    	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist">
                                    		<i class="icon-heart"></i>
                                    	</a>
                                    </li>

                                </ul>

                            </div>

                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$13.43</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                    <p class="ps-product__price">$13.43</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/12.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$75.44</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                    <p class="ps-product__price">$75.44</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/13.jpg" alt=""></a>
                                <div class="ps-product__badge">-7%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                    <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/14.jpg" alt=""></a>
                                <div class="ps-product__badge">-7%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>
                                    <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/15.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$332.38</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>
                                    <p class="ps-product__price sale">$332.38</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/16.jpg" alt=""></a>
                                <div class="ps-product__badge">-7%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12&quot;</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price sale">$1200.00 <del>$1362.99 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12&quot;</a>
                                    <p class="ps-product__price sale">$1200.00 <del>$1362.99 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/17.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$599.00</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                    <p class="ps-product__price">$599.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/18.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$233.28</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                    <p class="ps-product__price">$233.28</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/19.jpg" alt=""></a>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <p class="ps-product__price">$233.28</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                    <p class="ps-product__price">$233.28</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Related products -->

        </div>

    </div><!-- End Product Content -->

    <!--=====================================
	Newletter
	======================================-->

    {{-- <div class="ps-newsletter">

        <div class="container">

            <form class="ps-form--newsletter" action="do_action" method="post">

                <div class="row">

                    <div class="col-xl-5 col-12 ">
                        <div class="ps-form__left">
                            <h3>Newsletter</h3>
                            <p>Subcribe to get information about products and coupons</p>
                        </div>
                    </div>

                    <div class="col-xl-7 col-12 ">

                        <div class="ps-form__right">

                            <div class="form-group--nest">

                                <input class="form-control" type="email" placeholder="Email address">
                                <button class="ps-btn">Subscribe</button>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div> --}}

    <!--=====================================
	Footer
	======================================-->

    {{-- <footer class="ps-footer">

        <div class="container">

            <div class="ps-footer__widgets">

            	<!--=====================================
				Contact us
				======================================-->

                <aside class="widget widget_footer widget_contact-us">

                    <h4 class="widget-title">Contact us</h4>

                    <div class="widget_content">

                        <p>Call us 24/7</p>
                        <h3>1800 97 97 69</h3>
                        <p>502 New Design Str, Melbourne, Australia <br>
                        	<a href="mailto:contact@marketplace.co">contact@marketplace.co</a>
                    	</p>

                        <ul class="ps-list--social">
                            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>

                    </div>

                </aside>

                <!--=====================================
				Quick Links
				======================================-->

                <aside class="widget widget_footer">

                    <h4 class="widget-title">Quick links</h4>

                    <ul class="ps-list--link">

                        <li><a href="#">Policy</a></li>

                        <li><a href="#">Term &amp; Condition</a></li>

                        <li><a href="#">Shipping</a></li>

                        <li><a href="#">Return</a></li>

                        <li><a href="faqs.html">FAQs</a></li>

                    </ul>

                </aside>

                <!--=====================================
				Company
				======================================-->

                <aside class="widget widget_footer">

                    <h4 class="widget-title">Company</h4>

                    <ul class="ps-list--link">

                        <li><a href="about-us.html">About Us</a></li>

                        <li><a href="#">Affilate</a></li>

                        <li><a href="#">Career</a></li>

                        <li><a href="contact-us.html">Contact</a></li>

                    </ul>

                </aside>

                <!--=====================================
				Bussiness
				======================================-->

                <aside class="widget widget_footer">

                    <h4 class="widget-title">Bussiness</h4>

                    <ul class="ps-list--link">

                        <li><a href="#">Our Press</a></li>

                        <li><a href="checkout.html">Checkout</a></li>

                        <li><a href="my-account.html">My account</a></li>

                        <li><a href="shop-default.html">Shop</a></li>

                    </ul>

                </aside>

            </div>

          	<!--=====================================
			Categories Footer
			======================================-->

            <div class="ps-footer__links">

                <p>
                	<strong>Consumer Electric:</strong>
                	<a href="#">Air Conditioners</a>
                	<a href="#">Audios &amp; Theaters</a>
                	<a href="#">Car Electronics</a>
                	<a href="#">Office Electronics</a>
                	<a href="#">TV Televisions</a>
                	<a href="#">Washing Machines</a>
                </p>

                <p>
                	<strong>Clothing &amp; Apparel:</strong>
                	<a href="#">Printers</a>
                	<a href="#">Projectors</a>
                	<a href="#">Scanners</a>
                	<a href="#">Store &amp; Business</a>
                	<a href="#">4K Ultra HD TVs</a>
                	<a href="#">LED TVs</a>
                	<a href="#">OLED TVs</a>
                </p>

                <p>
                	<strong>Home, Garden &amp; Kitchen:</strong>
                	<a href="#">Cookware</a>
                	<a href="#">Decoration</a>
                	<a href="#">Furniture</a>
                	<a href="#">Garden Tools</a>
                	<a href="#">Garden Equipments</a>
                	<a href="#">Powers And Hand Tools</a>
                	<a href="#">Utensil &amp; Gadget</a>
                </p>

                <p>
                	<strong>Health &amp; Beauty:</strong>
                	<a href="#">Hair Care</a>
                	<a href="#">Decoration</a>
                	<a href="#">Hair Care</a>
                	<a href="#">Makeup</a>
                	<a href="#">Body Shower</a>
                	<a href="#">Skin Care</a>
                	<a href="#">Cologine</a>
                	<a href="#">Perfume</a>
                </p>

                <p>
                	<strong>Jewelry &amp; Watches:</strong>
                	<a href="#">Necklace</a>
                	<a href="#">Pendant</a>
                	<a href="#">Diamond Ring</a>
                	<a href="#">Sliver Earing</a>
                	<a href="#">Leather Watcher</a>
                	<a href="#">Gucci</a>
                </p>

                <p>
                	<strong>Computer &amp; Technologies:</strong>
                	<a href="#">Desktop PC</a>
                	<a href="#">Laptop</a>
                	<a href="#">Smartphones</a>
                	<a href="#">Tablet</a>
                	<a href="#">Game Controller</a>
                	<a href="#">Audio &amp; Video</a>
                	<a href="#">Wireless Speaker</a>
                	<a href="#">Done</a>
                </p>

            </div>

            <!--=====================================
			CopyRight - Payment method Footer
			======================================-->

            <div class="ps-footer__copyright">

                <p>© 2020 MarketPlace. All Rights Reserved</p>

                <p>
                	<span>We Using Safe Payment For:</span>

                	<a href="#">
                		<img src="img/payment-method/1.jpg" alt="">
                	</a>

                	<a href="#">
                		<img src="img/payment-method/2.jpg" alt="">
                	</a>

                	<a href="#">
                		<img src="img/payment-method/3.jpg" alt="">
                	</a>

                	<a href="#">
                		<img src="img/payment-method/4.jpg" alt="">
                	</a>

                	<a href="#">
                		<img src="img/payment-method/5.jpg" alt="">
                	</a>

                </p>

            </div>

        </div>

    </footer> --}}

	<!--=====================================
	JS PERSONALIZADO
	======================================-->

	<script src="js/main.js"></script>


@endsection
