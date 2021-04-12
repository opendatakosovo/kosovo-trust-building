<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
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
                                <h1 class="title">{{ __('messages.stories') }}</h1>
                            </div><!-- /.page-title-captions -->
                        </div><!-- /.page-title-captions -->

                        <div class="breadcrumb-trail breadcrumbs" >
                            <ul>
                                <li class="trail-item"><a href="/" title="bond" rel="home">{{ __('messages.home') }}</a></li>
                                <li>{{ __('messages.stories') }}</li>
                            </ul>
                        </div>

                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->
    </div>

    <section class="main-content featured-img-no-zoom v1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-wrap">

                        <?php $locale = Config::get('app.locale');?>

                        @if($locale === "al")
                        <article class="post clearfix">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="frontend/images/pledge-logo.png" alt="image">
                                </div>
                            </div>
                            <div class="content-post">
                                <h4 class="title-post">
                                    <a href="/digital-agenda">Agjenda: Java Digjitale e Ndërtimit të Besimit, 12-16 prill</a>
                                </h4>
                                <div class="entry-meta">
                                    <div class="meta-1">
                                        <span class="author"><i class="fa fa-user" aria-hidden="true"></i><a href="#">Moderator</a></span>
                                        <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> <a href="#"> Apr 11, 2021</a></span>
                                    </div>
                                </div><!-- /.entry-meta -->

                                <div class="entry-content">
                                    <p>Platformë e Ndërtimit të Besimit në Kosovë ju fton të bashkoheni me ne për Javën e Digjitale të Ndërtimit të Mirëbesimit me diskutime ekspertësh ...</p>

                                </div><!-- /entry-post -->
                                <a class="readmore" href="/digital-agenda">@lang('More')</a>
                            </div><!-- /content-post -->
                        </article><!-- /post -->
                        @elseif($locale === "sr")
                        <article class="post clearfix">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="frontend/images/pledge-logo.png" alt="image">
                                </div>
                            </div>
                            <div class="content-post">
                                <h4 class="title-post">
                                    <a href="/digital-agenda">Dnevni red: Digitalna nedelja izgradnje poverenja, 12-16. april</a>
                                </h4>
                                <div class="entry-meta">
                                    <div class="meta-1">
                                        <span class="author"><i class="fa fa-user" aria-hidden="true"></i><a href="#">Moderator</a></span>
                                        <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> <a href="#"> Apr 11, 2021</a></span>
                                    </div>
                                </div><!-- /.entry-meta -->

                                <div class="entry-content">
                                    <p>Platforma za izgradnju poverenja na Kosovu vas poziva da se pridružite digitalnoj nedelji izgradnje poverenja, razgovorima sa ekspertima, kampanji na društvenim medijima koja</p>
                                </div><!-- /entry-post -->
                                <a class="readmore" href="/digital-agenda">@lang('More')</a>
                            </div><!-- /content-post -->
                        </article><!-- /post -->
                        @else
                        <article class="post clearfix">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="frontend/images/pledge-logo.png" alt="image">
                                </div>
                            </div>
                            <div class="content-post">
                                <h4 class="title-post">
                                    <a href="/digital-agenda">Agenda: Digital Trustbuilding Week, April 12-16</a>
                                </h4>
                                <div class="entry-meta">
                                    <div class="meta-1">
                                        <span class="author"><i class="fa fa-user" aria-hidden="true"></i><a href="#">Moderator</a></span>
                                        <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> <a href="#"> Apr 11, 2021</a></span>
                                    </div>
                                </div><!-- /.entry-meta -->

                                <div class="entry-content">
                                    <p>The Kosovo Trustbuilding Platform invites you to join us for Digital Trustbuilding Week, with expert discussions, a social media campaign with actionable pledges </p>
                                </div><!-- /entry-post -->
                                <a class="readmore" href="/digital-agenda">@lang('More')</a>
                            </div><!-- /content-post -->
                        </article><!-- /post -->
                        @endif

                         <article class="post clearfix">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="https://kosovotrustbuilding.com/rails/active_storage/disk/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdDRG9JYTJWNVNTSWRiek5rY0RSMGJtaFNkRGhLVGpRMWN6Rk1Sa2RpT0ZRMEJqb0dSVlE2RUdScGMzQnZjMmwwYVc5dVNTSnJhVzVzYVc1bE95Qm1hV3hsYm1GdFpUMGlkWFJoWVc1a2JXbHNhbUZ1WVMxamIyeHZjbk52Wm01aGRIVnlaUzVxY0djaU95Qm1hV3hsYm1GdFpTbzlWVlJHTFRnbkozVjBZV0Z1WkcxcGJHcGhibUV0WTI5c2IzSnpiMlp1WVhSMWNtVXVhbkJuQmpzR1ZEb1JZMjl1ZEdWdWRGOTBlWEJsU1NJUGFXMWhaMlV2YW5CbFp3WTdCbFE9IiwiZXhwIjoiMjAyMS0wNC0xMlQxMjozNTo0MS4zMzBaIiwicHVyIjoiYmxvYl9rZXkifX0=--5875abf820658c02ab6adce49c335f90ad4039a8/utaandmiljana-colorsofnature.jpg?content_type=image%2Fjpeg&disposition=inline%3B+filename%3D%22utaandmiljana-colorsofnature.jpg%22%3B+filename%2A%3DUTF-8%27%27utaandmiljana-colorsofnature.jpg" alt="image">
                                </div>
                            </div>
                            <div class="content-post">
                                <h4 class="title-post">
                                    <a href="/digital-agenda">"Colors of nature with Uta and Miljana": Diversity is our strength, to work as one for future generations</a>
                                </h4>
                                <div class="entry-meta">
                                    <div class="meta-1">
                                        <span class="author"><i class="fa fa-user" aria-hidden="true"></i><a href="#">Moderator</a></span>
                                        <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> <a href="#"> Apr 11, 2021</a></span>
                                    </div>
                                </div><!-- /.entry-meta -->

                                <div class="entry-content">
                                    <p>Respect for diversity, acceptance and respect for the other, a culture of mutual dialogue, are values ​​that should be nurtured from an early age.  </p>
                                </div><!-- /entry-post -->
                                <a class="readmore" href="/colors-of-nature">@lang('More')</a>
                            </div><!-- /content-post -->
                        </article><!-- /post -->
