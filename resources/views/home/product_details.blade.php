<!DOCTYPE html>
<html lang="zxx">
    <head>
		<!-- Basic Page Needs -->
        <base href="/public">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Food Delivery</title>

		<meta name="keywords" content="Food Delivery">
		<meta name="description" content="Food Delivery">

		<!-- Favicon -->
		<link rel="shortcut icon" href="home/img/favicon.png" type="image/png">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="home/libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="home/libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="home/libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="home/libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="home/libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="home/libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="home/libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="home/libs/slider-range/css/jslider.css">

		<!-- Template CSS -->
		<link rel="stylesheet" href="home/css/style.css">
		<link rel="stylesheet" href="home/css/reponsive.css">
	</head>

	<body class="home home-3">
		<div id="all">
			<!-- Header -->
            @include('home.header')


			<!-- Main Content -->
            @include('home.content')

			<!-- Main Content -->
            <div id="content" class="site-content">
                <!-- Breadcrumb -->
                <div id="breadcrumb">
                    <div class="container">
                        <h2 class="title">{{ $product->title }}</h2>
                        
                        <ul class="breadcrumb">
                            <li><a href="{{ url('') }}" title="Home">Home</a></li>
                        </ul>
                    </div>
                </div>


                <div class="container">
                    <div class="product-detail">
                        <div class="products-block layout-5">
                            <div class="product-item">
                                <div class="product-title">
                                    {{ $product->title }}
                                </div>
                                            
                                <div class="row">
                                    <div class="product-left col-md-4 col-sm-4 col-xs-12">
                                        <div class="product-image horizontal">
                                            <div class="main-image">
                                                <img class="img-responsive" src="home/img/product/2.jpg" alt="Product Image">
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div class="product-right col-md-5 col-sm-4 col-xs-12">
                                        <div class="product-info">
                                            <div class="product-price">

                                                @if ($product->discount_price!=null)
                                                    
                                                <span class="sale-price">${{$product->discount_price}}</span>

                                                <span class="base-price">${{$product->price}}</span>

                                                @else

                                                <span class="sale-price">${{$product->price}}</span>
                                                
                                                @endif
                                                
                                            </div>
                                            
                                            <div class="product-stock">
                                                <span class="availability">Availability :</span><i class="fa fa-check-square-o" aria-hidden="true"></i>In stock
                                            </div>
                                            
                                            <div class="product-short-description">
                                                {{$product->description}}
                                            </div>

                                            
                                            <div class="product-add-to-cart border-bottom">
                                                <div class="product-quantity">
                                                    <span class="control-label">จำนวน :</span>
                                                    <div class="qty">
                                                        <div class="input-group">
                                                            <input type="text" name="qty" value="1" data-min="1">
                                                            <span class="adjust-qty">
                                                                <span class="adjust-btn plus">+</span>
                                                                <span class="adjust-btn minus">-</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="product-buttons">
                                                    <a class="add-to-cart" href="#">
                                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="product-review border-bottom">
                                                <div class="item">
                                                    <div class="product-quantity">
                                                        <span class="control-label">Review :</span>
                                                        <div class="product-rating">
                                                            <div class="star on"></div>
                                                            <div class="star on"></div>
                                                            <div class="star on"></div>
                                                            <div class="star on"></div>
                                                            <div class="star"></div>
                                                        </div>
                                                    </div>	
                                                </div>
                                                
                                                <div class="item">
                                                    <a href="#"><i class="zmdi zmdi-comments" aria-hidden="true"></i><span class="text">Read Reviews (3)</span></a>
                                                </div>
                                                
                                                <div class="item">
                                                    <a href="#"><i class="zmdi zmdi-edit" aria-hidden="true"></i><span class="text">Write a review</span></a>
                                                </div>
                                            </div>
                                            
                                            <div class="product-extra">
                                                <div class="item">
                                                    <span class="control-label">Review :</span><span class="control-label">E-02154</span>
                                                </div>
                                                <div class="item">
                                                    <span class="control-label">Categories :</span>
                                                    <a href="#" title="Vegetables">{{$product->category}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="payment-intro col-md-3 col-sm-4 col-xs-12">
                                        <div class="block-content">
                                            <div class="item">
                                                <img class="img-responsive" src="home/img/home2-payment-1.png" alt="Payment Intro">
                                                <h3 class="title">Free Shipping item</h3>
                                                <div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
                                            </div>
                                            <div class="item">
                                                <img class="img-responsive" src="home/img/home2-payment-2.png" alt="Payment Intro">
                                                <h3 class="title">Secured Payment</h3>
                                                <div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
                                            </div>
                                            <div class="item">
                                                <img class="img-responsive" src="home/img/home2-payment-3.png" alt="Payment Intro">
                                                <h3 class="title">money back guarantee</h3>
                                                <div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="product-tab">
                                    <!-- Tab Navigation -->
                                    <div class="tab-nav">
                                        <ul>
                                            <li class="active">
                                                <a data-toggle="tab" href="#description">
                                                    <span>Description</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#review">
                                                    <span>Review</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <!-- Tab Content -->
                                    <div class="tab-content">
                                        <!-- Description -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="description">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        </div>
                                        
                                        
                                        <!-- Review -->
                                        <div role="tabpanel" class="tab-pane fade" id="review">
                                            <div class="reviews">
                                                <div class="comments-list">
                                                    <div class="item">
                                                        <div class="comment-left pull-left">
                                                            <div class="avatar">
                                                                <img src="img/avatar.jpg" alt="" width="70" height="70">
                                                            </div>
                                                            <div class="product-rating">
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-body">
                                                            <div class="comment-meta">
                                                                <span class="author">Peter</span> - <span class="time">June 02, 2018</span>
                                                            </div>
                                                            <div class="comment-content">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="item">
                                                        <div class="comment-left pull-left">
                                                            <div class="avatar">
                                                                <img src="img/avatar.jpg" alt="" width="70" height="70">
                                                            </div>
                                                            <div class="product-rating">
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-body">
                                                            <div class="comment-meta">
                                                                <span class="author">Merry</span> - <span class="time">June 17, 2018</span>
                                                            </div>
                                                            <div class="comment-content">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="review-form">
                                                    <h4 class="title">Write a review</h4>
                                                    
                                                    <form action="#" method="post" class="form-validate">
                                                        <div class="form-group">
                                                            <div class="text">Your Rating</div>
                                                            <div class="product-rating">
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <div class="text">You review<sup class="required">*</sup></div>
                                                            <textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <button class="btn btn-primary">Send your review</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<!-- Footer -->
            @include('home.footer')

			<!-- Go Up button -->
			<div class="go-up">
				<a href="#">
					<i class="fa fa-long-arrow-up"></i>
				</a>
			</div>

			<!-- Page Loader -->
			<div id="page-preloader">
				<div class="page-loading">
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
				</div>
			</div>
		</div>

		<!-- Vendor JS -->
		<script src="home/libs/jquery/jquery.js"></script>
		<script src="home/libs/bootstrap/js/bootstrap.js"></script>
		<script src="home/libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="home/libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="home/libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="home/libs/slider-range/js/tmpl.js"></script>
		<script src="home/libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="home/libs/slider-range/js/draggable-0.1.js"></script>
		<script src="home/libs/slider-range/js/jquery.slider.js"></script>
		<script src="home/libs/elevatezoom/jquery.elevatezoom.js"></script>

		<!-- Template CSS -->
		<script src="home/js/main.js"></script>
	</body>

</html>




