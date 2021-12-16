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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/inscription', function () {
    return view('inscription');
});

// Route::get('/Aceuil', function () {
//     return view('Aceuil');
// });

Route::get('/information', function () {
    return view('information');
});

Route::get('/Aceuil', function () {
    return view('Aceuil');
});

Route::get('/Depense', function () {
    return view('Depense');
});

Route::get('/Subvention', function () {
    return view('Subvention');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/Actualite', function () {
    return view('Actualite');
});

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/information',"MenbreController@index");
Route::get('/show/{id}',"MenbreController@show");
Route::get('inscription',"MenbreController@create");
Route::post('/store',"MenbreController@store") ; 
Route::get('/information/{id}',"MenbreController@delete");
Route::get('/inscription/{id}',"MenbreController@edit");
Route::post('/update/{id}',"MenbreController@update");

// Route::get('/',"StudentController@index") ;
// Route::get('/show/{id}',"StudentController@show");
// Route::get('/create',"StudentController@create");
// Route::post('/store',"StudentController@store");
// Route::post('/update/{id}',"StudentController@update");

Route::get('/resume',"UtilsateurController@index");
Route::get('/',"UtilsateurController@create");
Route::get('/resume/{id}',"UtilsateurController@delete");
Route::get('/Depense/{id}',"UtilsateurController@edit");
Route::post('/store1',"UtilsateurController@store1");

Route::get('/bilan',"SubventionController@index");
Route::get('/',"SubventionController@create");
Route::get('/bilan/{id}',"SubventionController@delete");
Route::get('/Subvention/{id}',"SubventionController@edit");
Route::post('/store3',"SubventionController@store3");

Route::get('/Aceuil',"WelcomeController@index");
Route::get('/',"WelcomeController@create");
Route::post('/store4',"WelcomeController@store4");