<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    @include('frontend.includes.head')

</head>
<body class=" page front-page">



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
                                <h1 class="title">{{ __('messages.trb') }}</h1>
                            </div><!-- /.page-title-captions -->
                        </div><!-- /.page-title-captions -->


                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->
    </div>

    <section class="bond-row padb-110" style="padding-bottom: 120px; background: url('frontend/images/home/pledge-background.png') no-repeat center fixed;
    background-size: cover; ">
            <div class="title-section style2">
                <h3 class="title">{{ __('messages.network') }}</h3>
            </div><!-- /.title-section style2 -->
            <div class="container">
                <div class="title-section style1 row mgb-49">
                    <h3 class="title" style="color:#06c6a9">{{ __('messages.pledges') }}</h3>
                    <div class="desc">
                        <p style="color:#808080`;">{{ __('messages.pledges.text') }}</p>
                    </div>
                </div><!-- /.title-section style1 -->
                <div class="bond-empty-spacer"></div>
                <div id = "testimonial-slider-box">
                <div class="row">

                    <section class="section-testimonials">
                        <div class="slider">
                          <div class="slider__slides">
                            <div class="slider__slide slider__slide--1">
                              <figure class="testimonial slider__slide-content">
                                <blockquote class="testimonial__text">
                                  <img class="testimonial__quotation-marks" src="frontend/images/pattern-quotes.svg" alt="quotation marks">
                                  <p class="testimonial__quote">
                                  {{ __('messages.odk-pledge') }}
                                  </p>
                                  <cite class="testimonial__cite">
                                    <span class="testimonial__cite--name">Open Data Kosovo</span>
                                  </cite>
                                </blockquote>
                                <div class="testimonial__img">
                                  <img class="testimonial__photo" src="frontend/images/home/odk-logo-transparent.png" style="max-height: 400px;" alt="Open Data Kosovo">
                                </div>
                              </figure>
                            </div>

                            <div class="slider__slide slider__slide--2">
                              <figure class="testimonial slider__slide-content">
                                <blockquote class="testimonial__text">
                                  <img class="testimonial__quotation-marks" src="frontend/images/pattern-quotes.svg" alt="quotation marks">
                                  <p class="testimonial__quote">
                                  {{ __('messages.alternativa-pledge') }}
                                  </p>
                                  <cite class="testimonial__cite">
                                    <span class="testimonial__cite--name">Alteratniva</span>
                                  </cite>
                                </blockquote>
                                <div class="testimonial__img">
                                  <img class="testimonial__photo" src="frontend/images/home/altrn-logo.png" style="max-height: 400px;" alt="Alternativa">
                                </div>
                              </figure>
                            </div>


                            <div class="slider__slide slider__slide--2">
                                <figure class="testimonial slider__slide-content">
                                  <blockquote class="testimonial__text">
                                    <img class="testimonial__quotation-marks" src="frontend/images/pattern-quotes.svg" alt="quotation marks">
                                    <p class="testimonial__quote">
                                    {{ __('messages.nsi-pledge') }}
                                    </p>
                                    <cite class="testimonial__cite">
                                      <span class="testimonial__cite--name">Jovana Radosavjlević</span><br>
                                      <span class="testimonial__cite--role">New Social Initiative</span>
                                    </cite>
                                  </blockquote>
                                  <div class="testimonial__img">
                                    <img class="testimonial__photo" src="frontend/images/home/pledge-jovana.png" style="max-height: 400px;" alt="John Tarkpor">
                                  </div>
                                </figure>
                              </div>

                              <!-- <div class="slider__slide slider__slide--2">
                                <figure class="testimonial slider__slide-content">
                                  <blockquote class="testimonial__text">
                                    <img class="testimonial__quotation-marks" src="frontend/images/pattern-quotes.svg" alt="quotation marks">
                                    <p class="testimonial__quote">
                                      “ We pledge that we will work on empowering non-majority communities for participation in Kosovo social and institutional life and increasing trust among communities.  ”
                                    </p>
                                    <cite class="testimonial__cite">
                                      <span class="testimonial__cite--name">New Social Initiative</span>
                                    </cite>
                                  </blockquote>
                                  <div class="testimonial__img">
                                    <img class="testimonial__photo" src="frontend/images/home/new-social-initiative.jpg" style="max-height: 400px;" alt="John Tarkpor">
                                  </div>
                                </figure>
                              </div>

                              <div class="slider__slide slider__slide--2">
                                <figure class="testimonial slider__slide-content">
                                  <blockquote class="testimonial__text">
                                    <img class="testimonial__quotation-marks" src="frontend/images/pattern-quotes.svg" alt="quotation marks">
                                    <p class="testimonial__quote">
                                      “ I pledge to always support or be part of initiatives aimed at building trust between communities in Kosovo. ”
                                    </p>
                                    <cite class="testimonial__cite">
                                      <span class="testimonial__cite--name">Marko Milenković </span>
                                      <span class="testimonial__cite--role">New Social Initiative</span>
                                    </cite>
                                  </blockquote>
                                  <div class="testimonial__img">
                                    <img class="testimonial__photo" src="frontend/images/home/Marko-Milenković.jpg" alt="John Tarkpor" style="max-height: 400px;">
                                  </div>
                                </figure>
                              </div>

                              <div class="slider__slide slider__slide--2">
                                <figure class="testimonial slider__slide-content">
                                  <blockquote class="testimonial__text">
                                    <img class="testimonial__quotation-marks" src="frontend/images/pattern-quotes.svg" alt="quotation marks">
                                    <p class="testimonial__quote">
                                      “ I pledge that I will not be part of any violence whatsoever, with commitment of my personal and professional integrity for trustbuilding in Kosovo. ”
                                    </p>
                                    <cite class="testimonial__cite">
                                      <span class="testimonial__cite--name">Miloš Milovanović </span>
                                      <span class="testimonial__cite--role">New Social Initiative</span>
                                    </cite>
                                  </blockquote>
                                  <div class="testimonial__img">
                                    <img class="testimonial__photo" src="frontend/images/home/Miloš-Milovanović.jpg" alt="John Tarkpor" style="max-height: 400px;">
                                  </div>
                                </figure>
                              </div> -->




                          </div>

                          <div class="slider__buttons">
                            <div class="slider__button slider__button--prev">
                              <svg class="slider__button-icon" xmlns="http://www.w3.org/2000/svg" width="12" height="18">
                                <path fill="none" stroke-width="3" d="M11 1L3 9l8 8" /></svg>
                            </div>
                            <div class="slider__button slider__button--next">
                              <svg class="slider__button-icon" xmlns="http://www.w3.org/2000/svg" width="13" height="18">
                                <path fill="none" stroke-width="3" d="M2 1l8 8-8 8" /></svg>
                            </div>
                          </div>
                        </div>

                      </section>


                </div>

                 <!-- Add Pagination -->
                 <a class="box-readmore center-rx" href="/pledges">{{ __('messages.view-more') }}</a>


            </div>

        </section>

        <section class="bond-row bond-section-counter padb-148 background-222222">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6 ">
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
                            <div class="content" style="color:#fe466c;">
                                <p>{{ __('messages.stories') }}</p>
                            </div>
                        </div>
                    </div><!-- /.bond-counterbox center style1 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-xs-6 ">
                    <div class="bond-counterbox bond-drawer style1 v1">
                        <div class="icon-image">
                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="502" data-speed="2000" data-waypoint-active="yes">502</div>
                        </div>
                        <div class="counter-countent">
                            <div class="icon-img">
                                <i class="icon-rocket icons"></i>
                            </div>
                            <div class="content" style="color:#fe466c;">
                                <p>{{ __('messages.initiatives') }}</p>
                            </div>
                        </div>
                    </div><!-- /.bond-counterbox center style1 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-xs-6 ">
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
                            <div class="content" style="color:#fe466c;">
                                <p>{{ __('messages.organizations') }}</p>
                            </div>
                        </div>
                    </div><!-- /.bond-counterbox center style1 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-xs-6 ">
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
                            <div class="content" style="color:#fe466c;">
                                <p>{{ __('messages.pledges') }}</p>
                            </div>
                        </div>
                    </div><!-- /.bond-counterbox center style1 -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <div class="page-callout" style="margin-bottom:0;">
            <div class="page-callout-background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flat-contact-us">
                                    <h2>{{ __('messages.member') }}</h2>
                                    <a data-toggle="modal" data-target="#myModal2" class="button">{{ __('messages.registerhere') }}</a>
                            </div>
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
        </div>

    <!-- welcome to bond -->
    <section class="bond-row padb-90" id="contribute">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style1">
                        <h3 class="title">{{ __('messages.createtrust') }}</h3>
                        <div class="desc">
                            <p>{{ __('messages.trust-text') }}!</p>
                        </div>
                    </div><!-- /.title-section style1 -->
                    <div class="flat-spacer h25"></div>
                </div><!-- /.col-md-12 -->
            </div>
            <div  class="row " data-item="4" data-nav="true" data-dots="false" data-auto="false" data-margin="30">
                <div class="item col-md-6 effect2 col-xs-6 pad-0">
                    <div class="bond-iconbox square icoshadow s70">
                        <div class="icon-image">
                            <span class="icons icon-note"></span>
                        </div>
                        <div class="content">
                            <h5 class="title"><a>{{ __('messages.story-form') }}</a></h5>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiu toidure thako robe amar <br/> tomakei bode smod tempor</p> -->
                            <a data-toggle="modal" data-target="#myModal2" class="readmore">{{ __('messages.here') }}</a>
                        </div>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->
                <div class="item col-md-6 col-xs-6 pad-0">
                    <div class="bond-iconbox effect2 square icoshadow s70">
                        <div class="icon-image">
                            <span class="icons icon-wallet"></span>
                        </div>
                        <div class="content">
                            <h5 class="title"><a>{{ __('messages.donate') }}</a></h5>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiu toidure thako robe amar <br/> tomakei bode smod tempor</p> -->
                            <a class="readmore" data-toggle="modal" data-target="#myModal2" >{{ __('messages.here') }}</a>
                    </div><!-- /.bond-iconbox -->
                </div><!-- /.item -->
            </div><!-- /.bond-iconbox-fullwidth -->
        </div>
    </section>

    <section class="section-home5-callout2">
        <!-- <footer class="footer">
        @include('frontend.includes.banner') -->
        <!-- </footer>                     -->
    </section>

    <section class="bond-row padt-102 bond-featured keep-30">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6 padt-82 padr-42">
                    <div class="iconbox clearfix inline-right no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-directions"></span></div>
                            <h4 class="box-title">{{ __('messages.good-governance') }}</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip
                        </div>
                    </div>

                    <div class="iconbox clearfix  inline-right no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-screen-desktop"></span></div>
                            <h4 class="box-title">{{ __('messages.acces-justice') }}</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.

                        </div>
                    </div>

                    <div class="iconbox clearfix  inline-right no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-book-open"></span></div>
                            <h4 class="box-title">{{ __('messages.inter-religious') }}</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.

                        </div>
                    </div>
                </div><!-- /.col-md-4 -->

                <div class="col-md-4 text-center" style="padding-top: 12.5%;">
                    <img alt="image" src="frontend/images/ktb-logo.png"/>
                </div>

                <div class="col-md-4 col-xs-6  padt-82 padl-42">
                    <div class="iconbox clearfix  inline-left no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-layers"></span></div>
                            <h4 class="box-title">{{ __('messages.economic') }}</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.

                        </div>
                    </div>

                    <div class="iconbox clearfix  inline-left no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-settings"></span></div>
                            <h4 class="box-title">{{ __('messages.media-commun') }}</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.

                        </div>
                    </div>

                    <div class="iconbox clearfix  inline-left no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-grid"></span></div>
                            <h4 class="box-title">{{ __('messages.education') }}</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.

                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div>

    </section>



