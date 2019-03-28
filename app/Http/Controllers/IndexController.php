<?php

namespace App\Http\Controllers;

use Lang;

//use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() 
	{
		$data = [
			'title' => Lang::get('text.title_tag.home')
	    ];
		
		return view('index', $data);
	}
}
