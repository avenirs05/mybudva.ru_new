<?php

namespace App\Http\Controllers;

use Lang;

//use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    public function __invoke() 
	{
		$data = [
			'title' => Lang::get('text.title_tag.apartments')
		];

		return view('apartments', $data);
	}
}
