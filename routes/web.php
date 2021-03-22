
<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 // front-end routes 
 Route::get('/', function () { return view('frontend.index'); });
 Route::get('/who-we-are', function () { return view('frontend.who-we-are'); });
 Route::get('/trustbuildingnetwork', function () { return view('frontend.trustbuildingnetwork'); });
 Route::get('/contribute', function () { return view('frontend.contribute'); });
 Route::get('/gallery', function () { return view('frontend.gallery'); });
 Route::get('/organization1', function () { return view('frontend.organization1'); });
 Route::get('/organizations', function () { return view('frontend.organizations'); });
 Route::get('/portfolio', function () { return view('frontend.portfolio'); });
 Route::get('/projects', function () { return view('frontend.projects'); });
 Route::get('/infographics', function () { return view('frontend.infographics'); });
 Route::get('/stories', function () { return view('frontend.stories'); });
 Route::get('/covid19', function () { return view('frontend.covid19'); });
 Route::get('/pledges', function () { return view('frontend.pledges'); });


 //Stories
 Route::get('/ngostory', function () { return view('frontend.ngostory'); });
 Route::get('/youthparticipation', function () { return view('frontend.youthparticipation'); });
 Route::get('/wateraidstory', function () { return view('frontend.wateraidstory'); });
 Route::get('/germanstory', function () { return view('frontend.germanstory'); });





 // front-end routes end

