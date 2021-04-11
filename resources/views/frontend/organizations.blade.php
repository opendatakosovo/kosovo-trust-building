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
                                <h1 class="title">{{ __('messages.organizations') }}</h1>
                            </div><!-- /.page-title-captions -->
                        </div><!-- /.page-title-captions -->



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
                        <button type="button" class="btn btn-primary btn-xs btn-tag">#{{ __('messages.youth') }}</button>
                        <button type="button" class="btn btn-primary btn-xs btn-tag">#{{ __('messages.gender') }}</button>
                        <button type="button" class="btn btn-info btn-xs btn-tag">#{{ __('messages.education') }}</button>
                        <button type="button" class="btn btn-info btn-xs btn-tag">#{{ __('messages.media') }}</button>
                        <button type="button" class="btn btn-info btn-xs btn-tag">#{{ __('messages.culture') }}</button>
                        <button type="button" class="btn btn-info btn-xs btn-tag">#{{ __('messages.religion') }}</button>
                 </div>
            <div class="row" id="myItems">
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UNDP</a></h5>
                        </div>
                        <div class="panel-body">
                        <a href="organization1"><img src="frontend/images/organizations/undp.png" alt="UNDP"></a>
                        </div>
                        <div class="panel-footer tag">
                        <span class="label label-primary hidden">All</span>
                        <span class="label label-primary">#Youth</span>
                        <span class="label label-default">#Religion</span>
                        <span class="label label-default">#Education</span>
                        <span class="label label-default">#Culture</span>
                        </div>
                    </div>

                </div>
                        <div class="col-sm-4" id="project2">
                    <div class="card panel panel-default">
                        <div class="card-body panel-heading">
                        <h5 class="card-title"><a href="#">UNHCR</a></h5>
                        </div>
                        <div class="panel-body">
                       <img src="frontend/images/organizations/unhcr.png" alt="" >
                        </div>
                        <div class="panel-footer">
                        <span class="label label-primary hidden">All</span>
                        <span class="label label-primary">#Gender</span>
                        <span class="label label-default">#Religion</span>
                        <span class="label label-default">#Education</span>
                        </div>
                    </div>

                    </div>
                        <div class="col-sm-4" id="project3">
                    <div class="card panel panel-default">
                        <div class="card-body panel-heading">
                        <h5 class="card-title"><a href="#">IOM</a></h5>
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
                    <div class="card panel panel-default">
                        <div class="card-body panel-heading title">
                        <h5 class="card-title"><a href="#">UNMIK</a></h5>
                        </div>
                        <div class="panel-body">
                        <img src="frontend/images/organizations/unmik.png" alt="">
                        </div>
                        <div class="panel-footer tag">
                        <span class="label label-primary hidden">All</span>
                        <span class="label label-primary">#Youth</span>
                        <span class="label label-default">#Religion</span>
                        <span class="label label-default">#Education</span>
                        <span class="label label-default">#Culture</span>
                        </div>
                    </div>

                    </div>
                <div class="col-sm-4" id="project5">
                    <div class="card panel panel-default">
                        <div class="card-body panel-heading">
                        <h5 class="card-title"><a href="#">GIZ</a></h5>
                        </div>
                        <div class="panel-body">
                        <img src="frontend/images/organizations/giz.jpg" alt="" >
                        </div>
                        <div class="panel-footer">
                        <span class="label label-primary hidden">All</span>
                        <span class="label label-primary">#Gender</span>
                        <span class="label label-default">#Religion</span>
                        <span class="label label-default">#Education</span>
                        </div>
                    </div>

                    </div>
                        <div class="col-sm-4" id="project6">
                    <div class="card panel panel-default">
                        <div class="card-body panel-heading">
                        <h5 class="card-title"><a href="#">ACDC</a></h5>
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

            function myFunction() {
        var input, filter, cards, cardContainer, h5, title, i;
        input = document.getElementById("myFilter");
        filter = input.value.toUpperCase();
        cardContainer = document.getElementById("myItems");
        cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h5.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
    </script>



</body>
</html>
