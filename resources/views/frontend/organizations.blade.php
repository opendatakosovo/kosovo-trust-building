<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    @include('frontend.includes.head')
 </head>                            
<body class="header-sticky page service v2">  
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
                                <h1 class="title">Organizations</h1>
                            </div><!-- /.page-title-captions -->     
                        </div><!-- /.page-title-captions --> 

                        <div class="breadcrumb-trail breadcrumbs" >
                            <ul>
                                <li class="trail-item"><a href="index.html" title="bond" rel="home">HOME</a></li>
                                <li>Organizations</li>
                            </ul>
                        </div>

                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title --> 
    </div>

    <!-- Search box for organizations -->
    <div class="container">
    <div class="row">
        <div class="col-sm-4 mb-3 col-md-4">
        <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Search for organizations..">
        </div>
      <button type="button" class="btn btn-default btn-xs btn-tag">All</button>
      <button type="button" class="btn btn-primary btn-xs btn-tag">#Human rights</button>
      <button type="button" class="btn btn-primary btn-xs btn-tag">#Language</button>
      <button type="button" class="btn btn-primary btn-xs btn-tag">#Gender Equality</button>
      <button type="button" class="btn btn-primary btn-xs btn-tag">#Youth</button>
    </div>
    

    <!-- Organizations gallery <-- Bond what we do style2 -->
    <section class=" bond-row what-we-do v2 keep-30">
        <div class="container">
            <div data-item="4" data-nav="true" data-dots="false" data-auto="false" data-margin="30">
                <div class=" item col-md-3 col-xs-6 bg-ff4040">
                    <div class="overlay">
                        <div class="icon-image" >
                          <a href="organization1"><img src="frontend/images/organizations/undp.png" alt="UNDP" style="max-width:100%; height:100px;"></a>
                         
                        </div>
                        <div class="content">
                            <!-- <h4 class="title"><a href="organization1.html">VOCUP</a></h4>
                            <a class="readmore" href="organization1.html">Read more</a> -->
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->

                <div class="item col-md-3 col-xs-6 bg-ff4040">
                    <div class="overlay ">
                        <div class="icon-image">
                            <img src="frontend/images/organizations/unhcr.png" alt="" >
                        </div>
                        <div class="content">
                            <!-- <h4 class="title"><a href="#">VOCUP RECNIK</a></h4> -->
                            <!-- <p>This is a short description about the organization, number of projects and their activity. </p> -->
                            <!-- <a class="readmore" href="blog_single_v1.html">Read More</a> -->
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->

                <div class="item col-md-3 col-xs-6 bg-ff4040">
                    <div class=" ">
                        <div class="icon-image">
                        <img src="frontend/images/organizations/iom.png" alt="" style="max-width:100%; height:100px; float:right;">
                        </div>
                        <div class="content">
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->                    
            
                <div class="item col-md-3 col-xs-6 bg-ff4040">
                    <div class=" ">
                        <div class="icon-image">
                        <img src="frontend/images/organizations/unmik.png" alt="">
                        </div>
                        <div class="content">
        
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->

                <div class="item col-md-3 col-xs-6 bg-ff4040">
                    <div class="">
                        <div class="icon-image">
                        <img src="frontend/images/organizations/giz.jpg" alt="" >
                        </div>
                        <div class="content">
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->

                <div class="item col-md-3 col-xs-6 bg-ff4040">
                    <div class=" ">
                        <div class="icon-image">
                        <img src="frontend/images/organizations/osce.png" alt="">
                        </div>
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->            
                
                <div class="item col-md-3 col-xs-6 bg-ff4040">
                    <div class=" ">
                        <div class="icon-image">
                        <img src="frontend/images/organizations/acdc.png" alt="">
                        </div>
                        <div class="content">
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->  

                <div class="item col-md-3 col-xs-6 bg-ff4040">
                    <div class=" ">
                        <div class="icon-image">
                        <img src="frontend/images/organizations/eulex.jpg" alt="" style="max-width:100%; height:100px;float:right;">
                        </div>
                        <div class="content">
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->  
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
                                <div class="col-md-6">
                                    <h2>Do you want to contribute?</h2>
                                    <a class="button" href="/trustbuildingnetworkk"> Register here </a>
                                </div>
                                <div class="col-md-6">
                                    <h2>Do you want to add something?</h2>
                                    <a class="button" href="/trustbuildingnetworkk">Do it here!</a>
                                </div>                                           
                            </div>
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
        </div>

        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="widget widget_text">
                            <p>UNMIK is funding the establishment, launch and maintenance of the platform until
                                handover.</p>
                        </div><!-- /.widget-text -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-2">
                        <div class="widget widget_text">
                            <p>UNMIK does not necessarily endorse the opinions or statements expressed on the platform.
                            </p>
                        </div><!-- /.widget-text -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-2">
                        <div class="widget widget_text">
                            <p>UNMIK does not necessarily support the policies and beliefs of organizations or
                                individuals listed or referred to.</p>
                        </div><!-- /.widget-text -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-2">
                        <div class="widget widget_new_letter">
                            <p>The use of geographic names and boundaries does not imply judgement on the legal status
                                of Kosovo.</p>
                            <p>UNMIK is not liable for the conduct of any user.</p>                       
                        </div><!-- /.widget-new_letter -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-2">
                        <div class="widget widget_new_letter">
                            <p>The inclusion of a link or reference does not imply the endorsement of the linked website
                                by UNMIK.</p>
                        </div><!-- /.widget-new_letter -->
                    </div>
                    <div class="col-md-2">
                        <div class="widget widget_new_letter">
                            <p>Communications added to forums shall not be considered as having been reviewed or
                                approved by UNMIK.</p>
                        </div><!-- /.widget-new_letter -->
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
                        <p>Copyright (c) Kosovo Trust Building 2021</p>
                    </div>                

                    <ul class="bond-socials text-right">
                        <li class="facebook">
                            <a href="https://www.facebook.com/trustbuildingks/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="instagram">
                            <a href="https://www.instagram.com/trustbuildingks/"><i class="fa fa-instagram"></i></a>
                        </li>                    
                       
                    </ul>              
                </div><!-- /.container-bottom -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div> 



    <a class="go-top vertical-text">
        BACK TO TOP <i class="fa fa-angle-double-right"></i>
    </a>
    
    
    
</body>
</html>