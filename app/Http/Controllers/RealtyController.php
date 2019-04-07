<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use App\Content;

class RealtyController extends Controller
{
	public function __invoke($id) 
	{
		dd('test');
		$locale = app()->getLocale();

		$title = Lang::get('text.title_tag.home');
		$content = Content::select('phone_main')->where('lang', $locale)->get()->toArray()[0];

		
		
		
		$realty = Realty::select(
						"id", "name", "subname_$locale", "square", "dist_sea", "bedrooms", "capacity", "booking_mark", "price", "price_line_through")
				->where('type', $realty_type)
				->get();

		
		$data = [
			'title' => $title,
			'phone_main' => $content['phone_main'],
			'realty' => $realty,
		];

		return view('realty', $data);
	}

}
