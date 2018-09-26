<?php

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


use Illuminate\Support\Facades\Route;


Route::get('/login', 'User\AuthenticateController@index')->name('login');
Route::post('/login/post', 'User\AuthenticateController@loginPost');
Route::any('/logout/post', 'User\AuthenticateController@logoutPost');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'Core\IndexController@index');
    Route::get('/bi', 'Module\Bi\IndexController@index');
    Route::get('/bi/folder/view', 'Module\Bi\Folder\ViewController@index');
    Route::post('/bi/folder/share', 'Module\Bi\Folder\ViewController@share');
    Route::post('/bi/folder/share/execute', 'Module\Bi\Folder\ViewController@shareExecute');
    Route::get('/bi/folder/create/index', 'Module\Bi\Folder\CreateController@index');
    Route::post('/bi/folder/create/execute', 'Module\Bi\Folder\CreateController@execute');
    Route::get('/bi/folder/rename/index', 'Module\Bi\Folder\RenameController@index');
    Route::post('/bi/folder/rename/execute', 'Module\Bi\Folder\RenameController@execute');
    Route::get('/bi/folder/delete/execute', 'Module\Bi\Folder\DeleteController@execute');
    Route::post('/bi/folder/search/', 'Module\Bi\Folder\SearchController@execute');

    Route::get('/bi/document/create/index', 'Module\Bi\Document\CreateController@index');
    Route::post('/bi/document/create/execute', 'Module\Bi\Document\CreateController@execute');
    Route::get('/bi/document/view', 'Module\Bi\Document\ViewController@index');
    Route::get('/bi/document/edit', 'Module\Bi\Document\EditController@index');
    Route::post('/bi/document/edit/execute', 'Module\Bi\Document\EditController@execute');
    Route::get('/bi/document/deleteAttachment/{documentID}/{fileName}', 'Module\Bi\Document\DeleteAttachmentController@index');

    Route::get('/news/{task?}', 'Module\News\NewsController@index');
    Route::get('/news/manage', 'Module\News\ManageNewsController@index');
    Route::get('/news/manage/filter', 'Module\News\ManageNewsController@filter');
    Route::get('/news/create', 'Module\News\CreateNewsController@index');
    Route::post('/news/create/save', 'Module\News\CreateNewsController@execute');
    Route::get('/news/edit/{newsid}', 'Module\News\EditNewsController@index');
    Route::post('/news/edit/save', 'Module\News\EditNewsController@execute');
    Route::get('/news/delete', 'Module\News\DeleteNewsController@execute');
    Route::get('/news/search/title', 'Module\News\SearchNewsController@searchTitle');

    //Category
    Route::any('/w76f1555/{task?}', 'Module\W76\W76F1555\W76F1555Controller@index');
});

//Quan li ban tin
Route::group(['namespace' => 'Module\W76', 'middleware' => 'auth'], function () {
    Route::any('/w76f2140/{task?}', 'W76F2140Controller@index'); //news management
    Route::any('/w76f2141/{task?}', 'W76F2141Controller@index');//news management
    Route::any('/w76f2142/{component?}', 'W76F2142Controller@index');//display news
    Route::any('/W76F2150/{type?}', 'W76F2150Controller@index');//document
    Route::any('/W76F2130/{task?}', 'W76F2130Controller@index');
    Route::any('/W76F2131/{task?}', 'W76F2131Controller@index');
});
//end-quan li ban tin

//Danh sach phong hop
Route::group(['namespace' => 'Module\Meeting','middleware' => 'auth'], function () {
    Route::any('/w76f2200/{task?}', 'W76F2200Controller@index');
    Route::any('/w76f2201/{task?}', 'W76F2201Controller@index');
});
//end-Danh sach phong hop

//quan li phong hop
Route::group(['namespace' => 'Module\BookingRoom','middleware' => 'auth'], function () {
    Route::any('/w76f2230/{task?}', 'W76F2230Controller@index');
    Route::any('/w76f2231/{task?}', 'W76F2231Controller@index');
});
//end-quan li phong hop

//Danh muc xe cong tac
Route::group(['namespace' => 'Module\W77','middleware' => 'auth'], function () {
    Route::any('/W77F1000/{task?}', 'W77F1000Controller@index');
    Route::any('/W77F1001/{task?}', 'W77F1001Controller@index');
});
//end-Danh muc xe cong tac

//Back pages
Route::group(['namespace' => 'Admin'], function() {
    Route::any('/administrator', function(){
        return Redirect::to('/admin/home');
    });
    Route::any('/adminlogin', function(){
        return Redirect::to('/admin/home');
    });
});
Route::group(['namespace' => 'Admin'], function() {
    Route::any('/admin/home', 'AuthController@home');
    Route::any('/admin/login/{task?}', 'AuthController@login');
    Route::any('/admin/logout', 'AuthController@logout');
    Route::any('/admin/W00F0001/{task?}', 'W00F0001Controller@index');
    Route::any('/admin/W00F0002/{task?}', 'W00F0002Controller@index');
    Route::any('/admin/W00F0003/{task?}', 'W00F0003Controller@index');
});
