<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title') | MarketPlace</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Asset CSS Files -->
    <link href="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}"
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">


    	<link rel="icon" href="{{ URL::asset('img/template/icono.png') }}">

	<!--=====================================
	CSS
	======================================-->

	<!-- google font -->
	<link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap')}}" rel="stylesheet">

	<!-- font awesome -->
	<link rel="stylesheet" href="{{ URL::asset('css_p/plugins/fontawesome.min.css')}}">

	<!-- linear icons -->
	<link rel="stylesheet" href="{{ URL::asset('css_p/plugins/linearIcons.css')}}">

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ URL::asset('css_p/plugins/owl.carousel.css')}}">

	<!-- Slick -->
	<link rel="stylesheet" href="{{ URL::asset('css_p/plugins/slick.css')}}">

	<!-- Light Gallery -->
	<link rel="stylesheet" href="{{ URL::asset('css_p/plugins/lightgallery.min.css')}}">

	<!-- Font Awesome Start -->
	<link rel="stylesheet" href="{{ URL::asset('css_p/plugins/fontawesome-stars.css')}}">

	<!-- jquery Ui -->
	<link rel="stylesheet" href="{{ URL::asset('css_p/plugins/jquery-ui.min.css')}}">

	<!-- Select 2 -->
	<link rel="stylesheet" href="{{ URL::asset('css_p/plugins/select2.min.css')}}">

	<!-- Scroll Up -->
	<link rel="stylesheet" href="{{ URL::asset('css_p/plugins/scrollUp.css')}}">

    <!-- DataTable -->
    <link rel="stylesheet" href="{{ URL::asset('css_p/plugins/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css_p/plugins/responsive.bootstrap.datatable.min.css')}}">

	<!-- estilo principal -->
	<link rel="stylesheet" href="{{ URL::asset('css_p/style.css')}}">

	<!-- Market Place 4 -->
	<link rel="stylesheet" href="{{ URL::asset('ccss_pss/market-place-4.css')}}">

	<!--=====================================
	PLUGINS JS
	======================================-->

	<!-- jQuery library -->
	<script src="{{ URL::asset('js/plugins/jquery-1.12.4.min.js')}}"></script>

	<!-- Popper JS -->
	<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js') }}"></script>

	<!-- Latest compiled JavaScript -->
	<script src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js') }}"></script>

	<!-- Owl Carousel -->
	<script src="{{ URL::asset('js/plugins/owl.carousel.min.js') }}"></script>

	<!-- Images Loaded -->
	<script src="{{ URL::asset('js/plugins/imagesloaded.pkgd.min.js') }}"></script>

	<!-- Masonry -->
	<script src="{{ URL::asset('js/plugins/masonry.pkgd.min.js') }}"></script>

	<!-- Isotope -->
	<script src="{{ URL::asset('js/plugins/isotope.pkgd.min.js') }}"></script>

	<!-- jQuery Match Height -->
	<script src="{{ URL::asset('js/plugins/jquery.matchHeight-min.js') }}"></script>

	<!-- Slick -->
	<script src="{{ URL::asset('js/plugins/slick.min.js') }}"></script>

	<!-- jQuery Barrating -->
	<script src="{{ URL::asset('js/plugins/jquery.barrating.min.js') }}"></script>

	<!-- Slick Animation -->
	<script src="{{ URL::asset('js/plugins/slick-animation.min.js') }}"></script>

	<!-- Light Gallery -->
	<script src="{{ URL::asset('js/plugins/lightgallery-all.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins/lg-thumbnail.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins/lg-fullscreen.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins/lg-pager.min.js') }}"></script>

	<!-- jQuery UI -->
	<script src="{{ URL::asset('js/plugins/jquery-ui.min.js') }}"></script>

	<!-- Sticky Sidebar -->
	<script src="{{ URL::asset('js/plugins/sticky-sidebar.min.js') }}"></script>

	<!-- Slim Scroll -->
	<script src="{{ URL::asset('js/plugins/jquery.slimscroll.min.js') }}"></script>

	<!-- Select 2 -->
	<script src="{{ URL::asset('js/plugins/select2.full.min.js') }}"></script>

	<!-- Scroll Up -->
	<script src="{{ URL::asset('js/plugins/scrollUP.js') }}"></script>

    <!-- DataTable -->
    <script src="{{ URL::asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins/dataTables.responsive.min.js') }}"></script>

    <!-- Chart -->
    <script src="{{ URL::asset('js/plugins/Chart.min.js') }}"></script>

