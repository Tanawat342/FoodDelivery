<header id="header">
    <div class="container">
        <div class="header-top">
            <div class="row align-items-center">
                <!-- Header Left -->
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <!-- Main Menu -->
                    <div id="main-menu">
                        <ul class="menu">
                            <li class="dropdown">
                                <a href="{{ url('') }}" title="Homepage">Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="product-grid-left-sidebar.html" title="Product">Product</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li class="has-image">
                                            <img src="home/img/product/product-category-1.png" alt="Product Category Image">
                                            <a href="product-grid-left-sidebar.html" title="Vegetables">Vegetables</a>
                                        </li>
                                        <li class="has-image">
                                            <img src="home/img/product/product-category-2.png" alt="Product Category Image">
                                            <a href="product-grid-left-sidebar.html" title="Fruits">Fruits</a>
                                        </li>
                                        <li class="has-image">
                                            <img src="home/img/product/product-category-3.png" alt="Product Category Image">
                                            <a href="product-grid-left-sidebar.html" title="Bread">Bread</a>
                                        </li>
                                        <li class="has-image">
                                            <img src="home/img/product/product-category-4.png" alt="Product Category Image">
                                            <a href="product-grid-left-sidebar.html" title="Juices">Juices</a>
                                        </li>
                                        <li class="has-image">
                                            <img src="home/img/product/product-category-5.png" alt="Product Category Image">
                                            <a href="product-grid-left-sidebar.html" title="Tea and coffee">Tea and coffee</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Header Center -->
                <div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="home-3.html">
                            <img class="img-responsive" src="home/img/logo.png" alt="Logo">
                        </a>
                    </div>

                    <span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
                </div>


                <!-- Header Right -->
                <div class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
                    <!-- Search -->
                    <div class="form-search">
                        <form action="#" method="get">
                            <input type="text" class="form-input" placeholder="Search">
                            <button type="submit" class="fa fa-search"></button>
                        </form>
                    </div>

                    <!-- Cart -->
                    <div class="block-cart dropdown">
                        <div class="cart-title">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            <span class="cart-count">2</span>
                        </div>

                        <div class="dropdown-content">
                            <div class="cart-content">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="product-image">
                                                <a href="้home/product-detail-left-sidebar.html">
                                                    <img src="" alt="Product">
                                                </a>
                                            </td>
                                            <td>
                                                <div class="product-name">
                                                    <a href="้home/product-detail-left-sidebar.html"></a>
                                                </div>
                                                <div>
                                                    <span class="product-price"></span>
                                                </div>
                                            </td>
                                            <td class="action">
                                                <a class="remove" href="#">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="" alt="Product">
                                                </a>
                                            </td>
                                            <td>
                                                <div class="product-name">
                                                    <a href="product-detail-left-sidebar.html"></a>
                                                </div>
                                                <div>
                                                     <span class="product-price"></span>
                                                </div>
                                            </td>
                                            <td class="action">
                                                <a class="remove" href="#">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr class="total">
                                            <td>Total:</td>
                                            <td colspan="2"></td>
                                        </tr>

                                        <tr>
                                            <td colspan="3">
                                                <div class="cart-button">
                                                    <a class="btn btn-primary" href="home/product-cart.html" title="View Cart">View Cart</a>
                                                    <a class="btn btn-primary" href="home/product-checkout.html" title="Checkout">Checkout</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- My Account -->
                    <div class="my-account dropdown toggle-icon">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                        <div class="dropdown-menu">
                            <div class="item">
                                <a href="#" title="Log in to your customer account"><i class="fa fa-cog"></i>My Account</a>
                            </div>
                            <div class="item">
                                <a href="home/user-login.html" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
                            </div>
                            <div class="item">
                                <a href="home/user-register.html" title="Register Account"><i class="fa fa-user"></i>Register</a>
                            </div>
                            <div class="item">
                                <a href="#" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
                            </div>
                            <div class="item">
                                <!-- Language -->
                                <div class="language switcher">
                                    <a href="#" title="Language English" class="active"><img src="home/img/language-en.jpg" alt="Language English"></a>
                                </div>

                                <!-- Currency -->
                                <div class="currency switcher">
                                    <a href="#" title="USD" class="active">USD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
