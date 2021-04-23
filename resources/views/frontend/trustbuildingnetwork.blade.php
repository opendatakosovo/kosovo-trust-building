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
                                  {{ __('messages.zahirtanin-pledge') }}
                                  </p>
                                  <cite class="testimonial__cite">
                                    <span class="testimonial__cite--name">Zahir Tanin</span><br>
                                    <span class="testimonial__cite--role"> {{ __('messages.zahirtanin-role') }}</span>
                                  </cite>
                                </blockquote>
                                <div class="testimonial__img">
                                  <img class="testimonial__photo" src="content/pledges/ZahirTanin.png"  alt="Zahir Tanin">
                                </div>
                              </figure>
                            </div>

                            <div class="slider__slide slider__slide--2">
                              <figure class="testimonial slider__slide-content">
                                <blockquote class="testimonial__text">
                                  <img class="testimonial__quotation-marks" src="frontend/images/pattern-quotes.svg" alt="quotation marks">
                                  <p class="testimonial__quote">
                                  {{ __('messages.slavisamladenovic-pledge') }}
                                  </p>
                                  <cite class="testimonial__cite">
                                    <span class="testimonial__cite--name">Şlavisa Mladenovic</span><br>
                                    <span class="testimonial__cite--role"> {{ __('messages.slavisamladenovic-role') }}</span>
                                  </cite>
                                </blockquote>
                                <div class="testimonial__img">
                                  <img class="testimonial__photo" src="content/pledges/SlavisaMladenovic.png" alt="Şlavisa Mladenovic">
                                </div>
                              </figure>
                            </div>


                            <div class="slider__slide slider__slide--2">
                                <figure class="testimonial slider__slide-content">
                                  <blockquote class="testimonial__text">
                                    <img class="testimonial__quotation-marks" src="frontend/images/pattern-quotes.svg" alt="quotation marks">
                                    <p class="testimonial__quote">
                                    {{ __('messages.unahajdari-pledge') }}
                                    </p>
                                    <cite class="testimonial__cite">
                                      <span class="testimonial__cite--name">Una Hajdari</span><br>
                                      <span class="testimonial__cite--role">{{ __('messages.unahajdari-role') }}</span>
                                    </cite>
                                  </blockquote>
                                  <div class="testimonial__img">
                                    <img class="testimonial__photo" src="content/pledges/UnaHajdari.png"  alt="Una Hajdari">
                                  </div>
                                </figure>
                              </div>

                               <div class="slider__slide slider__slide--2">
                                <figure class="testimonial slider__slide-content">
                                  <blockquote class="testimonial__text">
                                    <img class="testimonial__quotation-marks" src="frontend/images/pattern-quotes.svg" alt="quotation marks">
                                    <p class="testimonial__quote">
                                    {{ __('messages.thomaskolly-pledge') }}
                                    </p>
                                    <cite class="testimonial__cite">
                                      <span class="testimonial__cite--name">Thomas Kolly</span><br>
                                      <span class="testimonial__cite--role">{{ __('messages.thomaskolly-role') }}</span>
                                    </cite>
                                  </blockquote>
                                  <div class="testimonial__img">
                                    <img class="testimonial__photo" src="content/pledges/ThomasKolly.png"  alt="Thomas Kolly">
                                  </div>
                                </figure>
                              </div>

                               <div class="slider__slide slider__slide--2">
                                <figure class="testimonial slider__slide-content">
                                  <blockquote class="testimonial__text">
                                    <img class="testimonial__quotation-marks" src="frontend/images/pattern-quotes.svg" alt="quotation marks">
                                    <p class="testimonial__quote">
                                    {{ __('messages.sazanibrahimi-pledge') }}
                                    </p>
                                    <cite class="testimonial__cite">
                                      <span class="testimonial__cite--name">Sazan Ibrahimi</span><br>
                                      <span class="testimonial__cite--role">{{ __('messages.sazanibrahimi-role') }}</span>
                                    </cite>
                                  </blockquote>
                                  <div class="testimonial__img">
                                    <img class="testimonial__photo" src="content/pledges/SazanIbrahimi.png"  alt="Sazan Ibrahimi">
                                  </div>
                                </figure>
                              </div>

                              <div class="slider__slide slider__slide--2">
                                <figure class="testimonial slider__slide-content">
                                  <blockquote class="testimonial__text">
                                    <img class="testimonial__quotation-marks" src="frontend/images/pattern-quotes.svg" alt="quotation marks">
                                    <p class="testimonial__quote">
                                    {{ __('messages.shenajbelegu-pledge') }}
                                    </p>
                                    <cite class="testimonial__cite">
                                      <span class="testimonial__cite--name">Shenaj Belegu</span><br>
                                      <span class="testimonial__cite--role">{{ __('messages.shenajbelegu-role') }}</span>
                                    </cite>
                                  </blockquote>
                                  <div class="testimonial__img">
                                    <img class="testimonial__photo" src="content/pledges/ShenajBelegu.png"  alt="Shenaj Belegu">
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
                 <a class="box-readmore center-rx" href="/pledges">{{ __('messages.view-all') }}</a>


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
   <section class="section-home5-callout2">
        <footer class="footer">
        @include('frontend.includes.banner')
        </footer>
    </section>

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
