@extends('layout.layout')
@section('content')
 <!--=====================================
    Breadcrumb
    ======================================-->

	<div class="ps-breadcrumb">

        <div class="container">

            <ul class="breadcrumb">

                <li><a href="index.blade.php">Home</a></li>

                <li>Acerca de nosotros</li>

            </ul>

        </div>

    </div>

    <!--=====================================
    About Us Content
    ======================================-->

    <div class="ps-page--single" id="about-us"><img src="img/bg/about-us.jpg" alt="">
        <div class="ps-about-intro">
            <div class="container">
                <div class="ps-section__header">
                    <h4>Bienvenido al marketplace</h4>
                    <h3>Conectamos a millones de compradores y vendedores en todo el mundo, empoderando a las personas y creando oportunidades económicas para todos.</h3>
                    <p>Dentro de nuestros mercados, millones de personas en todo el mundo se conectan, tanto en línea como fuera de línea, para fabricar, vender y comprar productos únicos. También ofrecemos una amplia gama de Servicios y herramientas para vendedores que ayudan a los emprendedores creativos a iniciar, administrar y escalar sus negocios. Nuestra misión es reinventar el comercio de manera que construya un mundo más satisfactorio y duradero, y estamos comprometidos a utilizar el poder de los negocios para fortalecer las comunidades y empoderar a las personas.</p>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                            <div class="ps-block--icon-box"><i class="icon-cube"></i>
                                <h4>45M</h4>
                                <p>Productos en venta</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                            <div class="ps-block--icon-box"><i class="icon-store"></i>
                                <h4>1.8M</h4>
                                <p>Vendedores activos en el marketplace</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                            <div class="ps-block--icon-box"><i class="icon-bag2"></i>
                                <h4>30.6M</h4>
                                <p>Compradores activos en el marketplace</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                            <div class="ps-block--icon-box"><i class="icon-cash-dollar"></i>
                                <h4>$2.46M</h4>
                                <p>Ventas brutas anuales de mercancías</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--include ../../partials/pages/about-us/milestone-->
        <div class="ps-our-team">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Conoce a nuestros lideres</h3>
                </div>
                <div class="ps-section__content">
                    <figure>
                        <div class="ps-block--ourteam"><img src="img/users/our-team/1.jpg" alt="">
                            <div class="ps-block__content">
                                <h4>Robert Downey Jr</h4>
                                <p>CEO Fundador</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </figure>
                    <figure>
                        <div class="ps-block--ourteam"><img src="img/users/our-team/2.jpg" alt="">
                            <div class="ps-block__content">
                                <h4>Jhonny Deep</h4>
                                <p>CEO Fouder</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </figure>
                    <figure>
                        <div class="ps-block--ourteam"><img src="img/users/our-team/3.jpg" alt="">
                            <div class="ps-block__content">
                                <h4>Jason Mamoa</h4>
                                <p>CEO Fouder</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </figure>
                    <figure>
                        <div class="ps-block--ourteam"><img src="img/users/our-team/4.jpg" alt="">
                            <div class="ps-block__content">
                                <h4>Gustavo Petro</h4>
                                <p>CEO Fouder</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </figure>
                    <figure>
                        <div class="ps-block--ourteam"><img src="img/users/our-team/5.jpg" alt="">
                            <div class="ps-block__content">
                                <h4>Elton Jon</h4>
                                <p>CEO Fouder</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </figure>
                    <figure>
                        <div class="ps-block--ourteam"><img src="img/users/our-team/6.jpg" alt="">
                            <div class="ps-block__content">
                                <h4>Freddy Mercury</h4>
                                <p>CEO Fouder</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </figure>
                    <figure>
                        <div class="ps-block--ourteam"><img src="img/users/our-team/7.jpg" alt="">
                            <div class="ps-block__content">
                                <h4>Charles-Augustin de Coulomb</h4>
                                <p>CEO Fouder</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </figure>
                    <figure data-mh="our-team">
                        <div class="ps-block--ourteam blank"><a href="#">Conviertete <br> en miembro <br> de el equipo</a></div>
                    </figure>
                </div>
            </div>
        </div>
        <div class="ps-about-awards">
            <div class="container">
                <div class="ps-section__header">
                    <h4>Premios y reconocimientos</h4>
                    <p>Los líderes de la industria y personas influyentes reconocen a Overstock como una de las empresas minoristas más confiables de los EE. UU., con una clasificación alta en satisfacción tanto de clientes como de empleados.</p>
                </div>
                <div class="ps-section__content">
                    <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="5" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1500" data-owl-mousedrag="off"><a href="#"><img src="img/awards/1.png" alt=""></a><a href="#"><img src="img/awards/2.png" alt=""></a><a href="#"><img src="img/awards/3.png" alt=""></a><a href="#"><img src="img/awards/4.png" alt=""></a><a href="#"><img src="img/awards/5.png" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>

    <!--=====================================
	Newletter
	======================================-->

    {{-- <div class="ps-newsletter">

        <div class="container">

            <form class="ps-form--newsletter" action="do_action" method="post">

                <div class="row">

                    <div class="col-xl-5 col-12 ">
                        <div class="ps-form__left">
                            <h3>Periodico</h3>
                            <p>Suscríbete para recibir información sobre productos y cupones</p>
                        </div>
                    </div>

                    <div class="col-xl-7 col-12 ">

                        <div class="ps-form__right">

                            <div class="form-group--nest">

                                <input class="form-control" type="email" placeholder="Email address">
                                <button class="ps-btn">Subscribete</button>

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

                    <h4 class="widget-title">Contactanos</h4>

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

                    <h4 class="widget-title">Links rapidos</h4>

                    <ul class="ps-list--link">

                        <li><a href="#">Politica</a></li>

                        <li><a href="#">Terminos y condiciones</a></li>

                        <li><a href="#">Envios</a></li>

                        <li><a href="#">Devolverte</a></li>

                        <li><a href="faqs.blade.php">Preguntas frecuentes</a></li>

                    </ul>

                </aside>

                <!--=====================================
				Company
				======================================-->

                <aside class="widget widget_footer">

                    <h4 class="widget-title">Compañia</h4>

                    <ul class="ps-list--link">

                        <li><a href="about-us.blade.php">Acerca de nosotros</a></li>

                        <li><a href="#">Afiliados</a></li>

                        <li><a href="#">Carrera</a></li>

                        <li><a href="contact-us.html">Contacto</a></li>

                    </ul>

                </aside>

                <!--=====================================
				Bussiness
				======================================-->

                <aside class="widget widget_footer">

                    <h4 class="widget-title">Negocio</h4>

                    <ul class="ps-list--link">

                        <li><a href="#">Nuestra Prensa</a></li>

                        <li><a href="checkout.blade.php">Checkout</a></li>

                        <li><a href="my-account.blade.php">Mi cuenta</a></li>

                        <li><a href="shop-default.html">Tienda</a></li>

                    </ul>

                </aside>

            </div>

          	<!--=====================================
			Categories Footer
			======================================-->

            <div class="ps-footer__links">

                <p>
                	<strong>Verduras:</strong>
                	<a href="#">Maiz</a>
                	<a href="#">Papa</a>
                	<a href="#">Cebolla</a>
                	<a href="#">Lechuga</a>
                	<a href="#">Pimenton</a>
                	<a href="#">Zanahoria</a>
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
