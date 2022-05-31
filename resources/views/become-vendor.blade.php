@extends('layout.layout')
@section('content')
 <!--=====================================
    Breadcrumb
    ======================================-->

	<div class="ps-breadcrumb">

        <div class="container">

            <ul class="breadcrumb">

                <li><a href="index.blade.php">Home</a></li>

                <li>Conviertete en un vendedor</li>

            </ul>

        </div>

    </div>

    <!--=====================================
    Become a Vendor Content
    ======================================-->

    <div class="container-fluid p-0">

        <!--=====================================
        Become a Vendor Banner
        ======================================-->

        <div class="ps-vendor-banner bg--cover" style="background: url(img/vendor/vendor.jpg);">
            <div class="container">
                <h2>Millones de compradores no pueden esperar para ver lo que tienes en la tienda</h2><a class="ps-btn ps-btn--lg" href="#">Empieza a vender</a>
            </div>
        </div>

        <!--=====================================
        Become a Vendor About
        ======================================-->

        <div class="ps-section--vendor ps-vendor-about">
            <div class="container">
                <div class="ps-section__header">
                    <p>¿Por que vender en el marketplace?</p>
                    <h4>Únase a un mercado donde casi 50 millones de compradores alrededor <br> el mundo compra artículos únicos</h4>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block--icon-box-2">
                                <div class="ps-block__thumbnail"><img src="img/icons/vendor-1.png" alt=""></div>
                                <div class="ps-block__content">
                                    <h4>Tarifas bajas</h4>
                                    <div class="ps-block__desc" data-mh="about-desc" style="height: 75px;">
                                        <p>No se necesita mucho para enumerar sus artículos y, una vez que realiza una venta, la tarifa de transacción del marketplace es solo del 2.5%.</p>
                                    </div><a href="#">Aprende mas</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block--icon-box-2">
                                <div class="ps-block__thumbnail"><img src="img/icons/vendor-2.png" alt=""></div>
                                <div class="ps-block__content">
                                    <h4>Herramientas poderosas</h4>
                                    <div class="ps-block__desc" data-mh="about-desc" style="height: 75px;">
                                        <p>Nuestras herramientas y servicios facilitan la administración, la promoción y el crecimiento de su negocio.</p>
                                    </div><a href="#">Aprende mas</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block--icon-box-2">
                                <div class="ps-block__thumbnail"><img src="img/icons/vendor-3.png" alt=""></div>
                                <div class="ps-block__content">
                                    <h4>Soporte 24/7</h4>
                                    <div class="ps-block__desc" data-mh="about-desc" style="height: 75px;">
                                        <p>Nuestras herramientas y servicios facilitan la administración, la promoción y el crecimiento de su negocio.</p>
                                    </div><a href="#">Aprende mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=====================================
        Become a Vendor Milestone
        ======================================-->

        <div class="ps-section--vendor ps-vendor-milestone">
            <div class="container">
                <div class="ps-section__header">
                    <p>¿Como funciona?</p>
                    <h4>Fácil de comenzar a vender en línea en marketplace a solo 4 simples pasos</h4>
                </div>
                <div class="ps-section__content">
                    <div class="ps-block--vendor-milestone">
                        <div class="ps-block__left">
                            <h4>Regístrese y enumere sus productos</h4>
                            <ul>
                                <li>Da de alta tu negocio gratis y crea un catálogo de productos. Obtenga capacitación gratuita sobre cómo administrar su negocio en línea</li>
                                <li>Nuestros asesores de Martfury lo ayudarán en cada paso y lo ayudarán completamente a llevar su negocio en línea</li>
                            </ul>
                        </div>
                        <div class="ps-block__right"><img src="img/vendor/milestone-1.png" alt=""></div>
                        <div class="ps-block__number"><span>1</span></div>
                    </div>
                    <div class="ps-block--vendor-milestone reverse">
                        <div class="ps-block__left">
                            <h4>Recibe pedidos y vende tu producto</h4>
                            <ul>
                                <li>Registre su empresa de forma gratuita y cree un catálogo de productos. Obtenga capacitación gratuita sobre cómo administrar su negocio en línea</li>
                                <li>Nuestros asesores de Martfury lo ayudarán en cada paso y lo ayudarán completamente a llevar su negocio en línea</li>
                            </ul>
                        </div>
                        <div class="ps-block__right"><img src="img/vendor/milestone-2.png" alt=""></div>
                        <div class="ps-block__number"><span>2</span></div>
                    </div>
                    <div class="ps-block--vendor-milestone">
                        <div class="ps-block__left">
                            <h4>Recibe pedidos y vende tu producto</h4>
                            <ul>
                                <li>Registre su empresa de forma gratuita y cree un catálogo de productos. Obtenga capacitación gratuita sobre cómo administrar su negocio en línea</li>
                                <li>Nuestros asesores de Martfury lo ayudarán en cada paso y lo ayudarán completamente a llevar su negocio en línea</li>
                            </ul>
                        </div>
                        <div class="ps-block__right"><img src="img/vendor/milestone-3.png" alt=""></div>
                        <div class="ps-block__number"><span>3</span></div>
                    </div>
                    <div class="ps-block--vendor-milestone reverse">
                        <div class="ps-block__left">
                            <h4>Recibe pedidos y vende tu producto</h4>
                            <ul>
                                <li>Registre su empresa de forma gratuita y cree un catálogo de productos. Obtenga capacitación gratuita sobre cómo administrar su negocio en línea</li>
                                <li>Nuestros asesores de Martfury lo ayudarán en cada paso y lo ayudarán completamente a llevar su negocio en línea</li>
                            </ul>
                        </div>
                        <div class="ps-block__right"><img src="img/vendor/milestone-4.png" alt=""></div>
                        <div class="ps-block__number"><span>4</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!--=====================================
        Become a VendorBest Fees
        ======================================-->

        <div class="ps-section--vendor ps-vendor-best-fees">
            <div class="container">
                <div class="ps-section__header">
                    <p>MEJORES TARIFAS PARA COMENZAR</p>
                    <h4>Asequible, transparente y seguro</h4>
                </div>
                <div class="ps-section__content">
                    <h5>No cuesta nada listar hasta 50 artículos al mes, y solo pagas después de que se venden tus cosas. Es solo un pequeño porcentaje del dinero que ganas</h5>
                    <div class="ps-section__numbers">
                        <figure>
                            <h3>$0</h3><span>Tarifa de lista</span>
                        </figure>
                        <figure>
                            <h3>5 %</h3><span>Tarifa de valor final</span>
                        </figure>
                    </div>
                    <div class="ps-section__desc">
                        <figure>
                            <figcaption>Esto es lo que obtiene por su tarifa:</figcaption>
                            <ul>
                                <li>Una comunidad mundial de más de 160 millones de compradores.</li>
                                <li>Etiquetas de envío que puede imprimir en casa, con grandes descuentos en gastos de envío.</li>
                                <li>Protección del vendedor y atención al cliente para ayudarlo a vender sus cosas.</li>
                            </ul>
                        </figure>
                    </div>
                    <div class="ps-section__highlight"><img src="img/icons/vendor-4.png" alt="">
                        <figure>
                            <p>Procesamos pagos con PayPal, una plataforma de pagos externa que le permite procesar transacciones con una variedad de métodos de pago. Los fondos de las ventas de PayPal en Martfury se depositarán en su cuenta de PayPal.</p>
                        </figure>
                    </div>
                    <div class="ps-section__footer">
                        <p>Las tarifas de listado se facturan por 0,20 USD, por lo que si la moneda de su banco no es USD, la cantidad en su moneda puede variar según los cambios en el tipo de cambio.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--=====================================
        Become a VendorBest Testimonials
        ======================================-->

        <div class="ps-section--vendor ps-vendor-testimonials">
            <div class="container">
                <div class="ps-section__header">
                    <p>HISTORIAS DE VENDEDORES</p>
                    <h4>Vea la participación del vendedor sobre su éxito en Martfury</h4>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="2" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="2" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-block--testimonial">
                            <div class="ps-block__header"><img src="img/users/1.jpg" alt=""></div>
                            <div class="ps-block__content"><i class="icon-quote-close"></i>
                                <h4>Kanye West<span>Campesinos</span></h4>
                                <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                            </div>
                        </div>
                        <div class="ps-block--testimonial">
                            <div class="ps-block__header"><img src="img/users/2.png" alt=""></div>
                            <div class="ps-block__content"><i class="icon-quote-close"></i>
                                <h4>Anabella Kleva<span>Campesina</span></h4>
                                <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                            </div>
                        </div>
                        <div class="ps-block--testimonial">
                            <div class="ps-block__header"><img src="img/users/3.jpg" alt=""></div>
                            <div class="ps-block__content"><i class="icon-quote-close"></i>
                                <h4>William Roles<span>Campesina</span></h4>
                                <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=====================================
        Become a VendorBest Faqs
        ======================================-->

        <div class="ps-section--vendor ps-vendor-faqs">
            <div class="container">
                <div class="ps-section__header">
                    <p>PREGUNTAS FRECUENTES</p>
                    <h4>Estas son algunas preguntas comunes sobre la venta en Marketplace</h4>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <figure>
                                <figcaption>¿Cómo funcionan las tarifas en Martfury?</figcaption>
                                <p>Unirse y abrir una tienda en Martfury es gratis. Hay tres tarifas de venta básicas: una tarifa de listado, una tarifa de transacción y una tarifa de procesamiento de pagos.</p>
                                <p>Cuesta USD 0,20 publicar una lista en el mercado. Una lista dura cuatro meses o hasta que se vende el artículo. Una vez que se vende un artículo, hay una tarifa de transacción del 3,5% sobre el precio de venta (sin incluir los costos de envío). Si acepta pagos con PayPal, también hay una tarifa de procesamiento de pagos basada en su estructura de tarifas.</p>
                                <p>Las tarifas de listado se facturan por $0.20 USD, por lo que si la moneda de su banco no es USD, la cantidad puede diferir según los cambios en la tasa de cambio.</p>
                            </figure>
                            <figure>
                                <figcaption>¿Qué debo hacer para crear una tienda?</figcaption>
                                <p>Es fácil configurar una tienda en Martfury. Cree una cuenta de Martfury (si aún no tiene una), establezca la ubicación y la moneda de su tienda, elija un nombre de tienda, cree una lista, establezca un método de pago (cómo desea que le paguen) y finalmente establezca un método de facturación (cómo desea pagar sus Martfuryfees).</p>
                            </figure>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <figure>
                                <figcaption>¿Cómo me pagan?</figcaption>
                                <p>Si acepta pagos con PayPal, los fondos de las ventas de PayPal en Martfury se depositarán en su cuenta de PayPal. Recomendamos a los vendedores que utilicen una cuenta comercial de PayPal y no una cuenta personal, ya que las cuentas personales están sujetas a límites de recepción mensuales y no pueden aceptar pagos de compradores que se financian con una tarjeta de crédito.</p>
                                <p>Cuesta USD 0,20 publicar una lista en el mercado. Una lista dura cuatro meses o hasta que se vende el artículo. Una vez que se vende un artículo, hay una tarifa de transacción del 3,5% sobre el precio de venta (sin incluir los costos de envío). Si acepta pagos con PayPal, también hay una tarifa de procesamiento de pagos basada en su estructura de tarifas.</p>
                                <p>Las tarifas de listado se facturan por $0.20 USD, por lo que si la moneda de su banco no es USD, la cantidad puede diferir según los cambios en la tasa de cambio.</p>
                            </figure>
                            <figure>
                                <figcaption>¿Necesito una tarjeta de crédito o débito para crear una tienda?</figcaption>
                                <p>No, no se requiere una tarjeta de crédito o débito para crear una tienda. Para ser verificado como vendedor, tiene la opción de usar una tarjeta de crédito o registrarse a través de PayPal. No incurrirá en ningún cargo hasta que abra su tienda y publique sus listados.</p>
                            </figure>
                            <figure>
                                <figcaption>¿Qué puedo vender en Martfury?</figcaption>
                            </figure>
                            <p>Martfury proporciona un mercado para que artesanos, artistas y coleccionistas vendan sus creaciones hechas a mano, productos antiguos (de al menos 20 años) y suministros de artesanía tanto hechos a mano como no hechos a mano.</p>
                        </div>
                    </div>
                </div>
                <div class="ps-section__footer">
                    <p>¿Aún tienes más preguntas? No dude en contactarnos.</p><a class="ps-btn" href="#">Contáctenos</a>
                </div>
            </div>
        </div>

        <!--=====================================
        Become a VendorBest Banner
        ======================================-->

        <div class="ps-vendor-banner bg--cover" style="background: url(img/vendor/vendor.jpg);">
            <div class="container">
                <h2>Millones de compradores están ansiosos por ver lo que tienes en la tienda</h2><a class="ps-btn ps-btn--lg" href="#">Empieza a vender</a>
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
