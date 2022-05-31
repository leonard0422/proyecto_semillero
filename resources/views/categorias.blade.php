	<!--=====================================
	Header Promotion
	======================================-->
{{--
	<div class="ps-block--promotion-header bg--cover" style="background: url(img/banner/top/header-promotion.jpg);">
        <div class="container">
            <div class="ps-block__left">
                <h3>20%</h3>
                <figure>
                    <p>Discount</p>
                    <h4>For Books Of March</h4>
                </figure>
            </div>
            <div class="ps-block__center">
                <p>Enter Promotion<span>Sale2019</span></p>
            </div><a class="ps-btn ps-btn--sm" href="#">Shop now</a>
        </div>
    </div> --}}
@extends('layout.layout')

@section('content')

    <!--=====================================
    Breadcrumb
    ======================================-->

	<div class="ps-breadcrumb">

        <div class="container">

            <ul class="breadcrumb">

                <li><a href="index.html">Home</a></li>

                <li>Categorias</li>

            </ul>

        </div>

    </div>

    <!--=====================================
    Categories Content
    ======================================-->

    <div class="container-fuid bg-white my-4">

	    <div class="container">

	    	<!--=====================================
			Layout Categories
			======================================-->

		    <div class="ps-layout--shop">

		        <section>

		        	<!--=====================================
    				Best Sale Items
    				======================================-->

                    <div class="ps-block--shop-features">

                        <div class="ps-block__header">

                            <h3>Mejores artículos de venta</h3>

                            <div class="ps-block__navigation">

                            	<a class="ps-carousel__prev" href="#recommended1">
                            		<i class="icon-chevron-left"></i>
                            	</a>

                            	<a class="ps-carousel__next" href="#recommended1">
                            		<i class="icon-chevron-right"></i>
                            	</a>

                            </div>

                        </div>

                        <div class="ps-block__content">

                            <div class="owl-slider" id="recommended1" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">

                            	<!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/best/1.jpg" alt="">
                                    	</a>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Tienda don paco</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	kiwi</a>

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

                                            <p class="ps-product__price">$5000</p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Kiwi</a>

                                            <p class="ps-product__price">$5000</p>

                                        </div>

                                    </div>

                                </div><!-- End Product -->

                                <!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/best/2.jpg" alt="">
                                    	</a>

                                        <div class="ps-product__badge">-7%</div>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Tienda don paco</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Fresas</a>

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

                                            <p class="ps-product__price sale">$3000 <del>$5000 </del></p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Fresas</a>

                                            <p class="ps-product__price sale">$3000 <del>$5000 </del></p>

                                        </div>

                                    </div>

                                 </div><!-- End Product -->

                                <!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/best/3.jpg" alt="">
                                    	</a>

                                        <div class="ps-product__badge">-16%</div>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Tienda don paco</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">Banano</a>

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

                                            <p class="ps-product__price sale">$2500 <del>$5500 </del></p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Banano</a>

                                            <p class="ps-product__price sale">$2500 <del>$5500 </del></p>

                                        </div>

                                    </div>

                                </div><!-- End Product -->

                                <!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/best/4.jpg" alt="">
                                    	</a>

                                        <div class="ps-product__badge">-5%</div>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Frutas doña Lucia</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Mango</a>

                                            <div class="ps-product__rating">

                                                <select class="ps-rating" data-read-only="true">

                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>

                                                </select>

                                                <span>23</span>

                                            </div>

                                            <p class="ps-product__price sale">$4000 <del>$6000 </del></p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Mango</a>

                                            <p class="ps-product__price sale">$4000 <del>$6000 </del></p>

                                        </div>

                                    </div>

                                </div><!-- End Product -->

                                <!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/best/5.jpg" alt="">
                                    	</a>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Frutas doña Lucia</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Naranjas</a>

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

                                            <p class="ps-product__price">$2000</p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Naranjas</a>

                                            <p class="ps-product__price">$2000</p>

                                        </div>

                                    </div>

                                </div><!-- End Product -->

                                <!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/best/6.jpg" alt="">
                                    	</a>

                                        <div class="ps-product__badge hot">Super Vendido</div>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Tienda don paco</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Cocos</a>

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

                                            <p class="ps-product__price sale">$8500 <del>$10000</del></p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Cocos</a>

                                            <p class="ps-product__price sale">$8500 <del>$10000 </del></p>

                                        </div>

                                    </div>

                                </div><!-- End Product -->

                                <!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/best/7.jpg" alt="">
                                    	</a>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Tienda don Dago</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">Pomelos</a>

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

                                            <p class="ps-product__price">$5000</p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">Pomelos</a>

                                            <p class="ps-product__price">$5000</p>

                                        </div>

                                    </div>

                                </div><!-- End Product -->

                            </div>

                        </div>

                    </div><!-- End Best Sales Items -->

                    <!--=====================================
    				Recommended Items
    				======================================-->

                    {{-- <div class="ps-block--shop-features">

                        <div class="ps-block__header">

                            <h3>Frutas recomendadas</h3>

                            <div class="ps-block__navigation">

                            	<a class="ps-carousel__prev" href="#recommended">
                            		<i class="icon-chevron-left"></i>
                            	</a>

                            	<a class="ps-carousel__next" href="#recommended">
                            		<i class="icon-chevron-right"></i>
                            	</a>

                            </div>

                        </div>

                        <div class="ps-block__content">

                            <div class="owl-slider" id="recommended" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">

                                <!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/recommended/1.jpg" alt="">
                                    	</a>

                                        <div class="ps-product__badge">-37%</div>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Tienda don paco</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Almendra</a>

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

                                            <p class="ps-product__price sale">$4000 <del>$6000 </del></p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Almendra</a>

                                            <p class="ps-product__price sale">$4000 <del>$6000 </del></p>

                                        </div>

                                    </div>

                                </div><!-- End Product -->

                                <!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/recommended/2.jpg" alt="">
                                    	</a>

                                        <div class="ps-product__badge">-37%</div>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Tienda de roberto</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Melocoton</a>

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

                                            <p class="ps-product__price sale">$2500 <del>$4000 </del></p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Melocotonk</a>

                                            <p class="ps-product__price sale">$2500 <del>$4000 </del></p>

                                        </div>

                                    </div>

                                </div><!-- End Product -->

                                <!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/recommended/3.jpg" alt="">
                                    	</a>

                                        <div class="ps-product__badge">-25%</div>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Tienda de roberto</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Mandarina</a>

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

                                            <p class="ps-product__price sale">$93.00 <del>$60.00 </del></p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Mandarina</a>

                                            <p class="ps-product__price sale">$93.00 <del>$60.00 </del></p>

                                        </div>

                                    </div>

                                </div><!-- End Product -->

                                <!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/recommended/4.jpg" alt="">
                                    	</a>

                                        <div class="ps-product__badge">-46%</div>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Tienda don paco</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Zanahoria</a>

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

                                            <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Zanahoria</a>

                                            <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>

                                        </div>

                                    </div>

                                </div>

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/recommended/5.jpg" alt="">
                                    	</a>

                                        <div class="ps-product__badge">-46%</div>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Tienda de roberto</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	remolacha</a>

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

                                            <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Remolacha</a>

                                            <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>

                                        </div>

                                    </div>

                                </div> <!-- End Product -->

                                <!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/recommended/6.jpg" alt="">
                                    	</a>

                                        <div class="ps-product__badge">-28%</div>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Tienda don paco</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Apios</a>

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

                                            <p class="ps-product__price sale">$1025.00 <del>$1422.00 </del></p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">
                                        	Apios</a>

                                            <p class="ps-product__price sale">$1025.00 <del>$1422.00 </del></p>

                                        </div>

                                    </div>

                                </div><!-- End Product -->

                                <!--=====================================
    							Product
    							======================================-->

                                <div class="ps-product">

                                    <div class="ps-product__thumbnail">

                                    	<a href="product-default.html">
                                    		<img src="img/products/shop/recommended/7.jpg" alt="">
                                    	</a>

                                        <ul class="ps-product__actions">

                                            <li>
                                            	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                    	<a class="ps-product__vendor" href="#">Tienda de roberto</a>

                                        <div class="ps-product__content">

                                        	<a class="ps-product__title" href="product-default.html">Espinacas</a>

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

                                            <p class="ps-product__price">$599.00</p>

                                        </div>

                                        <div class="ps-product__content hover">

                                        	<a class="ps-product__title" href="product-default.html">Espinacas</a>

                                            <p class="ps-product__price">$599.00</p>

                                        </div>

                                    </div>

                                </div><!-- End Product -->

                            </div>

                        </div>

                    </div><!-- End Recommended Items --> --}}

                    <!--=====================================
    				Products found
    				======================================-->

                    <div class="ps-shopping ps-tab-root">

                    	<!--=====================================
    					Shoping Header
    					======================================-->

                        <div class="ps-shopping__header">

                            <p><strong> 36</strong> Productos encontrados</p>

                            <div class="ps-shopping__actions">

                                <select class="ps-select" data-placeholder="Sort Items">

                                    <option>Ordenar por ultimas ventas</option>
                                    <option>Ordenar por popularidad</option>
                                    <option>Ordenar por calificación promedio</option>
                                    <option>Ordenar por precio: de menor a mayor</option>
                                    <option>Ordenar por precio: de mayor a menor</option>

                                </select>

                                <div class="ps-shopping__view">

                                    <p>Vista</p>

                                    <ul class="ps-tab-list">

                                        <li class="active">
                                        	<a href="#tab-1">
                                        		<i class="icon-grid"></i>
                                        	</a>
                                        </li>

                                        <li>
                                        	<a href="#tab-2">
                                        		<i class="icon-list4"></i>
                                        	</a>
                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <!--=====================================
    					Shoping Body
    					======================================-->

                        <div class="ps-tabs">

                        	<!--=====================================
    						Grid View
    						======================================-->

                            <div class="ps-tab active" id="tab-1">

                                <div class="ps-shopping-product">

                                    <div class="row">

                                    	<!--=====================================
    									Product
    									======================================-->

                                        <div class="col-lg-2 col-md-4 col-6">

                                            <div class="ps-product">

                                                <div class="ps-product__thumbnail">

                                                	<a href="product-default.html">
                                                		<img src="img/products/shop/1.jpg" alt="">
                                                	</a>

                                                    <ul class="ps-product__actions">

                                                        <li>
                                                        	<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
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

                                                	<a class="ps-product__vendor" href="#">Tienda de roberto</a>

                                                    <div class="ps-product__content">

                                                    	<a class="ps-product__title" href="product-default.html">
                                                    	Kiwi</a>

                                                        <p class="ps-product__price">$1310.00</p>

                                                    </div>

                                                    <div class="ps-product__content hover">

                                                    	<a class="ps-product__title" href="product-default.html">
                                                    	Kiwi</a>

                                                        <p class="ps-product__price">$1310.00</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- End Product -->

										<!--=====================================
    									Product
    									======================================-->

                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/1.jpg" alt=""></a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tienda de roberto</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Kiwi</a>
                                                        <p class="ps-product__price">$1150.00</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Kiwi</a>
                                                        <p class="ps-product__price">$1150.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Product -->

										<!--=====================================
    									Product
    									======================================-->

                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail">
                                                    <a href="product-default.html">
                                                        <img src="img/products/shop/2.jpg" alt="">
                                                    </a>

                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                    </ul>
                                                </div>

                                                <div class="ps-product__container">

                                                    <a class="ps-product__vendor" href="#">Tienda don paco</a>

                                                    <div class="ps-product__content">
                                                        <a class="ps-product__title" href="product-default.html">Melocoton</a>

                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price">$42.99 - $60.00</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Melocoton</a>
                                                        <p class="ps-product__price">$42.99 - $60.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Product -->

										<!--=====================================
    									Product
    									======================================-->

                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/3.jpg" alt=""></a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tienda don paco</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Limones</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price">$125.30</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Limones</a>
                                                        <p class="ps-product__price">$125.30</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Product -->

										<!--=====================================
    									Product
    									======================================-->

                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/4.jpg" alt=""></a>
                                                    <div class="ps-product__badge hot">hot</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Frutas doña lucia</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html"> Manzana</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price">$55.99</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Manzana</a>
                                                        <p class="ps-product__price">$55.99</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Product -->

										<!--=====================================
    									Product
    									======================================-->

                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/5.jpg" alt=""></a>
                                                    <div class="ps-product__badge">-37%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tienda de roberto</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Naranjas</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Naranjas</a>
                                                        <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Product -->

										<!--=====================================
    									Product
    									======================================-->

                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/6.jpg" alt=""></a>
                                                    <div class="ps-product__badge">-5%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tienda don paco</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apios</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apios</a>
                                                        <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Product -->

										<!--=====================================
    									Product
    									======================================-->

                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/7.jpg" alt=""></a>
                                                    <div class="ps-product__badge">-16%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tienda don paco</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Espinacas</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Espinacas</a>
                                                        <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Product -->

										<!--=====================================
    									Product
    									======================================-->

                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/8.jpg" alt=""></a>
                                                    <div class="ps-product__badge">-16%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Frutas doña lucia</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Uvas</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>02</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">uvas</a>
                                                        <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Product -->

										<!--=====================================
    									Product
    									======================================-->

                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/9.jpg" alt=""></a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tiendas doña firmina</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">piña</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>02</span>
                                                        </div>
                                                        <p class="ps-product__price">$35.89</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">piña</a>
                                                        <p class="ps-product__price">$35.89</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Product -->

										<!--=====================================
    									Product
    									======================================-->

                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/10.jpg" alt=""></a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tienda de roberto</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Melon</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price">$29.39 - $39.99</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Melon</a>
                                                    	<p class="ps-product__price">$29.39 - $39.99</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Product -->
                                    </div>

                                </div>

                                <div class="ps-pagination">

                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">Siguiente pagina<i class="icon-chevron-right"></i></a></li>
                                    </ul>

                                </div>

                            </div><!-- End Grid View-->

                            <!--=====================================
    						List View
    						======================================-->

                            <div class="ps-tab" id="tab-2">

                                <div class="ps-shopping-product">

                                	<!--=====================================
    								Product
    								======================================-->

                                    <div class="ps-product ps-product--wide">

                                        <div class="ps-product__thumbnail">

                                        	<a href="product-default.html">
                                        		<img src="img/products/shop/1.jpg" alt="">
                                        	</a>

                                        </div>

                                        <div class="ps-product__container">

                                            <div class="ps-product__content">

                                            	<a class="ps-product__title" href="product-default.html">
                                            	Kiwi</a>

                                                <p class="ps-product__vendor">Vendido por:
                                                	<a href="#">Tienda de roberto</a>
                                                </p>

                                                <ul class="ps-product__desc">
                                                    <li> Kiwi en buen estado</li>
                                                    <li> Fresco para su consumo</li>
                                                </ul>

                                            </div>

                                            <div class="ps-product__shopping">

                                                <p class="ps-product__price">$1310.00</p>

                                                <a class="ps-btn" href="#">Add to cart</a>

                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-eye"></i>Ver</a></li>
                                                    <li><a href="#"><i class="icon-heart"></i> Lista de deseos</a></li>
                                                </ul>

                                            </div>

                                        </div>

                                    </div> <!-- End Product -->

                                    <!--=====================================
    								Product
    								======================================-->

                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/1.jpg" alt=""></a>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Kiwi</a>
                                                <p class="ps-product__vendor">Vendido por:<a href="#">tienda de paco</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Kiwi en buen estado</li>
                                                    <li> Fresco para su consumo</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$1150.00</p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    								Product
    								======================================-->

                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/2.jpg" alt=""></a>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Melocoton</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Vendido por:<a href="#">Tienda doña lucia</a></p>
                                                <ul class="ps-product__desc">
                                                    <li>Melocoton fino</li>
                                                    <li> Fresco para su consumo</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$42.99 - $60.00</p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-eye"></i>Ver</a></li>
                                                    <li><a href="#"><i class="icon-heart"></i> Lista de deseos</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    								Product
    								======================================-->

                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/3.jpg" alt=""></a>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Limones</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Vendido por:<a href="#">Tienda don paco</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Limones acidos y rellenos</li>
                                                    <li> Frescos para su consumo</li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$125.30</p><a class="ps-btn" href="#">Añadir al carrito</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-eye"></i>ver</a></li>
                                                    <li><a href="#"><i class="icon-heart"></i> Lista de deseos</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    								Product
    								======================================-->

                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/4.jpg" alt=""></a>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Manzana</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Vendido por:<a href="#">Tienda de roberto</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Manzana roja y hermosa</li>
                                                    <li> Fresca para su consumo</li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$55.99</p><a class="ps-btn" href="#">añadir al carrito</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-eye"></i>Ver</a></li>
                                                    <li><a href="#"><i class="icon-heart"></i> Lista de deseos</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    								Product
    								======================================-->

                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/5.jpg" alt=""></a>
                                            <div class="ps-product__badge">-37%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Naranjas</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="#">Tienda de roberto</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Narajan jugosas</li>
                                                    <li> Frescas para su consumo</li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p><a class="ps-btn" href="#">Añadir al carrito</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-eye"></i>Ver</a></li>
                                                    <li><a href="#"><i class="icon-heart"></i> Lista de deseos</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    								Product
    								======================================-->

                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/6.jpg" alt=""></a>
                                            <div class="ps-product__badge">-5%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apios</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Vendido por:<a href="#">Tienda don paco</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Bonitos y verdes</li>
                                                    <li> Frescos para su consumo</li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p><a class="ps-btn" href="#">Añadir al carrito</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-eye"></i>ver</a></li>
                                                    <li><a href="#"><i class="icon-heart"></i> Lista de deseos</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    								Product
    								======================================-->

                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/7.jpg" alt=""></a>
                                            <div class="ps-product__badge">-16%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Espinacas</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Vendido por:<a href="#">Tienda de roberto</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Te hace fuerte como Popeye</li>
                                                    <li> Frescas para su consumo</li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p><a class="ps-btn" href="#">Añadir al carrito</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-eye"></i>Ver</a></li>
                                                    <li><a href="#"><i class="icon-heart"></i> Lista de deseos</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    								Product
    								======================================-->

                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/8.jpg" alt=""></a>
                                            <div class="ps-product__badge">-16%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Uvas</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>02</span>
                                                </div>
                                                <p class="ps-product__vendor">Vendido por:<a href="#">Frutas doña lucia</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Bonitas y moraditas</li>
                                                    <li> Frescas para su consumo</li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p><a class="ps-btn" href="#">Añadir al carrito</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-eye"></i>Ver</a></li>
                                                    <li><a href="#"><i class="icon-heart"></i> Lista de deseos</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    								Product
    								======================================-->

                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/9.jpg" alt=""></a>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Piñas</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>02</span>
                                                </div>
                                                <p class="ps-product__vendor">Vendido por:<a href="#">tiendas don paco</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Preciosas piñas</li>
                                                    <li> Frescas para su consumo</li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$35.89</p><a class="ps-btn" href="#">Añadir al carro</a>
                                                <ul class="ps-product__actions">
                                                	<li><a href="#"><i class="icon-eye"></i>ver</a></li>
                                                    <li><a href="#"><i class="icon-heart"></i> Lista de deseos</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    								Product
    								======================================-->

                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/10.jpg" alt=""></a>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Melon</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Vendido:<a href="#">Tienda de roberto</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Melon gordito</li>
                                                    <li> Frescos para su consumo</li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$29.39 - $39.99</p><a class="ps-btn" href="#">Añadir al carrito</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-eye"></i>Ver</a></li>
                                                    <li><a href="#"><i class="icon-heart"></i> Lista de deseos</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->
                                </div>

                                <div class="ps-pagination">

                                    <ul class="pagination">

                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">Siguiente pagina<i class="icon-chevron-right"></i></a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

            </div><!-- End Layout Categories -->

		</div><!-- End Container -->

	</div><!-- End Container Fluid -->

    <!--=====================================
	Newletter
	======================================-->
{{-- 
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

    </div> --}}

    <!--=====================================
	Footer
	======================================-->
{{--
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
                	<a href="#">Powers &amp; Hand Tools</a>
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
