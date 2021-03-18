<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    @include('frontend.includes.head')
 </head>                            
<body class="header-sticky page service v2">  
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading...</h2>
        </div>
    </section> 
    <!-- Header -->            
    <header id="header" class="header clearfix">
        @include('frontend.includes.header')
        </header>
            
    <!-- Page title -->
    <div class="bond-page-title">
        <div class="page-title parallax parallax2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading v1">
                            <div class="page-title-heading">
                                <h1 class="title">Organizations</h1>
                            </div><!-- /.page-title-captions -->     
                        </div><!-- /.page-title-captions --> 

                        <div class="breadcrumb-trail breadcrumbs" >
                            <ul>
                                <li class="trail-item"><a href="index.html" title="bond" rel="home">HOME</a></li>
                                <li>Organizations</li>
                            </ul>
                        </div>

                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title --> 
    </div>

    

    <!-- Organizations gallery <-- Bond what we do style2 -->
    <section class=" bond-row what-we-do v2 keep-30">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mb-3 col-md-4">
                <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Search for organizations..">
                 </div>
                        <button type="button" class="btn btn-default btn-xs btn-tag">All</button>
                        <button type="button" class="btn btn-primary btn-xs btn-tag">#Youth</button>
                        <button type="button" class="btn btn-primary btn-xs btn-tag">#Gender</button>
                        <button type="button" class="btn btn-info btn-xs btn-tag">#Education</button>
                        <button type="button" class="btn btn-info btn-xs btn-tag">#Media</button>
                        <button type="button" class="btn btn-info btn-xs btn-tag">#Culture</button>
                        <button type="button" class="btn btn-info btn-xs btn-tag">#Region</button>
                 </div>
                <div class="row">
                    <div class="col-sm-4" id="project1">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                        <a href="organization1"><img src="frontend/images/organizations/undp.png" alt="UNDP"></a>
                        </div>
                        <div class="panel-footer tag">
                        <span class="label label-primary hidden">All</span>
                        <span class="label label-primary">#Youth</span>
                        <span class="label label-default">#Region</span>
                        <span class="label label-default">#Education</span>
                        <span class="label label-default">#Culture</span>
                        </div>
                    </div>

                    </div>
                        <div class="col-sm-4" id="project2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                       <img src="frontend/images/organizations/unhcr.png" alt="" >
                        </div>
                        <div class="panel-footer">
                        <span class="label label-primary hidden">All</span>
                        <span class="label label-primary">#Gender</span>
                        <span class="label label-default">#Region</span>
                        <span class="label label-default">#Education</span>
                        </div>
                    </div>

                    </div>
                        <div class="col-sm-4" id="project3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                        <img src="frontend/images/organizations/iom.png" alt="" >
                        </div>
                        <div class="panel-footer">
                        <span class="label label-primary hidden">All</span>
                        <span class="label label-primary">#Gender</span>
                        <span class="label label-default">#Media</span>
                        </div>
                    </div>

                    </div>
                    <div class="col-sm-4" id="project4">
                    <div class="panel panel-default">
                        <div class="panel-heading title">
                       
                        </div>
                        <div class="panel-body">
                        <img src="frontend/images/organizations/unmik.png" alt="">
                        </div>
                        <div class="panel-footer tag">
                        <span class="label label-primary hidden">All</span>
                        <span class="label label-primary">#Youth</span>
                        <span class="label label-default">#Region</span>
                        <span class="label label-default">#Education</span>
                        <span class="label label-default">#Culture</span>
                        </div>
                    </div>

                    </div>
                <div class="col-sm-4" id="project5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                        <img src="frontend/images/organizations/giz.jpg" alt="" >
                        </div>
                        <div class="panel-footer">
                        <span class="label label-primary hidden">All</span>
                        <span class="label label-primary">#Gender</span>
                        <span class="label label-default">#Region</span>
                        <span class="label label-default">#Education</span>
                        </div>
                    </div>

                    </div>
                        <div class="col-sm-4" id="project6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                        <img src="frontend/images/organizations/acdc.png" alt="">
                        </div>
                        <div class="panel-footer">
                        <span class="label label-primary hidden">All</span>
                        <span class="label label-primary">#Gender</span>
                        <span class="label label-default">#Media</span>
                        </div>
                    </div>

                    </div>
                    
                    
                    
                </div>
                </div>

        </div>
    </section>  
      
      <section>
            
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
                </div><!-- /.container-bottom -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div> 



    <a class="go-top vertical-text">
        BACK TO TOP <i class="fa fa-angle-double-right"></i>
    </a>


    <script>
        $(document).ready(function() {

            $(".btn-tag").click(function(eventObject) {
            var tag = $(this).html();
            var totalPanel = document.getElementsByClassName("panel").length;
            eventObject.preventDefault();
            for (var x = 1; x <= totalPanel; x++  ){
                console.log("json: " + JSON.stringify($("#project" + x ).html()));
                if(JSON.stringify($("#project" + x ).html()).indexOf(tag) >= 0 ){
                //console.log( JSON.stringify($("#project" + x ).html()) );
                $("#project" + x ).hide();
                $("#project" + x ).fadeIn();
                } else {
                $("#project" + x ).hide();
                };
                //console.log(tag);
                //console.log(JSON.stringify($("#project" + x ).html()).indexOf(tag));
            }
            //console.log(tag);

            });
            //console.log("total panel: " + document.getElementsByClassName("panel").length );

            });
    </script>
    
    
    
</body>
</html>