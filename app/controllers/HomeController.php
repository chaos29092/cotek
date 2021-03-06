<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function faq()
    {
        return View::make('FAQ');
    }

    public function contact()
    {
        return View::make('contact');
    }

    public function aboutUs()
    {
        return View::make('aboutUs');
    }

    public function support()
    {
        return View::make('support');
    }
}