<!--
    <section class="bg-f9 mgb-91 home3-about-us">
        <div class="container relative">
            <div class="bg-red w62p padt-78 padlr-40_89 mgt--48">
                <div class="bond-contentbox color-white">
                    <h4 class="color-red title-1">How it all started</h4>
                    <div class="box-header">
                        <h2 class="pledge-name" class="box-title">Kosovo Trustbuilding Platform</h2>
                    </div>
                    <div class="box-content">
                        <p>
                        The full list of recommendations and final report are available in English, Albanian and Serbian languages. This platform is a continuation of the Forum’s discussions on actions needed to build a more peaceful and inclusive society </p>
                        <p>
                        And also seeks to promote grassroots and civil society initiatives and efforts by international organizations, as well as institutional policies and actions to advance trust-building in Kosovo.. </p>

                    </div>

                </div>

                <div class="flat-spacer h17"></div>

                <a class="flat-button white mgl-29" href="#">LEARN MORE</a>
                <div class="flat-spacer h118"></div>
            </div>

            <div class="single-image w42p center-right mgt-10 mgr-16">
                <img src="frontend/images/home/5278.jpg" alt="single-image"/>
            </div>

            <div class="single-image w26p center-right top-97p right-21p">
                <img src="frontend/images/home/pixlr-bg-result.png" alt="single-image"/>
            </div>
        </div>
    </section> -->

    <!-- <section class="bond-row home4-what-we-do  padb-93 v2">
        <div class="title-section style2">
            <h3 class="title">BUILD TRUST</h3>
        </div>
        <div class="title-section style1">
            <h3 class="title">CONTRIBUTE</h3>
            <div class="desc">
                <p>In many ways</p>
            </div>
        </div>
        <div class="container">
            <div class="row style2 " data-item="4" data-nav="true" data-dots="false" data-auto="false" data-margin="30">
                <div class="item col-md-4 col-xs-6 bg-ff4040">
                    <div class="bond-iconbox overlay bg-service1">
                        <div class="icon-image">
                            <span class="icons icon-anchor"></span>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">INTER-RELIGIOUS TRUST</a></h4>
                            <p>Assure interaction between different databases used by the judicial system in Kosovo, including police databases.</p>
                            <a class="readmore" href="blog_single_v1.html">More</a> -->

                        <!-- </div>
                    </div>
                </div>

                <div class="item col-md-4 col-xs-6 bg-ff4040">
                    <div class="bond-iconbox overlay bg-service2">
                        <div class="icon-image">
                            <span class="icons icon-puzzle"></span>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">ACCESS TO JUSTICE</a></h4>
                            <p>At the central level help from international institutions and organizations is needed for financing  </p>
                            <a class="readmore" href="blog_single_v1.html">More</a>
                        </div>
                    </div>
                </div>

                <div class="item col-md-4 col-xs-6 bg-ff4040">
                    <div class="bond-iconbox overlay bg-service3">
                        <div class="icon-image">
                            <span class="icon-game-controller icons"></span>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">GOOD GOVERNANCE</a></h4>
                            <p>Assure interaction between different databases used by the judicial system in Kosovo, including police databases.</p>
                            <a class="readmore" href="blog_single_v1.html">More</a>
                        </div>
                    </div>
                </div>

                <div class="item col-md-4 col-xs-6 bg-ff4040">
                    <div class="bond-iconbox overlay bg-service4">
                        <div class="icon-image">
                            <span class="icon-pie-chart icons"></span>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">ACTORS</a></h4>
                            <p>Provide adequate facilities to treat juveniles in conflict with the law that have problems with abuse of narcotics. </p>
                            <a class="readmore" href="blog_single_v1.html">More</a>

                        </div>
                    </div>
                </div>

                <div class="item col-md-4 col-xs-6 bg-ff4040">
                    <div class="bond-iconbox overlay bg-service5">
                        <div class="icon-image">
                            <span class="icon-camera icons"></span>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">INITIAIVES</a></h4>
                            <p>Provide adequate facilities to treat juveniles in conflict with the law that have problems with abuse of narcotics.</p>
                            <a class="readmore" href="blog_single_v1.html">More</a>
                        </div>
                    </div>
                </div>

                <div class="item col-md-4 col-xs-6 bg-ff4040">
                    <div class="bond-iconbox overlay bg-service6">
                        <div class="icon-image">
                            <span class="icon-shield icons"></span>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">CONTRIBUTIONS</a></h4>
                            <p>Enhance strategy to reduce case backlog. </p>
                            <a class="readmore" href="blog_single_v1.html">More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>    -->



    <!-- <section class="ab3-s3 bond-row bg-f7">
            <div class="container">
                <div class="flat-spacer h19"></div>
                <div class="w30p float-left">
                    <div class="iconbox effect1 clearfix inline-left no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-social-dropbox"></span></div>
                            <h4 class="box-title">OUT OF THE BOX</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.
                        </div>
                    </div>

                    <div class="iconbox effect1 clearfix  inline-left no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-screen-desktop"></span></div>
                            <h4 class="box-title">FULL RESPONSIVE</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.

                        </div>
                    </div>
                </div>

                <div class=" w39p text-center float-left">
                    <div class="flat-spacer h8"></div>
                    <img alt="frontend/images" src="frontend/images/about/1.png">
                </div>

                <div class="w30p float-left">
                    <div class="iconbox effect1 clearfix  inline-right no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-magic-wand"></span></div>
                            <h4 class="box-title">FREE ICON FONT</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.

                        </div>
                    </div>

                    <div class="iconbox effect1 clearfix  inline-right no-box">
                        <div class="box-header">
                            <div class="box-icon"><span class="icon-layers"></span></div>
                            <h4 class="box-title">EASY CUSTOMIZATION</h4>
                        </div>
                        <div class="box-content">
                            Evenim ad minim veniam, quis nolla mco laboris nisi ut aliq sami ar estri banai se kon mistiry se  borouip.

                        </div>
                    </div>
                </div>
            </div>
    </section> -->

    <!-- <section class="bond-row bond-section-teammember padb-90 ">
        <div class="title-section style3">
        <h3 class="title">OUR TEAM</h3>
        </div>
        <div class="container">
        <div class="row">
            <div class="title-section style4">
                <h3 class="title">WHO WORK WITH US</h3>
                <div class="desc">
                    <p>Most Talented People</p>
                </div>
            </div>

            <div class=" bond-teammember col-md-offset-3 col-md-9">
                <div class="row">

                    <div class="team v2 col-md-4 col-xs-6">
                        <div class="team-img">
                            <img src="frontend/images/home/t2.jpg" alt="image">
                        </div>
                        <div class="content">
                            <div class="short_information">
                                <h6 class="title">Natasha veil</h6>
                                <p class="position">Founder &amp; Ceo</p>
                            </div>

                            <div class="description">
                                <p>Bercitation ullamco laboris nisi ut aliquip ex ea commo do consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team v2 col-md-4 col-xs-6">
                        <div class="team-img">
                            <img src="frontend/images/home/t3.jpg" alt="image">
                        </div>
                        <div class="content">
                            <div class="short_information">
                                <h6 class="title">Christina Raka</h6>
                                <p class="position">Founder &amp; Ceo</p>
                            </div>

                            <div class="description">
                                <p>Bercitation ullamco laboris nisi ut aliquip ex ea commo do consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team v2 col-md-4 col-xs-6">
                        <div class="team-img">
                            <img src="frontend/images/home/t4.jpg" alt="image">
                        </div>
                        <div class="content">
                            <div class="short_information">
                                <h6 class="title">Samuel Jhonson</h6>
                                <p class="position">Founder &amp; Ceo</p>
                            </div>

                            <div class="description">
                                <p>Bercitation ullamco laboris nisi ut aliquip ex ea commo do consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team v2 col-md-4 col-xs-6">
                        <div class="team-img">
                            <img src="frontend/images/team_member/3.jpg" alt="image">
                        </div>
                        <div class="content">
                            <div class="short_information">
                                <h6 class="title">Samuel Jhonson</h6>
                                <p class="position">Founder &amp; Ceo</p>
                            </div>

                            <div class="description">
                                <p>Bercitation ullamco laboris nisi ut aliquip ex ea commo do consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team v2 col-md-4 col-xs-6">
                        <div class="team-img">
                            <img src="frontend/images/team_member/4.jpg" alt="image">
                        </div>
                        <div class="content">
                            <div class="short_information">
                                <h6 class="title">Samuel Jhonson</h6>
                                <p class="position">Founder &amp; Ceo</p>
                            </div>

                            <div class="description">
                                <p>Bercitation ullamco laboris nisi ut aliquip ex ea commo do consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team v2 col-md-4 col-xs-6">
                        <div class="team-img">
                            <img src="frontend/images/team_member/5.jpg" alt="image">
                        </div>
                        <div class="content">
                            <div class="short_information">
                                <h6 class="title">Samuel Jhonson</h6>
                                <p class="position">Founder &amp; Ceo</p>
                            </div>

                            <div class="description">
                                <p>Bercitation ullamco laboris nisi ut aliquip ex ea commo do consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
     -->



