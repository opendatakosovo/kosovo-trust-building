@include('frontend.includes.head')

        <div class="header-wrap clearfix">

            <div id="logo" class="logo">
                <a href="/" rel="Home">
                    <img src="frontend/images/kosovo-logo-en.png" alt="image">
                </a>
            </div><!-- /.logo -->
            <ul class="bond-socials text-right">
                <li class="facebook">
                    <a href="https://www.facebook.com/trustbuildingks/"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="instagram">
                    <a href="https://www.instagram.com/trustbuildingks/"><i class="fa fa-instagram"></i></a>
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
                    
                    {{-- Main 'active' links in navbar  --}}


                    <ul class="menu"> 
                        <li>
                            
                            <li class="{{ Request::is('/') ? 'home' : '' }}">
                                <a href="{{ url('/') }}">Home</a>
                         
                        </li>
                        <li>
                            <li class="{{ Request::is('projectss') ? 'home' : '' }}">
                                <a href="{{ url('projectss') }}">Projects</a> 
                        
                        </li>
                       
                        <li>
                            
                            <li class="{{ Request::is('organizationss') ? 'home' : '' }}">
                                <a href="{{ url('organizationss') }}">Organizations</a> 
                         
                        </li>
                          
                        <li>
                            <li class="{{ Request::is('trustbuildingnetworkk') ? 'home' : '' }}">
                                <a href="{{ url('trustbuildingnetworkk') }}">Trust Building Network</a> 

                        </li>


                        <li>
                            <li class="{{ Request::is('infographicss') ? 'home' : '' }}">
                                <a href="{{ url('infographicss') }}">Infographics</a> 
                           
                        </li>
                        
                        <li>
                            <li class="{{ Request::is('galleryy') ? 'home' : '' }}">
                                <a href="{{ url('galleryy') }}">Gallery</a> 
                           
                        </li>

                        <li>
                            <li class="{{ Request::is('storiess') ? 'home' : '' }}">
                                <a href="{{ url('storiess') }}">Stories</a> 
                        
                        </li>

                        <li>
                            <li class="{{ Request::is('who-we-aree') ? 'home' : '' }}">
                                <a href="{{ url('who-we-aree') }}">Who we are</a>  
                          
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
