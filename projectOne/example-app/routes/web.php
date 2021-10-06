<?php

use Illuminate\Support\Facades\Route;
/* Below this line we put the class ("UserController") we just created with artisan*/
use App\Http\Controllers\UserController;
/* If we didn't call our class it we see error/*
|--------------------------------------------------------------------------
| php artisan make::controller <the name of the contoller>
| we can use -h for more info about it
|  php artisan make::controller -h
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

Route::get('/greeting', function () {
    return "Hello, World!";
});


/*
The line below is the function we just created in our class */
//Route::get('/user', [UserController::class, 'index']);
/*
 * We create a new class and this is our function for the index in the user route
in the UserController
Our new class in => app.Http.Controller.UserController.php
Our function >>
    function  index(){
        echo "hello world";
    }
*/
// -- //
/*
Below this line we redirect the uri /old_about to /user page
if you visit /old_about you will be redirected to /user */
Route::redirect('/old_about', '/user');

/* we change the route from user to day2 to view our index function from our new clas
*/
//Route::get('/day2', [UserController::class, 'index']);
/*
we change the /day2 to /second_day route
*/
Route::get('/second_day', [UserController::class, 'index'])->name("day2");
// the ->name(name: "day2") meaning redirect to that page of day2 blade page
// and the uri is second_day
// - //
// - There is a way to shortcut our previous route to day2 blade page without going to
// - our usercontroller class to map it
// - here we change the uri: from /second_day to new route /second uri
Route::view('/second', 'day2', ['name' => 'Ahmed']);
// we gonna see Ahmed repeated three times bcz the var already printed three times
// - //
// - // ex: from our previous line 59
// testing folders indiexing
Route::view('/third', 'admin.course.third', ['name' => 'Ahmed']);
// what is meaning of level 1 and level 2 in the larvel ?
// in the view 'admin.third' admin is level 1 and third is level 2 of indexing
// we created a folder name admin in the views folder
// open /third you will see our var


// trying our new function tryNamed from UserController with different values Khaled
// this route is temporary not permit /op1
//Route::get('/temp_op1',[UserController::class, 'tryNamed'])->name('option1');
// why? do we put name for our path bcz we can change it for later use ->name('option1')
// we can change it to anything Ex /temp_op1
// we delete our if cond and we put new function called about
Route::get('/About_company',[UserController::class, 'about'])->name('About');
// check /temp_op1 now same result :)
Route::get('/temp_op2',[UserController::class, 'tryNamed'])->name('option2');
// temp_op2 above is the same temp_op1
// - //
Route::get('/About_us',function (){ return view('about');})->name('About_view');
