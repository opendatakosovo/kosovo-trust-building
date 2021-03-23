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
                    <img src="frontend/images/slides/1.jpg" alt="slider-image" />
                    
                    <div class="tp-caption sfr desc-slide center" data-x="35" data-y="253" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        Kosovo Trust-Building<br> Platform
                    </div>    
                    <div class="tp-caption sfl flat-button-slider" data-x="35" data-y="545" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Learn More</a></div>
                </li>

                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="frontend/images/slides/2.jpg" alt="slider-image" />
                    
                    <div class="tp-caption sfr desc-slide center" data-x="35" data-y="253" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        Kosovo Trust-Building<br> Platform
                    </div>    
                    <div class="tp-caption sfl flat-button-slider" data-x="35" data-y="545" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Learn More</a></div>
                </li>

                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="frontend/images/slides/3.jpg" alt="slider-image" />
                    <div class="tp-caption sfl title-slide center" data-x="309" data-y="160" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                        Kosovo Trust-Building Platform
                    </div>  
                    <div class="tp-caption sfr desc-slide center" data-x="195" data-y="253" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        BUILD TRUST
                    </div>  

                    <div class="tp-caption sfl flat-content-slide color-white text-center" data-x="315" data-y="389" data-speed="1000" data-start="2500" data-easing="Power3.easeInOut">We are working towards building trust in Kosovo.
                    </div>  
                     
                    <div class="tp-caption sfl flat-button-slider" data-x="502" data-y="545" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Read More</a></div>
                </li>
            </ul>
        </div>
    </div>


    <section class="bond-row ab3-s1 padb-134">
        <div class="title-section style2">
            <h3 class="title">WELCOME</h3>                                       
        </div><!-- /.title-section style2 -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">                        
                    <div class="title-section style1">
                        <h3 class="title">Welcome To Kosovo Trust Building</h3>
                                                  
                    </div><!-- /.title-section style1 -->
                </div><!-- /.col-md-12 -->
            
                <div class="col-md-6">
                   <img src="frontend/images/home/18.jpg">
                </div>

                <div class="col-md-6 padl-44 magt--10">
                    <div class="flat-box-content">
                        <h4 class="sub-title">ABOUT US</h4>
                        <h2 class="title">Who are we?</h2>
                        <div class="content">
                            <p>In May 2018, with the support of UNKT, UNMIK gathered 120 participants representing a broad cross-section of Kosovo society, including grassroots actors, media, youth leaders and municipal leadership from both majority and non-majority communities, to exchange perspectives on building trust.</p>
                            <br><br>
                            <p>
                                This platform is a continuation of the Forum’s discussions on actions needed to build a more peaceful and inclusive society and seeks to promote grassroots and civil society initiatives and efforts by international organizations, as well as institutional policies and actions to advance trust-building in Kosovo.
                            </p>
                        </div>
                        
                           
                            
                    </div>

                    
                </div>

                <div class="col-md-12">
                    <br><br><br>
                    <h2 class="title" style="text-align: center;">How are we doing it?</h2><br><br>
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
                          <div class="box-readmore center-rx">  <input type="submit" name="commit" value="Search initiatives" class="btn btn-primary hvr-grow" data-disable-with="Search initiatives" /></div>
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

    <section class="section-home5-callout2">
        <footer class="footer"> 
        @include('frontend.includes.banner')
        </footer>                    
    </section>

    <!-- <section class="bond-row great-service v3 padb-25">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6 padt-82 padr-42">
                    <div class="iconbox effect1 clearfix inline-right no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-bubble"></span></div>
                            <h4 class="box-title">#LANGUAGE</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip
                        </div>
                    </div>

                    <div class="iconbox effect1 clearfix  inline-right no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-present"></span></div>
                            <h4 class="box-title">#YOUTH</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.
                            
                        </div>
                    </div>

                    <div class="iconbox effect1 clearfix  inline-right no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-shuffle"></span></div>
                            <h4 class="box-title">#GENDER EQUALITY</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.
                            
                        </div>
                    </div>

                    <div class="iconbox effect1 clearfix  inline-right no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-support"></span></div>
                            <h4 class="box-title">#HUMAN RIGHTS</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.
                            
                        </div>
                    </div>
                </div>  <!-- /.col-md-4 -->

                <!-- <div class="col-md-4 col-xs-6 text-center">
                    <img alt="images" src="frontend/images/home/pixlr-bg-result.png" style="max-width: 120%;">
                </div> 
            </div>  
        </div>

        <div class="img-right">
            <div class="absolute clearfix col-xs-offset-6 col-md-6 col-xs-6 padlr-260_120">
                <div class="iconbox effect1 white-style ">
                    <div class="box-header">
                        <h2 class="box-title">Find an event, gathering, online chat forums and more!</h2>
                    </div>
                    
                </div>
            </div>
        </div>  
    </section>  -->

    

    <!-- Bond portfolio home5 -->
    <section class="bond-row padb-49">
        <div class="title-section style2">
            <h3 class="title">Projects</h3>                                       
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="title-section style1">
                    <h3 class="title">Our Recent Projects</h3>
                    <div class="desc">
                        <p>Forums, Events and More.</p>
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
                                <a class="popup-gallery" href="#">
                                    <div class="overlay">
                                        <div class="link">
                                            <div class="icon-zoom"></div>
                                        </div>
                                    </div>
                                    <img src="https://live.staticflickr.com/65535/49579926517_f05ff9cd2d_k.jpg" alt="International Mother Language Day">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">International Mother Language Day</a>
                                <p>1</p>
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
                                    <img src="https://live.staticflickr.com/65535/49579923632_fcd145ef09_k.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">International Mother Language Day</a>
                                <p>2</p>
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
                                    <img src="https://live.staticflickr.com/65535/49578379736_e59a6e6961_b.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">CSO Dialogue Forum</a>
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
                                    <img src="https://live.staticflickr.com/65535/49577873363_1088f3fce1_b.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">CSO Dialogue Forum</a>
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
                                    <img src="https://live.staticflickr.com/65535/49304344461_02dc12a829_k.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">Kosovo Trust-Building Forum</a>
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
                                    <img src="https://live.staticflickr.com/65535/49303858308_ba7b246914_k.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">Kosovo Trust-Building Forum</a>
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
                                    <img src="https://live.staticflickr.com/65535/49233001233_deb6811c56_b.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">Adaptation of Municipalities</a>
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
                                    <img src="https://live.staticflickr.com/65535/49233690137_3570a1c7d6_b.jpg" alt="GHUNE KHAOA ROAD">
                                </a>
                            </div>
                            <div class="title-post">
                                <a title="GHUNE KHAOA ROAD" href="#">Adaptation of Municipalities</a>
                                <p>Photography</p>
                            </div>
                        </div>  
                    </div><!-- /.porfolio container -->
                </div> <!-- bond porfolio -->
                
                <a class="box-readmore center-rx" href="/galleryy">VIEW MORE</a>
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
                        <h1 class="title">How you can Contribute</h1>
                        <h2 class="sub-title">MAKE BIG CHANGES BY STARTING SMALL</h2>
                        <p style="color: black;">The full list of recommendations and final report are available in English, Albanian and Serbian languages. This platform is a continuation of the Forum’s discussions on actions needed to build a more peaceful and inclusive society and seeks to promote grassroots and civil society initiatives and efforts by international organizations, as well as institutional policies and actions to advance trust-building in Kosovo.</p>
                        <a class="flat-button" href="/trustbuildingnetworkk">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- welcome to bond -->
    <section class="bond-row section-home5-welcome padb-76">
        <div class="title-section style2">
            <h3 class="title">Support</h3>                                       
        </div><!-- /.title-section style2 -->
