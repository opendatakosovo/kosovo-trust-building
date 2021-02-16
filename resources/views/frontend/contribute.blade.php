<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    @include('frontend.includes.head')

</head>                            
<body class="header-sticky blog-details page page-contact-v2">  
    <!-- Header -->            
     <!-- Header -->            
     <header id="header" class="header clearfix"> 
       
        @include('frontend.includes.header')

    </header><!-- /.header -->
            
    <!-- Page title -->
    <div class="bond-page-title">
        <div class="page-title parallax parallax2">
            <div class="overlay v1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading v1">
                            <div class="page-title-heading">
                                <h1 class="title">Contribute</h1>
                            </div><!-- /.page-title-captions -->     
                        </div><!-- /.page-title-captions --> 

                        <div class="breadcrumb-trail breadcrumbs" >
                            <ul>
                                <li class="trail-item"><a href="index.html" title="bond" rel="home">HOME</a></li>
                                <li>CONTRIBUTE</li>
                            </ul>
                        </div>

                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title --> 
    </div>

    <section class="bond-contact-us">
            <div class="container">
                
                <div class="padt-67">
                    
                    <div class="iconboxes pad-0_134 mgb-87 clearfix">
                        
                        <div class="iconbox iconbox-contact-us bg-red center-icon clearfix">
                            <div class="box-header">
                                <div class="box-icon"><i class="icon-envelope icons"></i></div>
                                <h4 class="title-icon">EMAIL</h4>
                            </div>
                            <div class="box-content">
                                hello@website.com
                                <p>support@website.com </p>                          
                             
                            </div>
                        </div>

                        <div class="iconbox iconbox-contact-us bg-red center-icon clearfix">
                            <div class="box-header">
                                <div class="box-icon">
                                    <i class="icon-phone icons"></i>
                                </div>
                                <h4 class="title-icon">PHONE</h4>
                            </div>
                            <div class="box-content">
                                + 111  - 232 - 343434
                                <p>+ 111  - 232 - 343435 </p>                          
                             
                            </div>
                        </div>

                        <div class="iconbox iconbox-contact-us bg-red center-icon clearfix">
                            <div class="box-header">
                                <div class="box-icon"><i class="icon-location-pin icons"></i></div>
                                <h4 class="title-icon">ADDRESS</h4>
                            </div>
                            <div class="box-content">
                                134, Bardeshi, Amin Bazar
                                <p>Savar, Dhaka - 1348 </p>                          
                             
                            </div>
                        </div>
                    </div>

                    <div class="title-section contact-us  mgb-77">
                        <h3 class="title">SAY HELLO !</h3>
                        <div class="desc">                            
                        </div>
                    </div>
                    
                    <div class="row">

                        <div class="col-md-8">
                            <form method="post" id="contactform" class="comment-form" action="./contact/contact-process.php" >
                                <div class="col-xs-12 col-xs-6 padding-left-0">
                                    <fieldset class="message">
                                         
                                        <textarea id="comment-message" placeholder="Your comment" name="message" rows="8" tabindex="4"></textarea>
                                    </fieldset>
                                </div>
                                
                                <div class="col-xs-12 col-xs-6 padding-right-0">                           
                                    <fieldset class="name-container">
                                        <input type="text" id="name" placeholder="Your name" class="tb-my-input" name="name" tabindex="1" value="" size="32" required>
                                    </fieldset>

                                    <fieldset class="email-container">
                                        <input type="text" id="email" placeholder="Your email" class="tb-my-input" name="email" tabindex="2" value="" size="32" required>
                                    </fieldset> 

                                    <fieldset class="website-container">
                                        <input type="text" id="subject" placeholder="Your website" class="tb-my-input" name="subject" tabindex="2" value="" size="32" required>
                                    </fieldset> 
                                    <p class="form-submit">
                                        <button class="flat-button bg-theme">SUBMIT</button>
                                    </p>     
                                </div>                                    
                                               
                            </form>
                        </div>

                        <div class="col-md-4">
                            <div id="map"></div>
                            
                        </div>
                    </div>
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
                                <input type="email" class="email-field" name="email" size="25" maxlength="128" value="" placeholder="Your email">
                                <input type="submit" class="email-submit fa" value="&#xe086">
                            </form>                        
                        </div><!-- /.widget-new_letter -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="widget widget-instagram">
                            <h5 class="widget-title">Instagram </h5>
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

    <a class="go-top show vertical-text">
        BACK TO TOP <i class="fa fa-angle-double-right"></i>
    </a>
    
    

</body>
</html>