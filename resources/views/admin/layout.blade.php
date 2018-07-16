
   <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Online Polling</title>

        <!-- Icon css link -->
        {!!Html::style('css/font-awesome.min.css')!!}
        {!!Html::style('vendors/elegant-icon/style.css')!!}
        {!!Html::style('vendors/themify-icon/themify-icons.css')!!}
        {!!Html::style('css/bootstrap.min.css')!!}
        {!!Html::style('vendors/revolution/css/settings.css')!!}
        {!!Html::style('vendors/revolution/css/layers.css')!!}
        {!!Html::style('vendors/revolution/css/navigation.css')!!}
        {!!Html::style('vendors/animate-css/animate.css')!!}
        <!-- Extra plugin css -->
        {!!Html::style('vendors/owl-carousel/owl.carousel.min.css')!!}
        {!!Html::style('css/style.css')!!}
        {!!Html::style('css/responsive.css')!!}
        {!!Html::style('assets/css/bootstrap.css')!!}




        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--================Search Area =================-->
        <section class="search_area">
            <div class="search_inner">
                <input type="text" placeholder="Enter Your Search...">
                <i class="ti-close"></i>
            </div>
        </section>
        <!--================End Search Area =================-->

        <!--================Header Menu Area =================-->
       
        <!--================End Header Menu Area =================-->

        <!--================Slider Area =================-->
        <section id="container" class="">
  
          @include('admin.header.header')
          @include('admin.sidebar.sidebar')
          @yield('content')
   </section>