<!--
    <section class="bond-row bond-our-blog parallax overlay2 parallax16">
        <div class="title-section style2 white">
            <h3 class="title">OUR BLOG</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="title-section style1 white mgb-77">
                    <h3 class="title">FROM OUR BLOG</h3>
                    <div class="desc">
                        <p>OUR UPDATES</p>
                    </div>
                </div>

            <div class="blog-shortcode  blog-grid  has-post-content">

                <div class="blog-shortcode  blog-grid  has-post-content color-white">

                    <article class="entry col-md-4 col-xs-6">
                        <div class="entry-border">
                            <div class="featured-post">
                                <a href="blog_single_v1.html">
                                    <img width="370" height="264" alt="single_image" src="frontend/image/home/bl1.jpg" >                           </a>
                            </div>
                            <div class="content-post">
                                <h5><a href="blog_single_v1.html">Fusce sit amet urna neque Proin vel lorie mes eros Vesti bulum </a></h5>

                                <div class="entry-meta clearfix">
                                    <ul>

                                        <li class="post-author">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <span class="author vcard">By <a class="url fn n" href="#" title="View all posts by admin" rel="author">Juwel Khan</a></span>       </li>

                                        <li class="post-date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span class="date updated" >June 4, 2016</span>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </article>

                    <article class="entry col-md-4 col-xs-6">
                        <div class="entry-border">
                            <div class="featured-post">
                                <a href="blog_single_v1.html">
                                    <img width="370" height="264" src="frontend/image/home/bl2.jpg" class="attachment-pictor-portfolio-thumb-one-three size-pictor-portfolio-thumb-one-three wp-post-image" alt="2">                            </a>
                            </div>
                            <div class="content-post">
                                <h5><a href="blog_single_v1.html">Nulla eget leo eu diam ullam corper aucr Aliquam vel volu tpat sem </a></h5>

                                <div class="entry-meta clearfix">
                                    <ul>

                                        <li class="post-author">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <span class="author vcard">By <a class="url fn n" href="#" title="View all posts by admin" rel="author">Juwel Khan</a></span>       </li>

                                        <li class="post-date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span class="date updated" >June 4, 2016</span>
                                        </li> -->
