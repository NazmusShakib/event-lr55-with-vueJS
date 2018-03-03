<?php

Route::get('/', [
    'uses' => 'HomeController@homeDashboard',
    'as' => 'homeDashboard'
]);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/**
 * PublicController Member Routing Start...
 *
 */

Route::get('member/registration', [
    'as' => 'membershipForm',
    'uses' => 'PublicController@membershipForm',
]);

Route::post('member/register_member', [
    'as' => 'storeMember',
    'uses' => 'PublicController@storeMember',
]);

Route::post('member/storeMemberFromWPPluginCall', [
    'as' => 'storeMemberFromWPPlugincall',
    'uses' => 'PublicController@storeMemberFromWPPluginCall',
]);

/**
 * PublicController Member Routing End...
 *
 */

Route::get('/events', [
    'uses' => 'EventsController@index',
    'as' => 'events',
    'middleware' => ['auth', 'roles'],
    'roles' => ['Admin', 'Admin-JR']
]);

Route::get('get-events', [
    'uses' => 'EventsController@getEvents',
    'as' => 'get-events',
    'middleware' => ['auth', 'roles'],
    'roles' => ['Admin', 'Admin-JR']
]);

Route::post('add-event', [
    'uses' => 'EventsController@addEvent',
    'as' => 'add-event',
    'middleware' => ['auth', 'roles'],
    'roles' => ['Admin', 'Admin-JR']
]);


Route::group(['middleware' => ['auth', 'roles'], 'roles' => ['Admin']],
    function () {

        Route::get('member/add', [
            'as' => 'membershipFormForAdmin',
            'uses' => 'MemberController@membershipFormForAdmin',
        ]);

        Route::get('member/member-delete/{id}', [
            'as' => 'memberDelete',
            'uses' => 'MemberController@memberDelete',
        ]);

        Route::post('member/update-by-admin/{id}', [
            'as' => 'memberUpdateByAdmin',
            'uses' => 'MemberController@memberUpdateByAdmin',
        ]);

        // Export User Table Data In Excel With Set Header
        Route::get('member/export/{type}', [
            'as' => 'exportMemberData',
            'uses' => 'MemberController@exportMemberData',
        ]);

        Route::resource('/member', 'MemberController');

    });


/**
 * Profile Routes
 *
 */
// Route::get('profile', 'AuthController@authProfile')->name('authProfile');

Route::get('profile', [
    'as' => 'authProfile',
    'uses' => 'AuthController@authProfile',
    'middleware' => ['auth'],
]);

/*************
 *************
 * Test Routes
 *
 */

Route::get('vue-test/', function () {
    return view('vue-test');
});

Route::resource('/task', 'TaskController');


Route::post('curl-test', function (\Illuminate\Http\Request $request) {
    /*\App\Task::create([
        'name' => $request->name,
        'user_id' => $request->user_id,
        'description' => $request->description
     ]);*/

    $newfile = public_path() . '/curlTest1.txt';
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
    $newfile = public_path() . '/newfile.txt';
    $myfile = fopen($newfile, "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
});