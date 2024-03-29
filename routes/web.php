
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
Route::get('lang/home', 'LangController@index');
Route::get('lang/change', 'LangController@change')->name('changeLang');
 // front-end routes
 Route::get('/', function () { return view('frontend.index'); });
 Route::get('/en', function () { return view('frontend.index.en'); });
 Route::get('/sq', function () { return view('frontend.index.sq'); });
 Route::get('/sr', function () { return view('frontend.index.sr'); });
 Route::get('/lang', function () { return view('frontend.lang'); });
 Route::get('/who-we-are', function () { return view('frontend.who-we-are'); });
 Route::get('/trustbuildingnetworkk', function () { return view('frontend.trustbuildingnetwork'); });
 Route::get('/contribute', function () { return view('frontend.contribute'); });
 Route::get('/gallery', function () { return view('frontend.gallery'); });
 Route::get('/organization1', function () { return view('frontend.organization1'); });
 Route::get('/organizationss', function () { return view('frontend.organizations'); });
 Route::get('/portfolio', function () { return view('frontend.portfolio'); });
 Route::get('/projectss', function () { return view('frontend.projects'); });
 Route::get('/infographicss', function () { return view('frontend.infographics'); });
 Route::get('/stories', function () { return view('frontend.stories'); });
 Route::get('/covid19', [\App\Http\Controllers\Covid19Controller::class, 'index'])->name('covid19.index');
 //Route::get('/pledges', function () { return view('frontend.pledges'); });
 Route::get('/pledges', [\App\Http\Controllers\PledgesController::class, 'index'])->name('pledges.index');


 //Stories
 Route::get('/digital-agenda', function () { return view('frontend.digital-agenda'); });
 Route::get('en/ktb-story', function () { return view('frontend.en-ktb-story'); });
 Route::get('sr/ktb-story', function () { return view('frontend.sr-ktb-story'); });
 Route::get('sq/ktb-story', function () { return view('frontend.sq-ktb-story'); });
 Route::get('en/podcast-story', function () { return view('frontend.en-podcast-story'); });
 Route::get('sq/podcast-story', function () { return view('frontend.sq-podcast-story'); });
 Route::get('sr/podcast-story', function () { return view('frontend.sr-podcast-story'); });

 Route::get('sr/music-story', function () { return view('frontend.sr-music-story'); });
 Route::get('en/music-story', function () { return view('frontend.en-music-story'); });
 Route::get('sq/music-story', function () { return view('frontend.sq-music-story'); });

 Route::get('sr/dance-story', function () { return view('frontend.sr-dance-story'); });
 Route::get('en/dance-story', function () { return view('frontend.en-dance-story'); });
 Route::get('sq/dance-story', function () { return view('frontend.sq-dance-story'); });

 Route::get('sr/education-story', function () { return view('frontend.sr-education-story'); });
 Route::get('en/education-story', function () { return view('frontend.en-education-story'); });
 Route::get('sq/education-story', function () { return view('frontend.sq-education-story'); });

 Route::get('sr/podcast2', function () { return view('frontend.sr-podcast2'); });
 Route::get('en/podcast2', function () { return view('frontend.en-podcast2'); });
 Route::get('sq/podcast2', function () { return view('frontend.sq-podcast2'); });

 Route::get('sr/masterpieces-story', function () { return view('frontend.sr-masterpieces-story'); });
 Route::get('en/masterpieces-story', function () { return view('frontend.en-masterpieces-story'); });
 Route::get('sq/masterpieces-story', function () { return view('frontend.sq-masterpieces-story'); });


 Route::get('/sq/digital-agenda', function () { return view('frontend.digital-agenda.sq-digital-agenda'); });
 Route::get('/sr/digital-agenda', function () { return view('frontend.digital-agenda.sr-digital-agenda'); });
 Route::get('en/colors-of-nature', function () { return view('frontend.en-colors-of-nature'); });
 Route::get('sq/colors-of-nature', function () { return view('frontend.sq-colors-of-nature'); });
 Route::get('sr/colors-of-nature', function () { return view('frontend.sr-colors-of-nature'); });
 Route::get('/art-story', function () { return view('frontend.art-story'); });
 Route::get('/language-story', function () { return view('frontend.language-story'); });
 Route::get('/understanding-story', function () { return view('frontend.understanding-story'); });
 Route::get('/journalism-story', function () { return view('frontend.journalism-story'); });
 Route::get('/multilingualism-story', function () { return view('frontend.multilingualism-story'); });