------------------------------------------------------------------
                        <article class="post clearfix">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="frontent/images/ktb_digweek.png.png" alt="image">
                                </div>
                            </div>
                            <div class="content-post">
                            
                        <?php $locale = Config::get('app.locale');?>

                            @if($locale === "al")
                                <h4 class="title-post">
                                    <a href="/ktb-story">Tri organizata dhe një qëllim: Një mjet dixhital për ndërtimin e besimit!</a>
                                </h4>
                            @elseif($locale === "sr")
                                <h4 class="title-post">
                                    <a href="/ktb-story">Tri organizacije i jedan cilj: Digitalni alat za izgradnju poverenja!</a>
                                </h4>
                                @elseif($locale === "en")
                                <h4 class="title-post">
                                    <a href="/ktb-story">Three organizations and one goal: A digital tool for building trust!</a>
                                </h4>
                                @endif
                                <div class="entry-meta">
                                    <div class="meta-1">
                                        <span class="author"><i class="fa fa-user" aria-hidden="true"></i><a href="#">Moderator</a></span>
                                        <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> <a href="#"> Apr 11, 2021</a></span>
                                    </div>
                                </div><!-- /.entry-meta -->

                        </article>

                        <article class="post clearfix">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="frontent/images/podcast" alt="image">
                                </div>
                            </div>
                            <div class="content-post">
                            
                        <?php $locale = Config::get('app.locale');?>

                            @if($locale === "al")
                                <h4 class="title-post">
                                    <a href="/podcast-story">Podcast: Rock si gjuhë e përbashkët</a>
                                </h4>
                            @elseif($locale === "sr")
                                <h4 class="title-post">
                                    <a href="/podcast-story">Podkast: Rok kao zajednički jezik</a>
                                </h4>
                                @elseif($locale === "en")
                                <h4 class="title-post">
                                    <a href="/podcast-story">Podcast: Rock as a common language</a>
                                </h4>
                                @endif
                                <div class="entry-meta">
                                    <div class="meta-1">
                                        <span class="author"><i class="fa fa-user" aria-hidden="true"></i><a href="#">Moderator</a></span>
                                        <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> <a href="#"> Apr 11, 2021</a></span>
                                    </div>
                                </div><!-- /.entry-meta -->

                        </article>
                    </div><!-- /post-wrap -->
                </div><!-- /col-md-8 -->

                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget widget-search">
                            <form method="get" role="search" class="search-form">
                                <input type="search" class="search-field" name="s" size="25" maxlength="128" value="" placeholder="Search"/>
                                <input type="submit" class="search-submit fa" value="&#xf002;"/>
                            </form>
                        </div>
                        <div id="categories-2" class="widget widget_categories">
                            <h5 class="widget-title widget-line">Story Tags</h5>
