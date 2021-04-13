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
                        </div>
                        <div class="panel-footer">
                        <span class="label label-primary hidden">All</span>
                        <span class="label label-primary">#Gender</span>
                        <span class="label label-default">#Media</span>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">A.U.K - Training and Development Institute</a></h5>
                        </div>
                        <div class="panel-body">
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

                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Agency for Free Legal Aid</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Alternativna</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Alternativni Centar za Devojke</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">AmCham Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">AMPEK</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">ANIBAR</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Art Polis</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Assembly of Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Association of Journalists of Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">ATRC</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Austrian Development Cooperations</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Balkan Green Foundation</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Balkan Sunflowers</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Balkans Policy Research Group</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">BIRN</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">BRAN – Bashkimi Rinor E Ardhmja E Ndritur</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">British Council</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">British Embassy</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Canada Fund for Local Initiatives</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">CARE Balkans</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Caritas Kosova</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">CBM</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">CDF</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">CDO</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Center for Advanced Studies – FIT</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Center for Counseling, Social Services and Research (SIT)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Center for Cultural Diversity and Minority Development</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Center for Equality and Liberty (CEL)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Center for International Legal Cooperation</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Center For Social Affirmation of Youth</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Center for Social Groups Development (CSGD)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Center for Social Initiatives</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Center for the Right of Minority Communities</a></h5>
                        </div>
                        <div class="panel-body">
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

                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Central institutions</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Centre for Communities Development (CCD)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">CEPEJ</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">CFD Swiss</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Chamber of Commerce</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">CIVIKOS</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Civil Society</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">CLARD</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Communication for Social Development</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Cooperative Eva</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Council of Europe</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Crno Beli Svet</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Cultural Artistic Assosciation</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Cultural Club Gracanica</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">D4D</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">D4D Embassy of Netherlands</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">DAI</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">DANIDA</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Danish Refugee Council</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Democracy Plus</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">DEMOS</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">DokuFest</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Down Syndrom Kosova</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">EC Ma Ndryshe</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">ECMI Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Eco Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Embassy of Netherlands</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Embassy of Switzerland</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">EU</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">EU Kosovar Gender Studies Center</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">EU NGO Open Data Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">EU NGO PEN</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">EULEX</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Europe House</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">EUSR</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Finnish Embassy Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Fondacioni Jeshil</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Forum for Civic Initiatives</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Forum for Leadership and Diplomacy</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Friedrich-Ebert-Stiftung Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">GAIA Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Gender Equality Officers</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Geneva Center for Security Policy (GCSP)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">German Cooperation</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">German Embassy</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">German Marshall Fund</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Girls Coding Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">GIZ Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Global Community Engagement and Resilience Fund</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">GLPS</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Goethe-Institut</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Government of Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Gračanica online</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Gruaja Hyjnore</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Head of Committee for Human Rights</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">HEKS</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">HELVETAS</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">High Schools</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Human Rights Radio Network - HRN</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">IBCM</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">ICMA</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Inclusive Development Programme</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Initiative for Agricultural Development of Kosovo - IADK</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Initiative for Kosova Community</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Innovation Centre Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Innovations Lab Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Innovations Lab Kosovo Ombudsperson Institution</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Innovative Community Development Center</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Institute for Advanced Studies (GAP)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Institute for Development Policy (INDEP)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Institute of Forensic Medicine</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">InTER</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">IOM</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">IPKO Foundation</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">IQS</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">IRZ</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Italian High Council of the Judiciary</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Jahjaga Foundation</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">KCSF</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">KCSF Royal Embassy of Norway in Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">KCSS</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">KDI</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">KFOS</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">KIPRED</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosova Education Center (KEC)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosova Women for Women</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosova Women's Network</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosova Employment Promotion Agency Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovar Gender Studies Center</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo 2.0</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo Academy of Justice</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo Albanian Development Fund (ADF)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo Apparel Marketing Association</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo Center for Business Support</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo Court of Appeals</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo Court of Appeals</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo Judicial Council</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo Law Institute</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo Local Government Institute</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo Police</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo Prosecutorial Council</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kosovo Youth Council</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">KoSSev</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">KSSP</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Kvinna till Kvinna</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Leadership and Growth Council</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Let’s do it Peja</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Local Action Group</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Local Institutions</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Lyac Zubin Potok</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">LYAC Zvečan</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Managing Development Associates</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Media Center Caglavica</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Agriculture, Forestry and Rural Development</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Communities and Returns</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Culture, Youth and Sports</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Economic Development</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Education, Science and Technology</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Environment and Spatial Planning</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Finance</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Health</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Inovation and Enterpreneurship</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Internal Affairs</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Justice</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Justice of France</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Justice of Italy</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Labour and Social Welfare</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ministry of Local Government Administration</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Mitrovica Basic Court</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Municipalities</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Municipality of Kamenicë/Kamenica</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Municipality of Klinë/Klina</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Municipality of North Mitrovica</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">National Center for State Courts (NCSC)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">National Coordinator against Domestic Violence</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NDI</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NED</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NED Oral History Initiative</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Network of Peace Movement</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">New Perspektiva</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO 4Life</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO ACDC</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Aktiv</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Aletro</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO BONEVET</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Business center Zvečan</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Center for Human Resources Development</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO CPT </a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Domovik</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Durmish Aslano </a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#"> </a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Ecologica</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO EkoPro </a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#"> NGO Fodem</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Futja Ngjyre</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO INJECT</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Institute For Affirmation Of Inter-Ethnic Relations</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Internews Kosova</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Jonuz Ramadani</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Lady</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Lens</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Lighthouse</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO LINK</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Melodies</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Mundesia</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Nevo Koncepti</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO NSI</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO PEN</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Preporod</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Raise Your Hand for Help</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Roma Press Service</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Sabor</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Santa Maria</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Sjaj Sunca</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Sokolica</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Synergy</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO VoRAE</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO Women's Right</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO YCC</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">NGO-Vision 02</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">OAK Foundation</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Office of Kosovo Coordinator against Domestic Violence</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Office of Language Commissioner</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Olof Palme International Center</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Ombudsperson Institution</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Open Society Foundations</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">ORCA </a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#"></a>Organization for Democracy</h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">OSCE </a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Partners Kosova </a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">PAX</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Press Council of Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Pristina Basic Court</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Public Organization for Local Initiatives and Supports</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Qendra Multimedia</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Radio Kontakt Plus </a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Radio Mitrovica Sever</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Regional Cooperation Council (RCC)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Regional Environmental Center</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Regional Youth Cooperation Office</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">RIT Kosovo </a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Roma Versitas Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Royal Embassy of Norway in Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">RROGRAEK</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Save The Children Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Sbunker</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Senior Legal Advisor of the Ombudsman Office</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Shtatëmbëdhjetë</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">SIDA</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Skënderaj/Srbica Municipality</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Slovak Aid in Kosovo </a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">State Prosecutors Office</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">STATEE </a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Swedish Embassy</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Swiss Cooperation Office in Kosovo</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Swisscontact</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Swisscontact Riinvest</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Syri i Vizionit</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">The Institute for Affirmation of Interethnic Relations (IAMN)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">The Swiss Agency for Development and Cooperation (SDC)</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">TOKA</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UBT</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UK - Foreign & Commonwealth Office</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UN Habitat</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UN Women</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UNDCO</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UNDP</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UNDP EU</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UNDP IBCM</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UNFPA</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UNHCR</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UNICEF</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">United Youth Task Force</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UNKT</a></h5>
                        </div>
                        <div class="panel-body">
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
                
            
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">UNOPS</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">US Embassy</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">USAID</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">VKBIK</a></h5>
                        </div>
                        <div class="panel-body">
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

                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">W4WK</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Women’s Caucus in Kamenicë/Kamenica</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Women's Cultural Center Zvečan-Zveçan</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">World Bank</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Youth Association for Human Rights</a></h5>
                        </div>
                        <div class="panel-body">
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
                <div class="col-sm-4" id="project1">
                    <div class="card panel panel-default">
                    <div class="card-body panel-heading">
                    <h5 class="card-title"><a href="#">Utalaya Foundation</a></h5>
                        </div>
                        <div class="panel-body">
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
