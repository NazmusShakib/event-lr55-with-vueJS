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
Route::get('/', [
    'uses' => 'HomeController@homeDashboard',
    'as' => 'homeDashboard'
]);

Route::get('/events', [
    'uses' => 'EventsController@index',
    'as' => 'events'
]);

Route::get('get-events', [
    'uses' => 'EventsController@getEvents',
    'as' => 'get-events'
]);
Route::post('add-event', [
    'uses' => 'EventsController@addEvent',
    'as' => 'add-event'
]);

Route::get('vue-test/', function () {
    return view('vue-test');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('/welcome', function () {
    return view('welcome');
});*/

Route::resource('/task', 'TaskController');
Route::get('member/registration', 'PublicController@membershipForm')->name('membershipForm');
Route::post('member/register_member', 'PublicController@storeMember')->name('storeMember');
Route::get('member/add', 'MemberController@membershipFormForAdmin')->name('membershipFormForAdmin');
Route::get('member/member-delete/{id}', 'MemberController@memberDelete')->name('member-delete');
Route::resource('/member', 'MemberController');


Route::post('curl-test', function (\Illuminate\Http\Request $request) {
    /*\App\Task::create([
        'name' => $request->name,
        'user_id' => $request->user_id,
        'description' => $request->description
     ]);*/

    $newfile =  public_path().'/newfile2.txt';
    $myfile = fopen($newfile, "w") or die("Unable to open file!");
    $txt = json_encode($request->all());
    fwrite($myfile, $txt);
    fclose($myfile);
    return 1;
});

Route::get('cl', function () {
    // Get cURL resource
    $post = array('name' => 'value566',
        'user_id' => 66,
        'description' => 'descri 66ption desc ription'
    );
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => false,
        CURLOPT_URL => 'http://localhost:8080/curl-test',
        CURLOPT_USERAGENT => 'Sample cURL Request',
        CURLOPT_POST => 1,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_FRESH_CONNECT => true,
        CURLOPT_TIMEOUT => 3,
        CURLOPT_POSTFIELDS => $post
    ));
    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    /*if(!curl_exec($curl)){
        die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
    }*/
    // Close request to clear up some resources
    curl_close($curl);
    var_dump($resp);
});

Route::get('pp', function () {
    $newfile =  public_path().'/newfile.txt';
    $myfile = fopen($newfile, "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
});