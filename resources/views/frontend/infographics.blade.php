<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    @include('frontend.includes.head')
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.2/chart.min.js"></script>
    <style>


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
                                <h1 class="title">{{ __('messages.infographics') }}</h1>
                            </div><!-- /.page-title-captions -->     
                        </div><!-- /.page-title-captions --> 

                        

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

        <div> 
        
        </div>

<div class="container" >
  <div class="row" style="display:flex;">
    <div class="col-sm" style="width: 45%; height:45%; margin:0 auto;">
     <canvas id="myChart1" width="400" height="400"></canvas>
    </div>
    <div class="col-sm" style="width: 45%; height:45%; margin:0 auto;">
    <canvas id="myChart2" width="400" height="400"></canvas>
    </div>
  </div>
</div>

<div class="container" style="margin-bottom:100px;">
  <div class="row" style="display:flex;">
   <div class="col-sm" style="width: 45%; height:45%; margin:0 auto;">
      <canvas id="myChart" width="400" height="400" ></canvas>
    </div>
    <div class="col-sm" style="width: 45%; height:45%; margin:0 auto;">
     <canvas id="myChart3" width="400" height="400"></canvas>
    </div>
  </div>
</div>

    <span>
    
    </span>
    


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

    <a class="go-top show vertical-text">
        BACK TO TOP <i class="fa fa-angle-double-right"></i>
    </a>
    
    <!-- Javascript -->
  
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="path/to/chartjs/dist/chart.js"></script>

    <script>
    



var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['International Partner', 'Civil Society', 'Central Institutions', 'Local Institutions', 'Media'],
        datasets: [{
            label: 'Actors initiatives',
            data: [446, 311, 77, 35, 26],
            backgroundColor: [
             'rgb(255, 99, 132)'
            ],
            borderColor: [
                 'rgb(255, 99, 132)'
            ],
            borderWidth: 1,
            hoverBorderWidth:2,
            hoverBorderColor:"#000"
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            }
            
        },
     plugins: {
            title: {
                display: true,
                text: 'Initiatives by actors',
                padding: {
                    top: 50,
                    bottom: 10
                }
            }
        }
    }


});

    
var ctx = document.getElementById('myChart1');
var myChart1 = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Initiatives', 'Actors', 'Focus Groups'],
        datasets: [{
            label: '# of Votes',
            data: [502, 360, 6],
            backgroundColor: [
                 'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            borderColor: [
               'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'

            ],
            borderWidth: 1,
            hoverBorderWidth:2,
            hoverBorderColor:"#000"
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: false
            }
        },
         plugins: {
            title: {
                display: true,
                text: '',
                 padding: {
                    top: 50,
                    bottom: 10
                }

            }
        }
    }
});



var ctx = document.getElementById('myChart2');
var myChart2 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Access to justice', 'Economic empowerment', 'Education', 'Good governance and access to services', 'Inter-religious trust-building', 'Media and communication'],
        datasets: [{
            label: 'Central Institutions',
            data: [21, 29, 11, 28, 1, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 1,
            hoverBorderWidth:2,
            hoverBorderColor:"#000"
        },
        {
            label: 'Civil Society',
            data: [25, 89, 86, 116, 5, 51],
            backgroundColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
               'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderColor: [
               'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1,
            hoverBorderWidth:2,
            hoverBorderColor:"#000"
        },
        {
            label: 'International Partner',
            data: [66, 122, 111, 164, 11, 68],
            backgroundColor: [
                 'rgba(255, 206, 86, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(255, 206, 86, 1)',
            ],
            borderColor: [
                 'rgba(255, 206, 86, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1,
            hoverBorderWidth:3,
            hoverBorderColor:"#000"
        },
        {
            label: 'Local Institutions',
            data: [4, 15, 3, 13, 2, 1],
            backgroundColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1,
            hoverBorderWidth:3,
            hoverBorderColor:"#000"
        },
        {
            label: 'Media',
            data: [1, 2, 1, 8, 0, 21],
            backgroundColor: [
                 'rgba(134,106,251, 1)',
                 'rgba(134,106,251 ,1)',
                 'rgba(134,106,251 ,1)',
                 'rgba(134,106,251 ,1)',
                 'rgba(134,106,251 ,1)',
                 'rgba(134,106,251 ,1)'
            ],
            borderColor: [
                 'rgba(134,106,251, 1)',
                 'rgba(134,106,251, 1)',
                 'rgba(134,106,251, 1)',
                 'rgba(134,106,251, 1)',
                 'rgba(134,106,251, 1)',
                 'rgba(134,106,251, 1)'
            ],
            borderWidth: 1,
            hoverBorderWidth:2,
            hoverBorderColor:"#000"
        }]
    },
    options: {
       scales: {
          x: {
        stacked: true,
      },
      y: {
        stacked: true
      }
    },
     plugins: {
            title: {
                display: true,
                text: 'Initiatives by Focus Group and Actors Group',
                 padding: {
                    top: 50,
                    bottom: 10
                }
                
            }
        }
    }
});

var ctx = document.getElementById('myChart3');
var myChart3 = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['Youth', 'Gender', 'Education', 'Media', 'Culture', 'Region'],
        datasets:  [{
            label: 'My First Dataset',
            data: [11, 16, 7, 3, 14],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(75, 192, 192)',
            'rgb(255, 205, 86)',
            'rgb(201, 203, 207)',
            'rgb(54, 162, 235)'
            ]
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            }
            
        },
         plugins: {
            title: {
                display: true,
                text: 'Initiatives by Theme',
                 padding: {
                    top: 50,
                    bottom: 10
                }
                
            }
        }
    }
});


    </script>
</body>
</html>