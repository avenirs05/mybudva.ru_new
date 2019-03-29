<?php

namespace App\Http\Controllers;

use Lang;

//use Illuminate\Http\Request;

class RealtiesController extends Controller
{
    public function __invoke() 
	{
		$data = [
			'title' => Lang::get('text.title_tag.apartments')
		];

		return view('realties', $data);
	}
}