<!--                            <ul>-->
<!--                                <li class="cat-item cat-item-8 link_active">-->
<!--                                    <a href="#">All </a>-->
<!--                                    <span>( 40 )</span>-->
<!--                                </li>-->
<!--                                <li class="cat-item cat-item-9 ">-->
<!--                                    <a href="#9">News </a>-->
<!--                                    <span>( 10 )</span>-->
<!--                                </li>-->
<!--                                <li class="cat-item cat-item-10">-->
<!--                                    <a href="#10">Video </a>-->
<!--                                    <span>( 10 )</span>-->
<!--                                </li>-->
<!--                                <li class="cat-item cat-item-11">-->
<!--                                    <a href="#11">Blog </a>-->
<!--                                    <span>( 10 )</span>-->
<!--                                </li>-->
<!--                                <li class="cat-item cat-item-41">-->
<!--                                    <a href="#41">Champions </a>-->
<!--                                    <span>( 10 )</span>-->
<!--                                </li>-->
<!--                            </ul>-->
                        </div>
                        <div class="widget widget-popular">
                            <h5 class="widget-title widget-line">RECENT POSTS</h5>
<!--                            <ul class="popular-news clearfix">-->
<!--                                <li>-->
<!--                                    <div class="thumb">-->
<!--                                        <img src="https://kosovotrustbuilding.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdklGIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--2d892a40679af8cecc40ef846f17dc18668d9f43/Screenshot%202021-02-24%20120617.png?locale=en" alt="images" width="100px">-->
<!--                                    </div>-->
<!--                                    <div class="text">-->
<!--                                        <a href="#">"Girls" Youth-led Initiative</a>-->
<!--                                        <p><span class="date updated" >24/02/2021</span></p>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="thumb">-->
<!--                                        <img src="https://kosovotrustbuilding.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdlFGIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--f0b53e26eb762f7376904a5866d80324071b6ca4/tpb%20visejezicnost1.jpg?locale=en" alt="images" width="100px">-->
<!--                                    </div>-->
<!--                                    <div class="text">-->
<!--                                        <a href="#">Multilingualism: To remove language barriers and create friendly bridges</a>-->
<!--                                        <p><span class="date updated" >25/02/2021</span></p>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="thumb">-->
<!--                                        <img src="https://kosovotrustbuilding.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdmdGIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--34c35778d5bfc76fca87f77f7c17047083c44a24/153703862_4044631335570146_7256673688564903399_o.jpg?locale=en" alt="images" width="100px">-->
<!--                                    </div>-->
<!--                                    <div class="text">-->
<!--                                        <a href="#">WORKSHOP: Establishment of Cohesion Circle</a>-->
<!--                                        <p><span class="date updated" >26/02/2021</span></p>-->
<!--                                    </div>-->
<!--                                </li>-->
<!---->
<!--                            </ul>-->
                        </div><!-- /widget-popular -->




                    </div><!-- /sidebar -->
                </div><!-- /col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
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
                </div><!-- /.container-bottom -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <a class="go-top show vertical-text">
        BACK TO TOP <i class="fa fa-angle-double-right"></i>
    </a>


</body>
</html>
