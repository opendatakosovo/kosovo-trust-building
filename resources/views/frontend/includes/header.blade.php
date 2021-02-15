@include('frontend.includes.head')

        <div class="header-wrap clearfix">

            <div id="logo" class="logo">
                <a href="/home" rel="home">
                    <img src="frontend/images/kosovo-logo-en.png" alt="image">
                </a>
            </div><!-- /.logo -->
            <ul class="bond-socials text-right">
                <li class="facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="instagram">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li class="pinterest">
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </li>
            </ul>

            <div class="nav-wrap">
                <div class="show-search">
                    <a href="#"><i id="s" class="fa fa-search"></i></a>
                </div><!-- /.show-search -->


                <div class="btn-menu">
                    <span></span>
                </div><!-- //mobile menu button -->
                <nav id="mainnav" class="mainnav">
                    <ul class="menu"> 
                        <li>
                            <a href="/home">Home</a>
                         
                        </li>
                        <li><a href="projects.html">Projects</a>  
                        
                        </li>
                       

                        <li><a href="organizations.html">Organizations</a>
                         
                        </li>

                        <li><a href="recommendations.html">Recommendations</a> 
                          
                        </li>

                        <li class="sub-parent"><a href="resources.html">Resources </a>
                           
                        </li>

                        <li><a href="gallery.html">Gallery</a>  
                        
                        </li>

                        <li><a href="stories.html">Stories</a>  
                          
                        </li>

                        <li><a href="/who-we-are">Who we are</a>
                         
                        </li> 
                                             
                    </ul><!-- /.menu -->
                </nav><!-- /.mainnav -->

                <div class="widget search-box widget-search">
                    <form method="get" role="search" class="search-form">
                        <input type="search" class="search-field" name="s" size="25" maxlength="128" value=""
                            placeholder="Search" />
                        <input type="submit" class="search-submit fa" value="&#xf002;" />
                    </form>
                </div>
            </div><!-- /.nav-wrap -->

        </div><!-- /.header-inner -->
