<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    @include('frontend.includes.head')
 </head>
<body class="header-sticky page service v3">
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
                                <h1 class="title">{{ __('messages.projects-initiatives') }}</h1>
                            </div><!-- /.page-title-captions -->
                        </div><!-- /.page-title-captions -->



                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->
    </div>

        <!-- Bond what we do box -->
        <section class="bond-row what-we-do v3 keep-30">
            <div class="container">

                <div class="row style2 " data-item="4" data-nav="true" data-dots="false" data-auto="false" data-margin="30">
                    <div class="item col-md-4 col-xs-6">
                        <div class="bond-iconbox border square outtop effect2 bg-title2">
                            <div class="icon-image">
                                <span class="icon-user"></span>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">{{ __('messages.youth') }}</a></h4>

                                <a class="readmore" href="blog_single_v1.html">More</a>

                            </div>
                        </div><!-- /.bond-iconbox -->
                    </div><!-- /.item -->


                    <div class="item col-md-4 col-xs-6">
                        <div class="bond-iconbox border square outtop effect2 bg-title2">
                            <div class="icon-image">
                                <span class="icon-people"></span>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">{{ __('messages.gender') }}</a></h4>

                                <a class="readmore" href="blog_single_v1.html">More</a>
                            </div>
                        </div><!-- /.bond-iconbox -->
                    </div><!-- /.item -->

                    <div class="item col-md-4 col-xs-6">
                        <div class="bond-iconbox border square outtop effect2 bg-title2">
                            <div class="icon-image">
                                <span class="icon-graduation"></span>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">{{ __('messages.education') }}</a></h4>

                                <a class="readmore" href="blog_single_v1.html">More</a>
                            </div>
                        </div><!-- /.bond-iconbox -->
                    </div><!-- /.item -->

                    <div class="item col-md-4 col-xs-6 bg-ff4040">
                        <div class="bond-iconbox border square outtop effect2 bg-title2">
                            <div class="icon-image">
                                <span class="icon-camrecorder"></span>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">{{ __('messages.media') }}</a></h4>

                                <a class="readmore" href="blog_single_v1.html">More</a>

                            </div>
                        </div><!-- /.bond-iconbox -->
                    </div><!-- /.item -->

                    <div class="item col-md-4 col-xs-6 bg-ff4040">
                        <div class="bond-iconbox border square outtop effect2 bg-title2">
                            <div class="icon-image">
                                <span class="icon-music-tone-alt icons"></span>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">{{ __('messages.culture') }}</a></h4>

                                <a class="readmore" href="blog_single_v1.html">More</a>
                            </div>
                        </div><!-- /.bond-iconbox -->
                    </div><!-- /.item -->

                    <div class="item col-md-4 col-xs-6 bg-ff4040">
                        <div class="bond-iconbox border square outtop effect2 bg-title2">
                            <div class="icon-image">
                                <span class="icon-book-open"></span>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">{{ __('messages.religion') }}</a></h4>

                                <a class="readmore" href="blog_single_v1.html">More</a>
                            </div>
                        </div><!-- /.bond-iconbox -->
                    </div><!-- /.item -->
                </div><!-- /.bond-iconbox-row -->



            </div>
        </section>

        <!-- Bond parallax home1 -->
        <section class="video parallax parallax17 bond-row">
            <div class="container-fluid">
                <div class="row">

	           <h2 class="video_title"  style="text-align: center; color:white;">{{ __('messages.projects-text1') }}</h2>
                </div>
            </div>
        </section>
<section class="bond-row great-service v3 padb-25 keep-30">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6 padt-82 padr-42">
                    <div class="iconbox effect1 clearfix inline-right no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-calendar"></span></div>
                            <h4 class="box-title">{{ __('messages.projects-completed') }}</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip
                        </div>
                    </div>

                    <div class="iconbox effect1 clearfix  inline-right no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-login"></span></div>
                            <h4 class="box-title">{{ __('messages.projects-partially') }}</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.

                        </div>
                    </div>

                    <div class="iconbox effect1 clearfix  inline-right no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-login"></span></div>
                            <h4 class="box-title">{{ __('messages.projects-progress') }}</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.

                        </div>
                    </div>
                </div><!-- /.col-md-4 -->


            </div><!-- /.row -->
        </div>

        <div class="img-right clearfix">
            <div class="absolute clearfix col-xs-offset-6 col-md-6 col-xs-6 padlr-260_120">
                <div class="iconbox effect1 white-style ">
                    <div class="box-header">
                        <h2 class="box-title">{{ __('messages.projects-text2') }}</h2>
                    </div>
                    <div class="box-content">
                        <a class="flat-button bdw" href="contribute.html">{{ __('messages.contribute') }}</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--what people talk about -->
    <section class="bond-row bond-testimonials-slider v2 keep-30">
	        <div class="container">
	            <div id = "testimonial-slider-box" class="v2">
	                <div class="testimonial-slider bond-testimonials-flexslider v2" data-margin="0" data-slides_per_view="1" data-autoplay="" data-hide_control="yes" data-hide_buttons="yes">
	                    <ul class="swiper-wrapper">