<br><Br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                        
                    <div class="title-section style1">
                        <h3 class="title">Initatives</h3>
                        <div class="desc">
                            <p>In May 2018, with the support of UNKT, UNMIK gathered 120 participants representing a broad cross-section of Kosovo society, including grassroots actors, media, youth leaders and municipal leadership from both majority and non-majority communities, to exchange perspectives on building trust. The main outcome of this Trust-Building Forum (TBF) is a list of 135 recommendations covering the areas of:</p>
                        </div>                            
                    </div><!-- /.title-section style1 -->
                    <div class="flat-spacer h18"></div>
                </div><!-- /.col-md-12 -->
            </div>

            <div class="row " data-item="4" data-nav="true" data-dots="false" data-auto="false" data-margin="30">
                <div class="item col-md-4 col-xs-6 pad-0_40">
                    <div class="bond-iconbox square outtop bg-title2 border">
                        <div class="icon-image">
                            <span class="icons icon-user"></span>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Youth</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod naynare tuhi bura na lage khudhi</p>
                            <a class="readmore" href="/projectss">More</a>

                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->

                <div class="item col-md-4 col-xs-6 pad-0_40">
                    <div class="bond-iconbox square outtop bg-title2 border">
                        <div class="icon-image">
                            <span class="icons icon-people"></span>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Gender</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod naynare tuhi bura na lage khudhi</p>
                            <a class="readmore" href="/projectss">More</a>
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->

                <div class="item col-md-4 col-xs-6 pad-0_40">
                    <div class="bond-iconbox square outtop bg-title2 border">
                        <div class="icon-image">
                            <span class="icons icon-graduation"></span>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Education</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod naynare tuhi bura na lage khudhi</p>
                            <a class="readmore" href="/projectss">More</a>
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->

                <div class="item col-md-4 col-xs-6 pad-0_40">
                    <div class="bond-iconbox square outtop bg-title2 border">
                        <div class="icon-image">
                            <span class="icons icon-camrecorder"></span>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Media</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod naynare tuhi bura na lage khudhi</p>
                            <a class="readmore" href="/projectss">More</a>
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->

                <div class="item col-md-4 col-xs-6 pad-0_40">
                    <div class="bond-iconbox square outtop bg-title2 border">
                        <div class="icon-image">
                            <span class="icons icon-music-tone-alt"></span>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Culture</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod naynare tuhi bura na lage khudhi</p>
                            <a class="readmore" href="/projectss">More</a>
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->

                <div class="item col-md-4 col-xs-6 pad-0_40">
                    <div class="bond-iconbox square outtop bg-title2 border">
                        <div class="icon-image">
                            <span class="icons icon-book-open"></span>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Religion</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod naynare tuhi bura na lage khudhi</p>
                            <a class="readmore" href="/projectss">More</a>
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->

            </div><!-- /.bond-iconbox-fullwidth -->
        </div>
    </section>

    <!-- home counter -->
    <section class="bond-row section-home4-counter padb-145 parallax parallax14">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="bond-counterbox bond-emotsmile style1 v1">
                        <div class="icon-image">
                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="327" data-speed="2000" data-waypoint-active="yes">327</div>
                        </div>
                        <div class="counter-countent">
                            <div class="icon-img">
                                <i class="icon-check icons"></i>
                            </div>
                            <div class="content">
                                <p>Recommendations</p>
                            </div>
                        </div>
                    </div><!-- /.bond-counterbox center style1 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="bond-counterbox bond-drawer style1 ">
                        <div class="icon-image">
                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="8522" data-speed="2000" data-waypoint-active="yes">8522</div>
                        </div>
                        <div class="counter-countent">                            
                            <div class="icon-img">
                                <i class="icon-rocket icons"></i>
                            </div>
                            <div class="content">
                                <p>Initatives</p>
                            </div>
                        </div>
                    </div><!-- /.bond-counterbox center style1 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="bond-counterbox bond-trash style1 v3">
                        <div class="icon-image">
                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="23613" data-speed="2000" data-waypoint-active="yes">23613</div>
                        </div>
                        <div class="counter-countent">                            
                            <div class="icon-img">
                                <i class="icon-user icons"></i>                        
                            </div>
                            <div class="content">
                                <p>Actors</p>
                            </div>
                        </div>
                    </div><!-- /.bond-counterbox center style1 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="bond-counterbox bond-present style1 v4">
                        <div class="icon-image">
                            
                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="163" data-speed="2000" data-waypoint-active="yes">163 </div>
                        </div>
                        <div class="counter-countent">                            
                            <div class="icon-img">
                                <i class="icon-trophy icons"></i>
                            </div>
                            <div class="content">
                                <p>Champions</p>
                            </div>
                        </div>
                    </div><!-- /.bond-counterbox center style1 -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    

      

    <section class="bond-row section-home4-blog padb-150">
        <div class="title-section style2">
            <h3 class="title">Stories</h3>                                       
        </div>
        <div class="container">
            <div class="row">
                <div class="title-section style1">
                    <div class="desc">
                        <p>Our Latest News</p>
                    </div>                            
                </div>

            <div class="blog-shortcode clearfix  blog-grid  has-post-content">

                <div class="blog-shortcode  blog-grid  has-post-content">
            
                    <article class="entry col-md-4 col-xs-6">
                        <div class="entry-border">
                            <div class="featured-post">
                                <a href="#">                          
                                    <img width="370" height="264" alt="single_image" src="https://kosovotrustbuilding.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc29GIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--279ed72fe43a154595b6c4ec9eafac759c2abade/bild-ez-logo%20res.jpg?locale=en" >                           </a>
                            </div>
                            <div class="content-post">
                                <h5><a href="blog_single_v1.html">Apply for the small project grants of the German Embassy...</a></h5>

                                <div class="entry-meta clearfix">
                                    <ul>

                                        <li class="post-author">
                                            <span class="author vcard"><a class="url fn n" href="#" title="View all posts by admin" rel="author"></a>Call for Proposal</a></span>       </li>
                                        
                                        <li class="post-date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span class="date updated" >03/02/2021</span>
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
                                    <img width="370" height="264" src="https://kosovotrustbuilding.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc2NGIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--ac162a3fa6cb8b7e021ec4354b4dedd246364b33/Screenshot_1.png?locale=en" class="attachment-pictor-portfolio-thumb-one-three size-pictor-portfolio-thumb-one-three wp-post-image" alt="2">                            </a>
                            </div>
                            <div class="content-post">
                                <h5><a href="blog_single_v1.html">German NGO “Help” encourages MFK’s WEE Program...</a></h5>

                                <div class="entry-meta clearfix">
                                    <ul>

                                        <li class="post-author">
                                            <span class="author vcard"><a class="url fn n" href="#" title="View all posts by admin" rel="author">MFK’s WEE Program</a></span>       </li>
                                        
                                        <li class="post-date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span class="date updated" >June 4, 2016</span>
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
                                    <img width="370" height="264" alt="single_image" src="https://kosovotrustbuilding.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcjBGIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--824f68f9172d9fcd74ec8c5fb1ff3d86fb305fb2/140428697_4218642854815701_1317144363911938559_o.jpg?locale=en" >                           </a>
                            </div>
                            <div class="content-post">
                                <h5><a href="blog_single_v1.html">International Organization for Migration provides assistance to flood victims...</a></h5>

                                <div class="entry-meta clearfix">
                                    <ul>

                                        <li class="post-author">
                                            <span class="author vcard"> <a class="url fn n" href="#" title="View all posts by admin" rel="author">Aid to Flood Victims</a></span>       </li>
                                        
                                        <li class="post-date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span class="date updated" >June 4, 2016</span>
                                        </li>

                                    </ul>          
                                </div><!-- .meta-post -->                           
                                
                            </div>
                        </div>
                    </article><!-- /.entry -->     
                    </div>   

                </div>
                <div class="flat-spacer h12"></div>
                <a href="/storiess" class="flat-button center-rx">Read More About It</a>

            </div><!-- /.row -->

        </div>
    </section>

    <section class="bond-row padb-110  bg-f5">
        <div class="title-section style2">
            <h3 class="title">TESTIMONIAL</h3>                                       
        </div><!-- /.title-section style2 -->
        <div class="container">
            <div class="title-section style1 row mgb-49">
                <h3 class="title">WHAT PEOPLE SAY ABOUT US</h3>
                <div class="desc">
                    <p>We Are Awesome</p>
                </div>                            
            </div><!-- /.title-section style1 -->
            <div class="bond-empty-spacer"></div>
            <div id="testimonial-slider-box">
            <div class="row">
            
                <div class="testimonial-slider bond-testimonials-flexslider fbg-white v3 swiper-container-horizontal" data-margin="0" data-slides_per_view="2" data-autoplay="" data-hide_control="yes" data-hide_buttons="yes">          
            
                    <ul class="swiper-wrapper" style="transform: translate3d(-1200px, 0px, 0px); transition-duration: 0ms;"><li class="testimonial swiper-slide  has-image swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 600px;">
                            <div class="testimonial-content">
                                <blockquote>
                                Our world is suffering from a bad case of "Trust Deficit Disorder." [...] There is no way forward but collective, common-sense action for the common good. This is how we can rebuild trust. 
                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                
                            <div class="testimonial-image">
                                <img src="frontend/images/home/tes2.png" alt="">
                            </div>
                        
                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">THomas Neil</span><span class="company">Ceo, Marmar Bros</span></div>
                                </div>
                            </div>
                        </li><li class="testimonial swiper-slide has-image swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="4" style="width: 600px;">
                            <div class="testimonial-content">
                                <blockquote>
                                Our world is suffering from a bad case of "Trust Deficit Disorder." [...] There is no way forward but collective, common-sense action for the common good. This is how we can rebuild trust.

                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                
                            <div class="testimonial-image">
                                <img src="frontend/images/home/tes1.jpg" alt="">
                            </div>
                        
                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">Jovana Radosavljević</span><span class="company">NSI Executive Director</span></div>
                                </div>
                            </div>
                        </li>          
            
                        <li class="testimonial swiper-slide has-image swiper-slide-active" data-swiper-slide-index="0" style="width: 600px;">
                            <div class="testimonial-content">
                                <blockquote>
                                I sincerely hope you will find the Kosovo Trustbuilding Platform useful in your worthy work, and in moments when you need inspiration to move forward. In these difficult times for our society, and our world, we need trustbuilding more than ever.
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
                
                       <li class="testimonial swiper-slide has-image swiper-slide-next" data-swiper-slide-index="1" style="width: 600px;">
                            <div class="testimonial-content">
                                <blockquote>
                                Our world is suffering from a bad case of "Trust Deficit Disorder." [...] There is no way forward but collective, common-sense action for the common good. This is how we can rebuild trust.

                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                
                            <div class="testimonial-image">
                                <img src="frontend/images/home/un-secretary.jpg" alt="">
                            </div>
                        
                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">General António Guterres</span><span class="company">UN Secretary</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="testimonial swiper-slide  has-image" data-swiper-slide-index="2" style="width: 600px;">
                            <div class="testimonial-content">
                                <blockquote>
                                Our world is suffering from a bad case of "Trust Deficit Disorder." [...] There is no way forward but collective, common-sense action for the common good. This is how we can rebuild trust.

                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                
                            <div class="testimonial-image">
                                <img src="frontend/images/home/tes1.jpg" alt="">
                            </div>
                        
                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">Almahmud Khan</span><span class="company">Ceo, Aftab Groups</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="testimonial swiper-slide  has-image" data-swiper-slide-index="3" style="width: 600px;">
                            <div class="testimonial-content">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teem por incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniaeim, quis nostrud exerciea commodo consequat. 


                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                
                            <div class="testimonial-image">
                                <img src="frontend/images/home/tes2.png" alt="">
                            </div>
                        
                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">THomas Neil</span><span class="company">Ceo, Marmar Bros</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="testimonial swiper-slide  has-image" data-swiper-slide-index="4" style="width: 600px;">
                            <div class="testimonial-content">
                                <blockquote>
                                Our world is suffering from a bad case of "Trust Deficit Disorder." [...] There is no way forward but collective, common-sense action for the common good. This is how we can rebuild trust.
                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                
                            <div class="testimonial-image">
                                <img src="frontend/images/home/tes1.jpg" alt="">
                            </div>
                        
                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">Almahmud Khan</span><span class="company">Ceo, Aftab Groups</span></div>
                                </div>
                            </div>
                        </li>
                    <li class="testimonial swiper-slide  has-image swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 600px;">
                            <div class="testimonial-content">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teem por incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniaeim, quis nostrud exerciea commodo consequat. 
                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                
                            <div class="testimonial-image">
                                <img src="frontend/images/home/tes1.jpg" alt="">
                            </div>
                        
                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">Almahmud Khan</span><span class="company">Ceo, Aftab Groups</span></div>
                                </div>
                            </div>
                        </li><li class="testimonial swiper-slide  has-image swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 600px;">
                            <div class="testimonial-content">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teem por incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniaeim, quis nostrud exerciea commodo consequat. 


                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                
                            <div class="testimonial-image">
                                <img src="frontend/images/home/tes2.png" alt="">
                            </div>
                        
                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">THomas Neil</span><span class="company">Ceo, Marmar Bros</span></div>
                                </div>
                            </div>
                        </li></ul>
                     <!-- Add Arrows -->
            <div class="swiper-nav">                    
                <div class="swiper-button-prev">Prev</div>
                <div class="swiper-button-next">Next</div>
            </div>
            <div class="swiper-pagination swiper-pagination-fraction"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">5</span></div>   

            </div>
                </div> <!--testimonial slider-->
            </div>
            
             <!-- Add Pagination -->
           

        </div>
    </section>  

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
                    <a href="http://unkt.org/2020/01/01/un75/" target="_blank"><img alt="owlcarousel-item-img" src="frontend/images/organizations/un75.jpg"/>
                    </li></a>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">  
       

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
                        <p>Copyright (C) Kosovo Trust Building 2021</p>
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
    
    <a class="go-top show vertical-text">
        BACK TO TOP <i class="fa fa-angle-double-right"></i>
    </a>

    
</body>
</html>