<section class="creative_feature_area">
            <div class="container">
                <div class="c_feature_box">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="c_box_item">
                                <a href="#"><h4><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Reliability</h4></a>
                                <p>The website provides the sense of reliability to the voters as the poll is to be user friendly.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="c_box_item">
                                <a href="#"><h4><i class="fa fa-clock-o" aria-hidden="true"></i> Digitalized</h4></a>
                                <p>This poll is digital form and it can become the trend setter in the market.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="c_box_item">
                                <a href="#"><h4><i class="fa fa-diamond" aria-hidden="true"></i> Quality</h4></a>
                                <p>This site helps to maintain the quality of the voting system in the present era.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="digital_feature p_100">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d_feature_text">
                                <div class="main_title">
                                    <h2>We Are A Creative <br />Online Poll for conducting the surveys at the events to be occure</h2>
                                </div>
                                <p>Polling is a great way to get feedback, gain a deep understanding of the customers and community in real-time, build a community, and generate content.</p>
                                <p> Traditionally, polling is carried out by conducting a series of questions and then extrapolating generalities in ratio or within confidence intervals to represent the opinions of a population. Blockchain based polling is a nonpartisan polling platform that leverages blockchain technology to provide an open-source and decentralized alternative to traditional Polling. With the growing demand and popularity of online services today, an online polling system might be a necessity to maintain voter turnout in the future. To make the system secured and decentralized, block chain technology is used.</p>
                                <a class="read_btn" href="#">Read more</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d_feature_img">
                                <img src="img/feature-right.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Creative Feature Area =================-->

        <!--================Industries Area =================-->
        <section class="industries_area">
            <div class="left_indus">
                <div class="indus_img">
                    <img src="img/indus-fav.png" alt="">
                </div>
            </div>
            <div class="right_indus">
                <div class="indus_text">
                    <div class="main_title">
                        <h2>Poll results on choosing the favourite icecream flavor</h2>
                        <p>The poll was carried out and the number of votes shows the below results.</p>
                    </div>
                    <div class="our_skill_inner">
                        <div class="single_skill">
                            <h3>Chocklate</h3>
                            <div class="progress" data-value="90">
                                <div class="progress-bar">
                                    <div class="progress_parcent"><span class="counter">55</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h3>Vanilla</h3>
                            <div class="progress" data-value="95">
                                <div class="progress-bar">
                                    <div class="progress_parcent"><span class="counter">27</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h3>Strawberry</h3>
                            <div class="progress" data-value="90">
                                <div class="progress-bar">
                                    <div class="progress_parcent"><span class="counter">18</span>%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="read_btn" href="#">Poll with us</a>
                </div>
            </div>
        </section>
        <!--================End Industries Area =================-->

        <!--================Our Service Area =================-->
        <section class="service_area">
            <div class="container">
                <div class="center_title">
                    <h2>Our Services</h2>
                    <p>This site helps in creating Online Polls which can be conducted by Governmental , Non Governmental Organization as well as for market research or community polls.</p>
                </div>
                <div class="row service_item_inner">
                    <div class="col-lg-4">
                        <div class="service_item">
                            <i class="ti-ruler-pencil"></i>
                            <h4>Online Polls</h4>
                            <p>This site helps in creating Online Polls which can be conducted by Governmental , Non Governmental Organization as well as for market research or community polls.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_item">
                            <i class="ti-desktop"></i>
                            <h4>Data Visualization</h4>
                            <p>The result of the polls are represented in the form of charts and graphs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_item">
                            <i class="ti-announcement"></i>
                            <h4>Security</h4>
                            <p>This site is also focused on providing the security so that fair results are published.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Service Area =================-->

        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_100">
            <div class="container">
                <div class="testimonials_slider owl-carousel">
                    <div class="item">
                        <div class="media">
                            <img class="d-flex rounded-circle" src="img/block1.png" alt="">
                            <div class="media-body">
                                <img src="img/dotted-icon.png" alt="">
                                <p>The revolutionary concept of block chain that shines after the widespread acceptance of Bitcoin has become trending topic in today’s software era. While most people focus only at cryptocurrencies, many administrative operations, and everyday services, can now safely be moved to the Internet using blockchain.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media">
                            <img class="d-flex rounded-circle" src="img/smart1.png" alt="">
                            <div class="media-body">
                                <img src="img/dotted-icon.png" alt="">
                                <p>A smart contract is a computer protocol intended to digitally facilitate, verify, or enforce the negotiation or performance of a contract. Smart contracts allow the performance of credible transactions without third parties. These transactions are trackable and irreversible.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Testimonials Area =================-->

        <!--================Project Area =================-->
        <section class="project_area">
            <div class="container">
                <div class="project_inner">
                    <div class="center_title">
                        <h2>Ready To Caste Your Vote? </h2>
                        <p>There are many polls which are created to get your view or be started by you.</p>
                    </div>
                    <a class="tp_btn" href="#">Poll with Us</a>
                </div>
            </div>
        </section>
        <!--================End Project Area =================-->

        <!--================Latest News Area =================-->
        <section class="latest_news_area p_100">
            <div class="container">
                <div class="b_center_title">
                    <h2>Latest News</h2>
                    <p>We Are A Creative Website Creating Team. Focused on Conducting  Online Polls</p>
                </div>
                <div class="l_news_inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="l_news_item">
                                <div class="l_news_img"><a href="#"><img class="img-fluid" src="img/blog/l-news/l-news-1.jpg" alt=""></a></div>
                                <div class="l_news_content">
                                    <a href="#"><h4>We Create Smooth Poll Experiences</h4></a>
                                    <p>Polling is one of the powerful tools through which people can incorporate into a social strategy.  </p>
                                    <a class="more_btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="l_news_item">
                                <div class="l_news_img"><a href="#"><img class="img-fluid" src="img/blog/l-news/l-news-2.jpg" alt=""></a></div>
                                <div class="l_news_content">
                                    <a href="#"><h4>Gainig Popularity</h4></a>
                                    <p>It is a great way to get feedback, gain a deep understanding of the customers and community in real-time, build a community, and generate content. Traditionally, polling is carried out by conducting a series of questions and then extrapolating generalities in ratio or within confidence intervals to represent the opinions of a population.</p>
                                    <a class="more_btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="l_news_item">
                                <div class="l_news_img"><a href="#"><img class="img-fluid" src="img/blog/l-news/l-news-3.jpg" alt=""></a></div>
                                <div class="l_news_content">
                                    <a href="#"><h4>Device Friendly</h4></a>
                                    <p>
                                    This website is out to be device friendly</p>
                                    <a class="more_btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Slider Area =================-->
        <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Recent Poll</h1>
                <br />
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 col-md-offset-4">
                <div class="user-poll-section">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Question : </strong>Who is the most eligible candidate for the chairman post?

                        </div>
                        <div class="panel-body">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="group-poll">
                                    <strong>A.  </strong>Madan Khadka
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="group-poll">
                                    <strong>B.  </strong>Anita Gurung
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="group-poll">
                                    <strong>C.  </strong>Rabin Neupane
                            </div>
                            <hr />
                            <h5 class="text-danger">Result Of User Votes :</h5>
                            <hr />
                            Anita Gurung (60%) :
                               <div class="progress progress-striped active">
                                   <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                       <span class="sr-only">60% Complete (success)</span>
                                   </div>
                               </div>
                           Rabin Neupane (30%) :
                               <div class="progress progress-striped active">
                                   <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                       <span class="sr-only">30% Complete (success)</span>
                                   </div>
                               </div>
                            Madan Khadka (10%) :
                               <div class="progress progress-striped active">
                                   <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                       <span class="sr-only">10% Complete (success)</span>
                                   </div>
                               </div>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-bell"></span> Mark Your Vote</a>
                        </div>
                    </div>

                </div>
                <!-- POLL DIV END-->
            </div>
        </div>
    </div>

        <!--================Creative Feature Area =================-->
        
        <!--================End Latest News Area =================-->