<!--
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </article> -->
<!--
                    <article class="entry col-md-4 col-xs-6">
                        <div class="entry-border">
                            <div class="featured-post">
                                <a href="blog_single_v1.html">
                                    <img width="370" height="264" alt="single_image" src="frontend/image/home/bl3.jpg" >                           </a>
                            </div>
                            <div class="content-post">
                                <h5><a href="blog_single_v1.html">Proin et velit lectus Etiam et ultricies tor tor Nam dignissim nib </a></h5>

                                <div class="entry-meta clearfix">
                                    <ul>

                                        <li class="post-author">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <span class="author vcard">By <a class="url fn n" href="#" title="View all posts by admin" rel="author">Juwel Khan</a></span>       </li>

                                        <li class="post-date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span class="date updated" >June 4, 2016</span>
                                        </li> -->

                                    <!-- </ul>
                                </div>

                            </div>
                        </div>
                    </article>
                    </div>

                </div>
            </div> -->

            <!-- <div class="flat-spacer h12"></div>

            <a class="flat-button center-rx">GO TO BLOG</a>
            <div class="flat-spacer h49"></div>

        </div>
    </section> -->

    <!-- contact us -->
    <!-- <section class="bond-row bond-contact-us ">
        <div class="container">
            <div>
                <div id="map"></div>
            </div>
            <div>
                <div class="title-section contact-us style1">
                    <h3 class="title">CONTACT US</h3>
                    <div class="desc">
                </div>
                </div>
                <div class="col-md-4 padding-left-0">
                    <div class="iconbox iconbox-contact-us v1 clearfix">
                        <div class="box-header">
                            <div class="box-icon"><i class="icon-location-pin icons"></i></div>
                        </div>
                        <div class="box-content">
                            134, Bardeshi, Amin Bazar
                            <p>Savar, Dhaka - 1348 </p>

                        </div>
                    </div>

                    <div class="iconbox iconbox-contact-us v1 clearfix">
                        <div class="box-header">
                            <div class="box-icon"><i class="icon-phone icons"></i></div>
                        </div>
                        <div class="box-content">
                            + 111  - 232 - 343434
                            <p>+ 111  - 232 - 343435 </p>

                        </div>
                    </div>
                    <div class="iconbox iconbox-contact-us v1 clearfix">
                        <div class="box-header">
                            <div class="box-icon"><i class="icon-envelope icons"></i></div>
                        </div>
                        <div class="box-content">
                            hello@website.com
                            <p>support@website.com </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-8 padding-right-0">
                    <div class="flat-spacer h10"></div>
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
            </div>
        </div>
        <div class="flat-spacer h54"></div>
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
                        <p>Copyright (c) Kosovo Trust Building 2021.</p>
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

    <script>
     /* ========== SLIDER LOGIC ==========
1. Create selectors for the slider container, each slide, the next button and the previous button
2. Clone the first slide and append it at the end of the slides container
3. Clone the last slide and append it at the beginning of the slides container

NOTE: steps 2 and 3 will allow us to create an illusion of infinitely looping through the slider

4. Create a 'counter' variable and set it equal to 1
5. Add event listeners to the next and previous buttons
    If next button is clicked, add 1 to counter
    If prev button is clicked, subtract 1 from counter
6. Move to the next / previous slide by using transform: translateX to shift the slides horizontally
by each slide's width and margin multiplied by the number of slides tracked in counter

7. If the "last clone" is reached, reset counter to 0
8. If the "first clone" is reached, reset counter to 1
===================================== */

