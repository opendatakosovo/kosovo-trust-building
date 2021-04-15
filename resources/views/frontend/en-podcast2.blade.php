<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    @include('frontend.includes.head')
</head>
<body class="header-sticky blog-single">
<!-- Header -->
<header id="header" class="header clearfix">
    @include('frontend.includes.header')

    <style>
    .video-container {
    overflow: hidden;
    position: relative;
    width:100%;
}

.video-container::after {
    padding-top: 56.25%;
    display: block;
    content: '';
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
    </style>
</header>

<?php $locale = Config::get('app.locale');?>

<!-- Page title -->
<div class="bond-page-title">
    <div class="page-title parallax parallax1">
        <div class="overlay v1"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading v1">
                        <div class="page-title-heading">
                         
                            <h1 class="title">Episode 2: Mitrovica Big Band: Music "the only politics"</h1>
                           
                        </div><!-- /.page-title-captions -->
                    </div><!-- /.page-title-captions -->

                    <div class="breadcrumb-trail breadcrumbs" >
                        <ul>
                            <li class="trail-item"><a href="/" title="bond" rel="home">@lang('messages.home')</a></li>
                            <li class="trail-item"><a href="/stories" title="BLOG">@lang('messages.stories')</a></li>
                        </ul>
                    </div>

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->
</div>

<section class="main-content blog-detail-aries v1">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="post-wrap">
                    <div class="featured-blog-post">
  
                    </div>

                    <article class="blog-post">
                        <div class="content-blog-post">
                            <h2 class="title-blog-post">
                           
                             
                                <a href="#">Episode 2: Mitrovica Big Band: Music "the only politics"</a>
                              
                            </h2>

                        </div><!-- /content-blog-post -->
                      
                    </article><!-- /blog-post -->

                    <div class="video-container">
  <iframe src="https://www.youtube.com/embed/INFKTB5fsUc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
                    
                    <div class="social-share-article" >
                       
                        <div class="box icon-circle bg-1">
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
                                <li class="pinterest">
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul><!-- /bond-socials -->
                        </div>
                    </div> <!-- social share -->



                    <nav class="navigation posts-navigation" role="navigation">
                        <h2 class="screen-reader-text" style="display:none;">Post navigation</h2>
                        <div class="nav-links clearfix">
                            <div class="nav-previous">
                                <a href="/en/education-story" rel="prev">Prev Post</a>
                            </div>
                            <div class="nav-next">
                                <a href="/en/masterpieces-story" rel="next">Next post</a>
                            </div>
                        </div><!-- .nav-links -->
                    </nav>


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

<!--                    <div class="widget widget-popular">-->
<!--                        <h5 class="widget-title widget-line">RECENT POSTS</h5>-->
<!--                        <ul class="popular-news clearfix">-->
<!--                            <li>-->
<!--                                <div class="thumb">-->
<!--                                    <img src="images/blog/widget/recent-post-1.jpg" alt="images">-->
<!--                                </div>-->
<!--                                <div class="text">-->
<!--                                    <a href="#">Librarian girl you know youth that you can change</a>-->
<!--                                    <p><span class="date updated" >June 8, 2016</span></p>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="thumb">-->
<!--                                    <img src="images/blog/widget/recent-post-2.jpg" alt="images">-->
<!--                                </div>-->
<!--                                <div class="text">-->
<!--                                    <a href="#">You know that you can change my world ilove post</a>-->
<!--                                    <p><span class="date updated" >June 8, 2016</span></p>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="thumb">-->
<!--                                    <img src="images/blog/widget/recent-post-3.jpg" alt="images">-->
<!--                                </div>-->
<!--                                <div class="text">-->
<!--                                    <a href="#">This is a great opportunity to write a blog post</a>-->
<!--                                    <p><span class="date updated" >June 8, 2016</span></p>-->
<!--                                </div>-->
<!--                            </li>-->
<!---->
<!--                        </ul>-->
<!--                    </div>-->

                    <!-- /widget-popular -->




                </div><!-- /sidebar -->
            </div><!-- /col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
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
