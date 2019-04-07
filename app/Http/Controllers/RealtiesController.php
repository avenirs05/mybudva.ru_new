<?php

namespace App\Http\Controllers;

use Lang;
use App\Content;
use App\Realty;

use Illuminate\Http\Request;

class RealtiesController extends Controller
{
    public function __invoke(Request $request) 
	{
		$locale = app()->getLocale();
		$content = Content::select('phone_main')->where('lang', $locale)->get()->toArray()[0];
		
		$realty_type = self::realtyType($request);		
		$title = Lang::get("text.menu." . $request->path());

		$realties = Realty::select(
							"id",
							"name", 
							"subname_$locale", 
							"square", 
							"dist_sea",
							"bedrooms",
							"capacity",	
							"booking_mark",
							"price",
							"price_line_through")
						 ->where('type', $realty_type)
						 ->get();

		$data = [
			'title' => $title,
			'phone_main' => $content['phone_main'],
			'realties' => $realties,			
		];

		return view('realties', $data);
	}
	
	
	protected static function realtyType(Request $request) 
	{
		switch ($request->path()) {
			case 'villas':
				return 'villa';
				break;
			case 'apartments':
				return 'apartment';
				break;
		}			
	}
}
