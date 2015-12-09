<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route:get('/', function() {

    // check request type
    if (Request::ajax())
    {
        $file = 'Json/data.json';   // path to Json file
        $data = '';                 // Json data
        
        // check that the file is exist
        if (Storage::exists($file))
        {
            // read data from the file
            $data = Storage::get($file);
        }
        // return Json data
        return $data;
    }
    // return a page
    return view('index');
});
