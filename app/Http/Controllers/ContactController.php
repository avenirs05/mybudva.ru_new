<?php

namespace App\Http\Controllers;

use Lang;
//use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke() 
	{
		$data = [
			'title' => Lang::get('text.title_tag.contact')
		];

		return view('contact', $data);
	}
}
