<!-- Product - New Arrivals -->
<div class="section products-block product-tab tab-2">
    <div class="block-title">
        <h2 class="title"><span>Product</span></h2>
        <div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing elit eiusmod tempor</div>
    </div>

    <div class="block-content">
        <div class="container">
            <!-- Tab Navigation -->
            <div class="tab-nav">
                <ul>
                    <li class="active">
                        <a data-toggle="tab" href="#all-products">
                            <img src="home/img/product/product-category-0.png" alt="All Product">
                            <span>All Products</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#vegetables">
                            <img src="home/img/product/product-category-1.png" alt="Vegetables">
                            <span>Vegetables</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#fruits">
                            <img src="home/img/product/product-category-2.png" alt="Fruits">
                            <span>Fruits</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#bread">
                            <img src="home/img/product/product-category-3.png" alt="Bread">
                            <span>Bread</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#juices">
                            <img src="home/img/product/product-category-4.png" alt="Juices">
                            <span>Juices</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tea">
                            <img src="home/img/product/product-category-5.png" alt="Tea">
                            <span>Tea</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Tab Content -->
            <div class="tab-content">
                <!-- All Products -->
                <div role="tabpanel" class="tab-pane fade in active" id="all-products">
                    <div class="products owl-theme owl-carousel">

                        @foreach($product as $products)

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="{{ url('product_details',$products->id) }}">
                                        <img src="home/img/product/{{$products->image}}" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="{{ url('product_details',$products->id) }}">
                                        {{$products->title}}
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    @if ($products->discount_price!=null)

                                    <span class="sale-price">${{$products->discount_price}}</span>
                                    <span class="base-price">${{$products->price}}</span>

                                    @else

                                    <span class="sale-price">${{$products->price}}</span>

                                    @endif
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="{{ url('product_details',$products->id) }}">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="{{ url('product_details',$products->id) }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- Vegetables -->
                <div role="tabpanel" class="tab-pane fade" id="vegetables">
                    <div class="products owl-theme owl-carousel">
                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/4.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/14.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/8.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$120.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/9.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/10.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$96.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/33.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/20.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$96.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/23.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bread -->
                <div role="tabpanel" class="tab-pane fade" id="bread">
                    <div class="products owl-theme owl-carousel">
                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/4.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/14.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/8.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$120.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img src="home/img/product/9.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/10.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$96.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/33.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/20.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$96.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/23.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Juices -->
                <div role="tabpanel" class="tab-pane fade" id="juices">
                    <div class="products owl-theme owl-carousel">
                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/4.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/14.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/8.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$120.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/9.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/10.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$96.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/33.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/20.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$96.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/23.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tea -->
                <div role="tabpanel" class="tab-pane fade" id="tea">
                    <div class="products owl-theme owl-carousel">
                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/4.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/14.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/8.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$120.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/9.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/10.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$96.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/33.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-group">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/20.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$96.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <a href="home/product-detail-left-sidebar.html">
                                        <img src="home/img/product/23.jpg" alt="Product Image">
                                    </a>
                                </div>

                                <div class="product-title">
                                    <a href="home/product-detail-left-sidebar.html">
                                        Organic Strawberry Fruits
                                    </a>
                                </div>

                                <div class="product-rating">
                                    <div class="star on"></div>
                                    <div class="star on"></div>
                                    <div class="star on "></div>
                                    <div class="star on"></div>
                                    <div class="star"></div>
                                </div>

                                <div class="product-price">
                                    <span class="sale-price">$80.00</span>
                                    <span class="base-price">$90.00</span>
                                </div>

                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>

                                    <a class="add-wishlist" href="#">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>

                                    <a class="quickview" href="#">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>