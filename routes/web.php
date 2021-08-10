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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', function () {

    // factory(\App\User::class,3)->create();
    // \App\Address::create([
    //     'user_id' => 1,
    //     'country' => 'India'
    // ]);
    // \App\Address::create([
    //     'user_id' => 2,
    //     'country' => 'USA'
    // ]);
    // \App\Address::create([
    //     'user_id' => 3,
    //     'country' => 'UK'
    // ]);

        // $user = factory(\App\User::class)->create();

        // \App\Address::create([
        //     'user_id' => $user_id,
        //     'country' => 'India'
        // ]); OR

        // $user->address()->create([
        //     'country' => 'India'
        // ]);


        // $users = \App\User::all();

        // $user = factory(\App\User::class)->create();

        // $address = new \App\Address([
        //     'country' => 'UK'
        // ]);

        // $address->user()->associate($user);

        // $address->save();

        // $addresses = \App\Address::all();

        // *user is the relation_name in model/// for eco loading better performance
        // $addresses = \App\Address::with('user')->get();

        // $addresses = \App\Address::with('user')->get();
        $users = \App\User::with('addresses')->get();

        // $users[0]->addresses()->create([
        //     'country'=>'Nepal'
        // ]);


        return view('users.index', compact('users'));

});
