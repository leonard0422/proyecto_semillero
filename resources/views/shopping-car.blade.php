@extends('layout.layout')
@section('content')
  <!--=====================================
    Breadcrumb
    ======================================-->

	<div class="ps-breadcrumb">

        <div class="container">

            <ul class="breadcrumb">

                <li><a href="index.html">Home</a></li>

                <li>Carrito de compras</li>

            </ul>

        </div>

    </div>

    <!--=====================================
    Shopping Car
    ======================================-->

    <div class="ps-section--shopping ps-shopping-cart">

        <div class="container">

            <div class="ps-section__header">

                <h1>Carrito de compras</h1>

            </div>

            <div class="ps-section__content">

                <div class="table-responsive">

                    <table class="table ps-table--shopping-cart">

                        <thead>

                            <tr>

                                <th>Nombre del producto</th>
                                <th>Precio</th>
                                <th>Impuesto</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                                <th></th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>

                                    <div class="ps-product--cart">

                                        <div class="ps-product__thumbnail">

                                            <a href="product-default.html"><img src="img/products/electronic/a_1_1.jpg" alt=""></a>

                                        </div>

                                        <div class="ps-product__content">

                                            <a href="product-default.html">Coco x12 UD</a>

                                            <p>Vendido por:<strong>  COCOLERIOS S.A</strong></p>

                                        </div>

                                    </div>

                                </td>

                                <td class="price">$20.000</td>

                                <td class="text-center">$500</td>


                                <td>

                                    <div class="form-group--number">

                                        <button class="up">+</button>

                                        <button class="down">-</button>

                                        <input class="form-control" type="text" placeholder="1" value="1">

                                    </div>

                                </td>

                                <td>$20.500</td>

                                <td>

                                    <a href="#">
                                        <i class="icon-cross"></i>
                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>

                                    <div class="ps-product--cart">

                                        <div class="ps-product__thumbnail">

                                            <a href="product-default.html"><img src="img/products/clothing/b_1_3.jpg" alt=""></a>

                                        </div>

                                        <div class="ps-product__content">

                                            <a href="product-default.html">Caja de bananos x8 UD</a>

                                            <p>Vendido por:<strong> LA PLATANERIA</strong></p>

                                        </div>

                                    </div>

                                </td>

                                <td class="price">$20.000</td>

                                <td class="text-center">$500</td>

                                <td>

                                    <div class="form-group--number">
                                        <button class="up">+</button>
                                        <button class="down">-</button>
                                        <input class="form-control" type="text" placeholder="1" value="1">
                                    </div>

                                </td>

                                <td>$20.500</td>

                                <td>
                                    <a href="#">
                                        <i class="icon-cross"></i>
                                    </a>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

                <hr>

                <div class="d-flex flex-row-reverse">
                  <div class="p-2"><h3>Total <span>$41.000</span></h3></div>
                </div>

                <div class="ps-section__cart-actions">

                    <a class="ps-btn" href="categories.html.html">
                        <i class="icon-arrow-left"></i> Volver a la tienda
                    </a>

                    <a class="ps-btn" href="checkout.html">
                        Proceder a pagar <i class="icon-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

    <!--=====================================
	Footer
	======================================-->

    <hr>

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
