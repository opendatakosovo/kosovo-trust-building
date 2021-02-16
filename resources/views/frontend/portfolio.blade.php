<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    @include('frontend.includes.head')
 </head>                       
<body class="header-sticky page portfolio">  
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading...</h2>
        </div>
    </section> 
    <!-- Header -->            
    <header id="header" class="header clearfix">
        @include('frontend.includes.header')
        </header>
            
    <!-- Page title -->
    <div class="bond-page-title">
        <div class="page-title parallax parallax2">
            <div class="overlay v1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading v1">
                            <div class="page-title-heading">
                                <h1 class="title">PORTFOLIO</h1>
                            </div><!-- /.page-title-captions -->     
                        </div><!-- /.page-title-captions --> 

                        <div class="breadcrumb-trail breadcrumbs" >
                            <ul>
                                <li class="trail-item"><a href="index.html" title="bond" rel="home">HOME</a></li>
                                <li>PORTFOLIO</li>
                            </ul>
                        </div>

                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title --> 
    </div>

        <!-- Bond parallax home1 -->
        <section class="bond-row pad-0">
            <div class="container">
                <ul class="portfolio-filter">
                    <li class="active"><a data-filter="*" href="#">ALL</a></li>
                    <li><a data-filter=".web_design" href="#">WEB DESIGN</a></li>
                    <li><a data-filter=".development" href="#">DEVELOPMENT</a></li>
                    <li><a data-filter=".print_design" href="#">PRINT DESIGN</a></li>
                    <li><a data-filter=".photography" href="#">PHOTOGRAPHY</a></li>
                </ul><!-- /.project-filter -->

                <div class="bond-portfolio no-spacer three_columns">
                    <div class="portfolio-container clearfix no-margin one-four ">
                        <div class="item builder web_design">
                            <div class="featured-post">
                                <a class="popup-gallery" href="#">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="images/home/p1.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">GHUNE KHAOA ROAD</a>
                                <p>Web Design</p>
                            </div>
                        </div>
                        <div class="item builder development">
                            <div class="featured-post">
                                <a class="popup-gallery" href="#">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="images/portfolio/2.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">GHUNE KHAOA ROAD</a>
                                <p>Development</p>
                            </div>
                        </div>
                        <div class="item builder print_design">
                            <div class="featured-post">
                                <a class="popup-gallery" href="#">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="images/portfolio/3.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">GHUNE KHAOA ROAD</a>
                                <p>Print design</p>
                            </div>
                        </div>
                        <div class="item builder photography">
                            <div class="featured-post">
                                <a class="popup-gallery" href="#">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="images/portfolio/4.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">GHUNE KHAOA ROAD</a>
                                <p>Photography</p>
                            </div>
                        </div> 

                        <div class="item builder web_design">
                            <div class="featured-post">
                                <a class="popup-gallery" href="#">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="images/portfolio/5.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">GHUNE KHAOA ROAD</a>
                                <p>Web Design</p>
                            </div>
                        </div>
                        <div class="item builder development">
                            <div class="featured-post">
                                <a class="popup-gallery" href="#">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="images/portfolio/6.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">GHUNE KHAOA ROAD</a>
                                <p>Development</p>
                            </div>
                        </div>
                        <div class="item builder print_design">
                            <div class="featured-post">
                                <a class="popup-gallery" href="#">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="images/portfolio/7.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">GHUNE KHAOA ROAD</a>
                                <p>Print design</p>
                            </div>
                        </div>
                        <div class="item builder photography">
                            <div class="featured-post">
                                <a class="popup-gallery" href="#">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="images/portfolio/8.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">GHUNE KHAOA ROAD</a>
                                <p>Photography</p>
                            </div>
                        </div>  
                          <div class="item builder photography">
                            <div class="featured-post">
                                <a class="popup-gallery" href="#">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="images/portfolio/9.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">GHUNE KHAOA ROAD</a>
                                <p>Photography</p>
                            </div>
                        </div>                       
                    </div>
                </div> <!-- bond porfolio -->
                
                <div class="blog-pagination">
                    <ul class="flat-pagination clearfix">                                        
                        <li class="active">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>                                  
                        <li class="next">
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </li>                               
                    </ul><!-- /.flat-pagination -->
                </div>           
            </div>
        </section>

    <!-- Footer -->
    <footer class="footer">  
        <div class="page-callout">
            <div class="page-callout-background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flat-contact-us">                   
                                <h2>Are you Falling in love with bond</h2>
                                <p>Lorem ipsum dolor sit amet consectetur </p>
                                <a class="button" href="#"> VIEW MORE </a>                        
                            </div>
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
        </div>

        <div class="footer-widgets">   
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget widget_text">
                            <h5 class="widget-title">About Bond</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                            <p>Just another attempt to increase ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris tomra kauke bolo na kauke bolo na ei prothom ekti meye</p>
                        </div><!-- /.widget-text -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="widget widget_new_letter">
                            <h5 class="widget-title">Subscribe to our newsletter</h5>
                           <p>Just another attempt to increase ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>                   
                            <form method="get"  class="new_letter">
                                <input type="email" class="email-field" name="email" size="25" maxlength="128" placeholder="Your email">
                                <input type="submit" class="email-submit fa" value="&#xe086">                            </form>                        
                        </div><!-- /.widget-new_letter -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="widget widget-instagram">
                            <h5 class="widget-title">INSTAGRAM PHOTOS </h5>
                            <div class="instagram-thumb clearfix">
                                <div class="thumb">
                                    <a href="#"><img class="img" src="images/footer/instagram-1.jpg" alt="image"></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img" src="images/footer/instagram-2.jpg" alt="image"></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img" src="images/footer/instagram-3.jpg" alt="image"></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img" src="images/footer/instagram-4.jpg" alt="image"></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img" src="images/footer/instagram-5.jpg" alt="image"></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img" src="images/footer/instagram-6.jpg" alt="image"></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img" src="images/footer/instagram-7.jpg" alt="image"></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img" src="images/footer/instagram-8.jpg" alt="image"></a>
                                </div>                                
                            </div><!-- /.instagram-thumb -->
                        </div><!-- /.widget .widget-instagram -->
                        
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-widgets -->
    </footer>

    <!-- Bottom -->
    <div class="bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="line-top"></div>
                </div>
            </div>
            <div class="row">
                <div class="container-bottom">
                    <div class="copyright"> 
                        <p>Copyright (c) MayerDoa Themes 2016</p>
                    </div>                

                    <ul class="bond-socials text-right">
                        <li class="facebook">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="twitter">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="google-plus">
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li> 
                                             
                        <li class="linkedin">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>                        
                       
                    </ul>              
                </div><!-- /.container-bottom -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div> 

    <a class="go-top vertical-text">
        BACK TO TOP <i class="fa fa-angle-double-right"></i>
    </a>
    
    <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script> 
    <script type="text/javascript" src="javascript/jquery-countTo.js"></script>
    <script type="text/javascript" src="javascript/imagesloaded.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="javascript/jquery-waypoints.js"></script> 
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="javascript/owl.carousel.js"></script> 
    <script type="text/javascript" src="javascript/parallax.js"></script>  
    <script type="text/javascript" src="javascript/slider.js"></script>  
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvV0EE3yFozGhjmUv3BgoyviVdXzCwHlk"></script>
    <script type='text/javascript' src='javascript/jquery.themepunch.tools.min.js?rev=4.6.5'></script>
    <script type='text/javascript' src='javascript/jquery.themepunch.revolution.min.js?rev=4.6.5'></script>
    <script src="javascript/swiper.min.js"></script>
    
    <script type="text/javascript" src="javascript/gmap3.min.js"></script>  

    <script type="text/javascript" src="javascript/main.js"></script>
    
</body>
</html>