<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use App\Content;

class RealtyController extends Controller
{
	public function __invoke() {
		$locale = app()->getLocale();
		$title = Lang::get('text.title_tag.home');
		$content = Content::where('lang', $locale)->get()->toArray()[0];		
		
		$data = [
			'title' => $title,
			'phone_main' => $content['phone_main'],
		];

		return view('realty', $data);
	}

}
