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
use App\Content;

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
		
		$content = Content::where('lang', $locale)->get()->toArray()[0];
		
		$data = [
			'title'				   => $title, 
			'areas'				   => $areas,
			'header_areas'		   => $content['header_areas'],
			'locale'			   => $locale,
			'questions'			   => $questions,
			'products'			   => $products[0]["html_$locale"],
			'header_main_screen'   => $content['header_main_screen'],	
			'header_main_content'  => $content['header_main_content'],	
			'phone_main'		   => $content['phone_main'],				
			'contact_page'		   => $content['contact_page'],	
			
		];		
	
		return view('index', $data);
	}
}