// SELECTORS
const container = document.querySelector('.slider');
const slider = document.querySelector('.slider__slides');
const slides = document.querySelectorAll('.slider__slide');
const prevBtn = document.querySelector('.slider__button--prev');
const nextBtn = document.querySelector('.slider__button--next');
const numSlides = slides.length;

// DETERMINE THE LENGTH REQUIRED TO MOVE HORIZONTALLY TO THE NEXT SLIDE
let slideWidth = slides[0].offsetWidth;
let slideMarginRight = parseInt(getComputedStyle(slides[0]).marginRight);
let moveX = slideWidth + slideMarginRight;

// CLONE FIRST AND LAST SLIDES AND ADD TO SLIDER
const firstClone = slides[0].cloneNode(true);
const lastClone = slides[numSlides - 1].cloneNode(true);

firstClone.setAttribute('id', 'first-clone');
lastClone.setAttribute('id', 'last-clone');

slider.appendChild(firstClone);
slider.prepend(lastClone);

const allSlides = document.querySelectorAll('.slider__slide'); //allSlides includes the clones

// SHOW THE FIRST SLIDE
slider.style.transform = `translateX(${-moveX}px)`;

// SET COUNTER AND ADD EVENT LISTENERS TO BUTTON;
// EACH BUTTON CLICK SHOULD MOVE ALL SLIDES HORIZONTALLY BY MOVEX AMOUNT COUNTER TIMES
let counter = 1;

