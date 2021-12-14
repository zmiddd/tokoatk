<!DOCTYPE html>
<html>
<head>
    <title>ATK</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Language" content="en-US" />
    <meta name="description" content="Dynamic responsive Ecommerce free web template" />
    <meta name="keywords" content="Ecommerce template, Ecommerce free responsive template, free template" />
    <meta name="author" content="Maniruzzaman Akash">

    <!-- CSS links -->
    <link type="text/css" rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ url('css/font-awesome.min.css')}}" />

    
    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="{{url('css/animate.css')}}" />

    <!-- Owl Carousel CSS-->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />



    <!-- Mega navigation bar -->
    <link rel="stylesheet" type="text/css" media="all" href="css/webslidemenu.css" />

    <!-- Main css link -->
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <link rel="icon" href="images/logo.png" />
    
</head>
<body>
    <div class="wrapper">
        <!-- Header part  -->
        <div class="header" id="top">
            <!-- Start Top Header -->
            <div class="top-header">
                <div class="top-header-left pull-left">
                    <a href="products.html">Upto 50% Discount today</a>
                </div>
                <div class="top-header-right pull-right">
                    <div class="container-fluid">
                        <ul>
                            <li class="top-header-list">
                                <div class="dropdown">
                                    <a href="account.html" class="link dropdown-toggle pointer" id="menu1" data-toggle="dropdown">
                                        <span class="icon"><i class="fa fa-user"></i></span>
                                        My Account
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="cart.html">My Orders</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="account.html">Wallets</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="login.html">Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="top-header-list">
                                <a href="account.html">
                                    <span class="icon"><i class="fa fa-credit-card"></i></span>
                                    Credit Card
                                </a>
                            </li>
                            <li class="top-header-list"><a href="faq.html">
                                <span class="icon"><i class="fa fa-question-circle"></i></span>
                                Helps
                            </a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!-- End Top Header -->


            <!-- Start Header Main, logo, search bar,cart -->
            <div class="header-bottom">
                <div class="container">
                    <div class="header-logo pull-left">
                        <a href="index.html">
                            
                        </a>
                    </div>

                    <div class="header-search pull-left">
                        <form action="#" method="post">
                            <input type="search" name="Search" placeholder="Search for a Product..." required="">
                            <button type="submit" class="btn btn-default" aria-label="Left Align">
                                <i class="fa fa-search" aria-hidden="true"> </i>
                            </button>
                        </form>
                    </div>

                    <div class="header-cart">
                        <a href="cart.html" class="cart-link" data-toggle="modal" data-target="#cart-item"><i class="fa fa-cart-arrow-down"></i></a>
                        <span class="number-of-cart">20</span>
                    </div>

                    <!-- Cart Modal -->
                    <div id="cart-item" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;
                            </button>
                            <h4 class="modal-title">Cart Products</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Name</th>
                                        <th>Item Image</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Pensil</td>
                                        <td><img src="images/product-slide/product2.png" class="img img-responsive img-thumbnail" alt=""></td>
                                        <td>3</td>
                                        <td>300000$</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Buku</td>
                                        <td><img src="images/product-slide/product3.png" class="img img-responsive img-thumbnail" alt=""></td>
                                        <td>1</td>
                                        <td>5000$</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" rowspan="5">
                                            Total Price <span class="bold text-primary" style="margin-left: 73%">305000$</span>
                                        </td>
                                    </tr>
                                    <div class="clearfix"></div>
                                </tbody>
                            </table>
                            <p class="text-right text-danger">There are <span style="font-weight: bold">2</span> more products in the cart. Click Checkout now to buy the items..</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel
                            </button>
                            <a href="cart.html" class="btn btn-yellow">Check Out</a>
                        </div>
                    </div>

                </div>
            </div> <!-- End Model -->

        </div>
    </div>
    <!-- End Header Main, logo, search bar,cart -->





    <div class="header-navigation">
        <div class="wsmenucontainer clearfix">
          <div class="overlapblackbg"></div>
          <div class="wsmobileheader clearfix"> <a href="#" id="wsnavtoggle" class="animated-arrow"><span></span></a> <a class="smallogo"><img src="images/logo.png" alt=""></a></div>


          <div class="headerfull"> 
            <!--Main Menu HTML Code-->
            <div class="wsmain">
              <!-- <div class="smllogo"><a href="#"><img src="images/logo.jpg" alt=""></a></div> -->
              <nav class="wsmenu clearfix">
                <ul class="mobile-sub wsmenu-list">
                  <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>Department</span></a>
                    <div class="wsshoptabing wtsdepartmentmenu clearfix">
                      <div class="wsshopwp clearfix" style="height: 421px;">
                          <ul class="wstabitem clearfix">
                            
                              <div class="wstitemright clearfix wstitemrightactive" style="height: auto;">
                                <div class="wstmegamenucoll clearfix">
                                  
                                  
                            </div>
                            <div class="wstmegamenucolr clearfix">
                              <div class="wstbootslider clearfix">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                                  <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                
</div>
</div>
</li>
</ul>
</div>
</div>
</li>
<li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>Brand</span></a>
    <div class="wsshoptabing wtsbrandmenu clearfix">
      <div class="wsshoptabingwp clearfix">
        <ul class="wstabitem02 clearfix">
          
            <div class="wsshoptab-active wstbrandbottom clearfix">
              
        </div>
    </li>
    <li>
        <div class="wstbrandbottom clearfix">
          
