<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
   @include('frontend.includes.head')
</head>

<body class="header-sticky blog-details">
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
                                <h1 class="title">{{ __('messages.who-we-are') }}</h1>
                            </div><!-- /.page-title-captions -->
                        </div><!-- /.page-title-captions -->

                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->
    </div>

    <section class="bond-row pad-0">
        <div class="container">
            <div class="row">
                <div class="bond-iconbox about-us1 style3 clearfix" data-item="4" data-nav="true" data-dots="false"
                    data-auto="false" data-margin="30">
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/XaC4QpAYGcM"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 padding-left-45">
                        <h4 class="color-red title-1">{{ __('messages.whoweare-title') }}</h4>
                        <div class="iconbox ">
                            <div class="box-header">
                                <h2 class="box-title">Kosovo Trustbuilding Platform</h2>
                            </div>
                            <div class="box-content">
                                <p>
                                {{ __('messages.about.text1') }} </p>
                                <p>
                                {{ __('messages.about.text2') }}
                                </p>

                                    </div>
                        </div>
                    </div>
                </div>
                <div class="flat-spacer h138"></div>
            </div> <!-- /.row -->
        </div>

    </section>

    <div class="container pt-5 pb-5">
        <div class="row">
           <div class="col-xl-8 col-md-8 mb-4"><h2 class="pb-2 align-center" style="text-align: center;">  {{ __('messages.poweredby') }}</h2>
           <div class="col-xl-6 col-md-6">
             <div class="text-center">
                <a href="#" data-toggle="modal" data-target="#modalNSI"><img allign="middle" src="frontend/images/team_member/logo-NSI.png" class="center hvr-grow" alt="A school of fish swimming left, and one fish swimming right. It reads &quot;New Social Initiative&quot;" data-toggle="modal" data-target="#exampleModal"></a>
                <p class="card-title mt-4">New Social Initiative</p>
                <div class="text-center support-icons">
                  <a href="https://www.facebook.com/newsocialinitiative/" target="_blank" rel="noopener" aria-label="NSI's facebook page"><i class="fa fa-facebook-f hvr-grow pr-4"></i></a>
                  <a href="https://www.instagram.com/newsocialinitiative.nsi/" target="_blank" rel="noopener" aria-label="NSI's instagram"><i class="fa fa-instagram hvr-grow pr-4"></i></a>
                  <a href="https://twitter.com/NSIMitrovica/ " target="_blank" rel="noopener" aria-label="NSI's twitter account"><i class="fa fa-twitter hvr-grow pr-4"></i></a>
                  <a href="http://newsocialinitiative.org/" target="_blank" rel="noopener" aria-label="NSI's home page"><i class="fa fa-desktop hvr-grow"></i></a>
                </div>
            </div>
           </div>
           <div class="modal fade" id="modalNSI" tabindex="-1" role="dialog" aria-label="New Social Initiative Details" aria-hidden="true">
              <div class="modal-dialog" role="document">
                 <div class="modal-content">
                    <div class="modal-header">
                       <p class="card-title mb-0">New Social Initiative</p>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                       </button>
                    </div>
                    <div class="modal-body">
                       <p class="bio">Motto: Inspire dynamic communities. 
                            New Social Initiative (NSI) is an independent think and do tank from North Mitrovica founded on the idea to inspire dynamic communities in Kosovo. Our mission is to assist institutions in utilizing community strengths and delivering evidence based decision making in order to resolve major social and community challenges. Our work aims to: 
                             - Empower public institutions in Kosovo to adopt principles of good governance and increase citizen participation in decision making; 
                             - Contribute to democratization processes and constructive inter-ethnic relations through fostering and promoting positive inter-community communication and cooperation. 
                            - Facilitate shared discourse and joint vision on major social. challenges 
                            - Secure a more prosperous political, social, legal, economic, and environmental development in the region. 
                            Our vision is a prosperous society based on shared community values and strong institutions that respect rights of each and every citizen.</p>
                    </div>
                    <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-xl-6 col-md-6">
             <div class="text-center">
             <a href="#" data-toggle="modal" data-target="#modalODK"><img allign="middle" src="frontend/images/team_member/odk-logo-bw.png"  class="center hvr-grow" alt="The name &quot;UNMIK&quot; in all caps." data-toggle="modal" data-target="#exampleModal2"></a>
                <p class="card-title mt-4">Open Data Kosovo</p>
                <div class="text-center support-icons">
                    <a href="https://www.facebook.com/opendatakosovo/" target="_blank" rel="noopener" aria-label="Open Data Kosovo's facebook page"><i class="fa fa-facebook-f hvr-grow pr-4"></i></a>
                     <a href="https://www.instagram.com/opendatakosovo/?hl=en" target="_blank" rel="noopener" aria-label="Open Data Kosovo's instagram"><i class="fa fa-instagram hvr-grow pr-4"></i></a>
                     <a href="https://twitter.com/OpenDataKosovo" target="_blank" rel="noopener" aria-label="Open Data Kosovo's twitter account"><i class="fa fa-twitter hvr-grow pr-4"></i></a>
                     <a href="https://opendatakosovo.org/" target="_blank" rel="noopener" aria-label="Open Data Kosovo's home page"><i class="fa fa-desktop hvr-grow"></i></a>
                </div>
             </div>
           </div>
           <div class="modal fade" id="modalODK" tabindex="-1" role="dialog" aria-label="Ciudadanía Inteligente Details" aria-hidden="true">
              <div class="modal-dialog" role="document">
                 <div class="modal-content">
                    <div class="modal-header">
                       <p class="card-title mb-0">Open Data Kosovo</p>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                       </button>
                    </div>
                    <div class="modal-body">
                       <p class="bio">Open Data Kosovo is a nonprofit organization that believes in using civic-tech and digital humanitarianism to open government. Our initiative promotes the idea that governance data should be made freely available for everyone to use and republished as they wish, without restrictions from copyright, patents or other mechanisms of control. We contribute to the development of a local and vibrant tech scene. By working as a lab that provides mentorship and training programs, we engage local software developers and help build a community around the use of nascent and enabling technologies to develop apps for social good with Kosovo’s open data.</p>
                    </div>
                    <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                 </div>
              </div>
           </div>

           </div>  
           <div class="col-xl-4 col-md-4 mb-2">
           <h2 class="pb-2 align-center" style="text-align: center;">  {{ __('messages.supportedby') }}</h2>
             <div class="text-center">
             <a href="#" data-toggle="modal" data-target="#modalUNMIK"><img allign="middle" src="frontend/images/team_member/support-01.png" class="center hvr-grow" alt="The name &quot;UNMIK&quot; in all caps." data-toggle="modal" data-target="#exampleModal2"></a>
                <p class="card-title mt-4">United Nations Mission in Kosovo</p>
                <div class="text-center support-icons">
                    <a href="https://www.facebook.com/UNMIK" target="_blank" rel="noopener" aria-label="UNMIK's facebook page"><i class="fa fa-facebook-f hvr-grow pr-4"></i></a>
                    <a href="https://www.instagram.com/unmik.kosovo/" target="_blank" rel="noopener" aria-label="UNMIK's instagram"><i class="fa fa-instagram hvr-grow pr-4"></i></a>
                    <a href="https://twitter.com/UNMIKosovo" target="_blank" rel="noopener" aria-label="UNMIK's twitter account"><i class="fa fa-twitter hvr-grow pr-4"></i></a>
                    <a href="https://unmik.unmissions.org/" target="_blank" rel="noopener" aria-label="UNMIK's home page"><i class="fa fa-desktop hvr-grow"></i></a>
                </div>
             </div>
           </div>
           <div class="modal fade" id="modalUNMIK" tabindex="-1" role="dialog" aria-label="UNMIK Details" aria-hidden="true">
              <div class="modal-dialog" role="document">
                 <div class="modal-content">
                    <div class="modal-header">
                         <p class="card-title mb-0">United Nations Mission in Kosovo</p>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                       </button>
                    </div>
                    <div class="modal-body">
                        <p class="bio">The mandate of the United Nations Interim Administration Mission in Kosovo (UNMIK) was established by the Security Council in its resolution 1244 (1999). The Mission is mandated to help ensure conditions for a peaceful and normal life for all inhabitants of Kosovo and advance regional stability in the Western Balkans.</p>
                    </div>
                    <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                 </div>
              </div>
           </div>
           </div>
            
        </div>
     </div>
     <div class="flat-spacer h138"></div>

    <!-- <section class="bond-row parallax parallax17 padb-148">
        <div class="container">
            <div class="row">
                <div class="flat-spacer h9"></div>
                <div class="bond-iconbox about-us1 style4 " data-item="4" data-nav="true" data-dots="false"
                    data-auto="false" data-margin="30">
                    <div class="col-md-offset-6 col-md-6">
                        <h4 class="color-red title-1">PEOPLE ARE STRANGE</h4>
                        <div class="iconbox ">
                            <div class="box-header">
                                <h2 class="box-title">WE INVENTED THE WAY OF THINKING DIFFERENTLY</h2>
                            </div>
                            <div class="box-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing im ad minim veniam, quis nostrud
                                    exercitation ullam co laboris nisi ut aliquip ex ea commaute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <div class="flat-spacer h_4"></div>
                                <a class="box-readmore pad-0_43" href="#">LEARN MORE</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> -->

    <!-- CONTRIBUTORS SECTION >
    
    <!-- <section class="bond-row bond-section-teammember">
        <div class="title-section style2">
            <h3 class="title">OUR TEAM</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="title-section style1">
                    <h3 class="title">Contributors</h3>
                    <div class="desc">
                        <p>Most Talented People</p>
                    </div>
                </div>
            </div>

            <div class="row bond-teammember">
                <div class="team col-md-3 col-xs-6">
                    <div class="team-img">
                        <img src="frontend/images/team_member/sanja.jpg" alt="image">
                    </div>
                    <div class="content">
                        <div class="short_information">
                            <h6 class="title">Sanja Sovrlić</h6>
                            <p class="position">Journalist</p>
                        </div>

                        <div class="description">
                            <p>Sanja Sovrlic is currently the Editor of the Black and White World online platform
                                www.crnobelisvet.com </p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team col-md-3 col-xs-6">
                    <div class="team-img">
                        <img src="frontend/images/team_member/verka.jpg" alt="image">
                    </div>
                    <div class="content">
                        <div class="short_information">
                            <h6 class="title">Verka Jovanović</h6>
                            <p class="position">Journalist</p>
                        </div>

                        <div class="description">
                            <p>Verka Jovanovic has extensive experience working in international settings in the fields
                                of human rights, peacebuilding and conflict transformation</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team col-md-3 col-xs-6">
                    <div class="team-img">
                        <img src="frontend/images/team_member/lazar.jpg" alt="image">
                    </div>
                    <div class="content">
                        <div class="short_information">
                            <h6 class="title">Lazar Rakic</h6>
                            <p class="position">Program Director</p>
                        </div>

                        <div class="description">
                            <p>Lazar Rakić is the Program Director of the Alternative Dispute Resolution Center.</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team col-md-3 col-xs-6">
                    <div class="team-img">
                        <img src="frontend/images/team_member/Hiljmnijeta.png" alt="image">
                    </div>
                    <div class="content">
                        <div class="short_information">
                            <h6 class="title">Hiljmnijeta Apuk</h6>
                            <p class="position">Director|Little People of Kosovo</p>
                        </div>

                        <div class="description">
                            <p>Hiljmnijeta Apuk, the winner of the prestigious United Nations Prize in the Field of
                                Human Rights for 2013. The Prize has been awarded once every five years since 1968</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> -->



    <!--what people talk about -->
    <!-- <section class="bond-row ab1-testimonial bg-f7f7f7">
        <div class="title-section style2">
            <h3 class="title">TESTIMONIAL</h3>
        </div>
        <div class="container">
            <div class="title-section style1 row">
                <h3 class="title">WHAT PEOPLE SAY ABOUT US</h3>
                <div class="desc">
                    <p>We Are Awesome</p>
                </div>
            </div>
            <div class="bond-empty-spacer"></div>
            <div id="testimonial-slider-box" class="v3">
                <div class="testimonial-slider bond-testimonials-flexslider" data-margin="0" data-slides_per_view="1"
                    data-autoplay="" data-hide_control="yes" data-hide_buttons="yes">

                    <ul class="swiper-wrapper">

                        <li class="testimonial swiper-slide  has-image">
                            <div class="testimonial-content bg-white">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat.

                                </blockquote>
                            </div>
                            <div class="testimonial-meta">

                                <div class="testimonial-image">
                                    <img src="frontend/images/home/tes1.jpg" alt="">
                                </div>

                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">Almahmud Khan</span><span
                                            class="company">Ceo, Aftab Groups</span></div>
                                </div>
                            </div>
                        </li>

                        <li class="testimonial swiper-slide  has-image">
                            <div class="testimonial-content bg-white">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat.

                                </blockquote>
                            </div>
                            <div class="testimonial-meta">

                                <div class="testimonial-image">
                                    <img src="frontend/images/home/tes1.jpg" alt="">
                                </div>

                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">Almahmud Khan</span><span
                                            class="company">Ceo, Aftab Groups</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="testimonial swiper-slide  has-image">
                            <div class="testimonial-content bg-white">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat.

                                </blockquote>
                            </div>
                            <div class="testimonial-meta">

                                <div class="testimonial-image">
                                    <img src="frontend/images/home/tes1.jpg" alt="">
                                </div>

                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">Almahmud Khan</span><span
                                            class="company">Ceo, Aftab Groups</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="testimonial swiper-slide  has-image">
                            <div class="testimonial-content bg-white">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat.

                                </blockquote>
                            </div>
                            <div class="testimonial-meta">

                                <div class="testimonial-image">
                                    <img src="frontend/images/home/tes1.jpg" alt="">
                                </div>

                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">Almahmud Khan</span><span
                                            class="company">Ceo, Aftab Groups</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="testimonial swiper-slide  has-image">
                            <div class="testimonial-content bg-white">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat.

                                </blockquote>
                            </div>
                            <div class="testimonial-meta">

                                <div class="testimonial-image">
                                    <img src="frontend/images/home/tes1.jpg" alt="">
                                </div>

                                <div class="testimonial-author">
                                    <strong class="author-name"></strong>
                                    <div class="author-info"><span class="subtitle">Almahmud Khan</span><span
                                            class="company">Ceo, Aftab Groups</span></div>
                                </div>
                            </div>
                        </li>
                    </ul>


                </div> -->
                <!--testimonial slider-->
                <!-- Add Pagination -->
                <!-- Add Arrows -->
                <!-- <div class="swiper-nav">
                    <div class="swiper-button-prev">Prev</div>
                    <div class="swiper-button-next">Next</div>
                </div>
                <div class="swiper-pagination"></div>

            </div>

        </div>
    </section> -->

    <!-- home counter -->
    <!-- <section class="bond-row bond-section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6 col-xs-12">
                    <div class="bond-counterbox dark bond-emotsmile style1 v1">
                        <div class="icon-image">
                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="135" data-speed="2000" data-waypoint-active="yes">135</div>
                        </div>
                        <div class="counter-countent">
                            <div class="icon-img">
                                <i class="icon-emotsmile icons"></i>
                            </div>
                            <div class="content">
                                <p>Recommendations</p>
                            </div>
                        </div> -->
                    <!-- </div>
                </div> -->
