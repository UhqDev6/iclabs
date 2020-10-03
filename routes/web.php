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

Route::get('/', function () {
    $jadwal =  DB::table('vw_jadwal')->get();
    return view('informasi',compact('jadwal'));

});




Route::get('admin','AdminController@admin')->name('admin');


Route::post('asisten','AsistenController@asisten')->name('asisten');

Route::get('dosen', 'DosenController@dosen')->name('dosen');

Route::get('login','LoginController@showLoginForm')->name('login');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('add-user', 'AddUserController@index')->name('add-user');

Route::get('as-content', 'AsistenController@index')->name('as-content');

// Route::get('data-user', 'DataUserController@index')->name('data-user');





Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/assistant', 'Auth\LoginController@showAssistantLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegistrasiForm');
Route::get('/register/assistant', 'Auth\RegisterController@showAssistantRegistrasiForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('login-admin');
Route::post('/login/assistant', 'Auth\LoginController@assistantLogin')->name('login-asisten');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/assistant', 'Auth\RegisterController@createAssistant');

Route::view('/home', 'home');
// Route::view('/admin/admin', 'admin');
// Route::view('users/asisten/assistant', 'assistant');

// Route::get('add-user','AddUserController@index')->name('add-user');
Route::get('data-user','AddUserController@show')->name('data-user.show');
Route::get('data-user/destroy/{id}','AddUserController@destroy')->name('data-user.destroy');
Route::post('add-user/store','AddUserController@store')->name('add-user.store');
Route::post('edit-user/store','AddUserController@store')->name('edit-user.store');
Route::post('edit-user/update{id}','AddUserController@update')->name('edit-user.update');
Route::get('edit-user/edit/{id}','AddUserController@edit')->name('edit-user.edit');
Route::get('edit-user','AddUserController@edit')->name('data-user.edit');
// Route::get('admin','AddUserController@countData')->name('admin');
Route::post('add-user.createAssistant','Auth\RegisterController@createAssistant')->name('add-user.createAssistant');
Route::get('login.showLoginForm','LoginController@showLoginForm')->name('login.showLoginForm');

Route::post('login.postLogin', 'LoginController@postLogin')->name('login.postLogin');



//asisten//
Route::get('assistant','AsistenController@index')->name('assistant');
// Route::get('assistant/show/{id}','AsistenController@show')->name('assistant.show');
Route::post('/assistant/store','AsistenController@store')->name('assistant.store');
Route::post('editstatus-asisten/update/{id}','AsistenController@update')->name('editstatus-asisten.update');
Route::get('editstatus-asisten/edit/{id}','AsistenController@edit')->name('editstatus-asisten.edit');
Route::get('assistant/destroy/{id}','AsistenController@destroy')->name('assistant.destroy');


//Jadwal Asitensi//
Route::get('jadwal-asisten','JadwalAsistenController@index')->name('jadwal-asisten');
Route::post('/jadwal-asisten/store','jadwalAsistenController@store')->name('jadwal-asisten.store');

//Praktikum//
Route::get('praktikum','PraktikumController@index')->name('praktikum');
Route::post('/praktikum/store','PraktikumController@store')->name('praktikum.store');

Route::get('/jadwal-asisten','PraktikumController@show')->name('jadwal-asisten');

// Route::get('/jadwal-asisten','RuanganController@show')->name('jadwal-asisten1');


//Ruangan//
Route::get('ruangan','RuanganController@index')->name('ruangan');
Route::post('/ruangan','RuanganController@store')->name('ruangan.store');
// Route::get('/jadwal-asisten','RuanganController@show');


//jadwal//
Route::post('/jadwal-asisten/store','JadwalAsistenController@store')->name('jadwal-asisten.store');

//Profil asisten
Route::get('/profil-asisten','ProfilAsistenController@index')->name('profil-asisten.index');



// Route::get('sidebarr', function () {
//     $addUser = DB::table('assistants')->get();
//     return view('users.asisten.assistant')->with('addUser', $addUser);
// });

// Route::get('masterUser', function () {
//     $addUser = DB::table('assistants')->get();
//     return view('admin.masterUser')->with('addUser', $addUser);
// });

// Route::get('assistant', function () {
//     $addUser = DB::table('assistants')->get();
//     return view('users.asisten.assistant')->with('addUser', $addUser);
// });




// Route::get('informasi','AddUserController@show')->name('informasi.show');

// Route::resource('edit-user','AddUserController');



