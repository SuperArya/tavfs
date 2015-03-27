<body class="no-padding">

    <!-- *** NAVBAR ***
_________________________________________________________ -->

    <div class="navbar navbar-default navbar-fixed-top yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html">
                    <img src="<?php echo base_url(); ?>assets/front/<?php echo base_url(); ?>assets/front/img/logo.png" alt="Minimal logo" class="hidden-xs hidden-sm">
                    <img src="<?php echo base_url(); ?>assets/front/<?php echo base_url(); ?>assets/front/img/logo-small.png" alt="Minimal logo" class="visible-xs visible-sm"><span class="sr-only">Minimal - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <a class="btn btn-primary navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                    <button type="button" class="navbar-toggle btn-default" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <button type="button" class="navbar-toggle btn-default" data-toggle="modal" data-target="#login-modal">
                        <span class="sr-only">User login</span>
                        <i class="fa fa-users"></i>
                    </button>

                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active dropdown normal-dropdown"><a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Home<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Home - default</a>
                            </li>
                            <li><a href="index2.html">Home - intro image</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?php echo base_url(); ?>assets/front/<?php echo base_url(); ?>assets/front/img/men.jpg" class="img-responsive hidden-xs" alt="">
                                        </div>
                                        <div class="col-sm-3">
                                            <h3>Clothing</h3>
                                            <ul>
                                                <li><a href="category.html">T-shirts</a>
                                                </li>
                                                <li><a href="category.html">Shirts</a>
                                                </li>
                                                <li><a href="category.html">Pants</a>
                                                </li>
                                                <li><a href="category.html">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h3>Clothing</h3>
                                            <ul>
                                                <li><a href="category.html">T-shirts</a>
                                                </li>
                                                <li><a href="category.html">Shirts</a>
                                                </li>
                                                <li><a href="category.html">Pants</a>
                                                </li>
                                                <li><a href="category.html">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h3>Shoes</h3>
                                            <ul>
                                                <li><a href="category.html">Trainers</a>
                                                </li>
                                                <li><a href="category.html">Sandals</a>
                                                </li>
                                                <li><a href="category.html">Hiking shoes</a>
                                                </li>
                                                <li><a href="category.html">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer clearfix hidden-xs">
                                    <h4 class="pull-right">Men</h4>
                                    <div class="buttons pull-left">
                                        <a href="#" class="btn btn-default"><i class="fa fa-tags"></i> Sales</a>
                                        <a href="#" class="btn btn-default"><i class="fa fa-star-o"></i> Favourites</a>
                                        <a href="#" class="btn btn-default"><i class="fa fa-globe"></i> Brands</a>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?php echo base_url(); ?>assets/front/<?php echo base_url(); ?>assets/front/img/women.jpg" class="img-responsive hidden-xs" alt="">
                                        </div>
                                        <div class="col-sm-3">
                                            <h3>Clothing</h3>
                                            <ul>
                                                <li><a href="category.html">T-shirts</a>
                                                </li>
                                                <li><a href="category.html">Shirts</a>
                                                </li>
                                                <li><a href="category.html">Pants</a>
                                                </li>
                                                <li><a href="category.html">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h3>Clothing</h3>
                                            <ul>
                                                <li><a href="category.html">T-shirts</a>
                                                </li>
                                                <li><a href="category.html">Shirts</a>
                                                </li>
                                                <li><a href="category.html">Pants</a>
                                                </li>
                                                <li><a href="category.html">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h3>Shoes</h3>
                                            <ul>
                                                <li><a href="category.html">Trainers</a>
                                                </li>
                                                <li><a href="category.html">Sandals</a>
                                                </li>
                                                <li><a href="category.html">Hiking shoes</a>
                                                </li>
                                                <li><a href="category.html">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer clearfix hidden-xs">
                                    <h4 class="pull-right">Women</h4>
                                    <div class="buttons pull-left">
                                        <a href="#" class="btn btn-default"><i class="fa fa-tags"></i> Sales</a>
                                        <a href="#" class="btn btn-default"><i class="fa fa-star-o"></i> Favourites</a>
                                        <a href="#" class="btn btn-default"><i class="fa fa-globe"></i> Brands</a>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>
                                                <li><a href="index.html">Homepage - with slideshow</a>
                                                </li>
                                                <li><a href="index2.html">Homepage - with intro image</a>
                                                </li>
                                                <li><a href="category.html">Category - sidebar right</a>
                                                </li>
                                                <li><a href="category-left.html">Category - sidebar left</a>
                                                </li>
                                                <li><a href="category-full.html">Category - full width</a>
                                                </li>
                                                <li><a href="detail.html">Product detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                            <ul>
                                                <li><a href="register.html">Register / login</a>
                                                </li>
                                                <li><a href="customer-orders.html">Orders history</a>
                                                </li>
                                                <li><a href="customer-order.html">Order history detail</a>
                                                </li>
                                                <li><a href="customer-wishlist.html">Wishlist</a>
                                                </li>
                                                <li><a href="customer-account.html">Customer account / change password</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Order process</h5>
                                            <ul>
                                                <li><a href="basket.html">Shopping cart</a>
                                                </li>
                                                <li><a href="checkout1.html">Checkout - step 1</a>
                                                </li>
                                                <li><a href="checkout2.html">Checkout - step 2</a>
                                                </li>
                                                <li><a href="checkout3.html">Checkout - step 3</a>
                                                </li>
                                                <li><a href="checkout4.html">Checkout - step 4</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Pages and blog</h5>
                                            <ul>
                                                <li><a href="blog.html">Blog listing</a>
                                                </li>
                                                <li><a href="post.html">Blog Post</a>
                                                </li>
                                                <li><a href="faq.html">FAQ</a>
                                                </li>
                                                <li><a href="contact.html">Contact</a>
                                                </li>
                                                <li><a href="text.html">Text page</a>
                                                </li>
                                                <li><a href="text-left.html">Text page - left sidebar</a>
                                                </li>
                                                <li><a href="404.html">404 page</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items <span class="hidden-md">in cart</span></span></a>
            </div>
            <!--/.nav-collapse -->

            <div class="navbar-collapse collapse right">
                <button type="button" class="btn navbar-btn btn-default" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

            <div class="navbar-collapse collapse right">
                <button type="button" class="btn navbar-btn btn-default" data-toggle="modal" data-target="#login-modal">
                    <span class="sr-only">User login</span>
                    <i class="fa fa-users"></i>
                </button>
            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>


    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="Login">Customer login</h4>
                </div>
                <div class="modal-body">
                    <form action="customer-orders.html" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="password">
                        </div>

                        <p class="text-center">
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                        </p>

                    </form>

                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                </div>
            </div>
        </div>
    </div>

    <!-- *** LOGIN MODAL END *** -->

    <!-- *** INTRO IMAGE ***
	_________________________________________________________ -->
    <div id="intro">
        <div class="item">
            <div class="container">
                <div class="row">
                    <div class="carousel-caption">
                        <h1>Welcome to Minimal<br>E-commerce Template</h1>
                        <h3>This template contains 23 precisely crafted HTML templates, has great typography, is SEO friendly and 100% responsive.</h3>

                        <p><a class="btn btn-lg btn-primary scroll-to" href="#content" role="button">View our top picks<br class="hidden-md hidden-lg"> for this week</a>
                        </p>
                        <p><a class="btn btn-lg btn-default" href="index.html" role="button">View alternative homepage</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- *** INTRO IMAGE END *** -->

    <div id="all">

        <!-- *** ADVANTAGES ***
