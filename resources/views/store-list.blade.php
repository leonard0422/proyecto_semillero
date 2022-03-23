@extends('layout.layout')
@section('content')

    <!--=====================================
    Breadcrumb
    ======================================-->  
	
	<div class="ps-breadcrumb">

        <div class="container">

            <ul class="breadcrumb">

                <li><a href="index.html">Home</a></li>

                <li>Store List</li>

            </ul>

        </div>

    </div>

    <!--=====================================
    Store List
    ======================================--> 

    <section class="ps-store-list">

        <div class="container">

            <div class="ps-section__header">

                <h3>Store list</h3>

            </div>

            <div class="ps-section__wrapper" data-select2-id="14">

                <div class="ps-section__center" data-select2-id="33">

                    <section class="ps-store-box" data-select2-id="32">

                        <div class="ps-section__header">

                            <p>Showing 1 -8 of 22 results</p>                  

                            <form class="form-inline" action="/action">
                              
                              <label for="search pr-3">Search: </label>
                              
                              <input type="search" class="ml-3" id="search" placeholder="Input here...">

                            </form>

                            <select class="ps-select">
                                <option value="1">Sort by Newest: old to news</option>
                                <option value="2">Sort by Newest: New to old</option>
                                <option value="3">Sort by average rating: low to hight</option>
                            </select>

                        </div>

                        <div class="ps-section__content">

                            <div class="row">

                                <div class="col-lg-4 col-md-6 col-12">

                                    <article class="ps-block--store">

                                        <div class="ps-block__thumbnail bg--cover" style="background: url(img/vendor/store/1.jpg);"></div>

                                        <div class="ps-block__content">

                                            <div class="ps-block__author">

                                                <a class="ps-block__user" href="#">

                                                    <img src="img/vendor/store/user/3.jpg" alt=""></a><a class="ps-btn" href="#">Visit Store</a>

                                            </div>

                                            <h4>GoPro</h4>

                                            <div class="br-wrapper br-theme-fontawesome-stars">

                                                <select class="ps-rating" data-read-only="true" style="display: none;">

                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>

                                            </select>
 
                                        </div>

                                            <p>325 Orchard, Buenos Aires, Formosa Argentina</p>

                                            <ul class="ps-block__contact">

                                                <li>
                                                    <i class="icon-envelope"></i>
                                                    <a href="mailto:contact@xhome.com">contact@xhome.com</a>
                                                </li>

                                                <li>
                                                    <i class="icon-telephone"></i> (+093) 77-637-3300
                                                </li>

                                            </ul>

                                           

                                        </div>

                                    </article>

                                </div>

                                <div class="col-lg-4 col-md-6 col-12">

                                    <article class="ps-block--store">

                                        <div class="ps-block__thumbnail bg--cover" style="background: url(img/vendor/store/2.jpg);"></div>
                                        <div class="ps-block__content">
                                            <div class="ps-block__author"><a class="ps-block__user" href="#"><img src="img/vendor/store/user/4.jpg" alt=""></a><a class="ps-btn" href="#">Visit Store</a></div>
                                            <h4>Robert's Store</h4>
                                            <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select></div>
                                            <p>325 Orchard, Buenos Aires, Formosa Argentina</p>
                                            <ul class="ps-block__contact">
                                                <li><i class="icon-envelope"></i><a href="mailto:contact@xhome.com">contact@xhome.com</a></li>
                                                <li><i class="icon-telephone"></i> (+093) 77-637-3300</li>
                                            </ul>
                                            
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <article class="ps-block--store">
                                        <div class="ps-block__thumbnail bg--cover" style="background: url(img/vendor/store/3.jpg);"></div>
                                        <div class="ps-block__content">
                                            <div class="ps-block__author"><a class="ps-block__user" href="#"><img src="img/vendor/store/user/5.jpg" alt=""></a><a class="ps-btn" href="#">Visit Store</a></div>
                                            <h4>Youngshop</h4>
                                            <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select></div>
                                            <p>325 Orchard, Buenos Aires, Formosa Argentina</p>
                                            <ul class="ps-block__contact">
                                                <li><i class="icon-envelope"></i><a href="mailto:contact@xhome.com">contact@xhome.com</a></li>
                                                <li><i class="icon-telephone"></i> (+093) 77-637-3300</li>
                                            </ul>
                                            
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <article class="ps-block--store">
                                        <div class="ps-block__thumbnail bg--cover" style="background: url(img/vendor/store/1.jpg);"></div>
                                        <div class="ps-block__content">
                                            <div class="ps-block__author"><a class="ps-block__user" href="#"><img src="img/vendor/store/user/5.jpg" alt=""></a><a class="ps-btn" href="#">Visit Store</a></div>
                                            <h4>Global Offical</h4>
                                            <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select></div>
                                            <p>325 Orchard, Buenos Aires, Formosa Argentina</p>
                                            <ul class="ps-block__contact">
                                                <li><i class="icon-envelope"></i><a href="mailto:contact@xhome.com">contact@xhome.com</a></li>
                                                <li><i class="icon-telephone"></i> (+093) 77-637-3300</li>
                                            </ul>
                                            
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="ps-pagination">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================
	Newletter
	======================================-->  

    <div class="ps-newsletter">

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
	
@endsection