<!--<div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right  ">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>

        </div>
    </div>-->
    <!-- NAVBAR CODE END -->
   
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="f_widgets_inner row">
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget subscribe_widget">
                                <div class="f_w_title">
                                    <h3>Our Newsletter</h3>
                                </div>
                                <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget twitter_widget">
                                <div class="f_w_title">
                                    <h3>Twitter Feed</h3>
                                </div>
                                <div class="tweets_feed"></div>
                            </aside>
                        </div>


                        <!--<div class="col-lg-3 col-md-6">
                            <aside class="f_widget categories_widget">
                                <div class="f_w_title">
                                    <h3>Link Categories</h3>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Agency</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Studio</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Studio</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Blogs</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Shop</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Home</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Services</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Work</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Privacy</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="f_widget contact_widget">
                                <div class="f_w_title">
                                    <h3>Contact Us</h3>
                                </div>
                                <a href="#">1 (800) 686-6688</a>
                                <a href="#">info.deercreative@gmail.com</a>
                                <p>40 Baria Sreet 133/2 <br />NewYork City, US</p>
                                <h6>Open hours: 8.00-18.00 Mon-Fri</h6>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="copy_right_area">
                <div class="container">
                    <div class="float-md-left">
                        <!--<h5>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></h5>-->
                    </div>
                    <div class="float-md-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Disclaimer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Advertisement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->




        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        {!!Html::script('js/jquery-3.2.1.min.js')!!}
        {!!Html::script('js/popper.min.js')!!}
        {!!Html::script('js/bootstrap.min.js')!!}
        {!!Html::script('vendors/revolution/js/jquery.themepunch.tools.min.js')!!}
        {!!Html::script('vendors/revolution/js/jquery.themepunch.revolution.min.js')!!}
        {!!Html::script('vendors/revolution/js/extensions/revolution.extension.actions.min.js')!!}
        {!!Html::script('vendors/revolution/js/extensions/revolution.extension.video.min.js')!!}
        {!!Html::script('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')!!}
        {!!Html::script('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')!!}
        {!!Html::script('vendors/revolution/js/extensions/revolution.extension.navigation.min.js')!!}
        {!!Html::script('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')!!}
        {!!Html::script('vendors/counterup/jquery.waypoints.min.js')!!}
        {!!Html::script('vendors/counterup/jquery.counterup.min.js')!!}
        {!!Html::script('vendors/counterup/apear.js')!!}
        {!!Html::script('vendors/counterup/countto.js')!!}
        {!!Html::script('vendors/owl-carousel/owl.carousel.min.js')!!}
        {!!Html::script('vendors/parallaxer/jquery.parallax-1.1.3.js')!!}
        {!!Html::script('vendors/tweet/tweetie.min.js')!!}
        {!!Html::script('vendors/tweet/script.js')!!}
        {!!Html::script('js/theme.js')!!}
        {!!Html::script('assets/js/jquery-1.11.1.js')!!}
        {!!Html::script('assets/js/bootstrap.js')!!}
     
    <!-- REQUIRED BOOTSTRAP SCRIPTS -->

    </body>
</html>
