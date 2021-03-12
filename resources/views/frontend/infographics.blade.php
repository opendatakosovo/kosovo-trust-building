<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    @include('frontend.includes.head')
    <style>
        #container {
  height: 400px; 
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 310px; 
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
    </style>


</head>                                 
<body class="header-sticky blog-details">  
    <!-- Header -->            
    <header id="header" class="header clearfix">
        @include('frontend.includes.header')
        </header>
            
    <!-- Page title -->
    <div class="bond-page-title">
        <div class="page-title parallax parallax2">
            <div class="overlay v3"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading v3">
                            <div class="page-title-heading">
                                <h1 class="title">Infographics</h1>
                            </div><!-- /.page-title-captions -->     
                        </div><!-- /.page-title-captions --> 

                        <div class="breadcrumb-trail breadcrumbs" >
                            <ul>
                                <li class="trail-item"><a href="index.html" title="bond" rel="home">HOME</a></li>
                                <li>Resources</li>
                            </ul>
                        </div>

                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title --> 
    </div>

    <figure class="highcharts-figure">
        <div id="container"></div>
        
    </figure>

    <figure class="highcharts-figure">
        <div id="container1"></div>
        </figure>


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

    <a class="go-top show vertical-text">
        BACK TO TOP <i class="fa fa-angle-double-right"></i>
    </a>
    
    <!-- Javascript -->
  
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>

        Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Kosovo Trust Building infographics and resources, 2020'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Activity share',
        data: [
            ['Recommendations', 45.0],
            ['Initiatives', 26.8],
            {
                name: 'Actors',
                y: 12.8,
                sliced: true,
                selected: true
            },
            ['Focus groups', 8.5]
            // ['Opera', 6.2],
            // ['Others', 0.7]
        ]
    }]
});

Highcharts.chart('container1', {
    title: {
        text: 'Language and nationality chart'
    },
    xAxis: {
        categories: ['Prishtina', 'Gjakova', 'Prizren', 'Mitrovica', 'Gjilan']
    },
    labels: {
        items: [{
            html: 'Total fruit consumption',
            style: {
                left: '50px',
                top: '18px',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'black'
            }
        }]
    },
    series: [{
        type: 'column',
        name: 'English',
        data: [3.5, 2, 1, 2, 2]
    }, {
        type: 'column',
        name: 'Serbian',
        data: [2, 3, 5, 7, 3]
    }, {
        type: 'column',
        name: 'Albanian',
        data: [4, 6, 3, 9, 7]
    }, {
        type: 'spline',
        name: 'Average',
        data: [1, 2.67, 3, 6.33, 3.33],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    }, {
        type: 'pie',
        name: 'Total language chart',
        data: [{
            name: 'English',
            y: 7,
            color: Highcharts.getOptions().colors[0] // Jane's color
        }, {
            name: 'Serbian',
            y: 23,
            color: Highcharts.getOptions().colors[1] // John's color
        }, {
            name: 'Albanian',
            y: 70,
            color: Highcharts.getOptions().colors[2] // Joe's color
        }],
        center: [100, 80],
        size: 100,
        showInLegend: false,
        dataLabels: {
            enabled: false
        }
    }]
});
    </script>
</body>
</html>