<!--	                        <li class="testimonial swiper-slide  has-image">-->
<!--	                            <div class="testimonial-content">-->
<!--	                                <blockquote>-->
<!--                                    {{ __('messages.testimonial1') }}-->
<!---->
<!--	                                </blockquote>-->
<!--	                            </div>-->
<!--	                            <div class="testimonial-meta">-->
<!--	                                -->
<!--	                            <div class="testimonial-image">-->
<!--	                                <img src="frontend/images/home/un-secretary.jpg" alt="">-->
<!--	                            </div>-->
<!--	                        -->
<!--	                                <div class="testimonial-author">-->
<!--	                                    <strong class="author-name"></strong>-->
<!--	                                    <div class="author-info"><span class="subtitle">General António Guterres</span><span class="company">UN Secretary</span></div>-->
<!--	                                </div>-->
<!--	                            </div>-->
<!--	                        </li>-->

	                       <li class="testimonial swiper-slide  has-image">
	                            <div class="testimonial-content">
	                                <blockquote>
                                    {{ __('messages.testimonial2') }}

	                                </blockquote>
	                            <div class="testimonial-meta">

	                            <div class="testimonial-image">
	                                <img src="frontend/images/home/testimonial-jovana.png" alt="">
	                            </div>

	                                <div class="testimonial-author">
	                                    <strong class="author-name"></strong>
	                                    <div class="author-info"><span class="subtitle">Jovana Radosavljević</span><span class="company">NSI Executive Director</span></div>
	                                </div>
	                            </div>
	                        </li>
	                        <!-- <li class="testimonial swiper-slide  has-image">
	                            <div class="testimonial-content">
	                                <blockquote>
	                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat.

	                                </blockquote>
	                            </div>
	                            <div class="testimonial-meta">

	                            <div class="testimonial-image">
	                                <img src="frontend/images/service/author2.png" alt="">
	                            </div>

	                                <div class="testimonial-author">
	                                    <strong class="author-name"></strong>
	                                    <div class="author-info"><span class="subtitle">Almahmud Khan</span><span class="company">Ceo, Aftab Groups</span></div>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="testimonial swiper-slide  has-image">
	                            <div class="testimonial-content">
	                                <blockquote>
	                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat.

	                                </blockquote>
	                            </div>
	                            <div class="testimonial-meta">

	                            <div class="testimonial-image">
	                                <img src="frontend/images/service/author3.png" alt="">
	                            </div>

	                                <div class="testimonial-author">
	                                    <strong class="author-name"></strong>
	                                    <div class="author-info"><span class="subtitle">Almahmud Khan</span><span class="company">Ceo, Aftab Groups</span></div>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="testimonial swiper-slide  has-image">
	                            <div class="testimonial-content">
	                                <blockquote>
	                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat.

	                                </blockquote>
	                            </div>
	                            <div class="testimonial-meta">

	                            <div class="testimonial-image">
	                                <img src="frontend/images/service/author4.png" alt="">
	                            </div>

	                                <div class="testimonial-author">
	                                    <strong class="author-name"></strong>
	                                    <div class="author-info"><span class="subtitle">Almahmud Khan</span><span class="company">Ceo, Aftab Groups</span></div>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="testimonial swiper-slide  has-image">
	                            <div class="testimonial-content">
	                                <blockquote>
	                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat.

	                                </blockquote>
	                            </div>
	                            <div class="testimonial-meta">

	                            <div class="testimonial-image">
	                                <img src="frontend/images/service/author5.png" alt="">
	                            </div>

	                                <div class="testimonial-author">
	                                    <strong class="author-name"></strong>
	                                    <div class="author-info"><span class="subtitle">Almahmud Khan</span><span class="company">Ceo, Aftab Groups</span></div>
	                                </div>
	                            </div>
	                        </li> -->
	                    </ul>

	                </div> <!--testimonial slider-->
	                 <!-- Add Pagination -->
	                <!-- Add Arrows -->
	                <ul class="nav-thumb">
	                    <li class="active"><img alt="single_image" src="frontend/images/home/un-secretary.jpg"/></li>
	                    <li><img alt="single_image" src="frontend/images/home/testimonial-jovana.png"/> </li>
	                    <!-- <li><img alt="single_image" src="frontend/images/home/testim-altrn.png"/> </li>
	                    <li><img alt="single_image" src="frontend/images/home/tes3.jpg"/> </li>
	                    <li><img alt="single_image" src="frontend/images/home/odk-logo.png"/> </li>
	                    <li><img alt="single_image" src="frontend/images/home/tes4.png"/> </li> -->
	                </ul>
	                <div class="swiper-nav">
                        <div class="swiper-button-prev">Prev</div>
                        <div class="swiper-button-next">Next</div>
	                </div>
	                <div class="swiper-pagination"></div>

	            </div>

            </div>
        </section>

        <!--why partner slider -->
        <section class="bond-partner-slider bg-white padb-49 v2">
            <div class="container">
                <ul class="slides">
                    <li style="text-align:right;">
                     <a href="http://radiokfor.com/" target="_blank">  <img alt="owlcarousel-item-img" src="frontend/images/organizations/k4.png" width="80"/></a>
                    </li>
                    <li>
                    <a href="https://fjalor-recnik.com/" target="_blank"><img alt="owlcarousel-item-img" src="frontend/images/organizations/logo-voc-up.png"/>
                    </li></a>
                    <li>
                    <a href="https://fjalor-recnik.com/" target="_blank"><img alt="owlcarousel-item-img" src="frontend/images/organizations/recnik-fjalor.png"/>
                    </li></a>
                    <li>
<!--                    <a href="http://unkt.org/2020/01/01/un75/" target="_blank"><img alt="owlcarousel-item-img" src="frontend/images/organizations/un75.jpg"/>-->
<!--                    </li></a>-->

                </ul>
            </div>
        </section>

    <!-- Footer -->
    <footer class="footer">
    @include('frontend.includes.banner')
    @include('frontend.includes.footer')

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
                </div>
            </div>
        </div>
    </div>

    <a class="go-top vertical-text">
        BACK TO TOP <i class="fa fa-angle-double-right"></i>
    </a>

</body>
</html>
