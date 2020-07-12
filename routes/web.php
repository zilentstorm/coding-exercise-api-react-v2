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
    return view ('welcome');
});

Route::get('/people', function () {
    //get data from db
    $people = [
        ['id' => 1, 'name' => "Alex", 'last_name' => "Ortiz-Rosado", 'email' => "alex@breezechms.com", 'status' => "active"],
        ['id' =>2, 'name' => "Jon", 'last_name' => "VerLee", 'email' => "jon@breezechms.com", 'status' => "archived"],
        ['id' =>3, 'name' => "Fred", 'last_name' => "Flintstone", 'email' => "fredflintstone@example.com", 'status' => "active"],
        ['id' =>4, 'name' => "Marie", 'last_name' => "Bourne", 'email' => "mbourne@example.com", 'status' => "active"],
        ['id' =>5, 'name' => "Wilma", 'last_name' => "Flintstone", 'email' => "wilmaflinstone@example.com", 'status' => "active"]
    ];
    return view ('people', ['people' => $people]);
});