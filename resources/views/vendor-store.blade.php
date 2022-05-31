@extends('layout.layout')
@section('content')

    <!--=====================================
    Breadcrumb
    ======================================-->  
	
	<div class="ps-breadcrumb">

        <div class="container">

            <ul class="breadcrumb">

                <li><a href="index.html">Home</a></li>

                <li>Tienda de los vendedores</li>

            </ul>

        </div>

    </div>

    <!--=====================================
    Vendor Store
    ======================================--> 
     <div class="ps-vendor-store">
            
            <div class="container">
               
                <div class="ps-section__container">
                    <div class="ps-section__left">
                        <div class="ps-block--vendor">
                            <div class="ps-block__thumbnail"><img src="img/vendor/vendor-store.jpg" alt=""></div>
                            <div class="ps-block__container">
                                <div class="ps-block__header">
                                    <h4>Tienda don paco</h4>
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <p><strong>85% califinaciones positivas</strong> (562 reseñas)</p>
                                </div><span class="ps-block__divider"></span>
                                <div class="ps-block__content">
                                    <p><strong>Tiendas don paco</strong>,Fundada por paco con la vision de vender su frutas y verduras</p><span class="ps-block__divider"></span>
                                    <p><strong>Direccion</strong> Tocaima</p>
                                    <figure>
                                        <figcaption>Siguelo en redes sociales</figcaption>
                                        <ul class="ps-list--social-color">
                                            <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                                          
                                        </ul>
                                    </figure>
                                </div>
                                <div class="ps-block__footer">
                                    <p>Llamanos directamente<strong>(+053) 77-637-3300</strong></p>
                                    <p>o si tienes alguna pregunta</p><a class="ps-btn ps-btn--fullwidth" href="">Contacta al vendedor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-section__right">
                        <div class="ps-block--vendor-filter">
                            <div class="ps-block__left">
                                <ul>
                                    <li class="active"><a href="#">Productos</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Acerca de</a></li>
                                </ul>
                            </div>
                            <div class="ps-block__right">
                                <form class="ps-form--search" action="index.html" method="get">
                                    <input class="form-control" type="text" placeholder="Search in this shop">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="ps-vendor-best-seller">
                            <div class="ps-section__header">
                                <h3>Frutas mas vendidad</h3>
                                <div class="ps-section__nav"><a class="ps-carousel__prev" href="#vendor-bestseller"><i class="icon-chevron-left"></i></a><a class="ps-carousel__next" href="#vendor-bestseller"><i class="icon-chevron-right"></i></a></div>
                            </div>
                            <div class="ps-section__content">
                                <div class="owl-slider" id="vendor-bestseller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/best/1.jpg" alt=""></a>
                                            <div class="ps-product__badge">11%</div>
                                            <ul class="ps-product__actions">
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#"></a>
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Kiwi</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price sale">$1389.99 <del>$1893.00</del></p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Kiwi</a>
                                                <p class="ps-product__price sale">$1389.99 <del>$1893.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/best/3.jpg" alt=""></a>
                                            <div class="ps-product__badge">11%</div>
                                            <ul class="ps-product__actions">
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tiendas don paco</a>
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">banano</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Banano</a>
                                                <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/best/4.jpg" alt=""></a>
                                            <div class="ps-product__badge">21%</div>
                                            <ul class="ps-product__actions">
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tiendas don paco</a>
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Mango</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price sale">$1020.99 <del>$1120.00</del></p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Mango</a>
                                                <p class="ps-product__price sale">$1020.99 <del>$1120.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/best/2.jpeg" alt=""></a>
                                            <div class="ps-product__badge">18%</div>
                                            <ul class="ps-product__actions">
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tiendas don paco</a>
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Fresa</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price sale">$64.99 <del>$80.00</del></p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Fresa</a>
                                                <p class="ps-product__price sale">$64.99 <del>$80.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/best/5.jpg" alt=""></a>
                                            <div class="ps-product__badge">18%</div>
                                            <ul class="ps-product__actions">
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tiendas don paco</a>
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
                                                <p class="ps-product__price sale">$42.99 <del>$52.00</del></p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Naranjas</a>
                                                <p class="ps-product__price sale">$42.99 <del>$52.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-shopping ps-tab-root">
                            <div class="ps-shopping__header">
                                <p><strong> 36</strong> Productos encontrados</p>
                                <div class="ps-shopping__actions">
                                    <select class="ps-select" data-placeholder="Sort Items">
                                        <option>Ordernar por el mas nuevo</option>
                                        <option>Ordenar por popularidad</option>
                                        <option>Ordenar por calificación promedio</option>
                                        <option>Ordenar por precio: de menor a mayor</option>
                                        <option>Ordenar por precio: de mayor a menor</option>
                                    </select>
                                    <div class="ps-shopping__view">
                                        <p>View</p>
                                        <ul class="ps-tab-list">
                                            <li class="active"><a href="#tab-1"><i class="icon-grid"></i></a></li>
                                            <li><a href="#tab-2"><i class="icon-list4"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-1">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/best/5.jpg" alt=""></a>
                                                    <div class="ps-product__badge">11%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#"></a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">naranja</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$1389.99 <del>$1893.00</del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Naranja</a>
                                                        <p class="ps-product__price sale">$1389.99 <del>$1893.00</del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/best/1.jpg" alt=""></a>
                                                    <div class="ps-product__badge">11%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tienda de rodrigo</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">kiwi</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">kiwi</a>
                                                        <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/best/3.jpg" alt=""></a>
                                                    <div class="ps-product__badge">21%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tienda don paco</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">babano</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$1020.99 <del>$1120.00</del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Banano</a>
                                                        <p class="ps-product__price sale">$1020.99 <del>$1120.00</del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/best/6.jpg" alt=""></a>
                                                    <div class="ps-product__badge">18%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Tiendas don dago</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">COco</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$42.99 <del>$52.00</del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Coco</a>
                                                        <p class="ps-product__price sale">$42.99 <del>$52.00</del></p>
                                                    </div>
                                                </div>
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
                                </div>
                                <div class="ps-tab" id="tab-2">
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/best/1.jpg" alt=""></a>
                                            <div class="ps-product__badge">11%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">kiwi</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Vendido por:<a href="#">tienda de paco</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Kiwi en buen estado</li>
                                                    <li> Fresco para su consumo</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$1389.99 <del>$1893.00</del></p><a class="ps-btn" href="#">Añadir al carrito</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i>Lista de deseos</a></li>
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/best/5.jpg" alt=""></a>
                                            <div class="ps-product__badge">11%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">naranjas</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Vendido por:<a href="#">Tiendas don dago</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Narajan jugosas</li>
                                                    <li> Frescas para su consumo</li>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$820.99 <del>$893.00</del></p><a class="ps-btn" href="#">Añadir al carrito</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> lista de deseos</a></li>
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/best/7.jpg" alt=""></a>
                                            <div class="ps-product__badge">17%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Pomelos</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Vendido por:<a href="#">Tiendas don paco</a></p>
                                                <ul class="ps-product__desc">
                                                    <li>ricos pomelos</li>
                                                    <li> Frescos para su consumo</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$542.99 <del>$592.00</del></p><a class="ps-btn" href="#">Añadir al carrito</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Lista de deseos</a></li>
                                                  
                                                </ul>
                                            </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

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