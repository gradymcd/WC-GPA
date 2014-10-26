<?php

class HomeController extends BaseController {

	public function display()
	{
        $i=0;
        View::share('i',$i);
        $classes=Input::get('classes');
        View::share('classes', $classes);
        $weighted=Input::get('weighted');
        View::share('weighted', $weighted);
		return View::make('content');
	}

}