nextBtn.addEventListener('click', () => {
    counter++;
    slider.style.transition = 'transform 0.5s ease-in-out, opacity 0.2s';
    slider.style.transform = `translateX(${-(moveX * counter)}px)`;
    if (counter >= allSlides.length) counter = numSlides;
    console.log(counter);
});

prevBtn.addEventListener('click', () => {
    counter--;
    slider.style.transition = 'transform 0.5s ease-in-out, opacity 0.2s';
    slider.style.transform = `translateX(${-(moveX * counter)}px)`;
    if (counter < 0) counter = 0
});

// CHECK FOR FIRSTCLONE AND LASTCLONE AND RESET THE SLIDES ACCORDINGLY
slider.addEventListener('transitionend', () => {
    if (allSlides[counter].id === 'first-clone') {
        slider.style.transition = 'none';
        counter = 1;
        slider.style.transform = `translateX(${-(moveX * counter)}px)`;
    }

    if (allSlides[counter].id === 'last-clone') {
        slider.style.transition = 'none';
        counter = numSlides;
        slider.style.transform = `translateX(${-(moveX * counter)}px)`;
    }
});

// ADJUST THE SLIDER POSITION WHEN THE SLIDER/VIEWPORT IS RESIZED
window.addEventListener('resize', () => {
    slideWidth = slides[0].offsetWidth;
    slideMarginRight = parseInt(getComputedStyle(slides[0]).marginRight);
    moveX = slideWidth + slideMarginRight;
    slider.style.transition = 'none';
    slider.style.transform = `translateX(${-(moveX * counter)}px)`;
});



    //   var indexValue = 0;
    //   function slideShow(){
    //     setTimeout(slideShow, 2500);
    //     var x;

    //     for(x = 0; x < numSlides; x++){
    //       slides[x].style.display = "none";
    //     }
    //     indexValue++;
    //     if(indexValue > numSlides){indexValue = 1}
    //     slides[indexValue -1].style.display = "block";
    //   }
    //   slideShow();



        </script>


</body>
</html>