<!-- 
                <div class="col-md-3 col-xs-6 col-xs-12">
                    <div class="bond-counterbox dark bond-drawer style1">
                        <div class="icon-image">
                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="502" data-speed="2000" data-waypoint-active="yes">502
                            </div>
                        </div>
                        <div class="counter-countent">
                            <div class="icon-img">
                                <i class="icon-drawer icons"></i>
                            </div>
                            <div class="content">
                                <p>Initiatives</p>
                            </div>
                        </div> -->
                    <!-- </div>
                </div> -->

                <!-- <div class="col-md-3 col-xs-6 col-xs-12">
                    <div class="bond-counterbox dark bond-trash style1 v3">
                        <div class="icon-image">
                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="357" data-speed="2000" data-waypoint-active="yes">357
                            </div>
                        </div>
                        <div class="counter-countent">
                            <div class="icon-img">
                                <i class="icon-trash icons"></i>
                            </div>
                            <div class="content">
                                <p>Actors</p>
                            </div>
                        </div> -->
                    <!-- </div>
                </div> -->

                <!-- <div class="col-md-3 col-xs-6 col-xs-12">
                    <div class="bond-counterbox dark bond-present style1 v4">
                        <div class="icon-image">

                        </div>
                        <div class="bond-counter">
                            <div class="numb-count" data-to="116" data-speed="2000" data-waypoint-active="yes">116
                            </div>
                        </div>
                        <div class="counter-countent">
                            <div class="icon-img">
                                <i class="icon-present icons"></i>
                            </div>
                            <div class="content">
                                <p>Champions</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div><!-- /.row -->
        </div><!-- /.container -->
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
                    <a href="http://unkt.org/2020/01/01/un75/" target="_blank"><img alt="owlcarousel-item-img" src="frontend/images/organizations/un75.jpg"/>
                    </li></a>

                </ul>
            </div>
        </section>



    <!-- Footer -->
    <footer class="footer">
    @include('frontend.includes.banner')

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
    </div> -->

    <a class="go-top show vertical-text">
        BACK TO TOP <i class="fa fa-angle-double-right"></i>
    </a>


</body>

</html>