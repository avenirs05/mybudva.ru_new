<?php

namespace App\Http\Controllers;

use Lang;
use App\Area;
use App\Question;
use App\City;
use App\Country;
use App\Feedback;
use App\Img;
use App\Product;
use App\Realty;

//use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() 
	{
		$title = Lang::get('text.title_tag.home');
		$locale = app()->getLocale();
		
		$areas = Area::all("name_$locale", "text_$locale")->toJson();	
		$questions = Question::all("question_$locale", "answer_$locale")->toJson();	
		$products = Product::all("html_$locale");	
			
		
		$data = [
			'title'		=> $title, 
			'areas'		=> $areas,
			'locale'	=> $locale,
			'questions' => $questions,
			'products'	=> $products[0]["html_$locale"]
		];		
	
		return view('index', $data);
	}
}
