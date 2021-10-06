<?php
/* below this line we call the root class of our controller using namespace */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UserController extends Controller
{
    function  index()
    {
        /*
         The name index is importnt and primary
         But sometimes you can override the word index
        echo "<h4>This is our function index() printed
        from our root Controllers class ;-) </h4>";
        echo "<p>from our NEW_CLASS_[UserController]</p>";
        */
        //--//
        // this is function return the blade php temp
        //return view('welcome');
        // we can adds many functions for adding users or delete users ..etc
        //--//
        //For example we have var "$name" we use the dollar sign for var
        // here we use the name ahmed for the var name
        $name = "<h1>Ahmed</h1>";
        // now we call the var with the return and with the page "welcome""
        // return view('welcome')->with(array('name' => $name));
        // after we input the value of the var we need to go to
        // resources.views.welcome.blade.php {{ $name }}
        //--//
        // Now we gonna try with out the 'with'
        // return view('welcome', compact('name'));
        // -- it works now the var with the name var in the 'compact' line above -- //
        // -- //
        // this is our defualt route to welcome blade page
        // return view('welcome', compact('name'));
        //we change the route to day2 blade page
        //return view('day2', compact('name'));
        /*
         * we redirect the route /second_day to day2 blade page from our web.php
         * if you check /second_day
         * you will see the day2 page blade
        */
        return view('day2', compact('name'));
    }
        // - //
        // another ex of function
        //
    function about(){

            echo "About us";

        }

}
