@extends('layout.layout')

@section('content')
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
                    <button class="btn transparent" id="sign-up-btn">
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

    <!--=====================================
     Footer
     ======================================-->

    <footer class="ps-footer">

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

    </footer>

    <!--=====================================
     JS PERSONALIZADO
     ======================================-->

    <script src="js/main.js"></script>
    <script src="js/app.js"></script>
@endsection