_________________________________________________________ -->

        <div id="advantages">

            <div class="container">

                <div class="col-md-12">

                    <div class="box text-center">
                        <h3 class="text-uppercase">About Minimal</h3>

                        <p>Minimal contains <strong>23 beautiful HTML pages</strong> and is built with strong attention to detail.</p>



                        <div class="same-height-row row">
                            <div class="col-sm-3">
                                <div class="box same-height clickable no-border text-center-xs text-center-sm">
                                    <div class="icon"><i class="fa fa-heart-o"></i>
                                    </div>
                                    <h4><a href="text.html">Satisfied customers</a></h4>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="box same-height clickable no-border text-center-xs text-center-sm">
                                    <div class="icon"><i class="fa fa-tags"></i>
                                    </div>
                                    <h4><a href="text.html">Best prices</a></h4>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="box same-height clickable no-border text-center-xs text-center-sm">
                                    <div class="icon"><i class="fa fa-send-o"></i>
                                    </div>
                                    <h4><a href="faq.html">Next day delivery</a></h4>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="box same-height clickable no-border text-center-xs text-center-sm">
                                    <div class="icon"><i class="fa fa-refresh"></i>
                                    </div>
                                    <h4><a href="contact.html">Free returns for 3 months</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

                    </div>

                </div>


            </div>
            <!-- /.container -->

        </div>
        <!-- /#advantages -->

        <!-- *** ADVANTAGES END *** -->


                <!-- *** CONTENT ***
        _________________________________________________________
        _________________________________________________________
        -->

        <div id="content">
            <div class="container">

                <div class="col-sm-12">

                    <div class="box text-center">
                        <h3 class="text-uppercase">New summer arrivals</h3>

                        <h4 class="text-muted"><span class="accent">Free shipping</span> on all</h4>
                    </div>

                    <div class="row products">

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="image">
                                    <a href="detail.html">
                                        <img src="<?php echo base_url(); ?>assets/front/img/product1.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <!-- /.image -->
                                <div class="text">
                                    <h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
                                    <p class="price">$143.00</p>

                                </div>
                                <!-- /.text -->

                                <p class="buttons">
                                    <a href="detail.html" class="btn btn-default">View detail</a>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="image">
                                    <a href="detail.html">
                                        <img src="<?php echo base_url(); ?>assets/front/img/product2.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <!-- /.image -->
                                <div class="text">
                                    <h3><a href="detail.html">White Blouse Armani</a></h3>
                                    <p class="price"><del>$280</del> $143.00</p>

                                </div>
                                <!-- /.text -->
                                <p class="buttons">
                                    <a href="detail.html" class="btn btn-default">View detail</a>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>
                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="image">
                                    <a href="detail.html">
                                        <img src="<?php echo base_url(); ?>assets/front/img/product3.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <!-- /.image -->
                                <div class="text">
                                    <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>


                                </div>
                                <!-- /.text -->

                                <p class="buttons">
                                    <a href="detail.html" class="btn btn-default">View detail</a>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="image">
                                    <a href="detail.html">
                                        <img src="<?php echo base_url(); ?>assets/front/img/product3.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <!-- /.image -->
                                <div class="text">
                                    <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>


                                </div>
                                <!-- /.text -->

                                <p class="buttons">
                                    <a href="detail.html" class="btn btn-default">View detail</a>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="image">
                                    <a href="detail.html">
                                        <img src="<?php echo base_url(); ?>assets/front/img/product2.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <!-- /.image -->
                                <div class="text">
                                    <h3><a href="detail.html">White Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>

                                </div>
                                <!-- /.text -->

                                <p class="buttons">
                                    <a href="detail.html" class="btn btn-default">View detail</a>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="image">
                                    <a href="detail.html">
                                        <img src="<?php echo base_url(); ?>assets/front/img/product1.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <!-- /.image -->
                                <div class="text">
                                    <h3><a href="detail.html">Fur coat</a></h3>
                                    <p class="price">$143.00</p>


                                </div>
                                <!-- /.text -->

                                <p class="buttons">
                                    <a href="detail.html" class="btn btn-default">View detail</a>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                            </div>
                            <!-- /.product -->
                        </div>
                        <!-- /.col-md-4 -->

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="image">
                                    <a href="detail.html">
                                        <img src="<?php echo base_url(); ?>assets/front/img/product2.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <!-- /.image -->
                                <div class="text">
                                    <h3><a href="detail.html">White Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>

                                </div>
                                <!-- /.text -->

                                <p class="buttons">
                                    <a href="detail.html" class="btn btn-default">View detail</a>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>

                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="image">
                                    <a href="detail.html">
                                        <img src="<?php echo base_url(); ?>assets/front/img/product1.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <!-- /.image -->
                                <div class="text">
                                    <h3><a href="detail.html">Fur coat</a></h3>
                                    <p class="price">$143.00</p>


                                </div>
                                <!-- /.text -->

                                <p class="buttons">
                                    <a href="detail.html" class="btn btn-default">View detail</a>
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>

                            </div>
                            <!-- /.product -->
                        </div>
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.products -->

                    <!-- *** BLOG HOMEPAGE ***
            _________________________________________________________ -->

                    <div class="box text-center">
                        <h3 class="text-uppercase">From our blog</h3>

                        <p class="text-italic text-large">What's new in the world of fashion? <span class="accent">Check our blog!</span>
                        </p>
                    </div>

                    <div id="blog-homepage" class="row">
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="post.html">Fashion now</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a>
                                </p>
                                <hr>
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="post.html">Who is who - example blog post</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                                </p>
                                <hr>
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>

                        </div>

                    </div>
                    <!-- /#blog-homepage -->

                    <!-- *** BLOG HOMEPAGE END *** -->

                </div>
                <!-- /.col-sm-12 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

