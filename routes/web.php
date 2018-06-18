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

Route::get('/', 'ContentsController@home')->name('home');;  

Route::get('/clients', 'ClientController@index')->name('clients');  
Route::get('/clients/index', 'ClientController@index')->name('reservations');  
Route::get('/clients/new', 'ClientController@newClient')->name('newClient');    
Route::post('/clients/new', 'ClientController@newClient')->name('createClient');  
Route::get('/clients/{client_id}', 'ClientController@show')->name('showClient');  
Route::post('/clients/{client_id}', 'ClientController@modify')->name('updateClient');  

Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');
Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');

Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom')->name('book_room');

// Route::get('/', function (){
//     $response_arr = ['author' => 'BP', 'version' => '0.1.1'];
//     return view('welcome', $response_arr);
// }); 

Route::get('/di', 'HomeController@di');  

    // return $response_arr;
    // return '<h>Landon App Page</h>';
    // return view('welcome');

// Route::get('/', 'HomeController');
Route::get('/home/about', 'HomeController@about');

Route::get('/facades/db', function (){
    return DB::select('SELECT * FROM table');
});  

Route::get('/facades/decrypt', function (){
    return Crypt::decrypt('eyJpdiI6ImNLUzFRM2p0bHlaMHh6QU5ZUmRZeHc9PSIsInZhbHVlIjoiSVdnZGdEY0JkbGMrZGlTY29IOTBHZ0RkeHhyQ24xdVNvQ0JFRzFEaTEwWT0iLCJtYWMiOiI1YzQxMWQ3MDYwNjg4MjJhNGM4NDJhMWRjMmYxZGE4MjkyYjlhOTFhOGIzYTEwY2Q2MzRkMzlmOGM4OWJmOTVmIn0=');
});  

Route::get('/facades/encrypt', function (){
    return Crypt::encrypt('123456789');
});  

// Route::get('/contact', 'HomeController@show');
// Route::post('/contact',  'HomeController@mailToAdmin'); 

Route::get('contact/success', ['as' => 'contact.success', function () {
    return view('success');
}]);

Route::get('contact', [ 'as' => 'contact.form', function () {
    return view('contact');
}]);


// Session::flash('csrf_token', 'randomtoken')

// Route::post('contact', [ 'as' => 'contact.submit', function () {
//     // dd(request()->input());
//     $validation = validator(request()->only('name', 'email', 'message'),
//         [
//             'name' => 'required',
//             'email' => 'required|email',
//             'message' => 'required'
//         ]
//     );
//     if ($validation->passes()){
//         // dd(request()->input());
//         // dd('hooray it passed!');
//         Mail::to('radzioshkin@gmail.com')->send(new App\Mail\Contact(request()));

// 		return redirect()->route('contact.success');
//     }
//     // dd($validation->errors());
    
//     // return redirect()->route('contact.form')->withErrors($validation->errors());
//     return redirect()->route('contact.form')->withErrors($validation->errors())->withInput();
// }]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
