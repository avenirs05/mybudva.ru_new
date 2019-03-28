<?php

namespace App\Http\Controllers;

use Lang;
//use Illuminate\Http\Request;

class VillasController extends Controller
{
    public function __invoke() 
	{
		$data = [
			'title' => Lang::get('text.title_tag.villas')
		];

		return view('villas', $data);
	}	
}
