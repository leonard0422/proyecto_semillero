@extends('layout.layout')
@section('content')
 <!--=====================================
    Checkout
    ======================================--> 
    <div class="ps-checkout ps-section--shopping">

        <div class="container">

            <div class="ps-section__header">

                <h1>Checkout</h1>

            </div>

            <div class="ps-section__content">

                <form class="ps-form--checkout" action="do_action" method="post">

                    <div class="row">

                        <div class="col-xl-7 col-lg-8 col-sm-12">

                            <div class="ps-form__billing-info">

                                <h3 class="ps-form__heading">Billing Details</h3>

                                <div class="form-group">

                                    <label>First Name<sup>*</sup></label>

                                    <div class="form-group__content">

                                        <input class="form-control" type="text">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Last Name<sup>*</sup></label>

                                    <div class="form-group__content">

                                        <input class="form-control" type="text">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Email Address<sup>*</sup></label>

                                    <div class="form-group__content">

                                        <input class="form-control" type="email">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Country<sup>*</sup></label>

                                    <div class="form-group__content">

                                        <input class="form-control" type="text">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Phone<sup>*</sup></label>

                                    <div class="form-group__content">

                                        <input class="form-control" type="text">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Address<sup>*</sup></label>

                                    <div class="form-group__content">

                                        <input class="form-control" type="text">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <div class="ps-checkbox">

                                        <input class="form-control" type="checkbox" id="create-account">

                                        <label for="create-account">Save address?</label>

                                    </div>

                                </div>

                                <h3 class="mt-40"> Addition information</h3>

                                <div class="form-group">

                                    <label>Order Notes</label>

                                    <div class="form-group__content">

                                        <textarea class="form-control" rows="7" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-xl-5 col-lg-4 col-sm-12">

                            <div class="ps-form__total">

                                <h3 class="ps-form__heading">Your Order</h3>

                                <div class="content">

                                    <div class="ps-block--checkout-total">

                                        <div class="ps-block__header d-flex justify-content-between">

                                            <p>Product</p>

                                            <p>Total</p>

                                        </div>

                                        <div class="ps-block__content">

                                            <table class="table ps-block__products">

                                                <tbody>

                                                    <tr>

                                                        <td>
                                                            <a href="#"> MVMTH Classical Leather Watch In Black ×1</a>
                                                            <p>Sold By:<strong>YOUNG SHOP</strong></p>
                                                        </td>

                                                        <td class="text-right">$57.99</td>

                                                    </tr>

                                                    <tr>

                                                        <td>
                                                            <a href="#"> Apple Macbook Retina Display 12” × 1</a>
                                                            <p>Sold By:<strong>ROBERT’S STORE</strong></p>
                                                        </td>

                                                        <td class="text-right">$625.50</td>

                                                    </tr>

                                                </tbody>

                                            </table>
                                            
                                            <h3 class="text-right">Total <span>$683.49</span></h3>

                                        </div>

                                    </div>

                                    <hr class="py-3">

                                    <div class="form-group">

                                        <div class="ps-radio">

                                            <input class="form-control" type="radio" id="pay-paypal" name="payment-method" value="paypal" checked>

                                            <label for="pay-paypal">Pay with paypal?  <span><img src="img/payment-method/paypal.jpg" class="w-50"></span></label>

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <div class="ps-radio">

                                            <input class="form-control" type="radio" id="pay-payu" name="payment-method" value="payu">

                                            <label for="pay-payu">Pay with payu? <span><img src="img/payment-method/payu.jpg" class="w-50"></span></label>

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <div class="ps-radio">

                                            <input class="form-control" type="radio" id="pay-mercadopago" name="payment-method" value="mercado-pago">

                                            <label for="pay-mercadopago">Pay with Mercado Pago? <span><img src="img/payment-method/mercado_pago.jpg" class="w-50"></span></label>

                                        </div>

                                    </div>

                                    <a class="ps-btn ps-btn--fullwidth" href="checkout.html">Proceed to checkout</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>
  
    <!--=====================================
	Footer
	======================================-->

    <hr>  

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
@endsection