// Route::get('/ngostory', function () { return view('frontend.ngostory'); });
// Route::get('/youthparticipation', function () { return view('frontend.youthparticipation'); });
// Route::get('/wateraidstory', function () { return view('frontend.wateraidstory'); });
// Route::get('/germanstory', function () { return view('frontend.germanstory'); });




 Route::group(['middleware' => ['get.menu']], function () {
    Route::get('/dashboard', function () {           return view('dashboard.homepage'); });

    Route::group(['middleware' => ['role:user']], function () {
        Route::get('/colors', function () {     return view('dashboard.colors'); });
        Route::get('/typography', function () { return view('dashboard.typography'); });
        Route::get('/charts', function () {     return view('dashboard.charts'); });
        Route::get('/widgets', function () {    return view('dashboard.widgets'); });
        Route::get('/404', function () {        return view('dashboard.404'); });
        Route::get('/500', function () {        return view('dashboard.500'); });
        Route::get('/projects', function () {     return view('dashboard.projects'); });
        Route::get('/organizations', function () { return view('dashboard.organizations');});
//        Route::get('/stories', function () { return view('dashboard.stories.stories');});
        Route::get('/tags', function(){   return view('dashboard.tags'); });
        Route::get('/graphs', function () { return view('dashboard.graphs');});
        Route::prefix('base')->group(function () {
            Route::get('/breadcrumb', function(){   return view('dashboard.base.breadcrumb'); });
            Route::get('/cards', function(){        return view('dashboard.base.cards'); });
            Route::get('/carousel', function(){     return view('dashboard.base.carousel'); });
            Route::get('/collapse', function(){     return view('dashboard.base.collapse'); });

            Route::get('/forms', function(){        return view('dashboard.base.forms'); });
            Route::get('/jumbotron', function(){    return view('dashboard.base.jumbotron'); });

            Route::get('/navs', function(){         return view('dashboard.base.navs'); });

            Route::get('/pagination', function(){   return view('dashboard.base.pagination'); });
            Route::get('/popovers', function(){     return view('dashboard.base.popovers'); });
            Route::get('/progress', function(){     return view('dashboard.base.progress'); });
            Route::get('/scrollspy', function(){    return view('dashboard.base.scrollspy'); });

            Route::get('/switches', function(){     return view('dashboard.base.switches'); });
            Route::get('/tables', function () {     return view('dashboard.base.tables'); });
            Route::get('/tabs', function () {       return view('dashboard.base.tabs'); });
            Route::get('/tooltips', function () {   return view('dashboard.base.tooltips'); });
        });
        Route::prefix('buttons')->group(function () {
            Route::get('/buttons', function(){          return view('dashboard.buttons.buttons'); });
            Route::get('/button-group', function(){     return view('dashboard.buttons.button-group'); });
            Route::get('/dropdowns', function(){        return view('dashboard.buttons.dropdowns'); });
            Route::get('/brand-buttons', function(){    return view('dashboard.buttons.brand-buttons'); });
        });
        Route::prefix('icon')->group(function () {  // word: "icons" - not working as part of adress
            Route::get('/coreui-icons', function(){         return view('dashboard.icons.coreui-icons'); });
            Route::get('/flags', function(){                return view('dashboard.icons.flags'); });
            Route::get('/brands', function(){               return view('dashboard.icons.brands'); });
        });
        Route::prefix('notifications')->group(function () {
            Route::get('/alerts', function(){   return view('dashboard.notifications.alerts'); });
            Route::get('/badge', function(){    return view('dashboard.notifications.badge'); });
            Route::get('/modals', function(){   return view('dashboard.notifications.modals'); });
        });
        Route::resource('notes', 'NotesController');
    });
    Auth::routes();

    Route::resource('resource/{table}/resource', 'ResourceController')->names([
        'index'     => 'resource.index',
        'create'    => 'resource.create',
        'store'     => 'resource.store',
        'show'      => 'resource.show',
        'edit'      => 'resource.edit',
        'update'    => 'resource.update',
        'destroy'   => 'resource.destroy'
    ]);

    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('bread',  'BreadController');   //create BREAD (resource)
        Route::resource('users',        'UsersController')->except( ['create', 'store'] );
        Route::resource('roles',        'RolesController');
        Route::resource('mail',        'MailController');
        Route::get('prepareSend/{id}',        'MailController@prepareSend')->name('prepareSend');
        Route::post('mailSend/{id}',        'MailController@send')->name('mailSend');
        Route::get('/roles/move/move-up',      'RolesController@moveUp')->name('roles.up');
        Route::get('/roles/move/move-down',    'RolesController@moveDown')->name('roles.down');
        Route::prefix('menu/element')->group(function () {
            Route::get('/',             'MenuElementController@index')->name('menu.index');
            Route::get('/move-up',      'MenuElementController@moveUp')->name('menu.up');
            Route::get('/move-down',    'MenuElementController@moveDown')->name('menu.down');
            Route::get('/create',       'MenuElementController@create')->name('menu.create');
            Route::post('/store',       'MenuElementController@store')->name('menu.store');
            Route::get('/get-parents',  'MenuElementController@getParents');
            Route::get('/edit',         'MenuElementController@edit')->name('menu.edit');
            Route::post('/update',      'MenuElementController@update')->name('menu.update');
            Route::get('/show',         'MenuElementController@show')->name('menu.show');
            Route::get('/delete',       'MenuElementController@delete')->name('menu.delete');
        });
        Route::prefix('menu/menu')->group(function () {
            Route::get('/',         'MenuController@index')->name('menu.menu.index');
            Route::get('/create',   'MenuController@create')->name('menu.menu.create');
            Route::post('/store',   'MenuController@store')->name('menu.menu.store');
            Route::get('/edit',     'MenuController@edit')->name('menu.menu.edit');
            Route::post('/update',  'MenuController@update')->name('menu.menu.update');
            Route::get('/delete',   'MenuController@delete')->name('menu.menu.delete');
        });
        Route::prefix('media')->group(function () {
            Route::get('/',                 'MediaController@index')->name('media.folder.index');
            Route::get('/folder/store',     'MediaController@folderAdd')->name('media.folder.add');
            Route::post('/folder/update',   'MediaController@folderUpdate')->name('media.folder.update');
            Route::get('/folder',           'MediaController@folder')->name('media.folder');
            Route::post('/folder/move',     'MediaController@folderMove')->name('media.folder.move');
            Route::post('/folder/delete',   'MediaController@folderDelete')->name('media.folder.delete');;

            Route::post('/file/store',      'MediaController@fileAdd')->name('media.file.add');
            Route::get('/file',             'MediaController@file');
            Route::post('/file/delete',     'MediaController@fileDelete')->name('media.file.delete');
            Route::post('/file/update',     'MediaController@fileUpdate')->name('media.file.update');
            Route::post('/file/move',       'MediaController@fileMove')->name('media.file.move');
            Route::post('/file/cropp',      'MediaController@cropp');
            Route::get('/file/copy',        'MediaController@fileCopy')->name('media.file.copy');
        });
    });
});

 // front-end routes end