</head>
<body>
     <!--=====================================
    Preload
    ======================================-->

    {{--<div id="loader-wrapper">
        <img src="{{ URL::asset('img/template/loader.jpg">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>--}}

    <header class="header header--standard header--market-place-4" data-sticky="true">

    	<!--=====================================
		Header TOP
		======================================-->

        <div class="header__top">

            <div class="container">

            	<!--=====================================
				Social
				======================================-->

                <div class="header__left">
                    <ul class="d-flex justify-content-center">
						<li><a href="{{ URL::asset('#')}}" target="_blank"><i class="fab fa-facebook-f mr-4"></i></a></li>
						<li><a href="{{ URL::asset('#')}}" target="_blank"><i class="fab fa-instagram mr-4"></i></a></li>
						<li><a href="{{ URL::asset('#')}}" target="_blank"><i class="fab fa-twitter mr-4"></i></a></li>
						<li><a href="{{ URL::asset('#')}}" target="_blank"><i class="fab fa-youtube mr-4"></i></a></li>
					</ul>
                </div>

                <!--=====================================
				Contact & lenguage
				======================================-->

                <div class="header__right">
                    <ul class="header__top-links">
                        <li><a href="{{ URL::asset('#')}}">Sell on MarketPlace</a></li>
                        <li><a href="{{ URL::asset('#')}}">Store List</a></li>
                    	<li><i class="icon-telephone"></i> Hotline:<strong> 1-800-234-5678</strong></li>
                        <li>
                            <div class="ps-dropdown language"><a href="{{ URL::asset('#')}}"><img src="{{ URL::asset('img/template/en.png') }}"alt="">English</a>
                                <ul class="ps-dropdown-menu">
                                    <li><a href="{{ URL::asset('#')}}"><img src="{{ URL::asset('img/template/es.png') }}" alt=""> Spanish</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div><!-- End Container -->

        </div><!-- Header Top -->

      	<!--=====================================
		Header Content
		======================================-->

        <div class="header__content">

            <div class="container">

                <div class="header__content-left">

                	<!--=====================================
					Logo
					======================================-->

                	<a class="ps-logo" href="{{ URL::asset('index.html')}}">
                		<img src="{{ URL::asset('img/template/logo_light.png') }}" alt="">
                	</a>

                	<!--=====================================
					Menú
					======================================-->

                    <div class="menu--product-categories">

                        <div class="menu__toggle">
                        	<i class="icon-menu"></i>
                        	<span> Shop by Department</span>
                        </div>

                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                <li>
                                	<a href="{{ URL::asset('#')}}"><i class="icon-star"></i> Hot Promotions</a>
                                </li>
                                <li class="menu-item-has-children has-mega-menu">
                                	<a href="{{ URL::asset('#')}}"><i class="icon-laundry"></i> Consumer Electronic</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu__column">
                                            <h4>Electronic<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li><a href="{{ URL::asset('#')}}">Home Audio &amp; Theathers</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">TV &amp; Videos</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Camera, Photos &amp; Videos</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Cellphones &amp; Accessories</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Headphones</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Videosgames</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Wireless Speakers</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Office Electronic</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu__column">
                                            <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li><a href="{{ URL::asset('#')}}">Digital Cables</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Audio &amp; Video Cables</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Batteries</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                	<a href="{{ URL::asset('#')}}"><i class="icon-shirt"></i> Clothing &amp; Apparel</a>
                                </li>
                                <li>
                                	<a href="{{ URL::asset('#')}}"><i class="icon-lampshade"></i> Home, Garden &amp; Kitchen</a>
                                </li>
                                <li>
                                	<a href="{{ URL::asset('#')}}"><i class="icon-heart-pulse"></i> Health &amp; Beauty</a>
                                </li>
                                <li>
                                	<a href="{{ URL::asset('#')}}"><i class="icon-diamond2"></i> Yewelry &amp; Watches</a>
                                </li>
                                <li class="menu-item-has-children has-mega-menu">
                                	<a href="{{ URL::asset('#')}}"><i class="icon-desktop"></i> Computer &amp; Technology</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu__column">
                                            <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li><a href="{{ URL::asset('#')}}">Computer &amp; Tablets</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Laptop</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Monitors</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Networking</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Drive &amp; Storages</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Computer Components</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Security &amp; Protection</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Gaming Laptop</a>
                                                </li>
                                                <li><a href="{{ URL::asset('#')}}">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                	<a href="{{ URL::asset('#')}}"><i class="icon-baby-bottle"></i> Babies &amp; Moms</a>
                                </li>
                                <li>
                                	<a href="{{ URL::asset('#')}}"><i class="icon-baseball"></i> Sport &amp; Outdoor</a>
                                </li>
                                <li>
                                	<a href="{{ URL::asset('#')}}"><i class="icon-smartphone"></i> Phones &amp; Accessories</a>
                                </li>
                                <li>
                                	<a href="{{ URL::asset('#')}}"><i class="icon-book2"></i> Books &amp; Office</a>
                                </li>
                                <li>
                                	<a href="{{ URL::asset('#')}}"><i class="icon-car-siren"></i> Cars &amp; Motocycles</a>
                                </li>
                                <li>
                                	<a href="{{ URL::asset('#')}}"><i class="icon-wrench"></i> Home Improments</a>
                                </li>
                                <li>
                                	<a href="{{ URL::asset('#')}}"><i class="icon-tag"></i> Vouchers &amp; Services</a>
                                </li>
                            </ul>

                        </div>

                    </div><!-- End menu-->

                </div><!-- End Header Content Left-->

                <!--=====================================
				Search
				======================================-->

                <div class="header__content-center">
                    <form class="ps-form--quick-search" action="index.html" method="get">
                        <div class="form-group--icon">
                        	<i class="icon-chevron-down"></i>
                            <select class="form-control">
                                <option value="1">All</option>
                                <option value="1">Smartphone</option>
                                <option value="1">Sounds</option>
                                <option value="1">Technology toys</option>
                            </select>
                        </div>
                        <input class="form-control" type="text" placeholder="I'm shopping for...">
                        <button>Search</button>
                    </form>
                </div>

                <div class="header__content-right">

                    <div class="header__actions">

                    	<!--=====================================
						Wishlist
						======================================-->

                    	<a class="header__extra" href="{{ URL::asset('#')}}">
                    		<i class="icon-heart"></i><span><i>0</i></span>
                    	</a>

                    	<!--=====================================
						Cart
						======================================-->

                        <div class="ps-cart--mini">

                        	<a class="header__extra" href="{{ URL::asset('#')}}">
                        		<i class="icon-bag2"></i><span><i>0</i></span>
                        	</a>

                            <div class="ps-cart__content">

                                <div class="ps-cart__items">

                                    <div class="ps-product--cart-mobile">

                                        <div class="ps-product__thumbnail">
                                        	<a href="{{ URL::asset('#')}}">
                                        		<img src="{{ URL::asset('img/products/clothing/7.jpg') }}" alt="">
                                        	</a>
                                        </div>

                                        <div class="ps-product__content">
                                        	<a class="ps-product__remove" href="{{ URL::asset('#')}}">
                                        		<i class="icon-cross"></i>
                                        	</a>
                                        	<a href="{{ URL::asset('product-default.html')}}">MVMTH Classical Leather Watch In Black</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p>
                                            <small>1 x $59.99</small>
                                        </div>

                                    </div>

                                    <div class="ps-product--cart-mobile">

                                        <div class="ps-product__thumbnail">
                                        	<a href="{{ URL::asset('#')}}">
                                        		<img src="{{ URL::asset('img/products/clothing/5.jpg') }}" alt="">
                                        	</a>
                                        </div>

                                        <div class="ps-product__content">
                                        	<a class="ps-product__remove" href="{{ URL::asset('#')}}">
                                        		<i class="icon-cross"></i>
                                        	</a>
                                        	<a href="{{ URL::asset('product-default.html')}}">Sleeve Linen Blend Caro Pane Shirt</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p>
                                            <small>1 x $59.99</small>
                                        </div>

                                    </div>

                                </div>

                                <div class="ps-cart__footer">

                                    <h3>Sub Total:<strong>$59.99</strong></h3>
                                    <figure>
                                    	<a class="ps-btn" href="{{ URL::asset('shopping-cart.html')}}">View Cart</a>
                                    	<a class="ps-btn" href="{{ URL::asset('checkout.html')}}">Checkout</a>
                                    </figure>

                                </div>

                            </div>

                        </div>

						<!--=====================================
						Login and Register
						======================================-->

                        <div class="ps-block--user-header">
                            <div class="ps-block__left">
                            	<i class="icon-user"></i>
                            </div>
                            <div class="ps-block__right">
                            	<a href="{{ URL::asset('my-account.html')}}">Login</a>
                            	<a href="{{ URL::asset('my-account.html')}}">Register</a>
                            </div>
                        </div>

                    </div><!-- End Header Actions-->

                </div><!-- End Header Content Right-->

            </div><!-- End Container-->

        </div><!-- End Header Content-->

    </header>

 @yield('content')
    <script src="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
