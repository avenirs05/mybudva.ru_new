<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Content;
use App\Realty;

class RealtyController extends Controller
{
	public function __invoke($id) 
	{
		$locale = app()->getLocale();
		
		$content = Content::select('phone_main')
					->where('lang', $locale)
					->get()
					->toArray()[0];
		
		$realty = Realty::select(
					'id', 
					'name', 
					"type_$locale",
					'square', 
					"view_$locale",	
					'bedrooms', 
					'capacity', 
					'dist_sea', 
					'dist_tivat', 
					'dist_podg', 				
					"transfer_$locale", 
					"internet_$locale", 
					"parking_$locale",
					"description_$locale",
					'map_html',
					'price_may',
					'price_jun',
					'price_jul',
					'price_aug',
					'price_sep',
					'price_oct_apr')
				->where('id', $id)
				->first();
		
		/**
		 * Установка title страницы
		 */		
		$type = "type_$locale";	
		$title = $realty->name . ' ' . $realty->$type;
		
		$data = [
			'title'      => $title,
			'phone_main' => $content['phone_main'],
			'realty'     => $realty->toJson(),
		];
		
		return view('realty', $data);
	}
}
