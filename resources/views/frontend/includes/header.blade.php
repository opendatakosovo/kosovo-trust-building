@include('frontend.includes.head')

        <div class="header-wrap clearfix">

            <div id="logo" class="logo">
                <a href="/" rel="Home">
                    <img src={{url('/frontend/images/kosovo-logo-en.png')}} alt="image">
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
                    <a class="button" data-toggle="modal" data-target="#myModal2" class="readmore" style="cursor:pointer;"><i id="s" class="fa fa-search"></i></a>
                </div><!-- /.show-search -->


                <div class="btn-menu">
                    <span></span>
                </div><!-- //mobile menu button -->
                <nav id="mainnav" class="mainnav">
                    
                    {{-- Main 'active' links in navbar  --}}


                    <ul class="menu"> 
                        <li>
                            
                            <li class="{{ Request::is('/') ? 'home' : '' }}">
                                <a href="{{ url('/') }}">{{ __('messages.home') }}</a>
                         
                        </li>
                        
                        <li>
                            <li class="{{ Request::is('who-we-are') ? 'home' : '' }}">
                                <a href="{{ url('who-we-are') }}">{{ __('messages.who-we-are') }}</a>  
                          
                        </li>

                        <li>
                            <li class="{{ Request::is('projectss') ? 'home' : '' }}">
                                <a href="{{ url('projectss') }}">{{ __('messages.projects') }}</a> 
                        
                        </li>
                       
                        <li>
                            
                            <li class="{{ Request::is('organizationss') ? 'home' : '' }}">
                                <a href="{{ url('organizationss') }}">{{ __('messages.organizations') }}</a> 
                         
                        </li>
                          
                        <li>
                            <li class="{{ Request::is('trustbuildingnetworkk') ? 'home' : '' }}">
                                <a href="{{ url('trustbuildingnetworkk') }}">{{ __('messages.trb') }}</a> 

                        </li>


                        <li>
                            <li class="{{ Request::is('infographicss') ? 'home' : '' }}">
                                <a href="{{ url('infographicss') }}">{{ __('messages.infographics') }}</a> 
                           
                        </li>
                        
                        <li>
                            <li class="{{ Request::is('gallery') ? 'home' : '' }}">
                                <a href="{{ url('gallery') }}">{{ __('messages.gallery') }}</a> 
                           
                        </li>

                        <li>
                            <li class="{{ Request::is('stories') ? 'home' : '' }}">
                                <a href="{{ url('stories') }}">{{ __('messages.stories') }}</a> 
                        
                        </li>
                    <li>
                <select class="form-control changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="al" {{ session()->get('locale') == 'al' ? 'selected' : '' }}>Shqip</option>
                    <option value="sr" {{ session()->get('locale') == 'sr' ? 'selected' : '' }}>Srpski</option>
                </select>
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

        <script type="text/javascript">
  
  var url = "{{ route('changeLang') }}";

  $(".changeLang").change(function(){
      window.location.href = url + "?lang="+ $(this).val();
  });
  <script src="{{ asset('frontend/javascript/main.js') }}"></script>
</script>