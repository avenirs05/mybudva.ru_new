<?php

namespace App\Http\Controllers;

use Lang;
use App\Content;

//use Illuminate\Http\Request;

class RealtiesController extends Controller
{
    public function __invoke() 
	{
		$locale = app()->getLocale();
		$title = Lang::get('text.title_tag.home');
		$content = Content::where('lang', $locale)->get()->toArray()[0];

		$data = [
			'title' => $title,
			'phone_main' => $content['phone_main'],
		];

		return view('realties', $data);
	}
}