</div>
</li>
</ul>
</div>
</div>
</li>

<li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>MegaMenu</span></a>
    <div class="megamenu clearfix">


        


    </div>
</li>


<li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>Half menu</span></a>
    <div class="megamenu clearfix halfmenu">


        



    </div>
</li>


<li class="wssearchbar clearfix">
    <form class="topmenusearch">
      <input placeholder="Search Product By Name, Category...">
      <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
  </form>
</li>

<!-- <li class="wscarticon clearfix"> <a href="#"><i class="fa fa-shopping-basket"></i> <em class="roundpoint">8</em><span class="mobiletext">Shopping Cart</span></a> </li> -->


<li class="wsshopmyaccount clearfix"><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="wtxaccountlink"><i class="fa fa-align-justify"></i>My Account <i class="fa  fa-angle-down"></i></a>
    <ul class="wsmenu-submenu">
      <li><a href="account.html"><i class="fa fa-user"></i>View Profile</a></li>
      <li><a href="register.html"><i class="fa fa-black-tie"></i>Sign Up</a></li>
      <li><a href="login.html"><i class="fa fa-sign-in"></i>Login</a></li>
      <li><a href="account.html#wishlist"><i class="fa fa-heart"></i>My Wishlist</a></li>
      <li><a href="faq.html"><i class="fa fa-question-circle"></i>Help Center</a></li>
      <li><a href="login.html"><i class="fa fa-sign-out"></i>Logout</a></li>
  </ul>
</li>
</ul>
</nav>
</div>
<!--Menu HTML Code--> 

</div>
</div>

</div>  <!-- End Navigation header -->

</div>
<!-- Header part  -->


<div class="content-area">
    <div class="main-slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        
<!-- Left and right controls -->


                
                
            </div>
        </div>
    </div>
</div> <!--End Featured products Div-->


<div class="latest-products">
    <div class="container">
        <h2 class="title-div wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Our Latest Products available</h2>
        

                            @yield('content')

                            

                <div class="clearfix"></div>

                



            </div> <!-- End Latest products row-->
            <a href="products.html" class="btn btn-blue btn-lg pull-right btn-more wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> 
                <span>See More products.. </span>
            </a>
            <div class="clear"></div>
        </div> <!-- End products div-->
    </div> <!-- End container latest products-->
</div>  <!-- End Latest products -->


</div> <!-- End Service -->

</div> <!-- End content Area class -->


<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-top-address wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                    <div class="header-logo" style=" text-align: center;border-bottom: 1px dotted rgba(247, 12, 38, 0.24);">
                        <a href="index.html">
                            <img src="images/logo.png" alt="Your Shop Logo" class="img img-responsive" style="max-width: 100px">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <ul>
                        <li><i class="fa fa-map-marker"></i> Politeknik Negeri Malang University, Malang</li>
                        <li><i class="fa fa-mobile"></i> +62 82245354328 </li>
                        <li><i class="fa fa-envelope-o"></i> <a href="tokoatkonline001@gmail.com"> tokoatkonline001@gmail.com</a></li>
                    </ul> 
                </div>
                

            </div>
            <div class="col-md-8">
                <div class="subscribe wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                    <h3>Subscribe here to get some exciting offers</h3>
                    <form action="#" method="post"> 
                        <input type="text" name="email" placeholder="Enter your Email..." required="">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
                <div class="all-footer-links">
                    <div class="col-md-4">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact">Contact Us</a></li> 
                            <li><a href="privacy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 footer-grids">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="contact">Contact Us</a></li>
                            <li><a href="login.html">Returns</a></li> 
                            <li><a href="faq.html" class="link">FAQ</a></li>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="login.html">Order Status</a></li>
                        </ul> 
                    </div>
                    <div class="col-md-4 footer-grids">
                        <h3>Payment Methods</h3>
                        <ul>
                            <li><i class="fa fa-paypal" aria-hidden="true"></i> Paypal</li>
                            <li><i class="fa fa-money" aria-hidden="true"></i> Bkash</li>
                            <li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
                            <li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
                            <li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
                        </ul>  
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="payment-links">
                    <ul>
                        <li><i class="fa fa-cc-paypal" style="color: #FFCC80"></i></li>
                        <li><i class="fa fa-cc-mastercard" style="color: #FFEB3B"></i></li>
                        <li><i class="fa fa-cc-stripe" style="color: yellow"></i></li>
                        <li><i class="fa fa-credit-card" style="color: #FF9800"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        


    </div>
</div> <!-- End Footer top -->

<div class="footer-bottom">
    <p class="footer-credit">
        &copy;<script type="text/javascript">document.write(new Date().getFullYear())</script> - All rights reserved <a href="index.html">Your shop </a>
    </p>
</div> <!--End Footer bottom -->

<div class="scroll">
    <a href="#top" class="scroll-to-top hidden">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


</div> <!-- End wrapper -->



<!-- Scripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        // alert('test message');

        // var bd_phone_pattern = /^(?:\+88|01)?\d{11}$/;
        // var contact1 = "01951233084";
        // var contact2 = "+8801951233084";
        // alert(bd_phone_pattern.test(contact1));
        // if (bd_phone_pattern.test(contact1)) {
        //     alert('Regexp Has Matched');
        // }else{
        //     alert('Regexp Hasn\'t Matched');
        // }
    });
</script>



<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<script src="js/wow.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/webslidemenu.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>