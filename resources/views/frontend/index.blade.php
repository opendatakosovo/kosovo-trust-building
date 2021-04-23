<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
@include('frontend.includes.head')
</head>
<body class="header_sticky page front-page flat-home5">
    <div class="covidbanner" style="position: absolute; z-index: 100;  width: 100%; ">
        <div class="covidbanner__content">
          <div class="covidbanner__text">
          <strong>Covid 19 Alert:</strong><a href="/covid19" style="color: white"><u> Read More about our Covid 19 Activities and Statistics here.</u></a>
          </div>
        </div>
    </div>
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading...</h2>
        </div>
    </section>
    <!-- Header -->
    <header id="header" class="header clearfix white">
    @include('frontend.includes.header')
    </header><!-- /.header -->

    <!-- Slider -->
    <div class="tp-banner-container" id="home">
        <div class="tp-banner" >
            <ul>
                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="frontend/images/slides/prishtina.jpg" alt="slider-image" />

                    <div class="tp-caption sfr desc-slide center" data-x="35" data-y="253" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        Kosovo Trustbuilding<br> Platform
                    </div>
                    <div class="tp-caption sfl flat-button-slider" data-x="240" data-y="545" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="/who-we-are">Learn More</a><br>
                </div>
                <div class="tp-caption flat-button-slider credit" style="border:none; font-style:italic;" data-x="835" data-y="650" data-speed="500" data-start="3000" data-easing="Power3.easeInOut"><p>Image: UNDCO</p><br>
                </div>
                </li>

                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="frontend/images/slides/playing.jpg" alt="slider-image" />

                    <div class="tp-caption sfr desc-slide center" data-x="35" data-y="253" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        Kosovo Trustbuilding<br> Platform
                    </div>
                    <div class="tp-caption sfl flat-button-slider" data-x="402" data-y="545" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="/who-we-are">Learn More</a></div>
                     <div class="tp-caption flat-button-slider credit" style="border:none; font-style:italic;" data-x="180" data-y="630" data-speed="500" data-start="3000" data-easing="Power3.easeInOut"><p>Image: UNMIK</p><br>
                </li>

                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="frontend/images/slides/covid.jpg" alt="slider-image" />
                    <div class="tp-caption sfl title-slide center" data-x="309" data-y="260" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                        Kosovo Trustbuilding Platform
                    </div>
                    <div class="tp-caption sfr desc-slide center" data-x="195" data-y="383" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        BUILD TRUST
                    </div>
                    <div class="tp-caption sfl flat-button-slider" data-x="502" data-y="545" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="/who-we-are">Read More</a></div>
                     <div class="tp-caption flat-button-slider credit" style="border:none; font-style:italic;" data-x="235" data-y="650" data-speed="500" data-start="3000" data-easing="Power3.easeInOut"><p>Image: UNDCO</p><br>
                </div>
                </li>
            </ul>
        </div>
    </div>

    <section class="bond-row ab3-s1 padb-134">
        <div class="title-section style2">
            <h3 class="title">{{ __('messages.welcome') }}</h3>
        </div><!-- /.title-section style2 -->

        <div class="container">
            <div class="row">

                <div class="col-md-6">
                   <img src="frontend/images/home/youth-assembly3.png">
                </div>

                <div class="col-md-6 padl-44 magt--10">
                    <div class="flat-box-content">
                        <h4 class="sub-title">{{ __('messages.about') }}</h4>
                        <h2 class="title">{{ __('messages.who-we-are') }}</h2>
                        <br><br>
                        <div class="content">
                            <p>{{ __('messages.about.text1') }}</p>
                            <br><br>
                           
                        </div>



                    </div>


                </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bond-row section-home4-blog padb-150">
        <div class="title-section style2">
            <h3 class="title">{{ __('messages.stories') }}</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="title-section style1">
                    <div class="desc">
                        <p>{{ __('messages.latest.news') }}</p>
                    </div>
                </div>

                <div class="blog-shortcode clearfix  blog-grid  has-post-content">

                    <div class="blog-shortcode  blog-grid  has-post-content">

                        <article class="entry col-md-4 col-xs-6">
                            <div class="entry-border">
                                <div class="featured-post">
                                    <a href="#">
                                        <img width="370" height="264" alt="single_image" src="frontend/images/colors.jpg" ></a>
                                </div>
                                <div class="content-post">
                                    <h5><a href="/colors-of-nature">"Colors of nature with Uta and Miljana": Diversity is our strength, to work as one for future generations</a></h5>

                                    <div class="entry-meta clearfix">
                                        <ul>
                                            <li class="post-date">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <span class="date updated" >April 11,2021</span>
                                            </li>
                                        </ul>
                                    </div><!-- .meta-post -->

                                </div>
                            </div>
                        </article><!-- /.entry -->

                        <article class="entry col-md-4 col-xs-6">
                            <div class="entry-border">
                                <div class="featured-post">
                                    <a href="/ktb-story">
                                        <img width="370" height="264" src="frontend/images/ktb-digweek.png" class="attachment-pictor-portfolio-thumb-one-three size-pictor-portfolio-thumb-one-three wp-post-image" alt="2">                            </a>
                                </div>
                                <div class="content-post">
                                    <h5><a href="/ktb-story">Three organizations and one goal: A digital tool for building trust!</a></h5>

                                    <div class="entry-meta clearfix">
                                        <ul>
                                            <li class="post-date">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <span class="date updated" >April 11,2021</span>
                                            </li>
                                        </ul>
                                    </div><!-- .meta-post -->

                                </div>
                            </div>
                        </article><!-- /.entry -->

                        <article class="entry col-md-4 col-xs-6">
                            <div class="entry-border">
                                <div class="featured-post">
                                    <a href="blog_single_v1.html">
                                        <img width="370" height="264" alt="single_image" src="frontend/images/podcast.png" ></a>
                                </div>
                                <div class="content-post">
                                    <h5><a href="/podcast-story">Podcast: Rock as a common language</a></h5>

                                   <div class="entry-meta clearfix">
                                        <ul>
                                            <li class="post-date">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <span class="date updated" >April 11,2021</span>
                                            </li>
                                        </ul>
                                    </div><!-- .meta-post -->

                                </div>
                            </div>
                        </article><!-- /.entry -->
                    </div>

                </div>
                <div class="flat-spacer h12"></div>
                <a href="/stories" class="flat-button center-rx">Read More About It</a>

            </div><!-- /.row -->

        </div>
    </section>


    <section class="section-home5-callout2">
        <footer class="footer">
        @include('frontend.includes.banner')
        </footer>
    </section>

    <section class="padb-49">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br><br><br>
                    <h2 class="title" style="text-align: center;">{{ __('messages.about.text3') }}</h2><br><br>
                        <div class="row pt-3" >



                            <div class="col input-group"  >
                               <select class="custom-select" aria-label="Selected Area" name="query[area]" id="query_area"><option value="">Where</option>
                                <option value="22">Deçan/Dečani</option>
                                <option value="33">Dragash/Dragaš</option>
                                <option value="2">Ferizaj/Uroševac</option>
                                <option value="28">Fushë Kosovë/Kosovo Polje</option></select>
                            </div>



                            <div class="col input-group">
                                <select class="custom-select" aria-label="Selected Initiative Status" name="query[initiative_status]" id="query_initiative_status"><option value="">Category</option>
                                <option value="1">Access to justice</option>
                                <option value="3">Economic empowerment and environment</option>
                                <option value="4">Media and communication</option>
                                <option value="2">Education</option>
                                <option value="5">Good governance and access to services</option>
                                <option value="6">Inter-religious trust-building</option></select>
                             </div>



                             <div class="col input-group">
                                <select class="custom-select" aria-label="Selected Initiative Status" name="query[initiative_status]" id="query_initiative_status"><option value="">Status</option>
                                <option value="1">Completed</option>
                                <option value="3">In progress</option>
                                <option value="4">No activity</option>
                                <option value="2">Partially completed</option></select>
                             </div>




                             <div class="col input-group">
                                <select class="custom-select" aria-label="Selected Actor" name="query[actor]" id="query_actor"><option value="">Actors</option>
                                <option value="186"> Alliance Française de Pristina</option>
                                <option value="136"> Aspen Institute Germany</option>
                                <option value="305">A.U.K - Training and Development Institute</option>
                                <option value="312">AMPEK</option>
                                </select>
                             </div>
                          </div><br>
                          <div class="box-readmore center-rx">  <input data-toggle="modal" data-target="#myModal2" class="readmore" type="submit" name="commit" value="Search initiatives" class="btn btn-primary hvr-grow" data-disable-with="Search initiatives" /></div>
                 </form>      </div>
                    </div>
                 </div>
                 <div>
                    <div id="results"></div>
                 </div>
                </div>
            </div>
        </div>
    </section>

   
    <!-- home counter -->
     <section class="bond-row bond-section-counter padb-145 parallax parallax14">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="bond-counterbox bond-emotsmile style1 v1">
                        <div class="icon-image">
                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="808" data-speed="2000" data-waypoint-active="yes">808</div>
                        </div>
                        <div class="counter-countent">
                            <div class="icon-img">
                                <i class="icon-check icons"></i>
                            </div>
                            <div class="content">
                                <p>{{ __('messages.stories') }}</p>
                            </div>
                        </div>
                    </div><!-- /.bond-counterbox center style1 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="bond-counterbox bond-drawer style1 ">
                        <div class="icon-image">
                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="502" data-speed="2000" data-waypoint-active="yes">502</div>
                        </div>
                        <div class="counter-countent">
                            <div class="icon-img">
                                <i class="icon-rocket icons"></i>
                            </div>
                            <div class="content">
                                <p>{{ __('messages.initiatives') }}</p>
                            </div>
                        </div>
                    </div><!-- /.bond-counterbox center style1 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="bond-counterbox bond-trash style1 v3">
                        <div class="icon-image">
                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="362" data-speed="2000" data-waypoint-active="yes">362</div>
                        </div>
                        <div class="counter-countent">
                            <div class="icon-img">
                                <i class="icon-user icons"></i>
                            </div>
                            <div class="content">
                                <p>{{ __('messages.organizations') }}</p>
                            </div>
                        </div>
                    </div><!-- /.bond-counterbox center style1 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="bond-counterbox bond-present style1 v4">
                        <div class="icon-image">

                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="100" data-speed="2000" data-waypoint-active="yes">100</div>
                        </div>
                        <div class="counter-countent">
                            <div class="icon-img">
                                <i class="icon-trophy icons"></i>
                            </div>
                            <div class="content">
                                <p>{{ __('messages.pledges') }}</p>
                            </div>
                        </div>
                    </div><!-- /.bond-counterbox center style1 -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>


       <section class="bond-row padb-49">
        <div class="title-section style2">
            <h3 class="title">{{ __('messages.projects') }}</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="title-section style1">
                    <h3 class="title">{{ __('messages.gallery') }}</h3>
                    <div class="desc">
                        <p>{{ __('messages.forums') }}</p>
                    </div>
                </div><!-- /.title-section style1 -->
            </div><!-- /.col-md-12 -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
                <div class="bond-portfolio four_columns">
                    <div class="portfolio-container clearfix no-margin one-four ">
                        <div class="item builder web_design">
                            <div class="featured-post">
                                <a class="popup-gallery" href="https://www.flickr.com/photos/185701275@N02/albums/72157713239673242">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="https://live.staticflickr.com/65535/49579926517_f05ff9cd2d_k.jpg" alt="International Mother Language Day">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="International Mother Language Day" href="https://www.flickr.com/photos/185701275@N02/albums/72157713239673242">International Mother Language Day</a>
                                <!-- <p>1</p> -->
                            </div>
                        </div>
                        <div class="item builder development">
                            <div class="featured-post">
                                <a class="popup-gallery" href="https://www.flickr.com/photos/185701275@N02/albums/72157713239673242">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="https://live.staticflickr.com/65535/49579923632_fcd145ef09_k.jpg" alt="International Mother Language Day">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="International Mother Language Day" href="https://www.flickr.com/photos/185701275@N02/albums/72157713239673242">International Mother Language Day</a>
                                <!-- <p>2</p> -->
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
                                    <img src="https://live.staticflickr.com/65535/49578379736_e59a6e6961_b.jpg" alt="CSO Dialogue Forum">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="CSO Dialogue Forum" href="https://www.flickr.com/photos/185701275@N02/albums/72157713235821581">CSO Dialogue Forum</a>
                                <!-- <p>Print design</p> -->
                            </div>
                        </div>
                        <div class="item builder photography">
                            <div class="featured-post">
                                <a class="popup-gallery" href="https://www.flickr.com/photos/185701275@N02/albums/72157713235821581">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="https://live.staticflickr.com/65535/49577873363_1088f3fce1_b.jpg" alt="CSO Dialogue Forum">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="CSO Dialogue Forum" href="https://www.flickr.com/photos/185701275@N02/albums/72157713235821581">CSO Dialogue Forum</a>
                                <!-- <p>Photography</p> -->
                            </div>
                        </div>

                        <div class="item builder web_design">
                            <div class="featured-post">
                                <a class="popup-gallery" href="https://www.flickr.com/photos/185701275@N02/albums/72157713235821581">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="https://live.staticflickr.com/65535/49304344461_02dc12a829_k.jpg" alt="Kosovo Trust-Building Forum">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="Kosovo Trust-Building Forum" href="https://www.flickr.com/photos/185701275@N02/albums/72157712444215543">Kosovo Trust-Building Forum</a>
                                <!-- <p>Web Design</p> -->
                            </div>
                        </div>
                        <div class="item builder development">
                            <div class="featured-post">
                                <a class="popup-gallery" href="https://www.flickr.com/photos/185701275@N02/albums/72157712444215543">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="https://live.staticflickr.com/65535/49303858308_ba7b246914_k.jpg" alt="Kosovo Trust-Building Forum">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="Kosovo Trust-Building Forum" href="https://www.flickr.com/photos/185701275@N02/albums/72157712444215543">Kosovo Trust-Building Forum</a>
                                <!-- <p>Development</p> -->
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
                                    <img src="https://live.staticflickr.com/65535/49233001233_deb6811c56_b.jpg" alt="Adaptation of Municipalities">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="Adaptation of Municipalities" href="https://www.flickr.com/photos/185701275@N02/albums/72157712244085152">Adaptation of Municipalities</a>
                                <!-- <p>Print design</p> -->
                            </div>
                        </div>
                        <div class="item builder photography">
                            <div class="featured-post">
                                <a class="popup-gallery" href="https://www.flickr.com/photos/185701275@N02/albums/72157712244085152">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="https://live.staticflickr.com/65535/49233690137_3570a1c7d6_b.jpg" alt="Adaptation of Municipalities">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="Adaptation of Municipalities" href="https://www.flickr.com/photos/185701275@N02/albums/72157712244085152">Adaptation of Municipalities</a>
                                <!-- <p>Photography</p> -->
                            </div>
                        </div>
                    </div><!-- /.porfolio container -->
                </div> <!-- bond porfolio -->

                <a class="box-readmore center-rx" href="/gallery">{{ __('messages.view-more') }}</a>
                <div class="flat-spacer h85"></div>
            </div>

        </div>
    </section>
    

       <!-- Bond home 5 opprtunity -->
    <section class="bond-row padt-130 padb-143 parallax parallax17">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-1">
                    <div class="flat-box-content padl-30">
                        <h1 class="title" style="color:white">{{ __('messages.how.contribute') }}</h1>
                        <h2 class="sub-title">{{ __('messages.contribute.text1') }}</h2>
                        <p style="color: white;">{{ __('messages.pledges.text1') }}</p>
                        <a class="flat-button" href="/trustbuildingnetworkk">{{ __('messages.view-more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


 

<!-- 
    <section class="bond-row padb-110  bg-f5">
        <div class="title-section style2">
            <h3 class="title">QUOTES</h3>
        </div>
        <div class="container">
            <div class="title-section style1 row mgb-49">
                <h3 class="title">{{ __('messages.testimonials') }}</h3>
                <div class="desc">
                    <p>{{ __('messages.testimonials.text') }}</p>
                </div>
            </div>
            <div class="bond-empty-spacer"></div>
            <div id="testimonial-slider-box">
            <div class="row">

                <div class="testimonial-slider bond-testimonials-flexslider fbg-white v3 swiper-container-horizontal" data-margin="0" data-slides_per_view="1" data-autoplay="" data-hide_control="yes" data-hide_buttons="yes">

                    <ul class="swiper-wrapper" style="transform: translate3d(-1200px, 0px, 0px); transition-duration: 0ms;">


                        <li class="testimonial swiper-slide has-image swiper-slide-active" data-swiper-slide-index="0" style="width: 600px;">
                            <div class="testimonial-content">
                                <blockquote>
                                {{ __('messages.testimonial2') }}
                                </blockquote>
                            </div>
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

                     </ul>
                    
            <div class="swiper-nav">
                <div class="swiper-button-prev">Prev</div>
                <div class="swiper-button-next">Next</div>
            </div>
            <div class="swiper-pagination swiper-pagination-fraction"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">5</span></div>

            </div>
                </div> 
            </div>
        </div>
    </section> -->

    <section class="bond-partner-slider v2">
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
                        <p>Copyright (C) Kosovo Trust Building 2021</p>
                    </div>

                    <ul class="bond-socials text-right">
                        <li class="facebook">
                            <a href="https://www.facebook.com/trustbuildingks/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="instagram">
                            <a href="https://www.instagram.com/trustbuildingks/"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com/trustbuildingks"><i class="fa fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a class="go-top show vertical-text">
        BACK TO TOP <i class="fa fa-angle-double-right"></i>
    </a>

    <script type="text/javascript">

  var url = "{{ route('changeLang') }}";

  $(".changeLang").change(function(){
      window.location.href = url + "?lang="+ $(this).val();
  });

</script>

</body>
</html>
